                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                  <!--<h1><?php echo lang('edit_user_heading');?></h1>-->
                                  <p><?php echo lang('edit_user_subheading');?></p>

                                  <div id="infoMessage"><?php echo $message;?></div>

                                  <?php echo form_open(uri_string());?>

                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($first_name, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>
                                        

                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_lname_label', 'last_name');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($last_name, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>
                                        

                                         
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_nip_label', 'nip');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($nip, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>            
                                          

                                        
                                              <!--<?php //echo lang('edit_user_company_label', 'company');?> <br />
                                              <?php //echo form_input($company);?>-->
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3">SKPD : <font color="red"><?php echo $user->company; ?></font></label>
                                                <div class="col-md-9">
                                                    
                                                  <select name="company" class="form-control">
                                                    <option value="">Pilih SKPD</option>
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
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_phone_label', 'phone');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($phone, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>             


                                        
                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_password_label', 'password');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($password, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>             
                                        

                                       

                                              <div class="form-group">                                
                                                <label class="control-label col-md-3"><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
                                                <div class="col-md-9">
                                                    <?php echo form_input($password_confirm, null, 'class="form-control"');?>
                                                    <span class="help-block"></span>
                                                </div>
                                              </div>              
                                        

                                        <?php if ($this->ion_auth->is_admin()): ?>


                                              <div class="col-md-12">                        
                                                <div class="block">
                                                  <h4><?php echo lang('edit_user_groups_heading');?>  </h4>
                                                  <font color="red">[ Sebelum <b><u><font color="green">Simpan Pengguna</font></u></b> harap memilih kembali <b>SKPD</b> user ! ]</font>
                                                  <div class="panel panel-default">
                                                    <?php foreach ($groups as $group):?>
                                                        <label class="checkbox">
                                                        <?php
                                                            $gID=$group['id'];
                                                            $checked = null;
                                                            $item = null;
                                                            foreach($currentGroups as $grp) {
                                                                if ($gID == $grp->id) {
                                                                    $checked= ' checked="checked"';
                                                                break;
                                                                }
                                                            }
                                                        ?>
                                                        
                                                        <input type="checkbox" class="icheckbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                                        <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                                        </label>
                                                    <?php endforeach?>
                                                  </div>
                                                </div>
                                              </div>


                                        <?php endif ?>

                                        <?php echo form_hidden('id', $user->id);?>
                                        <?php echo form_hidden($csrf); ?>

                                        <p>
                                          <div class="block">
                                            <?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn btn-success"');?>
                                          </div>
                                        </p>

                                  <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>                                    
