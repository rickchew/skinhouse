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
    $active_menu_id = isset($active_menu_id) ? $active_menu_id:'';

?>
<div class="logo">
        <h4><a href="<?php echo site_url()?>">Skin <strong>House</strong></a></h4>
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <?php //print_r($parent)?>
                <?php foreach($parent as $pv):?>
                <?php if (in_array($pv->menu_id, $child_arr)):   //Parent with child?>
                <?php 
                    $active = $active_menu_id == $pv->menu_id ? 'active':'';
                    //$display = $this->input->get('menu_active') == $pv->menu_id ? 'display: block':'display: none';
                ?>
                <?php if(in_array($pv->menu_id, $access)):?>
                <li class="has_sub <?php echo $active?>">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#menuid_<?php echo $pv->menu_id?>"><i class="<?php echo $pv->menu_icon?>"></i> <span class="name"><?php echo $pv->menu_name?></span></a>
                    <ul id="menuid_<?php echo $pv->menu_id?>" class="panel-collapse collapse ">
                        <?php foreach($child as $ca):?>
                        <?php if(in_array($ca->menu_id, $access)):?>
                            <?php if($ca->parent_id == $pv->menu_id):?>
                                <li><a href="<?php echo site_url($ca->menu_url."?menu_active=".$ca->menu_id)?>"><?php echo $ca->menu_name?></a></li>
                            <?php endif?>
                        <?php endif?>
                        <?php endforeach?>
                    </ul>
                    
                </li>
                <?php endif?>
                <?php else: //Parent without child?>
                <?php 
                    $active = $active_menu_id == $pv->menu_id ? 'active':'panel';
                    //$active = 'active';
                    $style = $active_menu_id == $pv->menu_id ? 'background: rgba(0,0,0,0.07);':'';
                    /*
                    if(!$this->input->get('menu_active') && $pv->menu_id ==31){
                        $active = 'active';
                    }*/
                ?>
                <?php if(in_array($pv->menu_id, $access)):?>
                <li class='<?php echo $active?>'>
                    <?php echo anchor($pv->menu_url."?menu_active=".$pv->menu_id,'<i class="'.$pv->menu_icon.'"></i><span> '.$pv->menu_name.'</span>',array('style' => $style))?>
                    <?php //echo anchor($pv->menu_url."?menu_active=".$pv->menu_id,'<i class="fa <?php echo '.$pv->menu_icon.'"></i><span>'.$pv->menu_name.'</span>')?>
                </li>
                <?php endif?>
                <?php endif //end Parent Check?>
                
                
                
                <?php endforeach?>
                <li class="visible-xs">
                    <a href="<?php echo site_url('logout')?>"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
                </ul>
                
            <h5 class="sidebar-nav-title">Projects</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Target Sales</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
            </div>
        </nav>    