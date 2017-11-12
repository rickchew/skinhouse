<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <?php $this->load->view('includes/header',$data['active_menu_id'] = '$active_menu_id')?>
    <script>
    </script>
</head>
<body>
    <?php $this->load->view('includes/side_bar')?>
    <div class="wrap">
        <?php $this->load->view('includes/top_nav')?>
        <div class="content container">
        <h2 class="page-title">New Product <small></small></h2>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-align-left"></i>
                             Product Details <?php //print_r($dealer)?>
                        </h4>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <form class="form-horizontal" role="form" action="<?php echo site_url('sales/save')?>" method="post">
                            <fieldset>
                                <legend class="section">&nbsp;</legend>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Product</label>

                                    <div class="col-sm-7">
                                        <select name="productID" data-placeholder="Please select.." class="chzn-select select-block-level">
                                            <option value=""></option>
                                            <?php foreach($product as $pv):?>
                                            <option value="<?php echo $pv->cms_product_id?>"><?php echo $pv->cms_product_name.' - '.$pv->cms_product_category_name?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Product Serial No.</label>

                                    <div class="col-sm-7">
                                        <input type="text" name="productSerial" placeholder="" class="form-control" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Product Serial Key</label>

                                    <div class="col-sm-7">
                                        <input type="text" name="productKey" placeholder="" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Date</label>

                                    <div class="col-sm-7">
                                        <input type="text" name="date" placeholder="" class="form-control" value="<?php echo date('Y-m-d')?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Sales Person</label>

                                    <div class="col-sm-7">
                                        <input type="text" id="email" name="productSerial" placeholder="" class="form-control" value="<?php echo $this->session->userdata('name')?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Store</label>

                                    <div class="col-sm-7">
                                        <select name="storeID" data-placeholder="Please select.." class="chzn-select select-block-level">
                                            <option value=""></option>
                                            <?php foreach($dealer as $dv):?>
                                            <option value="<?php echo $dv->cms_store_id?>"><?php echo $dv->cms_store_name?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-7">
                                        <div class="btn-toolbar">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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

    <!-- common templates -->
    <script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Light Version</div>
        <div>
            <a href="../light/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
        <script src="<?php echo base_url('assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/select2/select2.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/jquery.maskedinput/dist/jquery.maskedinput.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/moment/moment.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')?>"></script>

        <!-- page application js -->
        <script src="<?php echo base_url('assets/js/forms-wizard.js')?>"></script>

</body>
</html>