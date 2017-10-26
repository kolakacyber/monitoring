<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>e-SKP Kabupaten Kolaka</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>

          <?php if($message): ?>
            <div class="alertt">
              <div align="center" id="infoMessage"><?php echo $message;?></div>
            </div>
          <?php endif; ?>


        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title" align="center"><?php echo lang('login_subheading');?></div>

                    <form action="<?php echo site_url('auth/login'); ?>" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php echo form_input($identity, null, 'class="form-control input-lg" placeholder="'.lang('login_identity_label').'"');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php echo form_input($password, null, 'class="form-control input-lg" placeholder="'.lang('login_password_label').'"');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                          <?php echo lang('login_remember_label', 'remember');?>
                          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="forgot_password" class="btn btn-link btn-block"><?php echo lang('login_forgot_password');?></a>
                        </div>
                        <div class="col-md-6">
                            <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-info btn-block"');?>
                        </div>
                    </div>
                    </form>

                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 e-KINERJA
                    </div>
                    <div class="pull-right">
                        <a href="#">Tentang</a> |
                        <a href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            
        </div>

    </body>
</html>






