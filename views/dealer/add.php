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
        <h2 class="page-title">New Dealer <small></small></h2>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-align-left"></i>
                            Dealer Details
                        </h4>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <form class="form-horizontal" role="form" action="<?php echo site_url('dealer/save')?>" method="post">
                            <fieldset>
                                <legend class="section">Dealer Registration Form</legend>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Name</label>

                                    <div class="col-sm-7">
                                        <input type="text" id="transparent-field" class="form-control input-transparent" placeholder="" name="fullname" autocomplete="off">
                                         <span class="help-block">Director / Manager</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Contact Number
                                    </label>
                                    <div class="col-sm-7">
                                        <input type="text" id="hint-field" class="form-control input-transparent" name="contact" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Email Address
                                    </label>
                                    <div class="col-sm-7">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="hint-field" class="form-control input-transparent" name="username" autocomplete="off">
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Password
                                    </label>
                                    <div class="col-sm-7">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" id="hint-field" class="form-control input-transparent" name="password" autocomplete="off">
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Company Name
                                    </label>
                                    <div class="col-sm-7">
                                        <input type="text" id="hint-field" class="form-control input-transparent" name="company_name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        Company Email
                                    </label>
                                    <div class="col-sm-7">
                                        <input type="text" id="hint-field" class="form-control input-transparent" name="company_email" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hint-field" class="col-sm-4 control-label">
                                        City / State
                                    </label>
                                    <div class="col-sm-7">
                                        <select id="country-select" data-placeholder="Choose a City..." class="select-block-level chzn-select" name="store_city">
                                            <option value=""></option>
                                            <option>-- Select City / State --</option>
                                            <?php foreach($state as $sv):?>
                                            <option value="<?php echo $sv->cms_city_id?>"><?php echo $sv->cms_city_name.' , '.$sv->cms_state_name?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="max-length">Salesman Assign</label>
                                    <?php //print_r($salesman)?>
                                    <div class="col-sm-7">
                                        <select id="courier" data-placeholder="Select Salesman" class="select-block-level chzn-select input-transparent">
                                            <option value="" class="input-transparent"></option>
                                            <option value="0" class="input-transparent">Me</option>
                                            <?php foreach($salesman as $lv):?>
                                            <option value="<?php echo $lv->u_id?>" class="input-transparent"><?php echo $lv->fullname?></option>
                                            <?php endforeach?>
                                        </select>
                                            <!--<span class="help-block pull-left">Please choose your shipping option</span>-->
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
        &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
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
                                <li><a href="#tab1" data-toggle="tab"><small>1.</small><strong> Login Details</strong></a></li>
                                <li><a href="#tab2" data-toggle="tab"><small>2.</small> <strong>Store Details</strong></a></li>
                                <li><a href="#tab3" data-toggle="tab"><small>3.</small> <strong>Location</strong></a></li>
                                <li><a href="#tab4" data-toggle="tab"><small>4.</small> <strong>T & C</strong></a></li>
                                <li><a href="#tab4" data-toggle="tab"><small>4.</small> <strong>Submission</strong></a></li>
                            </ul>
                            <div id="bar" class="progress progress-small">
                                <div class="progress-bar progress-bar-inverse"></div>
                            </div>
                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                            <div class="form-group">
                                                <!-- Username -->
                                                <label class="control-label col-md-3"  for="username">Username</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="username" name="username" placeholder="" class="form-control">
                                                        <span class="help-block">Username can contain any letters or numbers, without spaces</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Email -->
                                                <label class="control-label col-md-3"  for="email">Email</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="email" name="email"
                                                               placeholder="" class="form-control">
                                                        <span class="help-block">Please provide your E-mail</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Password -->
                                                <label class="control-label col-md-3"  for="address">Address</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10">
                                                        <input type="text" id="address" name="address" placeholder="" class="form-control">
                                                        <span class="help-block">Please provide your address</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                           
                                            <div class="form-group">
                                                <label for="courier" class="control-label col-md-3">Choose shipping option</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><select id="courier" data-placeholder="Choose an option.." class="select-block-level chzn-select">
                                                        <option value=""></option>
                                                        <option value="Australia Post">Australia Post</option>
                                                        <option value="DHL US">DHL US</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                        <span class="help-block pull-left">Please choose your shipping option</span></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="destination">Destination Zip Code</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="destination" name="destination" placeholder="" class="form-control">
                                                        <span class="help-block">Please provide your Destination Zip Code</span></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="dest-address">Destination Address</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="dest-address" name="address" placeholder="" class="form-control">
                                                        <span class="help-block">Please provide the destination address</span></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <form class="form-horizontal mt-sm" action='#' method="POST">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  for="name">Name on the Card</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="name" name="name" placeholder="" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country-select" class="control-label col-md-3">State</label>

                                                <div class="col-md-8">
                                                    <div class="col-md-10"><select id="country-select" data-placeholder="Choose a Country..." class="select-block-level chzn-select">
                                                        <option value=""></option>
                                                        <option>-- Select State --</option>
                                                        <?php foreach($state as $sv):?>
                                                        <option value="<?php echo $sv->cms_state_id?>"><?php echo $sv->cms_state_name?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="credit-card-type" class="control-label col-md-3">Credit Card Type</label>
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
                                                <label class="control-label col-md-3" for="credit">Credit Card Number </label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input id="credit" type="text" tabindex="3" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="expiration-date" class="control-label col-md-3">Expiration Date</label>
                                                <div class="col-md-8">
                                                    <div class="col-md-10"><input type="text" id="expiration-date"  class="form-control"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h2>Thank you!</h2>
                                    <p class="mb-lg">Your submission has been received.<br>&nbsp;<br>&nbsp;<br></p>
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
                                            <button class="btn btn-success pull-right" >Finish <i class="fa fa-check"></i></button>
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

</body>
</html>