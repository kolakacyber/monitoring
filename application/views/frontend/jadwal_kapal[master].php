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


  <div id="myCarousel" class="carousel slide" data1-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data1-target="#myCarousel" data1-slide-to="0" class="active"></li>
      <li data1-target="#myCarousel" data1-slide-to="1"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bjadwal_kapal.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mjadwal_kapal.jpg" alt="banner" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data1-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data1-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>                    


                    <div class="row">
                        <div class="col-xs-12">


                                    <!-- START data1TABLE EXPORT -->
                                    <!--<div class="panel panel-default">-->
                                        <!--<div class="panel-body">
                                           <center><img src="<?php //echo base_url();?>assets/gambar/title_bahan_pangan.png" alt="Harga Bahan Pangan" width="80%"></center>
                                        </div>-->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                            <img src="<?php echo base_url();?>assets/gambar/kapal/kolakabajoe.png" width="100%">
                                                <?php foreach($data1 as $xdata1){ ?>    
                                                <!-- START PANEL WITH REFRESH CALLBACKS -->
                                                <div class="panel">
                                                    <!--<div class="panel-body">-->                                                 
                                                        <table class="table" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody bgcolor="#036ca5">
                                                            <tr>
                                                                <td height="80" width="80" rowspan="2">
                                                                    <img src="<?php echo base_url();?>assets/gambar/kapal.jpg" class="img-rounded" alt="Cinque Terre" width="80" height="80">
                                                                    
                                                                </td>
                                                                <td height="20" colspan="2"><font color="#ffffff" size="3"><i class="fa fa-clock-o"></i> <?php echo $xdata1->jam; ?> WITA</font></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><font color="#ffffff" size="4"><b>KMP. <?php echo $xdata1->nama_kapal; ?></b></font></td>
                                                            </tr>
                                                            </tbody>
                                                            <tbody>
                                                              <tr valign="center">
                                                                <?php if($xdata1->tujuan == "Bajoe"){ ?>
                                                                    <td valign="center" height="20" colspan="2" bgcolor="#ff9900" colspan=2><font color="#ffffff"><?php echo 'BERANGKAT </font><font color="#000000"><span class="fa fa-calendar"></span> '.TanggalIndo($xdata1->tanggal).'</font> <font color="#ffffff"> / </font> <font color="#000000">Tujuan '.$xdata1->tujuan; ?></font></td>
                                                                <?php }else{ ?>
                                                                    <td valign="center" height="20" colspan="2" bgcolor="#00ccff" colspan=2><font color="#ffffff"><?php echo 'BERANGKAT </font><font color="#000000"><span class="fa fa-calendar"></span> '.TanggalIndo($xdata1->tanggal).'</font> <font color="#ffffff"> / </font> <font color="#000000">Tujuan '.$xdata1->tujuan; ?></font></td>
                                                                <?php } ?>
                                                                
                                                              </tr>                          
                                                            </tbody>
                                                        </table>
                                                    <!--</div>-->                                                                                         
                                                </div>
                                                <!-- END PANEL WITH REFRESH CALLBACKS -->                                                  
                                                <br>
                                                <?php } ?> 

                                            <div class="table-responsive">
                                            <img src="<?php echo base_url();?>assets/gambar/kapal/bajoekolaka.png" width="100%">
                                                <?php foreach($data2 as $xdata2){ ?>    
                                                <!-- START PANEL WITH REFRESH CALLBACKS -->
                                                <div class="panel">
                                                    <!--<div class="panel-body">-->                                                 
                                                        <table class="table" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody bgcolor="#036ca5">
                                                            <tr>
                                                                <td height="80" width="80" rowspan="2">
                                                                    <img src="<?php echo base_url();?>assets/gambar/kapal.jpg" class="img-rounded" alt="Cinque Terre" width="80" height="80">
                                                                    
                                                                </td>
                                                                <td height="20" colspan="2"><font color="#ffffff" size="3"><i class="fa fa-clock-o"></i> <?php echo $xdata2->jam; ?> WITA</font></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><font color="#ffffff" size="4"><b>KMP. <?php echo $xdata2->nama_kapal; ?></b></font></td>
                                                            </tr>
                                                            </tbody>
                                                            <tbody>
                                                              <tr valign="center">
                                                                <?php if($xdata2->tujuan == "Bajoe"){ ?>
                                                                    <td valign="center" height="20" colspan="2" bgcolor="#ff9900" colspan=2><font color="#ffffff"><?php echo 'BERANGKAT </font><font color="#000000"><span class="fa fa-calendar"></span> '.TanggalIndo($xdata2->tanggal).'</font> <font color="#ffffff"> / </font> <font color="#000000">Tujuan '.$xdata2->tujuan; ?></font></td>
                                                                <?php }else{ ?>
                                                                    <td valign="center" height="20" colspan="2" bgcolor="#00ccff" colspan=2><font color="#ffffff"><?php echo 'BERANGKAT </font><font color="#000000"><span class="fa fa-calendar"></span> '.TanggalIndo($xdata2->tanggal).'</font> <font color="#ffffff"> / </font> <font color="#000000">Tujuan '.$xdata2->tujuan; ?></font></td>
                                                                <?php } ?>
                                                                
                                                              </tr>                          
                                                            </tbody>
                                                        </table>
                                                    <!--</div>-->                                                                                         
                                                </div>
                                                <!-- END PANEL WITH REFRESH CALLBACKS -->                                                  
                                                <br>
                                                <?php } ?>                                                 
                                              </div>
                                            
                                            </div>

                                        </div>
                        </div> 
                    </div> 

</body>
</html>             
         