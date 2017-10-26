<!-- <div class="container"> -->
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Penginputan Kondisi Jalan</b></div>
  <div class="panel-body">
     
    <?php echo $this->session->flashdata('pesan')?>
    <p>
        <a href="<?php echo base_url()?>index.php/cjalan/add" class="btn btn-success">Tambah Data Jalan</a>
    </p>


    <?php if(empty($query)){ ?> <!-- jika data kosong kita tampilkan pesan -->
    <b>Data tidak ada</b>
    <?php }else{
    foreach($query as $rowdata){ ?> <!-- menampilkan data dari query dengan looping -->
      <table class="table table-bordered table-striped">
        <tr>
          <th colspan="2">Nama Jalan : <?php echo $rowdata->nama_gbr; ?></th>
        </tr>

        <tr>
          <td width="200px">Jenis Jalan </td>
          <td><?php echo $rowdata->jenis; ?></td>
        </tr>

        <tr>
          <td>Kondisi Jalan </td>
          <td><?php echo $rowdata->kondisi; ?></td>
        </tr>

        <tr>
          <td>Panjang Jalan </td>
          <td><?php echo $rowdata->panjang; ?></td>
        </tr>

        <tr>
          <td>Lokasi </td>
          <td><?php echo $rowdata->lokasi; ?></td>
        </tr>

        <tr>
          <td>Kelurahan </td>
          <td><?php echo $rowdata->kelurahan; ?></td>
        </tr>

        <tr>
          <td>Kecamatan </td>
          <td><?php echo $rowdata->kecamatan; ?></td>
        </tr>

        <tr>
          <!-- <td>Gambar </td> -->
          <td colspan="2"><img width="100%" src="<?php echo base_url(); ?>assets/gambar/jalan/<?php echo $rowdata->nm_gbr;?>"></td>
        </tr>

        <tr>
          <td>Keterangan </td>
          <td><?php echo $rowdata->ket_gbr; ?></td>
        </tr>

        <tr>
          <td>Aksi </td>
          <td>
            <a href="<?php echo base_url()?>index.php/cjalan/edit/?idgbr=<?php echo $rowdata->id?>" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <!-- <a href="<?php echo base_url()?>index.php/cjalan/hapus/?idgbr=<?php echo $rowdata->id?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
          </td> 
        </tr>
        
      </table>
    <?php }}?>
     </form>
    </div>
   </div>    <!-- /panel -->
 <!-- </div> --> <!-- /container -->