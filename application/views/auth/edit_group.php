                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">  
									<!--<h1><?php echo lang('edit_group_heading');?></h1>-->
									<p><?php echo lang('edit_group_subheading');?></p>

									<div id="infoMessage"><?php echo $message;?></div>

									<?php echo form_open(current_url());?>

									      
                                                    <div class="form-group">                                
                                                      <label class="control-label col-md-3"><?php echo lang('edit_group_name_label', 'group_name');?></label>
                                                      <div class="col-md-9">
                                                          <?php echo form_input($group_name, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>
                                                    </div>  									            
									     

									     
                                                    <div class="form-group">                                
                                                      <label class="control-label col-md-3"><?php echo lang('edit_group_desc_label', 'description');?></label>
                                                      <div class="col-md-9">
                                                          <?php echo form_input($group_description, null, 'class="form-control"');?>
                                                          <span class="help-block"></span>
                                                      </div>
                                                    </div>  									            
									      

												    <p>
												      <div class="block">
												      	<?php echo form_submit('submit', lang('edit_group_submit_btn'),'class="btn btn-success"');?>
												      </div>
												    </p>

									<?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>   									