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
                                <li class="nav-item"><a class="nav-link" href="volunteer">Jadi Relawan</a></li> 
                                <li class="nav-item active"><a class="nav-link" href="donate">Donasi</a></li>     
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
            <!-- Form -->
            <div class="row">
                <div class="container">
                    <div class="well">
                        
                        <form >
                            <center>
                                <div>
                                    <h2>Transfer Ke Rekening</h2>
                                    <table class="table" class="mx-auto" style="width:500px">
                                        
                                        <tr>
                                            <th>BCA</th>
                                            <td>5465039881</td>
                                            <td>a.n Adnindira Ismara Putri</td>
                                        </tr>
                                        <tr>
                                            <th>DKI</th>
                                            <td>50223588347</td>
                                            <td>a.n Adnindira Ismara Putri</td>
                                        </tr>
                                        <tr>
                                            <th>Mandiri</th>
                                            <td>0700007994762</td>
                                            <td>a.n Adnindira Ismara Putri</td>
                                        </tr>
                                        
                                    </table>

                                    <h3>Pilih Bank</h3>
                                    <div class="row justify-content-center">
                                    <select  name="bank" id="bank">
                                        <div class="row justify-content-center mb-4">
                                        <option value="">Pilih Bank</option>
                                        <option value="BCA">BCA</option>
                                        <option value="DKI">DKI</option>
                                        <option value="Mandiri">Mandiri</option></div>
                                    </select>
                                        </div>
                                    
                                    

                                    <div>
                                    <div class="form-group"> 
                                        <label class="control-label col-sm-12" for="text"><h3> Tanggal Transfer </h3></label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control">
                                </div>
                              </div>
                              </div>

                                    <div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-12" for="text"><h3>Upload Bukti Donasi Kamu!</h3></label>
                                    <div class="col-sm-3">
                                      <input type="file" class="form-control" style="padding-top: 3px">
                                    </div>
                                     </div>
                                    </div>

                                    <div>
                                    <div class="form-group"> 
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="button" class="btn btn-success" id="selanjutnya2">Donasi Selesai</button>
                                        </div>
                                    </div>
                                </div>
                            </center>
                                
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