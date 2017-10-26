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
        <img src="<?php echo base_url();?>assets/gambar/bkesehatan.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mkesehatan.jpg" alt="banner" style="width:100%;">
      </div>
    </div>

  </div>   
  <br><br><br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#satu">Layanan Kesehatan</a></li>
    <li><a data-toggle="tab" href="#dua">Apotek/Dokter Praktek</a></li>
  </ul>

                    <div class="row">
                        <div class="col-xs-12">



                          <div class="tab-content">
                            <div id="satu" class="tab-pane fade in active">
                                <br>
                                <?php foreach($data1 as $xdata1){ ?>
                                    <div class="widget widget-success widget-item-icon">
                                        <div class="widget-item-left">
                                            <?php
                                            if($xdata1->tipe == 'RSU'){
                                                echo '<span class="fa fa-hospital-o"></span>';
                                            }elseif($xdata1->tipe == 'PUSKESMAS'){
                                                echo '<span class="fa fa-stethoscope"></span>';
                                            }
                                            elseif($xdata1->tipe == 'PUSTU'){
                                                echo '<span class="fa fa-plus-square"></span>';
                                            }else{
                                                echo '<span class="fa fa-hospital-o"></span>';
                                            }
                                            ?>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count"><?php echo $xdata1->tipe; ?></div>
                                            <div class="widget-title"><?php echo $xdata1->nama; ?></div>
                                            <div class="widget-subtitle"><i class="fa fa-road" aria-hidden="true"></i> <?php echo $xdata1->alamat; ?></div>
                                            <div><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xdata1->telp; ?></div>
                                        </div>
                                        <div class="widget-controls">
                                            <?php
                                            if($xdata1->lat == ''){ ?>                                
                                                
                                            <?php }else{ ?>
                                                <a type="button" class="widget-control-right" data-toggle="collapse" data-target="#<?php echo $xdata1->id.'a'; ?>"><font size="4" color="black"><span class="fa fa-map-marker"></span></font></a> 
                                            <?php }
                                            ?>
                                        </div>
                                        <div id="<?php echo $xdata1->id.'a'; ?>" class="collapse">
                                            <?php echo $xdata1->lat?>
                                        </div>                            
                                    </div>
                                      
                                <?php } ?>    
                            </div>
                            <div id="dua" class="tab-pane fade">
                                <br>
                                <?php foreach($data2 as $xdata2){ ?>
                                    <div class="widget widget-info widget-item-icon">
                                        <div class="widget-item-left">
                                            <?php
                                            if($xdata2->tipe == 'Dokter Praktek'){
                                                echo '<span class="fa fa-user-md"></span>';
                                            }elseif($xdata2->tipe == 'Apotek'){
                                                echo '<span class="fa fa-medkit"></span>';
                                            }else{
                                                echo '<span class="fa fa-building-o"></span>';
                                            }
                                            ?>
                                        </div>
                                        <div class="widget-data">
                                            <div class="widget-int num-count"><?php echo $xdata2->tipe; ?></div>
                                            <div class="widget-title"><?php echo $xdata2->nama; ?></div>
                                            <div class="widget-subtitle"><i class="fa fa-road" aria-hidden="true"></i> <?php echo $xdata2->alamat; ?></div>
                                            <div><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xdata2->telp; ?></div>
                                        </div>
                                        <div class="widget-controls">
                                            <?php
                                            if($xdata2->lat == ''){ ?>                                
                                                
                                            <?php }else{ ?>
                                                <a type="button" class="widget-control-right" data-toggle="collapse" data-target="#<?php echo $xdata2->id.'b'; ?>"><font size="4" color="black"><span class="fa fa-map-marker"></span></font></a> 
                                            <?php }
                                            ?>
                                        </div>
                                        <div id="<?php echo $xdata2->id.'b'; ?>" class="collapse">
                                            <?php echo $xdata2->lat?>
                                        </div>                            
                                    </div>
                                      
                                <?php } ?>  
                            </div>
                          </div>


                        </div>
                    </div>  

</body>
</html>             
         