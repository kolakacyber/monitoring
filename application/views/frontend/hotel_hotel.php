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
        <img src="<?php echo base_url();?>assets/gambar/bhotel.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mhotel.jpg" alt="banner" style="width:100%;">
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
                                        <div class="panel-body">
                                            <div>
 
                                                <?php foreach($data as $xdata){ ?> 
                                                   
                                                <!-- START PANEL WITH REFRESH CALLBACKS -->
                                                <div class="panel">
                                                    <!--<div class="panel-body">-->                                                 
                                                        <table class="table" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody bgcolor="#5a8bb1">
                                                            <tr>
                                                                <td height="100" width="130" rowspan="2">
                                                                    <?php if($xdata->gambar == ''){ ?>
                                                                        <img src="<?php echo base_url();?>assets/gambar/hotelpenginapan/no.jpg" class="img-rounded" alt="Image" width="130" height="100">
                                                                    <?php }else{ ?>
                                                                        <a class="gallery-item" href="<?php echo base_url();?>assets/gambar/hotelpenginapan/<?php echo $xdata->gambar;?>" title="<?php echo $xdata->tipe.' '.$xdata->nama; ?>" data-gallery>
                                                                            <img src="<?php echo base_url();?>assets/gambar/hotelpenginapan/<?php echo $xdata->gambar;?>" class="img-rounded" alt="Image" width="130" height="100">
                                                                        </a>

                                                                    <?php } ?>

                                                                                                                                
                                                                </td>
                                                                <td height="20" colspan="2"><font color="#ffffff" size="3"><?php echo $xdata->tipe; ?></font></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><font color="#ffffff" size="4"><b><?php echo $xdata->nama; ?></b></font><br>
                                                                <font color="#ffffff" size="2"><i class="fa fa-phone-square"></i> <?php echo $xdata->telp; ?></font>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                            <tbody>
                                                              <tr valign="center">
                                                                <td valign="center" height="20" colspan="2" bgcolor="#01bffd" colspan=2><font color="#000000" size="2"><b><?php echo $xdata->alamat; ?></font></td>

                                                                <!--######## Seleksi Kenaikan Harga ######## -->
                                                                
                                                                <td valign="center" width="45px" bgcolor="#01bffd"><center>
                                                                    <?php
                                                                    if($xdata->lat == ''){ ?>                                
                                                                        
                                                                    <?php }else{ ?>
                                                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#<?php echo $xdata->id; ?>">Lokasi</button>
                                                                          
                                                                    <?php }
                                                                    ?>                                                                    
                                                                </center></td>

                                                                <!-- ######### Batas Seleksi Kenaikan Harga ########## -->
                                                              </tr>   
                                                        </tbody>
                                                    </table>

                                                    <div id="<?php echo $xdata->id; ?>" class="collapse">
                                                        <?php echo $xdata->lat?>
                                                    </div>                                                                                       
                                                </div>
                                                <!-- END PANEL WITH REFRESH CALLBACKS -->                                                  
                                                <br>
                                                <?php } ?> 
                                              </div>
                                            
                                        </div>
                                    <!--</div>-->

                        </div>
                    </div> 

        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            
            <a class="close">×</a>
        </div>      
        <!-- END BLUEIMP GALLERY -->                     

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>                    

        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement;
                var link = target.src ? target.parentNode : target;
                var options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }};
                var links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script> 
</body>
</html>             
         