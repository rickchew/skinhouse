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
                        <form class="form-horizontal" role="form" action="#" method="post">
                            <fieldset>
                                <legend class="section">&nbsp;</legend>
                                &nbsp;<br>
                                <div class="row">
                                    <?php //print_r($order)?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Members</label>

                                            <div class="col-sm-7">
                                                <input type="text" class="form-control input-transparent" value="<?php echo $order->mod_clients_fullname;?>" disabled="disabled"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Branch</label>
                                            <?php //print_r($branch)?>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control input-transparent" value="<?php echo $order->mod_branch_name;?>" disabled="disabled"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Total Amount</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="totalAmt" class="form-control input-transparent" autocomplete="off"></input>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Date</label>

                                            <div class="col-sm-4">
                                                <input type="text" class="form-control input-transparent" value="<?php echo $order->mod_order_date;?>" disabled="disabled"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Remarks</label>

                                            <div class="col-sm-7">
                                                <textarea class="form-control input-transparent" name="remarks"></textarea>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="normal-field" class="col-sm-4 control-label">Invoice No.</label>

                                            <div class="col-sm-4">
                                            <?php
                                                /*
                                                $inv_no = substr($last_inv->mod_order_inv_display, 5, 4);
                                                $inv_no += 1;

                                                $display_inv_no = $order->mod_branch_code.date('Y').sprintf('%04d',$inv_no);*/
                                            ?>
                                                <input type="text" class="form-control input-transparent" value="<?php echo $order->mod_order_inv_display;?>" disabled="disabled"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
                                <?php //print_r($order_sub)?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-md-offset-1 col-sm-10">
                                        <table class="table">
                                            <tr>
                                                <th>Item</th>
                                                <th width="6%" class="text-center">Qty</th>
                                                <th width="6%" class="text-center">Taken</th>
                                                <th width="9%" class="text-center">Price (Total)</th>
                                                <th width="9%" class="text-center">Pay</th>
                                                <th width="9%" class="text-center">Include GST</th>
                                            <tr>
                                            <?php $i=0;?>
                                            <?php foreach($order_sub as $ov):?>
                                            <tr>
                                                <td><input type="text" name="invoice_no" class="form-control input-transparent" disabled="disabled" value="<?php echo $ov->cms_product_name?>"></input></td>
                                                <td><input id="qty_<?php echo $i?>" type="text" name="qty[]" class="form-control input-transparent text-right" disabled="disabled" placeholder="Quantity" autocomplete="off" value="<?php echo $ov->mod_order_sub_product_qty?>"></input></td>
                                                <td><input id="taken_<?php echo $i?>" type="text" name="taken[]" class="form-control input-transparent text-right" autocomplete="off"></input></td>
                                                <td><input id="price_<?php echo $i?>" type="text" name="price[]" class="form-control input-transparent text-right" autocomplete="off" value="<?php echo $ov->cms_product_price?>"></input></td>
                                                <td class="text-center">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="pay_<?php echo $i?>">
                                                        <label for="pay_<?php echo $i?>">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="gstincl_<?php echo $i?>">
                                                        <label for="gstincl_<?php echo $i?>">&nbsp;</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <?php endforeach?>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
                                    <div class="col-md-offset-8 col-sm-4">
                                        <div class="btn-toolbar mt-lg text-align-right hidden-print">
                                            <!--
                                            <button id="print" class="btn btn-default">
                                                <i class="fa fa-print"></i>
                                                &nbsp;&nbsp;
                                                Print
                                            </button>-->
                                            <button class="btn btn-danger text-right">
                                                HOLD BILL
                                                &nbsp;
                                                
                                            </button>
                                            <button class="btn btn-success text-right">
                                                Generate Invoice
                                                &nbsp;
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    &nbsp;<br>&nbsp;<br>
                                </div>

                                <!--
                                <?php $i=0;?>
                                <?php foreach($order_sub as $ov):?>
                                <div class="row">

                                    <div class="col-sm-12">
                                        
                                       <div class="col-md-offset-2 col-sm-4">
                                            <input type="text" name="invoice_no" class="form-control input-transparent" disabled="disabled" value="<?php echo $ov->cms_product_name?>"></input>
                                        </div>
                                        <div class="col-sm-1">
                                            <input id="qty_<?php echo $i?>" type="text" name="qty[]" class="form-control input-transparent" disabled="disabled" placeholder="Quantity" autocomplete="off" value="<?php echo $ov->mod_order_sub_product_qty?>"></input>
                                        </div>
                                        <div class="col-sm-1">
                                            <input id="total_<?php echo $i?>" type="text" name="taken[]" class="form-control input-transparent" placeholder="Taken" autocomplete="off"></input>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="checkbox">
                                            <input id="checkbox_<?php echo $i?>" type="checkbox">
                                            <label for="checkbox_<?php echo $i?>">
                                                Pay
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    &nbsp;<br>
                                </div>
                                <?php $i++;?>
                                <?php endforeach?>
                                &nbsp;<br>
                                
                                &nbsp;<br>&nbsp;<br>&nbsp;-->
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