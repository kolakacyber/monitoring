<!-- <div class="container"> -->
      <!-- Main component for a primary marketing message or call to action -->
<!--       <?php 
      date_default_timezone_set('Asia/Singapore');
      $tgl = "'".date("Y-m-d")."'";
      echo $tgl;
      ?> -->
<div class="panel panel-default">
  <div class="panel-heading"><b> Objek Wisata</b></div>
  <div class="panel-body">
     
    <?php echo $this->session->flashdata('pesan')?>
    <p>
        <a href="<?php echo base_url()?>index.php/cpariwisata_wisata/add" class="btn btn-success">Tambah</a>
    </p>
  <table class="table table-bordered table-striped">
    <tr>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php if(empty($query)){ ?> <!-- jika data kosong kita tampilkan pesan -->
    <tr>
        <td colspan="4">Data tidak ada</td>
    </tr>
    <?php }else{
    foreach($query as $rowdata){ ?> <!-- menampilkan data dari query dengan looping -->
    <tr>
      <td><?php echo $rowdata->nama_gbr; ?></td>
      <td><?php echo $rowdata->ket_gbr; ?></td>
      <td><img width="100%" src="<?php echo base_url(); ?>assets/gambar/pariwisata/<?php echo $rowdata->nm_gbr;?>"></td>
      <td>
        <a href="<?php echo base_url()?>index.php/cpariwisata_wisata/edit/?idgbr=<?php echo $rowdata->id?>" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
        <!-- <a href="<?php echo base_url()?>index.php/cpariwisata_wisata/hapus/?idgbr=<?php echo $rowdata->id?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
      </td>      
    </tr>
    <?php }}?>
  </table>
 
</div>
</div>
<!-- </div> -->