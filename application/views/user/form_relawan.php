<!doctype html>
<html lang="en">
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
        <style>
            .header_area{
                background-color: #03274c !important;
            }
            .well{
                /*position: relative;*/
                width: 100%;
                border: 1px solid #aaa;
                border-radius: 5px;
                padding: 25px 10px 10px 10px;
            }
            .mb-4{
                margin-bottom: 20px;
            }
            .radio{
                font-size: 24px;
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
                        <a class="navbar-brand logo_h" href="user/index.php"><img src="<?php echo base_url();?>assets/user/img/logokbm.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="../user">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="events">Aktivitas Kami</a></li> 
                                <li class="nav-item active"><a class="nav-link" href="volunteer">Jadi Relawan</a></li> 
                                <li class="nav-item"><a class="nav-link" href="donate">Donasi</a></li>     
                                <li class="nav-item"><a class="nav-link" href="galangdana">Galang Dana</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Daftar</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
    

    <!--================ Start CTA Area =================-->
    <!--================ Start Story Area =================-->
    <section class="section_gap ">
         <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-4 col-md-6" >
                    <button type="button" id="step1" class="btn btn-primary btn-lg btn-block">Informasi Biodata</button>
                </div>

                <div class="col-lg-4 col-md-6" >
                    <button type="button" id="step2" class="btn btn-default btn-lg btn-block">Upload File</button>
                </div>

                <div class="col-lg-4 col-md-6" >
                    <button type="button" id="step3" class="btn btn-default btn-lg btn-block">Syarat & Ketentuan</button>
                </div>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="container">
                    <div class="well">
                        
                        <form class="form-horizontal">
                            <!-- Form 1 -->
                            <div id="form1">
                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Nama Lengkap:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"placeholder="Nama Lengkap">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Nama Panggilan:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" placeholder="Nama Panggilan">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Jenis Kelamin:</label>
                                <div class="container">
                                    <div class="radio">
                                      <label><input type="radio" name="jk" value="laki"> Laki-laki</label> 
                                      <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
                                    </div>
                                </div>
                              </div>

                              <div class="form-group"> 
                                <label class="control-label col-sm-12" for="text">TTL:</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" >Nomor KTP :</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" placeholder="32010xxx">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Nomor HP (WA):</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">text :</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Satu Kata yang Menggambarkan Diri Kamu :</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Motto Hidup:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Motivasi Kamu Mengikuti Kegiatan Ini:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Ceritakan Prestasi yang Pernah Kamu Dapatkan!</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Riwayat Kepanitiaan:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Riwayat Organisasi:</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Dari 1-5, seberapa layak kamu menjadi relawan KBM?</label>
                                <div class="container">
                                    <div class="radio">
                                      <label><input type="radio" name="layak" value="1"> 1</label> 
                                      <label><input type="radio" name="layak" value="2"> 2</label>
                                      <label><input type="radio" name="layak" value="3"> 3</label>
                                      <label><input type="radio" name="layak" value="4"> 4</label>
                                      <label><input type="radio" name="layak" value="5"> 5</label>
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Apa alasan kamu menjadi relawan KBM?</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Seberapa besar kamu ingin menjadi relawan KBM?</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-12" for="text">Apa yang kamu ketahui mengenai KBM? Jelaskan Pandangan Kamu!</label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" id="text" placeholder="Enter text">
                                </div>
                              </div>

                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="button" class="btn btn-default" id="selanjutnya1">Selanjutnya</button>
                                </div>
                              </div>
                            </div>

                            <!-- Form 2 -->
                            <div id="form2" style="display: none">
                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="text">Upload KTP:</label>
                                    <div class="col-sm-12">
                                      <input type="file" class="form-control" style="padding-top: 3px">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="text">Upload Photo Kamu:</label>
                                    <div class="col-sm-12">
                                      <input type="file" class="form-control" style="padding-top: 3px">
                                    </div>
                                </div>

                                <div class="form-group"> 
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="button" class="btn btn-warning" id="kembali2">Kembali</button>
                                        <button type="button" class="btn btn-success" id="selanjutnya2">Selanjutnya</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Form 3 -->
                            <div id="form3"  style="display: none">
                                <div class="form-group">
                                  <label for="comment">Persyaratan & Ketentuan:</label>
                                  <textarea class="form-control" rows="9" readonly>
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id eaque aut provident, temporibus nesciunt magni expedita, velit ad quas blanditiis facere iste voluptate. Delectus nemo animi eum voluptas, sequi quos!
                                  </textarea>
                                </div>

                                <div class="form-group">
                                    <div class="container">
                                        <div class="radio" style="font-size: 16px">
                                          <label><input type="radio" name="setuju"> Setuju</label>
                                        </div>
                                    </div>
                                  </div>

                                <div class="form-group"> 
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="button" class="btn btn-warning" id="kembali3">Kembali</button>
                                      <button type="button" class="btn btn-success">Daftar Sekarang </button>
                                    </div>
                                </div>
                            </div>
                              
                        </form>

                    </div>

                </div>
                    
            </div>
        </div>
    </section>
    <!--================ End Story Area =================-->

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
        <!-- contact js -->
        <script src="<?php echo base_url();?>assets/user/js/jquery.form.js"></script>
        <script src="<?php echo base_url();?>assets/user/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/user/js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url();?>assets/user/js/gmaps.min.js"></script>
        <script src="<?php echo base_url();?>assets/user/js/theme.js"></script>
        <script>
            $("#step1").click(function(){
                $("#form1").show();
                $("#form2").hide();
                $("#form3").hide();
                $("#step1").addClass("btn-primary");
                $("#step2").removeClass("btn-primary");
                $("#step3").removeClass("btn-primary");
            });
            $("#step2").click(function(){
                $("#form1").hide();
                $("#form2").show();
                $("#form3").hide();
                $("#step2").addClass("btn-primary");
                $("#step1").removeClass("btn-primary");
                $("#step3").removeClass("btn-primary");
            });
            $("#step3").click(function(){
                $("#form1").hide();
                $("#form2").hide();
                $("#form3").show();
                $("#step3").addClass("btn-primary");
                $("#step2").removeClass("btn-primary");
                $("#step1").removeClass("btn-primary");
            });

            $("#kembali2").click(function(){
                $("#form1").show();
                $("#form2").hide();
                $("#form3").hide();
                $("#step1").addClass("btn-primary");
                $("#step2").removeClass("btn-primary");
                $("#step3").removeClass("btn-primary");
            });
            $("#kembali3").click(function(){
                $("#form1").hide();
                $("#form2").show();
                $("#form3").hide();
                $("#step2").addClass("btn-primary");
                $("#step1").removeClass("btn-primary");
                $("#step3").removeClass("btn-primary");
            });
        </script>
</body>
</html>