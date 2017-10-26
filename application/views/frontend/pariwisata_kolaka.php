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
        <img src="<?php echo base_url();?>assets/gambar/bpariwisata.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mpariwisata.jpg" alt="banner" style="width:100%;">
      </div>
    </div>
  </div>                    


                    <div class="row">
                        <div class="col-xs-12">


                                    <!-- START DATATABLE EXPORT -->
                                    <!--<div class="panel panel-default">-->
                                        <!--<div class="panel-body">
                                           <center><img src="<?php //echo base_url();?>assets/gambar/title_bahan_pangan.png" alt="Harga Bahan Pangan" width="80%"></center>
                                        </div>-->
                                        <div class="panel-body">

                                                <?php foreach($data as $xdata){ ?>  
                            <div class="panel panel-default">                            
                                <div class="panel-body panel-body-image">
                                    <img src="<?=base_url()?>assets/gambar/pariwisata/<?=$xdata->nm_gbr;?>">
                                    <a href="#" class="panel-body-inform">
                                        <span class="fa fa-picture-o"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <h3><?=$xdata->nama_gbr;?></h3>
                                    <p><?=$xdata->ket_gbr;?></p>
                                </div>
                                <div class="panel-footer text-muted">
                                    <span class="fa fa-bookmark"></span> Objek Pariwisata Kabupaten Kolaka
                                    <!--<span class="fa fa-clock-o"></span> 3d ago &nbsp;&nbsp;&nbsp;
                                    <span class="fa fa-comment-o"></span> 36-->
                                </div>
                            </div>                                                  

                                                <?php } ?> 

                                            
                                        </div>
                                    <!--</div>-->

                        </div>
                    </div>  

</body>
</html>             
         