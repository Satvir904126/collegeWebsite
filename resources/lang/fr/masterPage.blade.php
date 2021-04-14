<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>EduSmart Education</title>

    <link rel="stylesheet" href="{{ URL::asset('template/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('template/vendors/animate-css/animate.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('template/css/style.css')}}">
</head>

<body>

    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                        <a href="tel:+9530123654896">
                            <span class="lnr lnr-phone"></span>
                            <span class="text">
                                <span class="text">+953012 3654 896</span>
                            </span>
                        </a>
                        <a
                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection#e0939590908f9294a0838f8c8f928c8982ce838f8d">
                            <span class="lnr lnr-envelope"></span>
                            <span class="text">
                                <span class="text"><span class="__cf_email__"
                                        data-cfemail="7c0f090c0c130e083c1f1310130e10151e521f1311">[email&#160;protected]</span></span>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                        <a href="{{ url('login') }}" class="text-uppercase">Login Administrator</a>
                        @if (Session::has('studentSession'))
                        <a href="{{ url('/account') }}" class="text-uppercase">Account</a>
                        <a href="{{ url('/logout') }}" class="text-uppercase">Logout</a>

                        @else
                        <a href="{{ url('/student') }}" class="text-uppercase">Login Student</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between" method="" action="#">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <a class="navbar-brand logo_h" href="index-2.html"><img src="{{ URL::asset('img/logo.png')}}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="locale/en">{{__('language.english')}}</a>
                    <a href="locale/fr">{{__('language.french')}}</a>
                    <a href="locale/tun">{{__('language.tunesie')}}</a>
                    <a href="locale/pun">{{__('language.punjabi')}}</a>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('about-us')}}">About</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('courses.getCourses')}}">Courses</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="course-details.html">Course
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('blogs')}}">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link search" id="search">
                                    <i class="lnr lnr-magnifier"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content');



    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                                required="" type="email">
                            <button class="click-btn btn btn-default">
                                <span>subscribe</span>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2021 All rights reserved | This
                    website is
                    made by&nbsp; Satvir &nbsp; Mohit &nbsp;Maninder</p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <script data-cfasync="false"
        src="{{URL::asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">
    </script>
    <script src="{{ URL::asset('template/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('template/js/popper.js')}}"></script>
    <script src="{{ URL::asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('template/js/stellar.js')}}"></script>
    <script src="{{ URL::asset('template/js/countdown.js')}}"></script>
    <script src="{{ URL::asset('template/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ URL::asset('template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('template/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{ URL::asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ URL::asset('template/vendors/counter-up/jquery.counterup.js')}}"></script>
    <script src="{{ URL::asset('template/js/mail-script.js')}}"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
    <script src="{{ URL::asset('template/js/gmaps.min.js')}}"></script>
    <script src="{{ URL::asset('template/js/theme.js')}}"></script>

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
