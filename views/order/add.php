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
        <h2 class="page-title">New Order <small></small></h2>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-align-left"></i>
                             Product Details <?php //print_r($category)?>
                        </h4>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <form class="form-horizontal" role="form" action="<?php echo site_url('order/save')?>" method="post">
                            <fieldset>
                                <legend class="section">&nbsp;</legend>
                                &nbsp;<br>
                                <div class="row">
                                    <?php //print_r($members)?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Members</label>

                                            <div class="col-sm-7">
                                                <select name="memberID" data-placeholder="Please select.." class="chzn-select select-block-level" id="catID">
                                                    <option value=""></option>
                                                    <?php foreach($members as $mv):?>
                                                    <?php $display = strlen($mv->mod_clients_nric) > 0 ? $mv->mod_clients_fullname.' ('.$mv->mod_clients_nric.')':$mv->mod_clients_fullname?>
                                                    <option value="<?php echo $mv->mod_clients_id?>"><?php echo strtoupper($display)?></option>
                                                    <?php endforeach?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Branch</label>
                                            <?php //print_r($branch)?>
                                            <div class="col-sm-4">
                                                <select name="branchID" data-placeholder="Please select.." class="chzn-select select-block-level">
                                                    <option value=""></option>
                                                    <?php foreach($branch as $bv):?>
                                                    <option value="<?php echo $bv->mod_branch_id?>"><?php echo $bv->mod_branch_name?></option>
                                                    <?php endforeach?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Total Amount</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="totalAmt" class="form-control input-transparent" autocomplete="off"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Date</label>

                                            <div class="col-sm-4">
                                                <input type="text" name="orderDate" class="form-control input-transparent" value="<?php echo date('Y-m-d')?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Remarks</label>

                                            <div class="col-sm-7">
                                                <textarea class="form-control input-transparent" name="remarks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!--
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Invoice No.</label>

                                            <div class="col-sm-4">
                                                <input type="text" name="invoice_no" class="form-control input-transparent" value="<?php echo 'S'.date('Y');?>"></input>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                                &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
                                <?php //print_r($product)?>
                                <?php for($i=0;$i<10;$i++):?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                       <div class="col-md-offset-2 col-sm-4">
                                            <select id="product_<?php echo $i?>" name="product[]" data-placeholder="Please select.." class="chzn-select select-block-level" onchange="update_price(<?php echo $i?>);">
                                                <option value=""></option>
                                                <?php foreach($product as $pv):?>
                                                <option value="<?php echo $pv->cms_product_id?>" rel="<?php echo $pv->cms_product_price?>" ><?php echo $pv->cms_product_name?></option>
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <input id="qty_<?php echo $i?>" type="text" name="qty[]" class="form-control input-transparent" placeholder="Quantity" onkeyup="update_total(<?php echo $i?>);" autocomplete="off"></input>
                                        </div>
                                        <div class="col-sm-1">
                                            <input id="price_<?php echo $i?>" type="text" name="price[]" class="form-control input-transparent" placeholder="Price" onkeyup="update_total(<?php echo $i?>);" autocomplete="off"></input>
                                        </div>
                                        <div class="col-sm-1">
                                            <input id="total_<?php echo $i?>" type="text" name="total[]" class="form-control input-transparent" placeholder="Total" autocomplete="off"></input>
                                        </div>
                                    </div>
                                    &nbsp;<br>
                                </div>
                                <?php endfor?>
                                &nbsp;<br>
                                <div class="row">
                                    <div class="col-md-offset-8 col-sm-4">
                                        <div class="btn-toolbar mt-lg text-align-right hidden-print">
                                            <!--
                                            <button id="print" class="btn btn-default">
                                                <i class="fa fa-print"></i>
                                                &nbsp;&nbsp;
                                                Print
                                            </button>-->
                                            <button class="btn btn-success text-right">
                                                Proceed with Payment
                                                &nbsp;
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;<br>&nbsp;<br>&nbsp;
                            </fieldset>
                            <!--
                            &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br><br>&nbsp;<br><br>&nbsp;<br>
                            <div class="btn-toolbar mt-lg text-align-right hidden-print pull-right">
                                <button id="print" class="btn btn-default">
                                    <i class="fa fa-print"></i>
                                    &nbsp;&nbsp;
                                    Print
                                </button>
                                <button class="btn btn-primary">
                                    Proceed with Payment
                                    &nbsp;
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>-->      <!--
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-offset-10 col-sm-2">
                                        <div class="btn-toolbar">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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
        <script type="text/javascript">
            function update_price(x){
                //alert($(this).val());
                //$("#price_"+x).val('1');
                //alert($("#product_"+x).attr('rel-price'));
                //alert($('#product_'+x).find('option:selected').attr('rel'));
                $("#price_"+x).val($('#product_'+x).find('option:selected').attr('rel'));
            }
            function update_total(y){
                var valTmp = $("#qty_"+y).val() * $("#price_"+y).val();
                $("#total_"+y).val(valTmp);
                //alert($(this).attr('id'));
            }
            //console.log( "ready!" );
        </script>

</body>
</html>