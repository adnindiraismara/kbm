<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/logokbm.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin | Aktivitas</title>

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
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Data User</h4>
                                            <small class="font-bold">Kabupaten Bogor Mengajar</small>
                                        </div>

                                    <form class="m-t" role="form" action="<?php echo base_url('index.php/Crud/do_edit_user')?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <?php echo "<h2>".$this->session->flashdata("pesan")."</h2>" ?>
                                            <p><strong>Edit Data User</strong></p>
                                                <div class="form-group"><label>Username</label> 
                                                    <input type="text" name="username" value="<?php echo $username?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Password</label> 
                                                        <input type="password" name="password" placeholder="password" method="post" class="form-control"><?= form_error('password');?>
                                                    </div>
                                                <div class="form-group"><label>Nama</label> 
                                                    <input type="text" name="nama" value="<?php echo $nama?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Email</label> 
                                                    <input type="text" name="email" value="<?php echo $email?>" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('index.php/Admin/datauser')?>"><button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button></a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
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
