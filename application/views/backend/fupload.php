<div class="panel panel-default">
  <div class="panel-heading"></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>index.php/cpariwisata_wisata/insert" method="post" enctype="multipart/form-data">
       <table class="table table-striped">

         <tr>
          <td style="width:15%;">Nama Objek Wisata</td>
          <td>
            <div class="col-sm-10">
                <input name="textnama" class="form-control"></input>
            </div>
            </td>
         </tr>

         <tr>
          <td style="width:15%;">Keterangan</td>
          <td>
            <div class="col-sm-10">
                <textarea name="textket" class="form-control"></textarea>
            </div>
            </td>
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
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>

       </table>
     </form>
        </div>
    </div>    <!-- /panel -->