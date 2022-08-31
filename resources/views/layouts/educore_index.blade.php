<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Educore</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--======educore system all link ======-->
     <!--====== Favicon Icon ======-->
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website') }}/images/favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website') }}/images/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website') }}/images/favicon/favicon-16x16.png">
     <link rel="manifest" href="{{ asset('website') }}/images/favicon/site.webmanifest">

     <!-- CSS
    ============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/default.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/animate.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/plugins/magnific-popup.css">

    <!--====== Main Style CSS ======-->
    {{-- <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">  --}}
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.min.css">
    
</head>

<body>


    <!-- <div class="login-popup">
        <div class="box">
             <div class="img-area">
                 <div class="img">
                 </div>
                 <h1>Your Logo</h1>
             </div>
             <div class="form">
                 <div class="close">&times;</div>
                 <h1>Log In</h1>
                 <form>
                     <div class="form-group">
                         <input type="text" placeholder="Email" class="form-control">
                     </div>
                     <div class="form-group">
                         <input type="password" placeholder="Password" class="form-control">
                     </div>
                     <div class="form-group">
                         <label><input type="checkbox">
                             Remember Me
                         </label>
                     </div>
                     <button type="button" class="btn">Log In</button>
                 </form>
             </div>
        </div>
   </div> -->
    
    <!--====== Header Start ======-->

    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between align-items-center">
                    <div class="header-top-left">
                        <ul class="header-meta d-flex justify-content-center">
                            <li><a href="mailto://contact@educorebd.com" class="rt-line"><i class="mx-1 fas fa-envelope"></i>contact@educorebd.com</a></li>
                            <li><a href="tel:+8801635518545" style="padding-left: 20px;"><i class="mx-1 fas fa-phone"></i>01635518545</a></li>
                        </ul>
                    </div>
                    <div class="header-top-right">
                        <div class="header-link">
                            <a class="apply-form" href="{{route('educore.apply_form')}}">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="navigation" class="navigation navigation-landscape">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('website') }}/images/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 position-static">
                        <div class="nav-toggle"></div>
                        <nav class="nav-menus-wrapper">
                            <ul class="nav-menu justify-content-center">
                                <li>
                                    <a class="active" href="{{route('educore.home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="{{route('educore.about')}}">About</a></li>                                                                        
                                        <li><a href="{{route('educore.success')}}">Success Story</a></li>
                                        <li><a href="{{route('educore.faq')}}">FAQ'S</a></li>
                                        <li><a href="{{route('educore.notice')}}">Notice</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Destination</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/uk.png">Study in UK</a></li>
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/usa.png">Study in USA</a></li>
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/australia.png">Study in Australia</a></li>
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/canada.png">Study in Canada</a></li>
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/sweden.png">Study in Sweden</a></li>
                                        <li><a href="{{route('educore.destination_uk')}}"><img src="{{ asset('website') }}/images/flag/malaysia.png">Study in Malaysia</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="services.html">Services</a></li> -->
                                <li>
                                    <a href="#">Services</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="{{route('educore.services')}}">Education & Career Counseling</a></li>
                                        <li><a href="{{route('educore.services')}}">Country, Course & University Selection</a></li>
                                        <li><a href="{{route('educore.services')}}">Visa Application Guidance</a></li>
                                        <li><a href="{{route('educore.services')}}">Interview Training</a></li>
                                        <li><a href="{{route('educore.services')}}">Pre & Post Departure Services</a></li>
                                        <li><a href="{{route('educore.services')}}">10 days free English</a></li>
                                        <li><a href="{{route('educore.services')}}">Bank related support</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('educore.blog')}}">Blog</a></li>
                                <li>
                                    <a href="#">Media</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="{{route('educore.gellary')}}">Gallery</a></li>
                                        <!-- <li><a href="news.html">News</a></li>
                                        <li><a href="event.html">Event</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{route('educore.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 position-static">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

        @yield('content')


    <!--====== Header Ends ======-->

    
    <!--====== Newsletter Start ======-->

<section class="ec-newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s" style="background-image: url({{ asset('website') }}/images/newsletter-bg-1.webp);">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-2 mt-25">
                        <h2 class="title">Subscribe our <span>Newsletter</span></h2>
                        <span class="line"></span>
                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form mt-30">
                        <form action="#">
                            <input type="text" placeholder="Enter your email here">
                            <button class="main-btn main-btn-2">Subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Newsletter Ends ======-->
    
    <!--====== Footer Start ======-->

    <section class="ec-footer-area bg_cover" style="background-image: url({{ asset('website') }}/images/gallery/footer-bg.jpg);">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <img src="{{ asset('website') }}/images/logo/logo.png" alt="logo" class="img-responsive">
                            <h5 style="color: #fff;">Your Success is Our Success</h5>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Useful Link</h4>
                            <ul class="link-list">
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="testimonial.html">Success Story</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Office Hours</h4>
                            <div class="office-hour">
                                <h5>Working Day :</h5>
                                <p>Sunday-Thursday: 10am to 6pm</p>
                            </div>
                            <div class="office-hour">
                                <h5>Off Day :</h5>
                                <p>Friday, Saturday</p>
                                <p>All Holiday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Contact Info</h4>
                            <ul class="link-list">
                                <li>
                                    <p>245, New Town, Marklen Street North City, New York, USA</p>
                                </li>
                                <li>
                                    <p><a href="tel:+01254659874">+01254 659 874 </a></p>
                                    <p><a href="tel:+32145857458">+32145 857 458</a></p>
                                </li>
                                <li>
                                    <p><a href="mailto://info@example.com">info@example.com</a></p>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-wrapper">
                    <div class="footer-social">
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Notice Board</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-footer-copyright">
            <div class="container">
                <div class="copyright text-center">
                    <p>&copy; 2022 <span> Educore </span></p>
                    <!-- <a href="#">codecarnival</a> -->
                </div>
            </div>
        </div>
    </section>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== Start ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== Ends ======-->




    <!--======educore system Jquery js all link ======-->
  <!--====== Jquery js ======-->
  <script src="{{ asset('website') }}/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('website') }}/js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <!--====== All Plugins js ======-->
  <script src="{{ asset('website') }}/js/plugins/popper.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/bootstrap.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/slick.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/isotope.pkgd.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/wow.min.js"></script>
  <script src="{{ asset('website') }}/js/plugins/ajax-contact.js"></script>

  <!--====== Main Activation  js ======-->
  <script src="{{ asset('website') }}/js/main.js"></script>

    
</body>

</html>
