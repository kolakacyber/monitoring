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
          <?php $km=$rowdata->panjang*0.001; ?>
          <td><?php echo '<b>'.$rowdata->panjang.'</b> Meter / <b>'.$km. '</b> Kilometer' ;?></td>
        </tr>

        <tr>
          <td>Lokasi </td>
          <td><?php echo $rowdata->lokasi; ?></td>
        </tr>

        <tr>
          <td>Latitude, Longitude </td>
          <td><?php echo $rowdata->latitude; ?>, <?php echo $rowdata->longitude; ?></td>
        </tr>

      <!--   <tr>
          <td>Longitude </td>
          <td><?php echo $rowdata->longitude; ?></td>
        </tr> -->

        <tr>
          <td>Kecamatan </td>
          <td><?php echo $rowdata->kecamatan; ?></td>
        </tr>

        <tr>
          <td>Kelurahan </td>
          <td><?php echo $rowdata->kelurahan; ?></td>
        </tr>

        </table>
          <table class="table table-bordered table-striped">
            <tr>
              <td width="50%"><img width="100%" src="<?php echo base_url(); ?>assets/gambar/jalan/<?php echo $rowdata->nm_gbr;?>"></td>

              <td width="50%">
                <div id="map" style="width:100%; height:300px;"></div>

                <?php 
                $nama_lokasi = $rowdata->nama_gbr;
                $lat = $rowdata->latitude;
                $lng = $rowdata->longitude; 
                ?>

                  <script>
                    function initMap() {
                      var uluru = {lat: <?php echo $lat;?>, lng: <?php echo $lng;?>}
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: uluru
                      });

                      var contentString = '<div id="content">'+
                          '<div id="siteNotice">'+
                          '</div>'+
                          '<h3 id="firstHeading" class="firstHeading"><?php echo $nama_lokasi; ?></h3>'+
                          '<div id="bodyContent">'+
                          '<p>Jenis jalan <b><?php echo $rowdata->jenis; ?></b> Kondisi <b><?php echo $rowdata->kondisi; ?></b> Panjang Jalan <b><?php echo $km; ?></b> Kilometer<br>'+
                          'Kecamatan <b><?php echo $rowdata->kecamatan; ?></b> <br>Kelurahan <b><?php echo $rowdata->kelurahan; ?></b>.</p>'+
                          '</div>'+
                          '</div>';

                      var infowindow = new google.maps.InfoWindow({
                        content: contentString
                      });                      

                      var marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                        title: "<?php echo $nama_lokasi;?>"
                      });

                      marker.addListener('click', function() {
                        infowindow.open(map, marker);
                      });

                    }
                  </script>
                  <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGwTy-7655OtexlyAwtNgkHaocsxkyBo4&callback=initMap">
                  </script>

              </td>
            </tr>

          </table>
        <table class="table table-bordered table-striped">

        <tr>
          <td width="200px">Keterangan </td>
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
