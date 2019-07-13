<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/logokbm.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin | Galang Dana</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/admin/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/admin/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<div clas="ibox-content" >
            <div class="modal-dialog">
                <div class="modal-content animated bounceInDown">
                                        <div class="modal-header">
                                            <a href="<?php echo base_url('index.php/Admin/datadana')?>"><button type="button" class="close" data-dismiss="modal"aria-label="Close"> <span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button></a>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Data Galang Dana</h4>
                                            <small class="font-bold">Kabupaten Bogor Mengajar</small>
                                        </div>
                                        
                                <?php echo form_open("Admin/tambah_dana", array('enctype'=>'multipart/form-data')); ?>
                                        <div class="modal-body">
                                            <?php echo "<h2>".$this->session->flashdata("pesan")."</h2>" ?>
                                            <p><strong>Tambah Data Galang Dana</strong></p>
                                                <div class="form-group" ><label>ID User</label> 
                                                    <input type="text" name="input_id_user" value="<?php echo set_value('input_id_user');?>" placeholder="" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Judul Galdan</label> 
                                                    <input type="text" name="input_judul_galdan" value="<?php echo set_value('input_judul_galdan');?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                              <div class="form-group">
                                              <label for="sel1">Pilih Kategori</label>
                                              <select type="text" name="input_kategori_galdan" value="<?php echo set_value('input_kategori_galdan');?>"placeholder="Masukkan data" class="form-control"> 
                                                <option>Kategori</option>
                                                <option value="Bencana Nasional">Kesehatan</option>
                                                <option value="Donasi Program">Pendidikan</option>
                                                <option value="Donasi Program">Bencana Alam</option>
                                                <option value="Donasi Program">Bantuan Kemanusiaan</option>
                                            </select>
                                            </div> 
                                                <div class="form-group"><label>Target Donasi</label> 
                                                    <input type="text" name="input_target_donasi" value="<?php echo set_value('input_target_donasi');?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Akhir Donasi</label> 
                                                    <input type="date" name="input_akhir_donasi" value="<?php echo set_value('input_akhir_donasi');?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Deskripsi</label> 
                                                    <input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi');?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label for="exampleFormControlFile1">Foto Utama (.jpeg atau .png)</label> 
                                                    <input type="file" name="input_file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <!-- <div class="form-group"><label for="exampleFormControlFile1">Surat Keterangan (.pdf)</label> 
                                                    <input type="file" name="" class="form-control-file" id="exampleFormControlFile1">
                                                </div> -->
                                                
                                                <div class="form-group"><label for="proposal">Proposal (.pdf)</label> 
                                                    <input type="file" name="proposal" class="form-control-file" id="proposal">
                                                </div>
                                                 <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" name="input_status" value="<?php echo set_value('input_status');?>" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary btn-info btn-fill pull-right" name="submit" value="Simpan"></a>
                                    <a href="<?php echo base_url('index.php/Admin/datagalangdana')?>"><button type="button" class="btn btn-danger btn-info btn-fill pull-right" data-dismiss="modal">Tutup</button></a>
                                        </div>
                                        </div>
               
                                    </form>
                                        
                                </div>
                            </div>
                        </div>

 
    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url();?>assets/admin/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url();?>assets/admin/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url();?>assets/admin/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

        
            },{
                type: 'info',
                timer: 4000
            });


        function showNotification(from, align){
            color = Math.floor((Math.random() * 4) + 1);
({
                type: type[color],
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });

            $('#myModal').on('shown.bs.modal', function () {
             $('#myInput').trigger('focus')
            });


        }
    </script>

</html>
