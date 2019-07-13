<!doctype html>

<html lang="en">
<base href="<?php echo base_url('assets/user') ?>/">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logokbm.png" type="image/png">
        <title>Kabupaten Bogor Mengajar</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
         <style>
            .header_area{
                background-color: #03274c !important;
            }
        </style>


    </head>
<body>      
<!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="img/logokbm.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li 
                                    class="nav-item active" ><a style="color: #ffffff !important" class="nav-link" href="<?php echo base_url() ?>">Beranda</a>
                                </li>
                                <li 
                                    class="nav-item"><a style="color: #ffffff !important" class="nav-link" href="<?php echo base_url('front/aktivitas') ?>">Aktivitas Kami</a>
                                </li> 
                                <li 
                                    class="nav-item"><a style="color: #ffffff !important" class="nav-link" href="<?php echo base_url('front/relawan') ?>">Jadi Relawan</a>
                                </li> 
                                <li 
                                    class="nav-item"><a style="color: #ffffff !important" class="nav-link" href="<?php echo base_url('front/donasi') ?>">Donasi</a>
                                </li>     
                                <li 
                                    class="nav-item"><a style="color: #ffffff !important" class="nav-link" href="#" data-toggle="modal" data-target="#myModal1">Masuk</a>
                                </li>
                                <li 
                                    class="nav-item"><a style="color: #ffffff !important" class="nav-link" href="#" data-toggle="modal" data-target="#myModal2">Daftar</a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>

<!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="modal-title"> <center> MASUK </center></h3>

                        <p>
                            Masuk sekarang, Mari menjadi bagian dari aksi kebaikan! <br> 
                            Tidak Punya akun?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Daftar sekarang!</a>
                        </p>
                                        
                                <form class="m-t" role="form" action="<?php echo base_url('Masuk/validate_user')?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <?php echo "<h2>".$this->session->flashdata("pesan")."</h2>" ?>
                                                <div class="form-group"><label>Username</label> 
                                                    <input type="text" name="username" value="" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Password</label> 
                                                        <input type="password" name="password" placeholder="password" method="post" class="form-control"><?= form_error('password');?>
                                                    </div>
                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('Front/index')?>"><button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button></a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </div>
               
                                    </form>
                                        
                                </div>
                            </div>
                        </div>
    <!-- //Modal1 -->
    
    <!-- Modal2 -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="modal-title"> <center> DAFTAR </center></h3>

                        <p>
                            Hai Orang Baik! Ayo Siapkan Akun Anda Untuk Aksi Nyata Kebaikan!
                        </p>
                                <form class="m-t" role="form" action="<?php echo base_url('Daftar/aksi_registrasi')?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <?php echo "<h2>".$this->session->flashdata("pesan")."</h2>" ?>
                                                <div class="form-group"><label>Nama</label> 
                                                    <input type="text" name="nama" value="" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Username</label> 
                                                    <input type="text" name="username" value="" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Email</label> 
                                                    <input type="text" name="email" value="" placeholder="Masukkan data" method="post" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Password</label> 
                                                     <input type="password" name="password" placeholder="password" method="post" class="form-control"><?= form_error('password');?>
                                                </div>
                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('Front/index')?>"><button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button></a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </div>
               
                                    </form>
                                        
                                </div>
                            </div>
                        </div>
    <!-- //Modal2 -->
    </header>