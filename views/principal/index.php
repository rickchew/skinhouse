<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>X.One Care Admin</title>

    <?php $this->load->view('includes/header',$data['active_menu_id'] = '$active_menu_id')?>
</head>
<body>
    <?php $this->load->view('includes/side_bar')?>
        <div class="wrap">
        <?php $this->load->view('includes/top_nav')?>
                <div class="content container">
        <h2 class="page-title">Principal List <small>&nbsp;</small></h2>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h5>&nbsp;</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>&nbsp;</p>
                        <div class="table-responsive">
                            <div class="pull-right">
                                <a href="<?php echo site_url('principal/add')?>" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>&nbsp;&nbsp;New Principal</span></a>
                                &nbsp;<br>&nbsp;<br>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Principal Name</th>
                                    <th>Username</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php //print_r($list)?>
                                <?php foreach($list as $lv):?>
                                <tr>
                                    <td><?php echo $lv->u_id?></td>
                                    <td><?php echo $lv->fullname?></td>
                                    <td><?php echo $lv->email?></td>
                                    <td><?php echo $lv->cms_users_contact?></td>
                                    <td>
                                        <a href="<?php //echo site_url('user_groups_edit').'?group_id='.$gl->group?>" class="btn btn-default btn-xs" data-placement="top" data-original-title=".btn .btn-default"><i class="fa fa-pencil"></i> &nbsp;Edit</a>
                                    </td>
                                    <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">Active</span></td>
                                </tr>
                                <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
        
    </div>
    <?php $this->load->view('includes/footer')?>

</body>
</html>