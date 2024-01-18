<head>
	<title>Home One || Migrate || Immigration Service Responsive HTML 5 Template</title>
    <?php $page = 'about';include('./partials/header.php') ?>

</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div>

<!-- Main header -->
<?php include('./partials/nav.php') ?>

<?php include('./admin/function/function.php') ?> 

<?php 
    $count=1;
    $data=sqlfetch("SELECT * FROM `about` where id='1' order by id");
    foreach($data as $menu)
    { ?>


    <section class="about_top top">
        <h3 class="about_big big">The pursuit of <span class="blue">happiness</span></h3>
        <div class="top_p">


            <p class="smallp about_p"><?php echo $menu['des']; ?>
                <!-- We are immigrants and/or have experienced the visa application process. We believe the immigration experience could be better - simpler, faster, less expensive and with more confidence in the outcome. -->


            <!-- </p> -->
            
            


            <!-- <p class="p_nd smallp"> -->
               <!--  We believe that generative artificial intelligence (AI) and machine vision has the potential to drastically simplify the visa application process. We are reducing the data entry and document generation steps for both the applicant and our expert reviewers. With the proper use of technology, our goal is to make access to expert immigration advice more accessible since it is easy, low cost, supports multiple languages and is accessible to anyone anywhere with an Internet connection. -->
            <!-- </p>
            <p class="p_rd smallp"> -->
                <!-- Then everyone would be happier. -->
            <!-- </p>
            <p class="p_nd smallp"> -->
                <!-- We believe that generative artificial intelligence (AI) and machine vision has the potential to drastically simplify the visa application process. We are reducing the data entry and document generation steps for both the applicant and our expert reviewers. With the proper use of technology, our goal is to make access to expert immigration advice more accessible since it is easy, low cost, supports multiple languages and is accessible to anyone anywhere with an Internet connection. -->
            <!-- </p>
            <p class="p_rd smallp"> -->
                <!-- Then everyone would be happier. -->
            <!-- </p> -->
        </p>
            <?php } ?>
        </div>
    </section>


    <!-- <section class="about_mid">
        <h3 class="title">SuperVisas <span class="blue">team</span></h3>
        <div class="infos">
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        <div class="info">
            <div class="info_img">
                <img src="assets/images/resources/Alec.webp" alt="">
            </div>
            <div class="name">
                <p>Alec</p>
            </div>
            <div class="flags">
                <span class="flag_one"><img src="assets/images/resources/flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span><span class="flag_one"><img src="./flag.png" alt=""></span>
            </div>
        </div>
        </div>
    </section> -->
    <section class="thrid">
        <h3 class="third_title" style="margin-top: 10%; text-align: center !important;">
        Our mission is to provide the easiest, fastest, most accurate <br>and lowest cost immigration service on the planet.
        </h3>
        <div class="three">
            <div class="one_third">
                <h4 class="blue">600+</h4>
                <p>
                People we have helped with their application
                </p>
            </div>
            <div class="one_third">
                <h4 class="blue">98%</h4>
                <p>
                Current government of Canada visa approval rate                 </p>
            </div>
            <div class="one_third">
                <h4 class="blue">2</h4>
                <p>
                Destination countries currently supported
                </p>
            </div>
        </div>
        <div class="Down_side">
            <div class="pledge">
                <h3 class="pledge_title">
                Our Transparency Pledge
                </h3>
                <p>
                The immigration industry has a reputation for opaque processes and opportunistic pricing. We pledge to be different
                </p>
                <p>
                Once an account is created, the entire process from start to finish is visible, including documents required, questions to be answered, fees to be paid and all our tasks. You can start the process and proceed at your own pace without any cost. We only take payment once we have confirmed that you are eligible. If your visa is refused, we will help you resubmit your application without any additional fees from us
                </p>
            </div>
            <div class="peace">
            <h3 class="pledge_title">
                Peace of Mind through Technology and Expert Review
                </h3>
                <p>
                The immigration process is complicated, but our technology makes it straightforward. We guide you through a series of questions and tasks. Our software implements the government rules, generates the documents and completes the necessary forms. Our technology handles the data entry, accurately completing the essential fields and performing checks and balances
                </p>
                <p>
                Our experts do what people do best: 1) helping you figure out the best immigration pathway, and 2) reviewing the completed application leveraging their accumulated expertise to present your best case. You may do it yourself, but we will save you time and effort in the long run, along with the peace of mind that your application is less likely to be delayed or refused.
                </p>
            </div>
        </div>
    </section>
    <!-- <section class="press">
        <h3 class="blue press_title">Press</h3>
        <div class="news">
            <h4>Latent in the news</h4>
            <div class="main_news">
                <div class="each_news">
                    <a href="#" class="date">November 2023</a> <br>
                    <a href="" class="company"><span class="rip">Rippling connects Latent to simplify employee travel and immigration</span></a> <a href="#"><span class="rip_icon"><img src="assets/images/resources/rippling.webp" alt=""></span></a>
                </div>
<<<<<<< HEAD
                <div class="each_news">
                    <a href="#" class="date">November 2023</a> <br>
                    <a href="" class="company"><span class="rip">Rippling connects Latent to simplify employee travel and immigration</span></a> <a href="#"><span class="rip_icon"><img src="assets/images/resources/rippling.webp" alt=""></span></a>
                </div>
                <div class="each_news">
                    <a href="#" class="date">November 2023</a> <br>
                    <a href="" class="company"><span class="rip">Rippling connects Latent to simplify employee travel and immigration</span></a> <a href="#"><span class="rip_icon"><img src="assets/images/resources/rippling.webp" alt=""></span></a>
                </div>
                <div class="each_news">
                    <a href="#" class="date">November 2023</a> <br>
                    <a href="" class="company"><span class="rip">Rippling connects Latent to simplify employee travel and immigration</span></a> <a href="#"><span class="rip_icon"><img src="assets/images/resources/rippling.webp" alt=""></span></a>
                </div>
                <div class="each_news">
                    <a href="#" class="date">November 2023</a> <br>
                    <a href="" class="company"><span class="rip">Rippling connects Latent to simplify employee travel and immigration</span></a> <a href="#"><span class="rip_icon"><img src="assets/images/resources/rippling.webp" alt=""></span></a>
                </div>
=======
>>>>>>> 0de138d7349eaeeeca68ccdc572de82855c05bd4
            </div>
        </div>
    </section> -->
    <!--Start footer area-->  
    <?php include('./partials/footer.php') ?>
    <!--End footer area-->


    <!--   JAVASCRIPT   -->
    <script src="assets/js/star.js"></script>

        <!-- <script src="assets/js/script.js"></script> -->
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
    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>

</body>
</html>