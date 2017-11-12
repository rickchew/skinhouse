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
        <h2 class="page-title">Members <small>&nbsp;</small></h2>
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
                                <a href="<?php echo site_url('members/add'."?menu_active=54")?>" class="btn btn-primary"><i class="fa fa-plus-square"></i><span>&nbsp;&nbsp;New Members</span></a>
                                &nbsp;<br>&nbsp;<br>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>NRIC</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php //print_r($list)?>
                                <?php if($list):?>
                                <?php foreach($list as $lv):?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $lv->mod_clients_fullname?> <span style="font-family: 'microsoft yahei';font-size: 14px"><?php echo $lv->mod_clients_fullname_zh ? ' | '.$lv->mod_clients_fullname_zh:''?></span></td>
                                    <td><?php echo $lv->mod_clients_nric?></td>
                                    <td><?php echo $lv->mod_clients_email?></td>
                                    <td>
                                        <a href="<?php echo site_url('members/edit/').$lv->mod_clients_id?>" class="btn btn-default btn-xs" data-placement="top" data-original-title=".btn .btn-default"><i class="fa fa-pencil"></i> &nbsp;Edit</a>
                                    </td>
                                    <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">Active</span></td>
                                </tr>
                                <?php endforeach?>
                                <?php endif?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;<br>&nbsp;<br>
                        <div class="col-md-4">
                            <?php 
                                //$page = 0;
                                $from = $page > 0 ? $page:1;;
                                $to = $page + count($list);
                                //echo $to;
                            ?>
                            <div class="dataTables_info" id="datatable-table_info" role="status" aria-live="polite">Showing <strong><?php echo $from?> to <?php echo $to?></strong> of <?php echo $total_rows?> entries</div>
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="dataTables_paginate paging_bootstrap">
                                <ul class="pagination no-margin">
                                <?php echo $links?>
                                </ul>
                            </div>
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