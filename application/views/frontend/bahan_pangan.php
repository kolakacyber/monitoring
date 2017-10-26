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

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bbahan_pangan.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mbahan_pangan.jpg" alt="banner" style="width:100%;">
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
                                                            <tbody bgcolor="#036ca5">
                                                            <tr>
                                                                <td height="80" width="80" rowspan="2">
                                                                    <?php if($xdata->gambar == ''){ ?>
                                                                        <img src="<?php echo base_url();?>assets/gambar/bahanpangan/no.jpg" class="img-rounded" alt="Cinque Terre" width="80" height="80">
                                                                    <?php }else{ ?>
                                                                        <img src="<?php echo base_url();?>assets/gambar/bahanpangan/<?php echo $xdata->gambar;?>" class="img-rounded" alt="Cinque Terre" width="80" height="80">

                                                                    <?php } ?>
                                                                    
                                                                </td>
                                                                <td height="20" colspan="2"><font color="#ffffff" size="3"><?php echo $xdata->nama; ?></font></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><font color="#ffffff" size="5"><b><?php echo 'Rp. '.number_format($xdata->harga_sekarang,0,",",".").' / '.$xdata->satuan; ?></b></font></td>
                                                            </tr>
                                                            </tbody>
                                                            <tbody>
                                                              <tr valign="center">
                                                                <td valign="center" height="20" colspan="2" bgcolor="#01bffd" colspan=2><font color="#ffffff" size="2"><b><?php echo 'Harga kemarin :</b> Rp. '.number_format($xdata->harga_kemarin,0,",",".").' / '.$xdata->satuan; ?></font></td>

                                                                <!--######## Seleksi Kenaikan Harga ######## -->
                                                                
                                                                <?php
                                                                if($xdata->harga_sekarang == $xdata->harga_kemarin){
                                                                    echo '<td valign="center" width="45px" bgcolor="#01bffd"><center><font color="black"><i class="fa fa-arrow-left"></i><i class="fa fa-arrow-right"></i></font></center></td>';
                                                                }elseif($xdata->harga_sekarang > $xdata->harga_kemarin){
                                                                    echo '<td valign="center" width="45px" bgcolor="#01bffd"><center><font color="red"><i class="fa fa-arrow-up"></i></</font></center></td>';
                                                                }else{
                                                                    echo '<td valign="center" width="45px" bgcolor="#01bffd"><center><font color="green"><i class="fa fa-arrow-down"></i></marquee></font></td>';
                                                                } 
                                                                ?> 
                                                                 
                                                                <!-- ######### Batas Seleksi Kenaikan Harga ########## -->
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
                                    <!--</div>-->

                        </div>
                    </div>  

</body>
</html>             
         