<!-- light-blue - v3.3.0 - 2016-03-08 -->
<!DOCTYPE html>
<html>
<head>
    <title>Skin House | Admin Panel</title>

    <?php $this->load->view('includes/header')?>
</head>
<body>
        <div class="single-widget-container">
            <section class="widget login-widget">
                <header class="text-align-center">
                    <h4>Skin House | Admin Panel</h4>
                </header>
                <div class="body">
                    <form id="form" method="post" accept-charset="utf-8">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" >Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input id="email" type="text" class="form-control input-lg input-transparent"
                                           placeholder="Your Username" name="username" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control input-lg input-transparent"
                                           placeholder="Your Password" name="password"  autocomplete="off">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button id="signin" type="button" class="btn btn-block btn-lg btn-success" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing">
                                <!--<span class="small-circle"><i class="fa fa-caret-right"></i></span>-->
                                <small>&nbsp;Sign In</small>
                            </button>
                            <a class="forgot" href="#">Forgot Username or Password?</a>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="facebook-login">
                        <a href="index.html"><span><i class="fa fa-facebook-square fa-lg"></i> LogIn with Facebook</span></a>
                    </div>
                </footer>
            </section>
        </div>

</body>
<!-- common libraries. required for every page-->
<script src="<?php echo base_url('assets/lib/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery-pjax/jquery.pjax.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/widgster/widgster.js')?>"></script>
<script src="<?php echo base_url('assets/lib/underscore/underscore.js')?>"></script>

<!-- common application js -->
<script src="<?php echo base_url('assets/js/app.js')?>"></script>
<script src="<?php echo base_url('assets/js/settings.js')?>"></script>

<!-- page specific libs -->
<script src="<?php echo base_url('assets/lib/messenger/build/js/messenger.js')?>"></script>
<script src="<?php echo base_url('assets/lib/messenger/build/js/messenger-theme-flat.js')?>"></script>
<!-- demo-only libs -->
<script src="<?php echo base_url('assets/lib/backbone/backbone.js')?>"></script>
<script src="<?php echo base_url('assets/lib/messenger/docs/welcome/javascripts/location-sel.js')?>"></script>

<!-- page application js -->
<script src="<?php echo base_url('assets/js/ui-notifications.js')?>"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('input[type=password]').on('keydown', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                //alert("1");
                $("#signin").click();
            }
        });
    });
    
    $('.btn').on('click', function() {
        var username = $("#email").val();
        var password = $("#password").val();
        var dataString = '&username=' + username + '&password=' + password;
        var dataToBeSent = $("form").serialize();

        var $this = $(this);
        $this.button('loading');

        if(username=='' || password==''){
            Messenger().post({
                message: 'Email and Password are required!',
                type: 'error',
                showCloseButton: true
            });
            $("#email").focus();
            /*
            $.SmartMessageBox({
                    title : "username and password are required!",
                    content : "Please fill up username and password",
                    buttons : '[OK]'
                });
                $("#id_username").focusout();*/
            $this.button('reset');
        }else{
            

            setTimeout(function() {
                var login_url = "<?php echo site_url('verifylogin')?>";
                $.ajax({
                 type: "POST",
                 url: login_url, 
                 data: dataToBeSent,
                 dataType: "json",  
                 cache:false,
                 success: 
                      function(data){
                        //alert(data);  //as a debugging message.
                        console.log(data);
                        //console.log(data['success']);
                        if(data.success==1){
                            //console.log('LOGGED');
                            Messenger().post({
                                message: 'Redirecting...',
                                type: 'success',
                                showCloseButton: false
                            });
                            window.location.href = "<?php echo site_url()?>";
                        }else if(data.success==0){
                            Messenger().post({
                                message: 'The username or password you entered is incorrect!',
                                type: 'error',
                                showCloseButton: true
                            });
                            $this.button('reset');
                        }else{

                            //$("#login-form")[0].reset();
                            //$('#error').show('slow');
                            /*
                            $.SmartMessageBox({
                                title : "Login Failed!",
                                content : "Invalid username or password",
                                buttons : '[OK]'
                            });*/
                            
                        }
                      }
                });

                return false;
                $this.button('reset');
            }, 1000);
            
        }
    });
    function login(){

    }
</script>
</html>