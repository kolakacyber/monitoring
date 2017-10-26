
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
                                <strong>Silahkan </strong> Pilih Kategori
                            </div>

                        <img src="<?php echo base_url();?>assets/gambar/kioskita/kios.png" alt="banner" style="width:100%;">                            


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






