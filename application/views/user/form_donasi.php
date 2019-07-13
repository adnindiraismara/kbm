
<!--================ Start Header Menu Area =================-->
<?php $this->load->view('front/menu') ?>
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

    <!--================ End Header Menu Area =================-->
    

    <!--================ Start CTA Area =================-->
    <!--================ Start Story Area =================-->
    <section class="section_gap ">
         <div class="container">
            <!-- Form -->
            <div class="row">
                <div class="container">
                    <div class="well">
                        
                        <form class="form-horizontal">

                            <!-- Form 2 -->
                            <div>
                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="text">Nama:</label>
                                    <div class="col-sm-12">
                                      <input type="text" class="form-control" placeholder="Nama Anda">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="text">Nominal Donasi:</label>
                                    <div class="col-sm-12">
                                      <input type="number" class="form-control" placeholder="Nonimal Donasi">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="container">
                                      <label for="comment">Komentar:</label>
                                      <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="form-group"> 
                                    <div class="col-md-offset-2 col-md-10">
                                        <a  class="btn btn-success" id="selanjutnya2" href="form_donasi_bank"> Donasi Sekarang</a>
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