
 <!--================ Start Header Menu Area =================-->
<?php $this->load->view('front/menu') ?>
    <!--================ End Header Menu Area =================-->
    
    
    <!--================ Home Banner Area =================-->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>DONASI YUK!</h2>
                    <p>Halo orang baik! Mari satukan kebaikan untuk berbagi manfaat!</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start CTA Area =================-->
    <!--================ Start Story Area =================-->
    <section class="section_gap story_area">
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
            </div>
            <div class="row">
                <!-- single-story -->
                <div class="col-lg-5 col-md-5">
                    <div class="single-story">
                        <div class="story-thumb">
                            <figure>
                            <img class="img-fluid" src="<?php echo base_url('assets/user/img/donasi/d1.png')?>">
                        </figure>
                        </div>

                        <div class="story-details">
                            <h5>
                                
                                <a href="<?php echo base_url('front/program_donasi');?>">
                                  <center>   JENIS-JENIS DONASI </center>
                                </a>
                                
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- single-story -->
                <div class="col-lg-5 col-md-5">
                    <div class="single-story">
                        <div class="story-thumb">
                            <figure>
                            <img class="img-fluid" src="<?php echo base_url('assets/user/img/donasi/panduan.jpg')?>">
                            </figure>
                        </div>
                        <div class="story-details">
                            <h5>
                                <a href="<?php echo base_url('front/panduan_donasi');?>">
                                    <center> PANDUAN DONASI </center>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Story Area =================-->
        
        <!--================ Start footer Area  =================-->    
  <?php $this->load->view('front/footer') ?>
    <!--================ End footer Area  =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>