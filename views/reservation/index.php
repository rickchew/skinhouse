<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>X.One Care Admin</title>
    <?php $this->load->view('includes/header',$data['active_menu_id'] = '$active_menu_id')?>
    <link href="<?php echo base_url('assets/css/scheduler.css')?>" rel="stylesheet">
    <!--
    <style type="text/css">
    .time-slot{
        /*border-top: 2px solid #fff;*/

    }
    .time-slot td {
      background-color: transparent;
      text-align: right;
      position: relative;
      top: -12px;
    }
    </style>-->
</head>
<body>
    <?php $this->load->view('includes/side_bar')?>
        <div class="wrap">
        <?php $this->load->view('includes/top_nav')?>
                <div class="content container">
        <h2 class="page-title">Reservation<small>&nbsp;</small></h2>
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
                        <p>&nbsp;</p>

                    <div class="row">   
                        <div class="col-md-11">
                            <div id="day-schedule"></div>
                        </div>
                    </div>

                      <!--<script src="vendor/javascripts/jquery-1.11.2.js"></script>-->

                </section>
            </div>
        </div>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
        
    </div>
    <?php $this->load->view('includes/footer')?>
    <script type="text/javascript">
        //console.log(1111);
    </script>
    <!--<script src="<?php echo base_url('assets/js/day_schedule_selector.js')?>"></script>-->
    <script src="<?php echo base_url('assets/js/scheduler.js')?>"></script>
    
    <script>
    (function ($) {
      $("#day-schedule").dayScheduleSelector({
        
        days: [0,2, 3, 4,5,6],
        interval: 30,
        startTime: '10:00',
        endTime: '22:00'
        
      });
      $("#day-schedule").on('selected.artsy.dayScheduleSelector', function (e, selected) {
        console.log(selected[0]);
      })
      $("#day-schedule").data('artsy.dayScheduleSelector').deserialize({
        '0': [['09:30', '11:00'], ['13:00', '16:30']]
      });
    })($);
    </script>
    <script>
        /*
        $("#day-schedule").on('selected.artsy.dayScheduleSelector', function (e, selected) {
          /* selected is an array of time slots selected this time. 
          alert('1');
        }*/
    </script>
</body>
</html>