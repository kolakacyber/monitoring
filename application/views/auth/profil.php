 <?php 

 	$user = $this->ion_auth->user()->row();

 	$log = unix_to_human($user->last_login);  // Konversi Unix ke Human 
 	$d = new DateTime($log);
 	$timestamp = $d->getTimestamp(); // Unix timestamp
	$formatted_date = $d->format('d-m-Y'); // 20-10-2017

 ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
			                    	<div class="profile">
			                            <div class="profile-image">
			                                <?php
			                                if (strlen($user->avatar)>=1){
			                                ?>
			                                <img src="<?php echo base_url();?>assets/avatar/<?php echo $user->avatar; ?>" alt="<?php echo $user->first_name; ?>"/>
			                                <?php }else{ ?>
			                                <img src="<?php echo base_url();?>assets/avatar/avatar.png" alt="<?php echo $user->first_name; ?>"/>
			                                <?php } ?>
			                                <div class="profile-data-title">
			                                	<br>
			                                	<a href="<?php echo base_url();?>index.php/avatar"><span class="glyphicon glyphicon-picture"></span> Ubah Foto Profil</a>
			                                </div>
			                            </div>
			                            <div class="panel-body">
			                                <div class="profile-data-title">
			                                	<font color="white">
				                                <table class="table">
				                                	<tr align="left" >
				                                		<td>Nama Depan</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->first_name; ?></td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>Nama Belakang</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->last_name; ?></td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>NIP</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->nip; ?></td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>Username</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->username; ?></td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>e-Mail</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->email; ?></td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>Kantor</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->company; ?> 
														</td>
				                                	</tr>
				                                	<tr align="left">
				                                		<td>Telp</td>
				                                		<td>:</td>
				                                		<td><?php echo $user->phone; ?></td>
				                                	</tr>	                                	
				                                	<tr align="left">
				                                		<td>Login Terakhir</td>
				                                		<td>:</td>
				                                		<td><?php echo $formatted_date; ?></td>
				                                	</tr>
				                                </table>
				                                </font>
			                                </div>
			                                <div align="center">
			                                	<a class="btn btn-success" href="<?php echo base_url();?>index.php/auth/edit_user/<?php echo $user->id;?>"><i class="glyphicon glyphicon-user"></i> Edit Profil</a>
			                                </div>
			                            </div>
			                        </div>
                                </div>
                            </div>
                        </div>
                    </div>  		                        