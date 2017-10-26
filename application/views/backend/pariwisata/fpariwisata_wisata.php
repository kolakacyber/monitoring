<!-- <div class="container"> -->
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Upload Objek Wisata</b></div>
  <div class="panel-body">
  <?php echo $this->session->flashdata('pesan')?>
     <form action="<?php echo base_url()?>index.php/cpariwisata_wisata/insert" method="post" enctype="multipart/form-data">
       <table class="table table-striped">
         <tr>
          <td colspan="2"><span class="fa fa-info-circle"></span> Ket : Ubah ukuran foto yang akan di upload menjadi <b>500 x 281 px</b> | <font color="red"> Max 2MB [ 2048 KB ]</font></td>
         </tr>
         <tr>
          <td style="width:15%;">File Foto</td>
          <td>
            <div class="col-sm-6">
                <input type="file" name="filefoto" class="form-control">
            </div>
            </td>
         </tr>
         <tr>
          <td style="width:15%;">Nama</td>
          <td>
            <div class="col-sm-6">
                <input name="textnama" class="form-control"></input>
            </div>
            </td>
         </tr>         
         <tr>
          <td style="width:15%;">Deskripsi</td>
          <td>
            <div class="col-sm-12">
                <textarea class="summernote" name="textket" class="form-control"></textarea>
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
 <!-- </div> --> <!-- /container -->