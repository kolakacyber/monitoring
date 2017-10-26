                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">                      
                                      <div class="row">
                                          <div class="col-md-12">
                                                <!--<h1><?php echo lang('change_password_heading');?></h1>-->

                                                <div id="infoMessage"><?php echo $message;?></div>

                                                <?php echo form_open("auth/change_password");?>


                                                    <div class="form-group">                                
                                                      <label class="control-label col-md-3"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                                                      <div class="col-md-9">
                                                          <?php echo form_input($old_password, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>
                                                    </div>                                                            
                                                      

                                                      
                                                    <div class="form-group">                                
                                                      <label for="new_password" class="control-label col-md-3">Kata sandi bari, Min 8 Karakter:</label>
                                                      <div class="col-md-9">
                                                          <?php echo form_input($new_password, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>
                                                    </div>                                                              
                                                      

                                                      
                                                    <div class="form-group">                                
                                                      <label class="control-label col-md-3"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
                                                      <div class="col-md-9">
                                                          <?php echo form_input($new_password_confirm, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>
                                                    </div>                                                               
                                                      

                                                      <!--<?php echo form_input($user_id);?>-->
                                                      <div class="col-md-9">
                                                          <?php echo form_input($user_id, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>                                                      
                                                      <p>
                                                            <div class="block">
                                                            <?php echo form_submit('submit', lang('change_password_submit_btn') ,'class="btn btn-success"');?>
                                                            </div>
                                                      </p>

                                                <?php echo form_close();?>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                      
