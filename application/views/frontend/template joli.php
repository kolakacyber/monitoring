
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
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/gambar/bkuliner.jpg" alt="banner" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/gambar/mkuliner.jpg" alt="banner" style="width:100%;">
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
  <br>            
                
             
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">

                        <?php foreach($data as $xdata){ ?>
                        <div class="col-md-6">

                            <!-- START MODAL SIZES -->
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                                                                                                                
                                    <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="110" class="img-text" align="left"/> 
                                    <h4><?php echo $xdata->tipe.' '.$xdata->nama;?></h4>
                                    <p>Alamat : <?php echo $xdata->alamat;?></p> 

                                    <?php if($xdata->telp2==''){ ?>
                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp1;?></p>
                                    <?php }elseif($xdata->telp1==''){ ?>
                                        <p>Telp : <i class="fa fa-phone-square"></i> <?php echo $xdata->telp2;?></p>
                                    <?php }else{ ?>
                                        <p>Telp : <?php echo '<i class="fa fa-phone-square"></i> '.$xdata->telp1.' <i class="fa fa-phone-square"></i> '.$xdata->telp2; ?></p>
                                    <?php } ?>

                                    <p>Buka : Hari --- sampai ---, Jam --- sampai ---</p>        
                                </div>
                                <div class="panel-footer">
                                    DETAIL
                                    <div class="pull-right">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $xdata->id.'a';?>"><i class="fa fa-picture-o"></i> Foto</button>
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $xdata->id.'b';?>"><i class="fa fa-map-marker"></i> Lokasi</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL SIZES -->

                        </div>
                        <?php } ?>

                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <!-- START ACCORDION --> 
                            <?php foreach($data as $xdata){ ?>       
                            <div class="panel-group accordion">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#<?php echo $xdata->id;?>">
                                                <?php echo $xdata->tipe.' '.$xdata->nama;?>
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="<?php echo $xdata->id;?>">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>                                
                                </div>
                            </div>
                            <?php } ?>
                            <!-- END ACCORDION -->                        
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">First</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Second</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Third</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">Fourth</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <p>In mattis sapien lorem, nec tincidunt elit scelerisque tempus. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                    </div>
                                </div>
                            </div>                                                   
                            <!-- END TABS -->                        
                        </div>


                    </div>               

                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->

        
        <!-- MODALS A -->        
        <div class="modal" id="<?php echo $xdata->id.'a';?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Foto <?php echo $xdata->tipe.' '.$xdata->nama;?></h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url();?>assets/gambar/kuliner/no.jpg" width="100%"/>
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






