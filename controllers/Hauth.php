<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Hauth Controller Class
 */
class Hauth extends CI_Controller {

  /**
   * {@inheritdoc}
   */
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->library('hybridauth');
  }

  /**
   * {@inheritdoc}
   */
  public function index()
  {
    // Build a list of enabled providers.
    $providers = array();
    foreach ($this->hybridauth->HA->getProviders() as $provider_id => $params){
      $providers[] = anchor("hauth/window/{$provider_id}", $provider_id);
    }

    $this->load->view('hauth/login_widget', array(
      'providers' => $providers,
    ));
  }

  /**
   * Try to authenticate the user with a given provider
   *
   * @param string $provider_id Define provider to login
   */
  public function window($provider_id)
  {
    $this->load->model('user_model');
    $params = array(
      'hauth_return_to' => site_url("hauth/window/{$provider_id}"),
    );
    if (isset($_REQUEST['openid_identifier']))
    {
      $params['openid_identifier'] = $_REQUEST['openid_identifier'];
    }
    try
    {
      $adapter = $this->hybridauth->HA->authenticate($provider_id, $params);
      $profile = $adapter->getUserProfile();

      //$sess_array = array();
      $this->session->set_userdata('fb_id', $profile->identifier);
      $isMember = $this->user_model->isMember($profile->identifier);

      if($isMember){

        if($this->session->userdata('group_id') < 7){
          redirect('dashboard');
        }else{
          redirect('myaccount');
        }

        /*
        if($this->input->get('redirect') == 'admin'){
          redirect('dashboard');
        }
        redirect('myaccount');*/
      }else{
          $this->load->view('register/index', array(
            'profile' => $profile,
            //'isMember' => $isMember
          ));
      }
      
      //print_r($this->session->all_userdata());
      /*
      $this->load->view('hauth/done', array(
        'profile' => $profile,
        'isMember' => $isMember
      ));*/
    }
    catch (Exception $e)
    {
      show_error($e->getMessage());
    }
  }

  /**
   * Handle the OpenID and OAuth endpoint
   */
  public function endpoint()
  {
    $this->hybridauth->process();
  }

}
