                    <div class="row">
                        <div class="col-md-12">
                          <div class="container">
                                <!-- Main component for a primary marketing message or call to action -->
                          <div class="panel panel-default">
                            <div class="panel-heading"><b>Form Upload Image</b></div>
                            <div class="panel-body">
                            <?=$this->session->flashdata('pesan')?>
                            <?php 
                              //$user = $this->ion_auth->user()->row();
                              //echo $user->id; 
                            ?>
                               <form action="<?=base_url()?>index.php/avatar/insert" method="post" enctype="multipart/form-data">
                                 <table class="table table-striped">
                                   <tr><u><b>Keterangan :</b></u><br>
                                   <b>- Ukuran gambar Max :</b> 1024px X 768px<br>
                                   <b>- Batas Ukuran File :</b> 2048Kb atau 2MB<br>
                                   <b>- Format gambar :</b> jpg, png & gif
                                    <td style="width:15%;">File Foto</td>
                                    <td>
                                      <div class="col-sm-6">
                                          <input type="file" name="filefoto" class="form-control">
                                      </div>
                                      </td>
                                   </tr>
                                   <tr>
                                    <td colspan="2">
                                      <input type="submit" class="btn btn-success" value="Simpan">
                                      <!--<button type="reset" class="btn btn-default">Batal</button>
                                    </td>
                                   </tr>
                                 </table>
                               </form>
                              </div>
                             </div>    <!-- /panel -->
                           </div> <!-- /container -->
                        </div>
                    </div>