{{-- <!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/edusmart/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 19:22:42 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>About</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body> --}}

{{-- <header class="header_area">
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
                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection#54272124243b262014373b383b26383d367a373b39">
                            <span class="lnr lnr-envelope"></span>
                            <span class="text">
                                <span class="text"><span class="__cf_email__"
                                        data-cfemail="87f4f2f7f7e8f5f3c7e4e8ebe8f5ebeee5a9e4e8ea">[email&#160;protected]</span></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                        <a href="#" class="text-uppercase">Login</a>
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

                    <a class="navbar-brand logo_h" href="index-2.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index-2.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
                                    <li class="nav-item"><a class="nav-link" href="course-details.html">Course
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
    </header> --}}
@extends('layouts.mainLayouts.masterPage')
@section('content')
<style>
    .author img {
        width: 204px;
        height: 204px;
        border-radius: 6%;
    }
</style>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>About Us</h2>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than
                            the
                            building and launch of the space telescope known as the Hubble.</p>
                        <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="about-us.html">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="department_area section_gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="{{URL::asset('template/img/about-img.png')}}" alt="">
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="dpmt_right">
                    <h1>Over 2500 Courses from 5 Platform</h1>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                        telescope. It’s
                        exciting to think about setting up your own viewing station. In the life of any aspiring
                        astronomer that it is
                        time to buy that first telescope. It’s exciting to think about setting up your own viewing
                        station.</p>
                    <p>It’s exciting to think about setting up your own viewing station. In the life of any
                        aspiring astronomer that
                        it is time to buy that first telescope exciting is time to buy that first.</p>
                    <a href="{{route('courses.getCourses')}}" class="primary-btn text-uppercase">Explore Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="instructors_area lite_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Our Instructors</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                        telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($teachers as $teacher)

            <div class="col-lg-3 col-sm-6">
                <div class="single_instructor">
                    <div class="author">
                        <img src="{{asset('teacher_image/'.$teacher->image) }}" alt="">
                    </div>
                    <div class="author_decs">
                        <h4>{{$teacher->first_name}}{{' '}}{{$teacher->last_name}}</h4>
                        <p class="profession">Sr. Faculty Data Science</p>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the
                            difference in price.</p>
                        <div class="social_icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="department_area section_gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="dpmt_courses">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon1.png')}}" alt="">
                                </div>
                                <h4>Languages</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon2.png')}}" alt="">
                                </div>
                                <h4>Business</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon3.png')}}" alt="">
                                </div>
                                <h4>Literature</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon4.png')}}" alt="">
                                </div>
                                <h4>Software</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon5.png')}}" alt="">
                                </div>
                                <h4>Design</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon6.png')}}" alt="">
                                </div>
                                <h4>Development</h4>
                            </div>
                        </div>

                        <div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
                            <div class="single_department">
                                <div class="dpmt_icon">
                                    <img src="{{URL::asset('template/img/dpmt/icon7.png')}}" alt="">
                                </div>
                                <h4>Development</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="dpmt_right">
                    <h1>Over 2500 Courses from 5 Platform</h1>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                        telescope. It’s
                        exciting to think about setting up your own viewing station. In the life of any aspiring
                        astronomer that it is
                        time to buy that first telescope. It’s exciting to think about setting up your own viewing
                        station.</p>
                    <p>It’s exciting to think about setting up your own viewing station. In the life of any
                        aspiring astronomer that
                        it is time to buy that first telescope exciting is time to buy that first.</p>
                    <a href="{{route('courses.getCourses')}}" class="primary-btn text-uppercase">Explore Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="fact_area overlay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Facts that Make us Unique</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                        telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon1.png" alt="">
                    </div>
                    <h4>Expert Mentors</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt
                        labore dolor sit amet
                        consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon2.png" alt="">
                    </div>
                    <h4>25000+ Courses</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon3.png" alt="">
                    </div>
                    <h4>Student Membership</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt
                        labore dolor sit amet
                        consec tetur adipisicing elit, seddo eiusmod tempor.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon4.png" alt="">
                    </div>
                    <h4>Lifetime Access</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec tetur adipisicing elit sed do eiusmod.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon5.png" alt="">
                    </div>
                    <h4>Source File Included</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec tetur adipisicing elit sed do eiusmod.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_fact">
                    <div class="f_icon">
                        <img src="img/f-icons/icon6.png" alt="">
                    </div>
                    <h4>Live Support</h4>
                    <p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt
                        labore dolor sit
                        amet consec.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section_gap testimonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="active_testimonial owl-carousel" data-slider-id="1">

                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother
                                Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>
                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother
                                Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>
                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother
                                Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>
                    <div class="single_testimonial">
                        <div class="testimonial_head">
                            <img src="img/quote.png" alt="">
                            <h4>Fanny Spencer</h4>
                            <div class="review">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial_content">
                            <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother
                                Earth. If you think about
                                it, you travel across her faceand She is the host to your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                    <div class="owl-thumb-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
                        </div>
                        <div class="overlay-grad"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--
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
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
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
<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved | This
template is
made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
<div class="col-lg-4 col-sm-12 footer-social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</footer>



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/owl-carousel-thumb.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/mail-script.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/edusmart/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 19:22:43 GMT -->
</html> --}}
