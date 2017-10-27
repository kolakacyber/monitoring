<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-body">

  <?php echo $this->session->flashdata('pesan')?>

     <form action="<?php echo base_url()?>index.php/cjalan/update" method="post" enctype="multipart/form-data"><!-- form action mengarah ke fungsi update pada controller -->
       <table class="table table-striped">
         <tr>
          <td colspan="2"><span class="fa fa-info-circle"></span> Ket : Ubah ukuran foto yang akan di upload menjadi <b>500 x 281 px</b> | <font color="red"> Max 2MB [ 2048 KB ]</font></td>
         </tr>
         <tr>
          <td style="width:15%;">File Foto</td>
          <td>
            <div class="col-sm-6">
                <input type="file" name="filefoto" class="form-control">
                <!-- file gambar kita buat pada field hidden -->
                <input type="hidden" name="filelama" class="form-control" value="<?php echo $row->nm_gbr;?>">
                <!-- Id gambar kita hidden pada input field dimana berfungsi sebagai identitas yang dibawa untuk update -->
                <input type="hidden" name="kode" class="form-control" value="<?php echo $row->id;?>">
            </div>
            </td>
         </tr>
         <tr>
          <td align="center" colspan="2">
          <div class="col-sm-12">
              <img src="<?php echo base_url()?>assets/gambar/jalan/<?php echo $row->nm_gbr;?>" alt="" style="width:20%">
          </div>
          </td>
         </tr>

         <tr>
          <td style="width:15%;">Nama Jalan</td>
          <td>
            <div class="col-sm-6">
                <input name="textnama" class="form-control" value="<?php echo $row->nama_gbr;?>"></input>
            </div>
          </td>
         </tr>  

         <tr>
          <td style="width:15%;">Jenis</td>
          <td>
            <div class="col-sm-6">
                <select name="jenis" class="form-control select">
                  <option>Pilih Jenis</option>
                  <option <?php if( $row->jenis=='Tanah'){echo "selected"; } ?> value="Tanah">Tanah</option>
                  <option <?php if( $row->jenis=='Kerikil'){echo "selected"; } ?> value="Kerikil">Kerikil</option>
                  <option <?php if( $row->jenis=='Batu'){echo "selected"; } ?> value="Batu">Batu</option>
                  <option <?php if( $row->jenis=='Aspal'){echo "selected"; } ?> value="Aspal">Aspal</option>
                </select>
            </div>
          </td>
         </tr

         <tr>
          <td style="width:15%;">Kondisi</td>
          <td>
            <div class="col-sm-6">
                <select name="kondisi" class="form-control select">
                  <option>Pilih Jenis</option>
                  <option <?php if( $row->kondisi=='Rusak Berat'){echo "selected"; } ?> value="Rusak Berat">Rusak Berat</option>
                  <option <?php if( $row->kondisi=='Rusak'){echo "selected"; } ?> value="Rusak">Rusak</option>
                  <option <?php if( $row->kondisi=='Sedang'){echo "selected"; } ?> value="Sedang">Sedang</option>
                  <option <?php if( $row->kondisi=='Baik'){echo "selected"; } ?> value="Baik">Baik</option>  
                </select>
            </div>
          </td>
         </tr>

         <tr>
          <td style="width:15%;">Panjang Jalan</td>
          <td>
            <div class="col-sm-6">
                <input name="panjang" class="form-control" value="<?php echo $row->panjang;?>"></input>
            </div>
          </td>
         </tr> 

         <tr>
          <td><label class="control-label">Lokasi</label></td>
          <td>
            <div class="col-sm-6">
                <input name="lokasi" class="form-control" value="<?php echo $row->lokasi;?>"></input>
            </div>
          </td>
         </tr>   

         <tr>
          <td><label class="control-label">Kecamatan</label></td>
          <td>
            <div class="col-sm-6">
                <select name="kecamatan" class="form-control select">
                  <option value="">- Pilih -</option>
                    <?php
                      $sql ="SELECT * FROM tbl_kecamatan";
                      $query = $this->db->query($sql);
                      if ($query->num_rows() > 0) {
                        foreach ($query->result() as $roww) {
                    ?>
                  <option <?php if( $roww->kecamatan==$row->kecamatan){echo "selected"; } ?> value="<?php echo $roww->kecamatan;?>"><?php echo $roww->kecamatan;?></option>
                    <?php 
                    }
                    } 
                    ?>
                </select>
            </div>
          </td>
         </tr>      

         <tr>
          <td><label class="control-label">Kelurahan</label></td>
          <td>
            <div class="col-sm-6">
                <select name="kelurahan" class="form-control select">
                  <option value="">- Pilih -</option>
                    <?php
                      $sql ="SELECT * FROM tbl_kelurahan";
                      $query = $this->db->query($sql);
                      if ($query->num_rows() > 0) {
                        foreach ($query->result() as $roww) {
                    ?>
                  <option <?php if( $roww->kelurahan==$row->kelurahan){echo "selected"; } ?> value="<?php echo $roww->kelurahan;?>"><font class="text-primary"><?php echo $roww->kelurahan;?></font></option>
                    <?php 
                    }
                    } 
                    ?>
                </select>
            </div>
          </td>
         </tr>               

         <tr>
          <td style="width:15%;">Keterangan Foto</td>
          <td>
            <div class="col-sm-12">
                <textarea class="form-control" rows="5" name="textket"><?php echo 'tess';?></textarea>
            </div>
          </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Update">
            <button type="reset" class="btn btn-default" onclick="history.back()">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->
    </div> <!-- /container -->
