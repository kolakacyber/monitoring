                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
									<!--<h1><?php// echo lang('deactivate_heading');?></h1>
									<p><?php// echo sprintf(lang('deactivate_subheading'), $user->username);?></p>-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger push-down-20">
                                <?php echo sprintf(lang('deactivate_subheading'), '<span style="color: #FFF500;">'.$user->username.'</span>');?>.
                            </div>
                        </div>
                    </div>									

									<?php echo form_open("auth/deactivate/".$user->id);?>

									  <div class="form-group">
									  	<label class="col-md-1 control-label"><?php echo lang('deactivate_confirm_y_label', 'confirm');?></label>
									  		<div>
									    <!--<input type="radio" name="confirm" value="yes" checked="checked" />-->
												<label class="switch switch-small">
                                                    <input type="radio" name="confirm" value="yes" checked="checked"/>
                                                    <span></span>
                                                </label>
                                            </div>    
                             
                                            
									    <label class="col-md-1 control-label"><?php echo lang('deactivate_confirm_n_label', 'confirm');?></label>
									    		<div>
									    <!--<input type="radio" name="confirm" value="no" />-->
                                                <label class="switch switch-small">
                                                    <input type="radio" name="confirm" value="no"/>
                                                    <span></span>
                                                </label>
                                            </div>									    
									  </div>

									  <?php echo form_hidden($csrf); ?>
									  <?php echo form_hidden(array('id'=>$user->id)); ?>

									  <p>
									  	<div class="block">
									  		<?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn btn-success"');?>
									  	</div>
									  </p>

									<?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>     									