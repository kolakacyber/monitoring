<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

        <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/eventCalendar.css">

        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/eventCalendar_theme_responsive.css">

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>        

        <style>
            body {
                background-image: url("<?php echo base_url();?>assets/gambar/adat.png");
            }
        </style>
    </head>
<body>

<?php
function TanggalIndo($date){
    $BulanIndo = array("JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER");
 
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;     
    return($result);
}
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bagenda.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/magenda.jpg" alt="banner" style="width:100%;">
      </div>
    </div>

</div>                    


                    <div class="row">
                        <div class="col-xs-12">


        
                            <div class="row">
                                <div class="col-xs-12">

                                    <div id="eventCalendarHumanDate"></div>
                                    <script>
                                        $(document).ready(function() {
                                            $("#eventCalendarHumanDate").eventCalendar({
                                                eventsjson: '<?php echo base_url();?>json/json.php',
                                                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
         

                        </div>
                    </div>  
<script src="<?php echo base_url();?>assets/js/jquery.eventCalendar.js" type="text/javascript"></script>
</body>
</html>             
         