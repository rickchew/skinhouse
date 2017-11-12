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
        <h2 class="page-title">Server Status </h2>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h4>
                            CPU
                            <small>
                                Based on Last 24 hours
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body no-margin">
                        <div class="text-center">
                            &nbsp;<br>
                            <img src="https://manager.linode.com/stats/linode/linode3458796?type=cpu&location=graphs_tab&span=daily" class="img-responsive">
                            &nbsp;<br>&nbsp;<br>
                        </div>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4>
                            Network
                            <small>
                                Based on Last 24 hours
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body no-margin">
                        <div class="text-center">
                            &nbsp;<br>
                            <img src="https://manager.linode.com/stats/linode/linode3458796?type=net&location=graphs_tab&span=daily" class="img-responsive">
                            &nbsp;<br>&nbsp;<br>
                        </div>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4>
                            DISK IO
                            <small>
                                Based on Last 24 hours
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body no-margin">
                        <div class="text-center">
                            &nbsp;<br>
                            <img src="https://manager.linode.com/stats/linode/linode3458796?type=io&location=graphs_tab&span=daily" class="img-responsive">
                            &nbsp;<br>&nbsp;<br>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-magnet"></i>
                            Server Overview
                        </h4>
                    </header>
                    <div class="body">
                        <ul class="server-stats">
                            <li>
                                <div class="key pull-right">CPU</div>
                                <div class="stat">
                                    <div class="info">60% / 37°C / 3.3 Ghz</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Mem</div>
                                <div class="stat">
                                    <div class="info" id="ram_display">29% / 4GB (16 GB)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-warning" id="ram_bar"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">LAN</div>
                                <div class="stat">
                                    <div class="info">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-danger" style="width: 48%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Access</div>
                                <div class="stat">
                                    <div class="info">17 Mb/s <i class="fa fa-caret-up"></i> &nbsp; (+18%)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-success" style="width: 64%;"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        sudo killall -9 apache2
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
        
        <!-- page template -->
        <script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="<?php echo base_url('assets/img/2.png')?>" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>
        <script>
        $(document).ready(function() {
            setTimeout(function() {
                //var login_url = "<?php echo site_url('verifylogin')?>";
                $.ajax({
                 type: "POST",
                 url: "https://www.x-one.asia/ram.php", 
                 //data: dataToBeSent,
                 dataType: "json",  
                 cache:false,
                 success: 
                      function(data){
                        //alert(data);  //as a debugging message.
                        console.log(data);
                        var memoryTotal = data.MemTotal.split(' ');
                        var memoryTotalMB = Math.ceil(memoryTotal[0]/1024);
                        var memFree = data.MemFree.split(' ');
                        var memFreeMB = Math.ceil(memFree[0]/1024);
                        var memPercent = (memoryTotalMB - memFreeMB) / memoryTotalMB * 100;

                        //alert(memoryTotalMB);
                        $("#ram_display").html(memoryTotalMB - memFreeMB+' MB / '+memoryTotalMB+' MB');
                        $('#ram_bar').css('width', memPercent+'90%');
                        //$("#ram_bar").css("width": "90%");
                      }
                });

                return false;
                $this.button('reset');
            }, 1000);
        });
        </script>
</body>
</html>