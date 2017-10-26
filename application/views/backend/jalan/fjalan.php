<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-body">

  <?php echo $this->session->flashdata('pesan')?>

     <form action="<?php echo base_url()?>index.php/cjalan/insert" method="post" enctype="multipart/form-data">
       <table class="table table-striped">
         
         <tr>
          <td><label class="control-label">Nama Jalan</label></td>
          <td>
            <div class="col-sm-6">
                <input type="text" name="textnama" class="form-control"></input>
            </div>
            </td>
         </tr> 

         <tr>
          <td><label class="control-label">Jenis</label></td>
          <td>
            <div class="col-sm-6">
                <select name="jenis" class="form-control select">
                  <option>- Pilih -</option>
                  <option value="Tanah">Tanah</option>
                  <option value="Kerikil">Kerikil</option>
                  <option value="Batu">Batu</option>
                  <option value="Aspal">Aspal</option>  
                </select>
            </div>
            </td>
         </tr>

         <tr>
          <td><label class="control-label">Kondisi</label></td>
          <td>
            <div class="col-sm-6">
                <select name="kondisi" class="form-control select">
                  <option>- Pilih -</option>
                  <option value="Rusak Berat">Rusak Berat</option>
                  <option value="Rusak">Rusak</option>
                  <option value="Sedang">Sedang</option>
                  <option value="Baik">Baik</option>  
                </select>
            </div>
            </td>
         </tr>     

         <tr>
          <td><label class="control-label">Panjang</label></td>
          <td>
            <div class="col-sm-3">
                <input name="panjang" class="form-control"></input>
            </div>
            <div class="col-sm-2">
                <label class="col-sm-3 control-label">Meter</label>
            </div>
          </td>
         </tr> 

         <tr>
          <td><label class="control-label">Lokasi</label></td>
          <td>
            <div class="col-sm-6">
                <input name="lokasi" class="form-control"></input>
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
                  <option value="<?php echo $roww->kecamatan;?>"><?php echo $roww->kecamatan;?></option>
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
                  <option value="<?php echo $roww->kelurahan;?>"><font class="text-primary"><?php echo $roww->kelurahan;?></font></option>
                    <?php 
                    }
                    } 
                    ?>
                </select>
            </div>
          </td>
         </tr>              

         <tr>
          <td colspan="2"><span class="fa fa-info-circle"></span> Upload gambar berukuran Max <b>1288 x 768 px</b> | <font color="red"> Kapasitas Max 2MB [ 2048 KB ]</font></td>
         </tr>



         <tr>
          <td><label class="control-label">Foto</label></td>
          <td>
            <div class="col-sm-6">
                <input type="file" class="file" name="filefoto" class="form-control">
            </div>
            </td>
         </tr>

         <tr>
          <td><label class="control-label">Deskripsi</label></td>
          <td>
            <div class="col-sm-8">
                <textarea class="form-control" rows="5" name="textket"></textarea>
                <!-- <textarea class="summernote" name="textket" class="form-control"></textarea> -->
            </div>
          </td>
         </tr>

         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default" onclick="history.back()">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->
    </div> <!-- /container -->