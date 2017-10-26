<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Lokasi Layanan Kesehatan</h3>
                                           
                                            
                                        </div>
                                        <div class="panel-body">


                                            <table id="table" class="table datatable" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th><i class="fa fa-ellipsis-v"></i> No</th>
                                                        <!--<th>ID</th>-->
                                                        <th><i class="fa fa-bookmark"></i> Nama</th>
                                                        <th><i class="fa fa-road"></i> Alamat</th>
                                                        <th><i class="fa fa-building-o"></i> Jenis</th>
                                                        <th><i class="fa fa-phone-square"></i> Telp</th>
                                                        <th><i class="fa fa-map-marker"></i> Lat / Lng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>

                                            <?php $user = $this->ion_auth->user()->row(); ?> 

                                            <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
                                            <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
                                            <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
                                            <script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
                                            <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js')?>"></script>



                                        <script type="text/javascript">

                                        var save_method; //for save method string
                                        var table;

                                        $(document).ready(function() {

                                            //datatables
                                            table = $('#table').DataTable({ 

                                                "processing": true, //Feature control the processing indicator.
                                                "serverSide": true, //Feature control DataTables' server-side processing mode.
                                                "order": [], //Initial no order.
                                                //"scrollX": true, //Srollx By isal

                                                // Load data for the table's content from an Ajax source
                                                "ajax": {
                                                    "url": "<?php echo site_url('clayanan_kesehatan/json')?>",
                                                    "type": "POST"
                                                },

                                                //Set column definition initialisation properties.
                                                "columnDefs": [
                                                { 
                                                    "targets": [ -1 ], //last column
                                                    "orderable": false, //set not orderable
                                                },

                                                ],

                                            });

                                            //datepicker
                                            $('.datepicker').datepicker({
                                                autoclose: true,
                                                format: "yyyy-mm-dd",
                                                todayHighlight: true,
                                                orientation: "top auto",
                                                todayBtn: true,
                                                todayHighlight: true,  
                                            });

                                            //set input/textarea/select event when change value, remove class error and remove text help block 
                                            $("input").change(function(){
                                                $(this).parent().parent().removeClass('has-error');
                                                $(this).next().empty();
                                            });
                                            $("textarea").change(function(){
                                                $(this).parent().parent().removeClass('has-error');
                                                $(this).next().empty();
                                            });
                                            $("select").change(function(){
                                                $(this).parent().parent().removeClass('has-error');
                                                $(this).next().empty();
                                            });

                                        });



                                        </script>                                   
                                            
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->
                                </div>
                            </div>
                        </div>
                    </div>  

         
    </body>
    </html>             
         