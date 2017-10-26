<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
?>
<!DOCTYPE html>
<html lang="en">
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

            
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bkios.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mkios.jpg" alt="banner" style="width:100%;">
      </div>
    </div>
  </div>  
  <br>
                      <div class="row">

                        <div>

                                            <form name="myform" id="myform" action="<?php echo base_url();?>index.php/ckios_kios/cari/" method="post">

                                                    <div class="col-xs-9">
                                                      <select id="ckategori" name="ckategori" class="form-control selectpicker" data-size="10" data-parsley-required="true" data-live-search="true" data-style="btn-white">
                                                        <option value="1" />Pilih Kategori
                                                        <option value="Grosir">Grosir</option>
                                                        <option value="Bahan Bangunan">Bahan Bangunan</option>
                                                        <option value="Counter">Counter</option>
                                                        <option value="Toko Elektronik">Toko Elektronik</option>
                                                        <option value="Toko HP">Toko HP</option>
                                                        <option value="Kios">Kios</option>
                                                        <option value="Percetakan">Percetakan</option>
                                                        <option value="Foto Copy/ATK">Foto Copy/ATK</option>
                                                        <option value="Salon">Salon</option>
                                                       </select>
                                                    </div>

                                                    <div class="col-xs-3">
                                                      <input type="submit" class="btn btn-primary btn-sm" value="FILTER">
                                                    </div>
                                            </form>

                        </div>
                            <div class="alert alert-info" role="alert">
                                <strong>Kategori terpilih : </strong> <?php echo $pilih; ?>
                            </div>
                                        <?php foreach($data as $xdata){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-default">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kioskita/kios.jpg" width="110" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kioskita/<?php echo $xdata->gambar; ?>" width="110" class="img-text" align="left"/> 
                                                    <?php } ?>                                                                       
                                                    
                                                    <h4><?php echo $xdata->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata->alamat;?></p> 

                                                    <?php if($xdata->telp1=='' AND $xdata->telp2==''){ ?>
                                                        
                                                    <?php }elseif($xdata->telp2==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp1;?></p>
                                                    <?php }elseif($xdata->telp1==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp2;?></p>
                                                    <?php }else{ ?>
                                                        <p>Telp : <?php echo '<i class="fa fa-phone-square"></i> '.$xdata->telp1.' <i class="fa fa-phone-square"></i> '.$xdata->telp2; ?></p>
                                                    <?php } ?>

                                                    <?php if($xdata->jamb == '00:00:00' OR $xdata->jamt == '00:00:00'){ ?>
                                                        <p>Buka : Hari <b><?php echo $xdata->harib;?></b> sampai hari <b><?php echo $xdata->harit;?></b>  
                                                    <?php }elseif($xdata->jamb == $xdata->jamt){ ?>
                                                        <p>Buka : Hari <b><?php echo $xdata->harib;?></b> sampai hari <b><?php echo $xdata->harit;?></b>, <b>24</b> Jam</p>  
                                                    <?php }else{ ?>
                                                        <p>Buka : Hari <b><?php echo $xdata->harib;?></b> sampai hari <b><?php echo $xdata->harit;?></b>, Jam <b><?php echo $xdata->jamb;?></b> sampai jam <b><?php echo $xdata->jamt;?></b></p>
                                                    <?php } ?>      
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdata->gambar!=''){ ?>
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $xdata->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdata->deskripsi!=''){ ?>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdata->id.'c';?>"><i class="fa fa-edit"></i> Deskripsi</button>
                                                    <?php } ?>
                                                    <?php if($xdata->lat!=''){ ?>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdata->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdata->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kioskita/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/kioskita/<?php echo $xdata->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdata->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata->lat?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- MODALS C -->        
                        <div class="modal" id="<?php echo $xdata->id.'c';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata->deskripsi; ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        <?php } ?>

                    </div>  

            </div>    
            <!-- END PAGE CONTENT -->

        


    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
        
    </body>
</html>






