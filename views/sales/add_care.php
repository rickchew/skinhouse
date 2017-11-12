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
        <h2 class="page-title">New Sales <small></small></h2>
        &nbsp;<br>
        <div class="row">
            <div class="col-lg-7 "><!--col-lg-offset-1-->
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-windows"></i>
                            &nbsp;
                            <small>&nbsp;</small>
                        </h4>
                        <p class="text-muted">&nbsp;</p>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <div id="wizard" class="form-wizard">
                            <ul class="wizard-navigation nav-justified">
                                <li><a href="#tab1" data-toggle="tab"><small>1.</small><strong> Product Details</strong></a></li>
                                <li><a href="#tab2" data-toggle="tab"><small>2.</small> <strong>Customers Details</strong></a></li>
                                <li><a href="#tab3" data-toggle="tab"><small>3.</small> <strong>Document Upload</strong></a></li>
                                <li><a href="#tab4" data-toggle="tab"><small>4.</small> <strong>T & C</strong></a></li>
                                <li><a href="#tab5" data-toggle="tab"><small>4.</small> <strong>Submission</strong></a></li>
                            </ul>
                            <div id="bar" class="progress progress-small">
                                <div class="progress-bar progress-bar-inverse"></div>
                            </div>
                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                            <div class="form-group">
                                                <!-- Email -->
                                                <label class="control-label col-md-3"  for="email">Product Serial</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="email" name="productSerial"
                                                               placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Password -->
                                                <label class="control-label col-md-3"  for="address">Product Key</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="address" name="productkey" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Password -->
                                                <label class="control-label col-md-3"  for="address">Date Purchase</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="address" name="datePurchase" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Password -->
                                                <label class="control-label col-md-3"  for="address">Sales Person</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="address" disabled="disabled" placeholder="" class="form-control" value="<?php echo $this->session->userdata('name')?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="credit-card-type" class="control-label col-md-3">Sales Person</label>
                                                <div class="col-md-8">
                                                <?php //print_r($this->session->all_userdata())?>
                                                    <div class="col-md-10"><select name="salesPerson" data-placeholder="Please select.." class="chzn-select select-block-level">
                                                        <option value=""></option>
                                                        <option value="<?php echo $this->session->userdata('user_id')?>">ME (<?php echo $this->session->userdata('name')?>)</option>
                                                        <?php foreach($salesman as $sv):?>
                                                        <option value="<?php echo $sv->u_id?>"><?php echo $sv->fullname?></option>
                                                        <?php endforeach?>
                                                    </select></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="dest-address">Customers ID</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" name="customerId" placeholder="" class="form-control">
                                                        <span class="help-block">Request from customer</span></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="destination">Customers Name</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" name="customerName" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  for="name">Photo 1</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="name" name="name" placeholder="" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="credit-card-type" class="control-label col-md-3">Photo 2</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><select id="credit-card-type" data-placeholder="Please select.." class="chzn-select select-block-level">
                                                        <option value=""></option>
                                                        <option value="Visa">Visa</option>
                                                        <option value="Mastercard">Mastercard</option>
                                                        <option value="Other">Other</option>
                                                    </select></div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-md-3" for="credit">Photo 3</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input id="credit" type="text" tabindex="3" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="expiration-date" class="control-label col-md-3">Photo 4</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="expiration-date"  class="form-control"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h2>Term and Condition</h2>
                                    <p class="mb-lg">T & C Details Here ....<br>&nbsp;<br>&nbsp;<br></p>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <h2>Term And Condition</h2>
                                    <p class="mb-lg">Your submission has been received.<br>&nbsp;<br>&nbsp;<br></p>
                                </div>
                                <div class="description ml mr mt-n-md">
                                    <ul class="pager wizard">
                                        <li class="previous">
                                            <button class="btn btn-primary pull-left"><i class="fa fa-caret-left"></i> Previous</button>
                                        </li>
                                        <li class="next">
                                            <button class="btn btn-primary pull-right" >Next <i class="fa fa-caret-right"></i></button>
                                        </li>
                                        <li class="finish" style="display: none">
                                            <button class="btn btn-success pull-right" id="submit-btn">Finish <i class="fa fa-check"></i></button>
                                        </li>
                                    </ul>
                                </div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $("#submit-btn").click(function(){
                    //alert("button");
                    console.log($('#wizard :input').serialize());
                }); 
            });
        </script>
</body>
</html>