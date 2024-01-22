
<?php 
$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>
<header class="main-header header-style-two">
    <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-top-left pull-left">
                    <ul>
                        <li><span>Office:</span> Fredericton, Canada</li>
                    </ul>
                </div>
                <div class="header-top-right clearfix pull-right">
                    <div class="search-box-style2">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="Search ......" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="header-social-link style2">
                        <ul>
                            <li>
                                 
                                 <button type="button" class="btn btn-primary" href="#">Log In</button> 
                                 
                            </li>
                            <li>
                                <a href="sign-up.php">
                                <button type="button" class="btn btn-outline-primary">Sign Up</button> 
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>  
            </div>
        </div>
    </div> 
    
    <!--Start header-->
    <div class="header-style2">
        <div class="container">
            <div class="outer-box clearfix">
                <!--Start Header Left-->
                <div class="header-left-style2 clearfix pull-left">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/resources/Latent_Logo.png" alt="Awesome Logo" title=""></a>
                    </div>
                </div>
                <!--End Header Left-->
                <!--Start Header Right-->
                <div class="header-right-style2 pull-right clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style2 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li <?= $pageName == 'visas.php' ? 'current':''; ?>><a href="visas.php">Visas</a></li>
                                    <li <?= $pageName == 'resources.php' ? 'current':''; ?>><a   href="resources.php">Resources</a></li>
                                    <!-- <li><a <?= $pageName == 'partners.php' ? 'current':''; ?>   href="partners.php">Partners</a></li> -->
                                    <li><a <?= $pageName == 'about-us.php' ? 'current':''; ?>   href="about-us.php">About Us</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div>
                    
                    <div class="any-questions-box">
                        <div class="icon">
                            <span class="flaticon-speech-bubble"></span>
                        </div>
                        <div class="title">
                            <h4>Have any Questions?</h4>
                            <a href="mailto:info@templatepath.com">support@latentimmigration.ca</a>
                        </div>    
                    </div>  
                      
                </div>
                <!--End Header Right-->
            </div>  
        </div>
    </div>
    <!--End header -->
    
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.php" class="img-responsive"><img src="assets/images/resources/latent_n_logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/latent_n_logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu --> 
    
</header>
