            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url();?>">Mobile</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                 
                    <li class="xn-profile">
                    <?php $user = $this->ion_auth->user()->row(); ?>
                        <a href="#" class="profile-mini">
                                <?php
                                if (strlen($user->avatar)>=1){
                                ?>
                                <img src="<?php echo base_url();?>assets/avatar/<?php echo $user->avatar; ?>" alt="<?php echo $user->first_name; ?>"/>
                                <?php }else{ ?>
                                <img src="<?php echo base_url();?>assets/avatar/avatar.png" alt="<?php echo $user->first_name; ?>"/>
                                <?php } ?>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <?php
                                if (strlen($user->avatar)>=1){
                                ?>
                                <img src="<?php echo base_url();?>assets/avatar/<?php echo $user->avatar; ?>" alt="<?php echo $user->first_name; ?>"/>
                                <?php }else{ ?>
                                <img src="<?php echo base_url();?>assets/avatar/avatar.png" alt="<?php echo $user->first_name; ?>"/>
                                <?php } ?>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $user->first_name.' '.$user->last_name; ?></div>
                                <div class="profile-data-title"><?php echo $user->nip; ?></div>                                                                   
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url();?>index.php/profil" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>                                                                        
                    </li>                    
                 
                    <?php
                        if ($this->ion_auth->is_admin())
                            {
                    ?>                      
                    <li align="center" class="xn-title"><b>MENU ADMIN</b></li>
                    <?php }elseif ($this->ion_auth->in_group('kepala')) {?>
                    <li align="center" class="xn-title"><b>MENU PIMPINAN</b></li>
                    <?php }else { ?>
                    <li align="center" class="xn-title"><b>MENU USER</b></li> 
                    <?php } ?>

                    <li>
                        <a href="<?php echo base_url();?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>            

                    
                    <!-- <?php
                    // SELEKSI SEKRETARIAT BAGIAN HUMAS //
                        if ($user->company == "4.1.3.1" OR $user->company == "2.10.1.1")
                            {
                    ?>             
                        <li>
                            <a href="<?php echo base_url();?>index.php/cagenda"><span class="fa fa-calendar"></span><span class="xn-text"> Agenda</span></a>
                        </li> 
                    <?php } 
                    // AKHIR SELEKSI SEKRETARIAT BAGIAN HUMAS //
                    ?> -->

                    <!-- <?php
                    // SELEKSI KPERINDAG //
                        if ($user->company == "3.7.1.1" OR $user->company == "2.10.1.1")
                            {
                    ?> 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-money"></span> <span class="xn-text">Harga Bahan Pangan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/cbahan_pangan"><span class="fa fa-money"></span><span class="xn-text"> Bahan Pangan</span></a></li>
                            <li><a href="<?php echo base_url();?>index.php/cup_bahan_pangan"><span class="fa fa-picture-o"></span>Upload Gambar</a></li>
                        </ul>
                    </li>                    
                    <?php } 
                    // AKHIR SELEKSI PERINDAG //
                    ?> -->

                    <!-- <?php
                    // SELEKSI DISPAR //
                        if ($user->company == "3.2.1.1" OR $user->company == "2.10.1.1")
                            {
                    ?> --> 
                    <li>
                        <a href="<?php echo base_url();?>index.php/cjalan"><span class="fa fa-picture-o"></span><span class="xn-text"> Jalan</span></a>
                    </li> 
                    <!-- <?php } 
                    // AKHIR SELEKSI DISPAR //
                    ?>  -->

                    
                    

                    <!-- ################# MENU SETTING ################## --> 

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/profil"><span class="fa fa-eye"></span>Profil</a></li>
                            <li><a href="<?php echo base_url();?>index.php/auth/change_password"><span class="fa fa-lock"></span>Ubah Password</a></li>

                        <!--MENU HUSUS ADMIN-->
                        <?php
                        if ($this->ion_auth->is_admin())
                            {
                        ?>
                            <li><a href="<?php echo base_url();?>index.php/auth"><span class="fa fa-user"></span>List User</a></li>
                            <li><a href="<?php echo base_url();?>index.php/auth/create_user"><span class="fa fa-plus-circle"></span>Tambah User</a></li>
                            <!--<li><a href="<?php echo base_url();?>index.php/auth/create_group"><span class="fa fa-group"></span>Buat Grup</a></li>-->
                        <?php } ?>
                        <!--BATAS MENU HUSUS ADMIN-->

                        </ul>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span><span class="xn-text">Keluar</span></a>
                    </li> 
                    </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->