                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                  <!--<h1><?php echo lang('create_user_heading');?></h1>-->
                                  <p><?php echo lang('create_user_subheading');?></p>

                                  <div id="infoMessage"><?php echo $message;?></div>

                                  <?php echo form_open("auth/create_user");?>


                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($first_name, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>            



                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_lname_label', 'last_name');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($last_name, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>            
                                      


                                              <!-- <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php// echo lang('create_user_nip_label', 'nip');?></label>
                                                <div class="col-md-9">
                                                    <?php// echo form_input($nip, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div> -->             
                                        
                                        
                                        <?php
                                        if($identity_column!=='email') {
                                            //echo '<p>';
                                            //echo lang('create_user_identity_label', 'identity');
                                            //echo '<br />';
                                            //echo form_error('identity');
                                            //echo form_input($identity);
                                            //echo '</p>';
                                            ?>
                                            <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_nip_label', 'nip');?> [ Tanpa Spasi ]</label>
                                                <div class="col-md-9">
                                                    <?php echo form_error('identity'); ?>
                                                    <?php echo form_input($identity, null, 'class="form-control" placeholder="Perhatikan baik-baik NIP yang anda masukkan!"') ;?>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        
                                              <!--<?php //echo lang('edit_user_company_label', 'company');?> <br />
                                              <?php //echo form_input($company);?>-->
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3">SKPD : </label>
                                                <div class="col-md-9">
                                                  <select name="company" class="form-control">
                                                    <option value="">--Select Unit Kerja--</option>
                                                      <?php
                                                        $sql ="SELECT * FROM tbl_skpd";
                                                        $query = $this->db->query($sql);
                                                        if ($query->num_rows() > 0) {
                                                          foreach ($query->result() as $row) {
                                                      ?>
                                                        <option value="<?php echo $row->idskpd;?>"><?php echo $row->nmskpd;?></option>
                                                      <?php 
                                                          }
                                                        } 
                                                      ?>
                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>             
                                       

                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_email_label', 'email');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($email, null, 'class="form-control" placeholder="Masukkan e-Mail yang aktif"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>               
                                        

                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_phone_label', 'phone');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($phone, null, 'class="form-control" placeholder="Masukkan Nomor Telp yang aktif"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>
                                        

                                      
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_password_label', 'password');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($password, null, 'class="form-control" placeholder="Password minimal 8 karakter"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>            
                                        

                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($password_confirm, null, 'class="form-control" placeholder="Input ulang password anda"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>               
                                       


                                        <div class="block">
                                          <?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-success"');?>
                                        </div>

                                  <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>                                    
