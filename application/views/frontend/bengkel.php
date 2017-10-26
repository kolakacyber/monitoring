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

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bbengkel.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mbengkel.jpg" alt="banner" style="width:100%;">
      </div>
    </div>

  </div>   
  <br>

                    <div class="row">
                        <div class="col-xs-12">

                                <?php foreach($data as $xdata){ ?>
                                    <div class="widget widget-success widget-item-icon">
                                        <div class="widget-item-left">
                                            <?php
                                            if($xdata->tipe == 'Bengkel Mobil'){
                                                echo '<span class="fa fa-cogs"></span>';
                                            }elseif($xdata->tipe == 'Bengkel Motor'){
                                                echo '<span class="fa fa-cog"></span>';
                                            }
                                            elseif($xdata->tipe == 'Variasi/Dico'){
                                                echo '<span class="fa fa-magic"></span>';
                                            }else{
                                                echo '<span class="fa fa-wrench"></span>';
                                            }
                                            ?>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-title"><?php echo $xdata->tipe; ?></div>
                                            <div class="widget-int num-count"><?php echo $xdata->nama; ?></div>
                                            <div class="widget-subtitle"><i class="fa fa-road" aria-hidden="true"></i> <?php echo $xdata->alamat; ?></div>
                                            <div><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xdata->telp; ?></div>
                                        </div>
                                        <div class="widget-controls">
                                            <?php
                                            if($xdata->lat == ''){ ?>                                
                                                
                                            <?php }else{ ?>
                                                <a type="button" class="widget-control-right" data-toggle="collapse" data-target="#<?php echo $xdata->id.'a'; ?>"><font size="4" color="black"><span class="fa fa-map-marker"></span></font></a> 
                                            <?php }
                                            ?>
                                        </div>
                                        <div id="<?php echo $xdata->id.'a'; ?>" class="collapse">
                                            <?php echo $xdata->lat?>
                                        </div>                            
                                    </div>
                                      
                                <?php } ?>    



                        </div>
                    </div>  

</body>
</html>             
         