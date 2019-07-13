<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/logokbm.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/admin/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/admin/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
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
                <li class="active">
                    <a href="admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="admin/datauser">
                        <i class="pe-7s-user"></i>
                        <p>Kelola User</p>
                    </a>
                </li>
                 <li>
                    <a href="admin/dataaktivitas">
                        <i class="pe-7s-ribbon"></i>
                        <p>Kelola Aktivitas</p>
                    </a>
                </li>
                <li>
                    <a href="admin/dataprogram">
                        <i class="pe-7s-graph2"></i>
                        <p>Kelola Program</p>
                    </a>
                </li>
                <li>
                    <a href="admin/datarelawan">
                        <i class="pe-7s-note2"></i>
                        <p>Kelola Relawan</p>
                    </a>
                </li>
                <li>
                    <a href="admin/datagalangdana">
                        <i class="pe-7s-news-paper"></i>
                        <p>Kelola Galang Dana</p>
                    </a>
                </li>
                <li>
                    <a href="admin/datacampaign">
                        <i class="pe-7s-cloud-upload"></i>
                        <p>Kelola Campaign</p>
                    </a>
                </li>
                <li>
                    <a href="admin/datadonasi">
                        <i class="pe-7s-science"></i>
                        <p>Kelola Donasi</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-config"></i>
                        <p>LOGOUT</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <!-- Topbar -->
        
           
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url();?>assets/user/img/logokbm.png" type="image/png">
        <title>Kabupaten Bogor Mengajar</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/responsive.css">
    </head>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="<?php echo base_url();?>assets/user/img/logokbm.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="events.html">Aktivitas Kami</a></li> 
                                <li class="nav-item"><a class="nav-link" href="volunteer.html">Jadi Relawan</a></li> 
                                <li class="nav-item"><a class="nav-link" href="donate.html">Donasi</a></li>     
                                <li class="nav-item"><a class="nav-link" href="login.html">Masuk</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.html">Daftar</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
    
    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <p class="upper_text"> <h2> Kabupaten Bogor Mengajar </h2></p>
                    <h1>Siap Mecerdaskan Bangsa</h1>
                    <p>
                        Kabupaten Bogor Mengajar merupakan komunitas non-profit dibidang pendidikan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    
    <!--================ Start Causes Area =================-->
    <section class="causes_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Jadilah Penyambung Kebaikan</h4>
                        <img src="<?php echo base_url();?>assets/user/img/causes/c1.png" alt="">
                        <p>
                            Jadilah agen perubahan untuk kehidupan sesama yang lebih baik bersama KBM.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Mudah</h4>
                        <img src="<?php echo base_url();?>assets/user/img/causes/c2.png" alt="">
                        <p>
                        Melakukan galang dana dan berdonasi dimana dan kapan saja secara online.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Transparan dan Terpercaya</h4>
                        <img src="<?php echo base_url();?>assets/user/img/causes/c3.png" alt="">
                        <p>
                            Tampilkan informasi lengkap tentang campaign Anda di sebuah halaman yang dapat diakses oleh siapa saja secara online. Di halaman tersebut orang dapat melihat jumlah donasi yang terkumpul dan list donatur untuk memastikan donasi mereka sudah diterima.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Causes Area =================-->

    <!--================ Start Features Cause section =================-->
    <section class="features_causes">
        <div class="container">
            <div class="main_title">
                <h2>Program Donasi Terkini</h2>
                <p>Creepeth called face upon face yielding midst is after moveth </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="<?php echo base_url();?>assets/user/img/features/fc1.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Education for every child</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="<?php echo base_url();?>assets/user/img/features/fc2.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Feeding the hungry people</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="<?php echo base_url();?>assets/user/img/features/fc3.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Providing cloth people</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Raised: $1533</p>
                                    <p><span>Goal: $2500</span></p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#" class="primary_btn">donate</a>
                                    <p><span class="lnr lnr-heart"></span> 90 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Cause section =================-->
    <!--================Team Area =================-->
    <section class="team_area section_gap">
        <div class="container">
            <div class="main_title">
                <h2>Apa Kata Relawan KBM?</h2>
                <p>Creepeth called face upon face yielding midst is after moveth </p>
            </div>
            <div class="row team_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/user/img/voluteer/v1.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Alea Mirslava</h4>
                            <p>Party Manager</p>
                            <p class="mt-20">
                                So seed seed green that winged cattle in kath  moved us land years living.
                            </p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/user/img/voluteer/v2.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Adam Virland</h4>
                            <p>Party Manager</p>
                            <p class="mt-20">
                                So seed seed green that winged cattle in kath  moved us land years living.
                            </p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/user/img/voluteer/v3.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Adam Virland</h4>
                            <p>Party Manager</p>
                            <p class="mt-20">
                                So seed seed green that winged cattle in kath  moved us land years living.
                            </p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/user/img/voluteer/v4.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Adam Virland</h4>
                            <p>Party Manager</p>
                            <p class="mt-20">
                                So seed seed green that winged cattle in kath  moved us land years living.
                            </p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Team Area =================-->

    <!--================ Start CTA Area =================-->
    <div class="cta-area section_gap overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1>Jadilah Relawan!</h1>
                    <p>
                        So seed seed green that winged cattle in. Gathering thing made fly you're 
                        divided deep leave on the medicene moved us land years living.
                    </p>
                    <a href="#" class="primary_btn yellow_btn rounded">Bergabung Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_area section_gap_top">
        <div class="container">
            <div class="main_title">
                <h2>AKTIVITAS KAMI</h2>
                <p>Creepeth called face upon face yielding midst is after moveth </p>
            </div>
        
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="<?php echo base_url();?>assets/user/img/event/e1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Working syrian childreen</a>
                                    </h3>
                                    <p>
                                        Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
                                    </p>
                                    <a href="events.html" class="primary_btn">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="<?php echo base_url();?>assets/user/img/event/e2.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Help and homelesness</a>
                                    </h3>
                                    <p>
                                        Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
                                    </p>
                                    <a href="events.html" class="primary_btn">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="<?php echo base_url();?>assets/user/img/event/e3.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Save the clean water</a>
                                    </h3>
                                    <p>
                                        Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
                                    </p>
                                    <a href="events.html" class="primary_btn">Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="<?php echo base_url();?>assets/user/img/event/e4.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Foods for poor childreen</a>
                                    </h3>
                                    <p>
                                        Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
                                    </p>
                                    <a href="events.html" class="primary_btn">"Baca Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
        
    <!--================ Start footer Area  =================-->    
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Kabupaten Bogor Mengajar</h4>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no 
                                divided deep moved us lan Gathering thing us land years living.
                            </p>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Tautan</h4>
                            <ul class="list">
                                <li><a href="index.html">Beranda</a></li>
                                <li><a href="events.html">Aktivitas Kami</a></li>
                                <li><a href="volunteer.html">Jadi Relawan</a></li>
                                <li><a href="donate.html">Donasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
    
                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +62 857 1017 1611 (Galih Syifa)
                                </p>
    
                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    kabogormengajar@gmail.com <br>
                                    www.kabupatenbogormengajar.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Adnindira</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->
    
    
 
        <footer class="footer">
            <div class="container-fluid">
        
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Kabupaten Bogor Mengajar</a>, made with love for a better world
                </p>
            </div>
        </footer>

    </div>
</div>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/user/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/stellar.js"></script>
    <script src="<?php echo base_url();?>assets/user/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/mail-script.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/countdown.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url();?>assets/user/js/gmaps.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/theme.js"></script>




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
