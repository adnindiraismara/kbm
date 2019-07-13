

 <!--================ Start Header Menu Area =================-->
<?php $this->load->view('front/menu') ?>
    <!--================ End Header Menu Area =================-->
    
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>DONASI YUK!</h2>
                    <p>Platea nullam nostra laoreet potenti hendrerit laoreet enim nisl</p>
                </div>
            </div>
        </div>
    </section>
	<!--================ Start CTA Area =================-->


    <section class="event_area section_gap_top">
        <div class="container">
            <div class="row">
            <?php foreach ($campaign->result() as $key): ?>
                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img src="<?php echo base_url('assets/admin/img/upload/'.$key->foto_campaign) ; ?>" class="img-fluid">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html"><?php echo $key->judul_campaign; ?></a>
                                    </h3>
                                    <p>
                                        <?php echo substr($key->deskripsi, 0,100) ; ?>
                                    </p>
                                    <a href="#" class="primary_btn">Donasi Sekarang!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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