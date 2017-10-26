<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   

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
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/btelp.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mtelp.jpg" alt="banner" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>                    


                    <div class="row">
                        <div class="col-xs-12">


                                    <!-- START DATATABLE EXPORT -->
                                    <!--<div class="panel panel-default">-->
                                        <!--<div class="panel-body">
                                           <center><img src="<?php //echo base_url();?>assets/gambar/title_bahan_pangan.png" alt="Harga Bahan Pangan" width="80%"></center>
                                        </div>-->
                                        <div class="panel-body list-group list-group-contacts"> 

                                   
                                                <?php foreach($data as $xdata){ ?>    
                                                
                                                    <a href="#" class="list-group-item">                                 
                                                        <div class="list-group-status status-online"></div>
                                                        <img src="<?php echo base_url();?>assets/gambar/telp.png" class="pull-left" alt="logo"/>
                                                        <span class="contacts-title"><?php echo "<b>".$xdata->nama."</b>"; ?></span>
                                                        <p><?php echo '<span class="fa fa-phone-square"></span>'.$xdata->telp; ?></p>                                                                        
                                                        <!--<div class="list-group-controls">
                                                            <button class="btn btn-success"><span class="fa fa-phone"></span></button>
                                                        </div>-->                                    
                                                    </a>                                                
                                                <br>
                                                <?php } ?> 
                                     
                                            
                                        </div>
                                    <!--</div>-->

                        </div>
                    </div>  

</body>
</html>             
         