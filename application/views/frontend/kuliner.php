
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
        <img src="<?php echo base_url();?>assets/gambar/bkuliner.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mkuliner.jpg" alt="banner" style="width:100%;">
      </div>
    </div>
  </div>  
  <br>
                      <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><i class="fa fa-cutlery"></i> Kuliner</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab"><i class="fa fa-coffee"></i> Warkop</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <?php foreach($data as $xdata){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-default">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="110" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kuliner/<?php echo $xdata->gambar; ?>" width="110" class="img-text" align="left"/> 
                                                    <?php } ?>                                                                       
                                                    
                                                    <h4><?php echo $xdata->tipe.' '.$xdata->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata->alamat;?></p> 

                                                    <?php if($xdata->telp1=='' AND $xdata->telp2==''){ ?>
                                                        
                                                    <?php }elseif($xdata->telp2==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp1;?></p>
                                                    <?php }elseif($xdata->telp1==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp2;?></p>
                                                    <?php }else{ ?>
                                                        <p>Telp : <?php echo '<i class="fa fa-phone-square"></i> '.$xdata->telp1.' <i class="fa fa-phone-square"></i> '.$xdata->telp2; ?></p>
                                                    <?php } ?>

                                                    <?php if($xdata->jamb =='00:00:00' OR $xdata->jamt =='00:00:00'){ ?>
                                                        <p>Buka : Hari <b><?php echo $xdata->harib;?></b> sampai hari <b><?php echo $xdata->harit;?></b></p>  
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
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata->tipe.' '.$xdata->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/kuliner/<?php echo $xdata->gambar; ?>" width="100%"/> 
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
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata->tipe.' '.$xdata->nama;?></h4>
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
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <?php foreach($dati as $xdati){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-default">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdati->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kuliner/no_warkop.jpg" width="110" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/kuliner/<?php echo $xdati->gambar; ?>" width="110" class="img-text" align="left"/> 
                                                    <?php } ?>                                                                       
                                                    
                                                    <h4><?php echo $xdati->tipe.' '.$xdati->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdati->alamat;?></p> 

                                                    <?php if($xdati->telp1=='' AND $xdati->telp2==''){ ?>
                                                        
                                                    <?php }elseif($xdati->telp2==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdati->telp1;?></p>
                                                    <?php }elseif($xdati->telp1==''){ ?>
                                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdati->telp2;?></p>
                                                    <?php }else{ ?>
                                                        <p>Telp : <?php echo '<i class="fa fa-phone-square"></i> '.$xdati->telp1.' <i class="fa fa-phone-square"></i> '.$xdati->telp2; ?></p>
                                                    <?php } ?>

                                                    <?php if($xdati->jamb =='00:00:00' OR $xdati->jamt =='00:00:00'){ ?>
                                                        <p>Buka : Hari <b><?php echo $xdati->harib;?></b> sampai hari <b><?php echo $xdati->harit;?></b></p>  
                                                    <?php }elseif($xdati->jamb == $xdati->jamt){ ?>
                                                        <p>Buka : Hari <b><?php echo $xdati->harib;?></b> sampai hari <b><?php echo $xdati->harit;?></b>, <b>24</b> Jam</p>  
                                                    <?php }else{ ?>
                                                        <p>Buka : Hari <b><?php echo $xdati->harib;?></b> sampai hari <b><?php echo $xdati->harit;?></b>, Jam <b><?php echo $xdati->jamb;?></b> sampai jam <b><?php echo $xdati->jamt;?></b></p>
                                                    <?php } ?>       
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdati->gambar!=''){ ?>
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $xdati->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdati->lat!=''){ ?>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdati->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdati->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdati->tipe.' '.$xdati->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdati->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/kuliner/<?php echo $xdati->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdati->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdati->tipe.' '.$xdati->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdati->lat?>
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
                            </div>                                                   
                            <!-- END TABS -->                        
                        </div>


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






