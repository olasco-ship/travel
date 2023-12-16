<head>
	<title>Contact || Migrate || Immigration Service Responsive HTML 5 Template</title>
    <?php include('./partials/header.php') ?>
</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div>

<!-- Main header -->
<?php include('./partials/nav.php') ?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center clearfix">
                    <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Contact Us</h2>
                    </div>
                    <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Contact Form Section-->
<section class="contact-form-area">
    <div class="container">
        <div class="title text-center">
            <h2>Get in Touch</h2>
            <p>Feel free to get in touch with me. We alwasy open to discussing now projects,<br> createive ideas or opportunities to be part of your visions</p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">  
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box"> 
                                    <input type="text" name="form_name" value="" placeholder="Name" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="text" name="form_phone" value="" placeholder="Phone">
                                </div>     
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box"> 
                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="text" name="form_subject" value="" placeholder="Subject">
                                </div>      
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12"> 
                                <div class="input-box">    
                                    <textarea name="form_message" placeholder="Message" required=""></textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="button-box text-center">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">Send Massage</span>
                                    </button>    
                                </div>      
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Contact Form Section-->

<!--Start Get In Touch Area-->
<section class="getin-touch-area" style="background-image: url(assets/images/pattern/getin-touch-bg.jpg)">
    <div class="container">
        <div class="row">
           
            <div class="col-xl-7">
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-icon-path="assets/images/resources/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5">
                <div class="getin-touch-content">
                    <div class="sec-title">
                        <h3>Contact</h3>
                        <h2><span>Get in Touch Now</span></h2>
                    </div>
                    <div class="inner-content">
                        <ul class="contact-info">
                            <li class="single">
                                <div class="icon">
                                    <span class="flaticon-worldwide thm-clr"></span>
                                </div>
                                <div class="text">
                                    <h4>25BT, San Rojartar,</h4>
                                    <p>New York, United States</p>
                                </div>
                            </li>
                            <li class="single">
                                <div class="icon">
                                    <span class="flaticon-mail-1 thm-clr"></span>
                                </div>
                                <div class="text">
                                    <h4>Send Your Mail At</h4>
                                    <p><a href="mailto:info@templatepath.com">example@Support.Com</a></p>
                                </div>
                            </li>
                            <li class="single">
                                <div class="icon">
                                    <span class="flaticon-countdown thm-clr"></span>
                                </div>
                                <div class="text">
                                    <h4>Working Hours</h4>
                                    <p>Mon-Sat:9.30am To 7.00pm</p>
                                </div>
                            </li> 
                        </ul>
                        <div class="social-media-box">
                            <h3>Social Media</h3>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
                                </li> 
                            </ul>
                        </div>
                        
                    </div>
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Get In Touch Area-->


<!--Start footer area-->  
<?php include('./partials/footer.php') ?>
<!--End footer area-->


</div> 



<script src="assets/js/jquery.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.bootstrap-touchspin.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.enllax.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/map-script.js"></script>
<script src="assets/js/nouislider.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/timePicker.js"></script>   
<script src="assets/js/validation.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/tilt.jquery.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jQuery.style.switcher.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<!-- thm custom script -->
<script src="assets/js/custom.js"></script>


</body>
</html>
