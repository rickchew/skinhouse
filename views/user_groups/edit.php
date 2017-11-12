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
        <h2 class="page-title">Group Edit [<?php echo $group_info->description?>] <small>User list and more</small></h2>
        <div class="row">
            <div class="col-md-8">

                <section class="widget">
                    <header>
                        <h5><?php echo $group_info->description?> List</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p>&nbsp;</p>
                        <?php //print_r($group_info)?>
                        <?php 
                            $access_arr = array();

                            foreach($group_access as $ga){
                                array_push($access_arr,$ga->menu_id);
                            }

                            //print_r($access_arr);
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                


                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th># ID</th>
                                            <th>Email</th>
                                            <th>Full Name</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php //print_r($group_info)?>
                                        <?php foreach($list as $lv):?>
                                        <tr>
                                            <td><?php echo $lv->u_id?></td>
                                            <td><?php echo $lv->email?></td>
                                            <td><?php echo $lv->fullname?></td>
                                            <td></td>
                                            <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">Active</span></td>
                                        </tr>
                                        <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php 
                                    $from = $page > 0 ? $page:1;;
                                    $to = $page + count($list);
                                    //echo $to;
                                ?>
                                <div class="dataTables_info" id="datatable-table_info" role="status" aria-live="polite">Showing <strong><?php echo $from?> to <?php echo $to?></strong> of <?php echo $total_rows?> entries</div>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="dataTables_paginate paging_bootstrap">
                                    <ul class="pagination no-margin">
                                    <?php echo $links?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <section class="widget">
                        <header>
                            <h4>
                                <i class="fa fa-align-left"></i>
                                Group Info
                            </h4>
                            <div class="widget-controls">
                                <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh"></i></a>
                                <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </header>
                        <div class="widget-body">
                            <form class="form-horizontal" role="form">
                                <fieldset>
                                    &nbsp;
                                    <div class="form-group">
                                        <label for="hint-field" class="col-sm-4 control-label">
                                            Group Name
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" id="transparent-field" class="form-control input-transparent" value="<?php echo $group_info->description?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="transparent-input">
                                            Active
                                        </label>
                                        <div class="col-sm-7 checkbox checkbox-primary">
                                            &nbsp; &nbsp; &nbsp;<input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2">
                                                &nbsp;
                                            </label>
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
                <div class="col-md-12">
                    <section class="widget">
                        <header>
                            <h4>
                                <i class="fa fa-align-left"></i>
                                Access Control
                            </h4>
                            <div class="widget-controls">
                                <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                                <a href="#"><i class="fa fa-refresh"></i></a>
                                <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </header>
                        <div class="widget-body">
                            <?php
                                $parent = $this->menu_model->getParent('main_menu');
                                $child = $this->menu_model->getChild('main_menu');
                                $access = $this->access_control_model->get_access_by_id($this->session->userdata('group_id'));

                                $user_group = $this->session->userdata['group_id'];

                                $child_arr = array();
                                        
                                foreach($child as $tmp){
                                    array_push($child_arr,$tmp->parent_id);
                                }
                                $child_arr = array_unique($child_arr);
                             
                                //print_r($active_menu_id);
                                //$active_menu_id = isset($active_menu_id) ? $active_menu_id:'';

                            ?>
                            <form class="form-horizontal" role="form">
                                <fieldset>
                                    &nbsp;
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Menu</th>
                                            <th>Access</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php //print_r($child)?>
                                        <?php foreach($parent as $pv):?>
                                            <?php if (in_array($pv->menu_id, $child_arr)):   //Parent with child?>
                                                <tr>
                                                    <td><?php echo $pv->menu_name?></td>
                                                    <td><input id="checkbox_<?php echo $pv->menu_id?>_<?php echo $group_info->group?>" type="checkbox" <?php echo in_array($pv->menu_id, $access_arr) ? 'checked=""':''?> class="checkboxclick"></td>
                                                </tr>
                                                <?php foreach($child as $ca):?>
                                                    <?php if($ca->parent_id == $pv->menu_id):?>
                                                        <tr>
                                                            <td> -- &nbsp;<?php echo $ca->menu_name?></td>
                                                            <td><input id="checkbox_<?php echo $ca->menu_id?>_<?php echo $group_info->group?>" type="checkbox" <?php echo in_array($ca->menu_id, $access_arr) ? 'checked=""':''?> class="checkboxclick"></td>
                                                        </tr>
                                                    <?php endif?>
                                                <?php endforeach?>
                                            <?php else:?>
                                                <tr>
                                                    <td><?php echo $pv->menu_name?></td>
                                                    <td><input id="checkbox_<?php echo $pv->menu_id?>_<?php echo $group_info->group?>" type="checkbox" <?php echo in_array($pv->menu_id, $access_arr) ? 'checked=""':''?> class="checkboxclick"></td>
                                                </tr>
                                            <?php endif?>
                                        <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                                </fieldset>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
        
    </div>
    <?php $this->load->view('includes/footer')?>
<!-- common libraries. required for every page-->


<!-- page specific libs -->
<script src="<?php echo base_url('assets/lib/messenger/build/js/messenger.js')?>"></script>
<script src="<?php echo base_url('assets/lib/messenger/build/js/messenger-theme-flat.js')?>"></script>
<!-- demo-only libs -->
<script src="<?php echo base_url('assets/lib/backbone/backbone.js')?>"></script>
<script src="<?php echo base_url('assets/lib/messenger/docs/welcome/javascripts/location-sel.js')?>"></script>

<!-- page application js -->
<script src="<?php echo base_url('assets/js/ui-notifications.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery-autosize/dist/autosize.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/select2/select2.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/switchery/dist/switchery.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery.maskedinput/dist/jquery.maskedinput.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js')?>"></script>



    <script type="text/javascript">
        $('.checkboxclick').on('click', function() {
            var this_id = this.id;
            //$(".messenger").addClass("messenger-on-top"); 
            
            /*
            Messenger().post({
                    extraClasses: 'messenger-on-left',
                    message: 'Proccesing...',
                    type: 'success',
                    showCloseButton: true
            });*/
            //alert();
            //$("#checkbox_"+this.id).attr('disabled','disabled');
            setTimeout(function() {
                //$(".messenger").removeClass( "messenger-on-right messenger-on-bottom" )
                /*
                Messenger().post({
                    message: this_id+'Update Complete!',
                    type: 'success',
                    showCloseButton: true,
                    //globalPosition: 'top right',
                });*/
                
                var url = "<?php echo site_url('user_groups_edit/update_access')?>/"+this_id;
                $.ajax({
                 type: "GET",
                 url: url, 
                 //data: dataToBeSent,
                 dataType: "json",  
                 cache:false,
                 success: 
                      function(data){
                        
                      }
                });
                console.log(url);
                Messenger().post({
                    message: this_id+'Update Complete!',
                    type: 'success',
                    showCloseButton: true,
                    //globalPosition: 'top right',
                });
                return false;
            }, 1000);

        });
    </script>


</body>
</html>