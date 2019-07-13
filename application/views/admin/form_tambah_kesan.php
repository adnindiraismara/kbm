<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/logokbm.png"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin | Kesan Pesan Relawan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/admin/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/admin/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css"/>
    <link href="<?php echo base_url();?>assets/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets/admin/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Admin KBM
                </a>
            </div>

                       <ul class="nav">
                <li>
                    <a href="../admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="datauser">
                        <i class="pe-7s-user"></i>
                        <p>Kelola User</p>
                    </a>
                </li>
                 <li>
                    <a href="dataaktivitas">
                        <i class="pe-7s-ribbon"></i>
                        <p>Kelola Aktivitas</p>
                    </a>
                </li>
                <li>
                    <a href="dataprogram">
                        <i class="pe-7s-graph2"></i>
                        <p>Kelola Program</p>
                    </a>
                </li>
                <li>
                    <a href="datarelawan">
                        <i class="pe-7s-note2"></i>
                        <p>Kelola Relawan</p>
                    </a>
                </li>
                <li>
                    <a href="datagalangdana">
                        <i class="pe-7s-news-paper"></i>
                        <p>Kelola Galang Dana</p>
                    </a>
                </li>
                <li>
                    <a href="datacampaign">
                        <i class="pe-7s-cloud-upload"></i>
                        <p>Kelola Campaign</p>
                    </a>
                </li>
                <li>
                    <a href="datadonasi">
                        <i class="pe-7s-science"></i>
                        <p>Kelola Donasi</p>
                    </a>
                </li>
                <li class="aktif">
                    <a href="datakesan">
                        <i class="pe-7s-note"></i>
                        <p>Kelola Kesan Pesan</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Topbar -->
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kelola Kesan Pesan Relawan</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" onclick="showNotification('top','center')">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Kelola Kesan Pesan Relawan</h4>
                            </div>
                            <div class="content">
                                 <?php echo form_open("Admin/tambah_kesan", array('enctype'=>'multipart/form-data')); ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Relawan</label>
                                                <input type="text" name="input_nama_relawan" value="<?php echo set_value('input_nama_relawan');?>" placeholder="Masukkan data" method="post" class="form-control">
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kesan & Pesan Relawan</label>
                                                <input type="text" name="input_kesan_pesan" value="<?php echo set_value('input_kesan_pesan');?>" placeholder="Masukkan data" method="post" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"><label for="exampleFormControlFile1">Foto Relawan</label> 
                                                    <input type="file" name="input_file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                        </div>
                                    </div>

                                    <<input type="submit" class="btn btn-primary btn-info btn-fill pull-right" name="submit" value="Simpan"></a>
                                    <a href="<?php echo base_url('index.php/Admin/datakesan')?>"><button type="button" class="btn btn-danger btn-info btn-fill pull-right" data-dismiss="modal">Tutup</button></a>
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
        
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Kabupaten Bogor Mengajar</a>, made with love for a better world
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

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

    	});

        function showNotification(from, align){
            color = Math.floor((Math.random() * 4) + 1);

            $.notify({
                message: "Anda yakin ingin keluar di sesi ini ?  <br>  <br>  <button class='btn btn-success'>Batal</button> <button class='btn btn-danger'>Keluar</button>"

            },{
                type: type[color],
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }
	</script>

</html>
