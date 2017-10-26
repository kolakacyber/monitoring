
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
        <img src="<?php echo base_url();?>assets/gambar/brumah_ibadah.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/brumah_ibadah.jpg" alt="banner" style="width:100%;">
      </div>
    </div>
  </div>  
  <br>
                      <div class="row">

                        <div class="col-md-6">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Masjid</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Gereja</a></li>
                                    <li><a href="#tab-tiga" role="tab" data-toggle="tab">Pura</a></li>
                                    <li><a href="#tab-empat" role="tab" data-toggle="tab">Wihara</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <?php foreach($data1 as $xdata1){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-success">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata1->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/masjid.jpg" width="80" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata1->gambar; ?>" width="80" class="img-text" align="left"/> 
                                                    <?php } ?>  

                                                    <h3><?php echo $xdata1->tipe;?></h3>
                                                    <h4><?php echo $xdata1->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata1->alamat;?></p>                                                                      
                                                    
                                                        
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdata1->gambar!=''){ ?>
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $xdata1->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdata1->lat!=''){ ?>
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $xdata1->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdata1->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata1->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata1->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdata1->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata1->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata1->lat?>
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
                                        <?php foreach($data2 as $xdata2){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-info">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata2->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/gereja.jpg" width="80" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata2->gambar; ?>" width="80" class="img-text" align="left"/> 
                                                    <?php } ?>  

                                                    <h3><?php echo $xdata2->tipe;?></h3>
                                                    <h4><?php echo $xdata2->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata2->alamat;?></p>                                                                      
                                                    
                                                        
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdata2->gambar!=''){ ?>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdata2->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdata2->lat!=''){ ?>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdata2->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdata2->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata2->tipe.' '.$xdata2->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata2->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata2->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdata2->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata2->tipe.' '.$xdata2->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata2->lat?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="tab-tiga">
                                        <?php foreach($data3 as $xdata3){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-danger">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata3->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/pura.jpg" width="80" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata3->gambar; ?>" width="80" class="img-text" align="left"/> 
                                                    <?php } ?>  

                                                    <h3><?php echo $xdata3->tipe;?></h3>
                                                    <h4><?php echo $xdata3->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata3->alamat;?></p>                                                                      
                                                    
                                                        
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdata3->gambar!=''){ ?>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo $xdata3->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdata3->lat!=''){ ?>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo $xdata3->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdata3->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata3->tipe.' '.$xdata3->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata3->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata3->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdata3->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata3->tipe.' '.$xdata3->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata3->lat?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                                        <?php } ?>
                                    </div> 
                                    <div class="tab-pane" id="tab-empat">
                                        <?php foreach($data4 as $xdata4){ ?>
                                        <div class="col-md-6">

                                            <!-- START MODAL SIZES -->
                                            <div class="panel panel-primary">
                                                
                                                <div class="panel-body">
                                                                                                                                                
                                                    <?php if($xdata4->gambar == ''){ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/wihara.jpg" width="80" class="img-text" align="left"/> 
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata4->gambar; ?>" width="80" class="img-text" align="left"/> 
                                                    <?php } ?>  

                                                    <h3><?php echo $xdata4->tipe;?></h3>
                                                    <h4><?php echo $xdata4->nama;?></h4>
                                                    <p>Alamat : <?php echo $xdata4->alamat;?></p>                                                                      
                                                    
                                                        
                                                </div>
                                                <div class="panel-footer">
                                                    
                                                    <div class="pull-right">
                                                    <?php if($xdata4->gambar!=''){ ?>
                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $xdata4->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                                    <?php } ?>
                                                    <?php if($xdata4->lat!=''){ ?>
                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $xdata4->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL SIZES -->

                                        </div>
                        <!-- MODALS A -->        
                        <div class="modal" id="<?php echo $xdata4->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata4->tipe.' '.$xdata4->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php if($xdata4->gambar == ''){ ?>
                                            <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
                                        <?php }else{ ?>
                                             <img src="<?php echo base_url();?>assets/gambar/rumahibadah/<?php echo $xdata4->gambar; ?>" width="100%"/> 
                                        <?php } ?>                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MODALS B -->        
                        <div class="modal" id="<?php echo $xdata4->id.'b';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Lokasi <?php echo $xdata4->tipe.' '.$xdata4->nama;?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $xdata4->lat?>
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






