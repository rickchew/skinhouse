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
        <h2 class="page-title">Edit Member <small></small></h2>
        <div class="row">
            <div class="col-md-7">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-align-left"></i>
                             Member's Details <?php //print_r($list)?>
                        </h4>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <form class="form-horizontal" role="form" action="<?php echo site_url("members/update/$id")?>" method="post">
                            <fieldset>
                                <legend class="section">&nbsp; Basic</legend>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Name [EN]</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" name="mod_clients_fullname" value="<?php echo $list->mod_clients_fullname?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Name [CN]</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" name="mod_clients_fullname_zh" value="<?php echo $list->mod_clients_fullname_zh?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">NRIC</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="mask-phone" name="mod_clients_nric" value="<?php echo $list->mod_clients_nric?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Birthday (Y-M-D)</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="birthday_id" name="mod_clients_birthday" value="<?php echo $list->mod_clients_birthday?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Place Of Birth</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="place_of_birth" name="mod_clients_place_of_birth" value="<?php echo $list->mod_clients_place_of_birth?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Gender</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="gender-id" name="">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="female" checked=""> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <legend class="section">&nbsp; Contact</legend>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">E-Mail</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="email-id" name="mod_clients_email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="normal-field" class="col-sm-4 control-label">Mobile</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-transparent" id="mobile-id" name="mod_clients_mobile" value="<?php echo $list->mod_clients_contact_1?>">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-7">
                                        <div class="btn-toolbar">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <a type="button" class="btn btn-inverse" href="<?php echo site_url('product')?>">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-5">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h5>
                            <i class="fa fa-arrow-down"></i>
                            Member's Info
                        </h5>
                    </header>
                    <div class="body">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Invoice</a></li>
                            <li class=""><a href="#treatment" data-toggle="tab" aria-expanded="false">Treatment</a></li>
                            <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Unclaimed Item</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Others <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class=""><a href="#dropdown3" data-toggle="tab" aria-expanded="false">Medical History & Allergies</a></li>
                                    <li class=""><a href="#dropdown4" data-toggle="tab" aria-expanded="false">Home Care Product</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <div class="row">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order ID</th>
                                                <th>Invoice ID</th>
                                                <th>Balance / Total Amount</th>
                                                <th>All Taken Away</th>
                                                <th>Complete Commision</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>S20170851</td>
                                                <td>500.00/ 1,490.00</td>
                                                <td>YES</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>S20170850</td>
                                                <td>1,500.00/ 2,490.00</td>
                                                <td>YES</td>
                                                <td>YES</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="treatment">
                                <div class="row">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;Treatment Code</th>
                                                <th>Date</th>
                                                <th>Treatment</th>
                                                <th>Beautician</th>
                                                <th>Compeletation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>T00091</td>
                                                <td></td>
                                                <td>Sio 2 Treatment</td>
                                                <td></td>
                                                <td>Ke Ting</td>
                                                <td>7 / 10</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>T00090</td>
                                                <td></td>
                                                <td>CBC Treatment</td>
                                                <td></td>
                                                <td>Kristy</td>
                                                <td>10 / 10</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="row">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;Item Code</th>
                                                <th>Date</th>
                                                <th>Item Name</th>
                                                <th>&nbsp;</th>
                                                <th>Taken Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>T00091</td>
                                                <td></td>
                                                <td>Peptide Silk Mask</td>
                                                <td></td>
                                                <td>7 / 10</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>T00090</td>
                                                <td></td>
                                                <td>Z Serum</td>
                                                <td></td>
                                                <td>10 / 10</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dropdown3">
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="SMOKING" type="checkbox">
                                        <label for="SMOKING">
                                            SMOKING
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="ALCOHOL" type="checkbox">
                                        <label for="ALCOHOL">
                                            ALCOHOL
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="COFFEE" type="checkbox">
                                        <label for="COFFEE">
                                            COFFEE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="GASTRIC" type="checkbox">
                                        <label for="GASTRIC">
                                            GASTRIC
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="CONSTIPATION" type="checkbox">
                                        <label for="CONSTIPATION">
                                            CONSTIPATION
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="INSOMNIA" type="checkbox">
                                        <label for="INSOMNIA">
                                            INSOMNIA
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="IRREGULAR-WORKING-HOUR" type="checkbox">
                                        <label for="IRREGULAR-WORKING-HOUR">
                                            IRREGULAR WORKING HOUR
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="DIABETES" type="checkbox">
                                        <label for="DIABETES">
                                            DIABETES
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HIGH-BLOOD-PRESSURE" type="checkbox">
                                        <label for="HIGH-BLOOD-PRESSURE">
                                            HIGH BLOOD PRESSURE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HEADACHES-/-MAGRAINE" type="checkbox">
                                        <label for="HEADACHES-/-MAGRAINE">
                                            HEADACHES / MAGRAINE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="ASTHMA" type="checkbox">
                                        <label for="ASTHMA">
                                            ASTHMA
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HORMONE-IMBALANCE" type="checkbox">
                                        <label for="HORMONE-IMBALANCE">
                                            HORMONE IMBALANCE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="ECZEMA" type="checkbox">
                                        <label for="ECZEMA">
                                            ECZEMA
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="MAJOR-OPERATION" type="checkbox">
                                        <label for="MAJOR-OPERATION">
                                            MAJOR OPERATION
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="PREGNANT" type="checkbox">
                                        <label for="PREGNANT">
                                            PREGNANT
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="PLANNING-TO-HAVE-BABY" type="checkbox">
                                        <label for="PLANNING-TO-HAVE-BABY">
                                            PLANNING TO HAVE BABY
                                        </label>
                                    </div>
                                    <div class="checkbox col-sm-10" style="padding-left: 0px;">
                                        <input type="text" class="form-control input-transparent" placeholder="Others">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="DIABETES" type="checkbox">
                                        <label for="DIABETES">
                                            DIABETES
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HIGH-BLOOD-PRESSURE" type="checkbox">
                                        <label for="HIGH-BLOOD-PRESSURE">
                                            HIGH BLOOD PRESSURE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HEADACHES-/-MAGRAINE" type="checkbox">
                                        <label for="HEADACHES-/-MAGRAINE">
                                            HEADACHES / MAGRAINE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="ASTHMA" type="checkbox">
                                        <label for="ASTHMA">
                                            ASTHMA
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="HORMONE-IMBALANCE" type="checkbox">
                                        <label for="HORMONE-IMBALANCE">
                                            HORMONE IMBALANCE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="ECZEMA" type="checkbox">
                                        <label for="ECZEMA">
                                            ECZEMA
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="MAJOR-OPERATION" type="checkbox">
                                        <label for="MAJOR-OPERATION">
                                            MAJOR OPERATION
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dropdown4">
                                <?php 
                                    $attr2_obj = json_decode($list->mod_clients_attr_2);
                                ?>
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="MAKE-UP" type="checkbox" <?php echo in_array("make up", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="MAKE-UP">
                                            MAKE UP
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="CLEANSER" type="checkbox" <?php echo in_array("cleanser", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="CLEANSER">
                                            CLEANSER
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="TONER" type="checkbox" <?php echo in_array("toner", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="TONER">
                                            TONER
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="MOISTURIZER(DAY)" type="checkbox" <?php echo in_array("moisturizer(day)", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="MOISTURIZER(DAY)">
                                            MOISTURIZER(DAY)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="MOISTURIZER(NIGHT)" type="checkbox" <?php echo in_array("moisturizer(night)", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="MOISTURIZER(NIGHT)">
                                            MOISTURIZER(NIGHT)
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <input id="EYE-CARE" type="checkbox" <?php echo in_array("eye care", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="EYE-CARE">
                                            EYE CARE
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="MASK" type="checkbox" <?php echo in_array("mask", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="MASK">
                                            MASK
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="SERUM" type="checkbox" <?php echo in_array("serum", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="SERUM">
                                            SERUM
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="SUN-BLOCK" type="checkbox" <?php echo in_array("sun block", $attr2_obj->checkboxes) ? 'checked':''?>>
                                        <label for="SUN-BLOCK">
                                            SUN BLOCK
                                        </label>
                                    </div>
                                    <div class="checkbox col-sm-10" style="padding-left: 0px;">
                                        <input type="text" class="form-control input-transparent" placeholder="Others" value="<?php echo $attr2_obj->other?>">
                                    </div>
                                    
                                    
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

    <!-- page specific scripts -->
        <!-- page libs -->
        <script src="<?php echo base_url('assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/select2/select2.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/jquery.maskedinput/dist/jquery.maskedinput.min.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/moment/moment.js')?>"></script>
        <script src="<?php echo base_url('assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
    <script type="text/javascript">
        $("#mask-phone").mask("999999-99-9999",{
            completed:function (){
                nricAuto();
                //alert("You typed the following: "+this.val());
            }
        });
        
        function nricAuto(){
            //alert('111');
            var birtdate = $("#mask-phone").val().substring(4,6);
            var birthmonth = $("#mask-phone").val().substring(2,4);
            var birthyear = $("#mask-phone").val().substring(0,2);
            var gender = $("#mask-phone").val().substring(13,14);
            var place_of_birth = $("#mask-phone").val().substring(7,9);

            var placeBithArr = {};
            placeBithArr['01'] = 'Johor';
            placeBithArr['02'] = 'Kedah';
            placeBithArr['03'] = 'Kelantan';
            placeBithArr['04'] = 'Malacca';
            placeBithArr['05'] = 'Negeri Sembilan';
            placeBithArr['06'] = 'Pahang';
            placeBithArr['07'] = 'Penang';
            placeBithArr['08'] = 'Perak';
            placeBithArr['09'] = 'Perlis';
            placeBithArr['10'] = 'Selangor';
            placeBithArr['11'] = 'Terengganu';
            placeBithArr['12'] = 'Sabah';
            placeBithArr['13'] = 'Sarawak';
            placeBithArr['14'] = 'Kuala Lumpur';
            placeBithArr['15'] = 'Labuan';
            placeBithArr['16'] = 'Putrajaya';
            placeBithArr['21'] = 'Johor';
            placeBithArr['22'] = 'Johor';
            placeBithArr['23'] = 'Johor';
            placeBithArr['24'] = 'Johor';
            placeBithArr['25'] = 'Kedah';
            placeBithArr['26'] = 'Kedah';
            placeBithArr['27'] = 'Kedah';
            placeBithArr['28'] = 'Kelantan';
            placeBithArr['29'] = 'Kelantan';
            placeBithArr['30'] = 'Malacca';
            placeBithArr['31'] = 'Negeri Sembilan';
            placeBithArr['32'] = 'Pahang';
            placeBithArr['33'] = 'Pahang';
            placeBithArr['34'] = 'Pahang';
            placeBithArr['35'] = 'Pahang';
            placeBithArr['36'] = 'Perak';
            placeBithArr['37'] = 'Perak';
            placeBithArr['38'] = 'Perak';
            placeBithArr['39'] = 'Perak';
            placeBithArr['40'] = 'Perlis';
            placeBithArr['41'] = 'Selangor';
            placeBithArr['42'] = 'Selangor';
            placeBithArr['43'] = 'Selangor';
            placeBithArr['44'] = 'Selangor';
            placeBithArr['45'] = 'Terengganu';
            placeBithArr['46'] = 'Terengganu';
            placeBithArr['47'] = 'Sabah';
            placeBithArr['48'] = 'Sabah';
            placeBithArr['49'] = 'Sabah';
            placeBithArr['50'] = 'Sarawak';
            placeBithArr['51'] = 'Sarawak';
            placeBithArr['52'] = 'Sarawak';
            placeBithArr['53'] = 'Sarawak';
            placeBithArr['54'] = 'Kuala Lumpur';
            placeBithArr['55'] = 'Kuala Lumpur';
            placeBithArr['56'] = 'Kuala Lumpur';
            placeBithArr['57'] = 'Kuala Lumpur';
            placeBithArr['58'] = 'Labuan';
            placeBithArr['59'] = 'Negeri Sembilan';

            //alert(placeBithArr[place_of_birth]);

            /*
            placebirth['01'] = 'Johor'; 
            placebirth['12'] = 'Sabah'; */

            gender = gender %2==0 ? 'Female':'Male';

            birthyear = birthyear > 25 ? '19'+birthyear:'20'+birthyear;
            $("#birthday_id").val(birthyear+'-'+birthmonth+'-'+birtdate);
            $("#place_of_birth").val(placeBithArr[place_of_birth]);
            $("#gender-id").val(gender);

            //if(theValue.value%2==0)
            //console.log($("#mask-phone").val().length);
        }
    </script>

</body>
</html>