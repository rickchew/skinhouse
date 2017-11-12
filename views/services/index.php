<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Skin House | Admin</title>

    <?php $this->load->view('includes/header',$data['active_menu_id'] = '$active_menu_id')?>
</head>
<body>
    <?php $this->load->view('includes/side_bar')?>
        <div class="wrap">
        <?php $this->load->view('includes/top_nav')?>
                <div class="content container">
        <h2 class="page-title">Treatment List <small>&nbsp;</small></h2>
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
                        <p>&nbsp;<?php //print_r($list)?></p>
                        <div class="table-responsive">
                            <div class="pull-right">
                                <a href="<?php echo site_url('services/add')?>" class="btn btn-success"><i class="fa fa-plus-square"></i><span>&nbsp;&nbsp;<strong>New Treatment</strong></span></a>
                                &nbsp;<br>&nbsp;<br>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Treatment Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th class="text-right">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php //print_r($list)?>
                                <?php foreach($list as $lv):?>
                                <tr>
                                    <td><?php echo $lv->cms_product_name?></td>
                                    <td><?php echo $lv->cms_product_category_name?></td>
                                    <td><?php echo $lv->cms_product_price?></td>
                                    <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">In-Stock</span></td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <a class="btn btn-inverse " href="#">
                                                <i class="fa fa-search"></i> &nbsp;View
                                            </a>
                                            <a class="btn btn-inverse" href="<?php echo site_url("product/edit/$lv->cms_product_id")?>">
                                                <i class="fa fa-pencil"></i> &nbsp;Edit 
                                            </a>
                                        </div>
                                    </td>
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