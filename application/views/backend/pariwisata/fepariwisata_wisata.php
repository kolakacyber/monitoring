<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-body">
  <?php echo $this->session->flashdata('pesan')?>
     <form action="<?php echo base_url()?>index.php/cpariwisata_wisata/update" method="post" enctype="multipart/form-data"><!-- form action mengarah ke fungsi update pada controller -->
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
              <img src="<?php echo base_url()?>assets/gambar/pariwisata/<?php echo $row->nm_gbr?>" alt="" style="width:20%">
          </div>
          </td>
         </tr>
         <tr>
          <td style="width:15%;">Nama</td>
          <td>
            <div class="col-sm-6">
                <input name="textnama" class="form-control" value="<?php echo $row->nama_gbr?>"></input>
            </div>
            </td>
         </tr>          
         <tr>
          <td style="width:15%;">Keterangan Foto</td>
          <td>
            <div class="col-sm-12">
                <textarea class="summernote" name="textket" class="form-control"><?php echo $row->ket_gbr?></textarea>
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