                     <?php 

                     	$user = $this->ion_auth->user()->row();

                     	$log = unix_to_human($user->last_login);  // Konversi Unix ke Human 
                     	$d = new DateTime($log);
                     	$timestamp = $d->getTimestamp(); // Unix timestamp
                    	$formatted_date = $d->format('d-m-Y'); // 20-10-2017

                     ?>
                    <div class="row">
                        <div class="col-md-12">                      	
                            <!--<div class="col-md-3">-->
                                
                                <!-- START WIDGET REGISTRED onclick="location.href='pages-address-book.html'-->
                                <!--<div class="widget widget-primary widget-item-icon" ;">
                                    <div class="widget-item-left">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                    </div>
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><?php //echo $jkh_bulan; ?></div>
                                        <div class="widget-title">Jumlah Kegiatan</div>
                                        <div class="widget-subtitle plugin-bulan">loading..</div>
                                    </div>
                                
                                </div>-->                            
                                <!-- END WIDGET REGISTRED -->
                                
                            <!--</div>

                            <div class="col-md-3">-->
                                
                                <!-- START WIDGET MESSAGES -->
                                <!--<div class="widget widget-success widget-item-icon";">
                                    <div class="widget-item-left">
                                        <span class="glyphicon glyphicon-book"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><?php //echo $jkh_tahun; ?></div>
                                        <div class="widget-title">Jumlah Kegiatan</div>
                                        <div class="widget-subtitle">Tahun <?php echo date('Y'); ?></div>
                                    </div>      

                                </div>-->                            
                                <!-- END WIDGET MESSAGES -->
                                
                            <!--</div>-->

                            <div class="col-md-3">
                                
                                <!-- START WIDGET LOGIN TERAKHIR -->
                                <div class="widget widget-danger widget-item-icon";">
                                    <div class="widget-item-left">
                                        <span class="fa fa-eye"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><span class="fa fa-calendar"></span></div>
                                        <div class="widget-title">Login Terakhir</div>
                                        <div class="widget-subtitle"><?php echo $formatted_date; ?></div>
                                    </div>      

                                </div>                            
                                <!-- END WIDGET LOGIN TERAKHIR -->
                                
                            </div>  

                            <div class="col-md-3">
                                
                                <!-- START WIDGET MESSAGES -->
                                <div class="widget widget-info widget-item-icon";">
                                    <div class="widget-item-left">
                                        <span class="fa fa-clock-o"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-title">Jam / Tanggal</div>
                                        <div class="widget-int num-count plugin-clock">00:00</div>
                                        <div class="widget-subtitle plugin-date">--, 00 -- 0000</div>
                                    </div>      

                                </div>                            
                                <!-- END WIDGET MESSAGES -->
                                
                            </div>

                            <!--<div class="col-md-3">
                                
                                 START WIDGET CLOCK 
                                <div class="widget widget-info widget-padding-sm">
                                    <div class="widget-big-int plugin-clock">00:00</div>   -->                         
                                    <!--<div class="widget-subtitle plugin-date">Loading...</div>
                                
                                    <div class="widget-buttons widget-c3">
                                    <div class="widget-subtitle plugin-date">Loading...</div>
                                    </div>                            -->
                                </div>                        
                                <!-- END WIDGET CLOCK -->
                                
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <marquee scrollamount="3">
                                        <?php
                                        foreach ($info as $i) {
                                        ?>
                                            <?php echo ' <span class="fa fa-info-circle"></span> '.$i->info; ?>
                                        <?php
                                        }
                                        ?>                                            
                                    </marquee>                            
                                </div>
                            </div>  
                            <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColTwo">
                                                Backend Aplikasi Mobile Kabupaten Kolaka
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="accOneColTwo">
                                        <p><b>
                                        Selamat datang di backend aplikasi mobile kabupaten kolaka, silahkan menginput data dengan memilih menu di samping kiri halaman ini.
                                        </b></p>
                                    </div>                                
                                </div>                                                     
                        </div>
                    </div>