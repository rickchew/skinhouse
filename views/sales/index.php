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
        <h2 class="page-title">Sales List <small>&nbsp;</small></h2>
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
                                <a href="<?php echo site_url('sales/add'."?menu_active=54")?>" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>&nbsp;&nbsp;New Sales</span></a>&nbsp; &nbsp; 
                                <a href="<?php echo site_url('sales/add_care'."?menu_active=54")?>" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>&nbsp;&nbsp;New Care</span></a>
                                &nbsp;<br>&nbsp;<br>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reciept ID</th>
                                    <th>Sales Person</th>
                                    <th>Store Name</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php //print_r($list)?>
                                <?php foreach($list as $lv):?>
                                <tr>
                                    <td></td>
                                    <td><?php echo sprintf('%06d',$lv->cms_order_id)?></td>
                                    <td><?php echo $lv->cms_order_product_id?></td>
                                    <td><?php echo $lv->cms_store_name?></td>
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