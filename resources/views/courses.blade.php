@extends('layouts.mainLayouts.masterPage')
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Courses</h2>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than
                            the
                            building and launch of the space telescope known as the Hubble.</p>
                        <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="courses.html">Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="popular_courses lite_bg">
    <div class="container">

        <div class="main_title">
            <h2>Courses For You</h2>
            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                telescope. It’s
                exciting to think about setting up your own viewing station.</p>
        </div>
        <div class="col-lg-3 col-md-6 row">
            @foreach ($courses as $item)
            <div class="single_course">

                {{-- <div class="course_head overlay">
                    <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                    <div class="authr_meta">
                        <img src="img/author1.png" alt="">
                        <span>Mart Taylor</span>
                    </div>
                </div> --}}
                <div class="course_content">
                    <h4>
                        <a href="{{route('courses.course-details')}}">{{$item->course_name}}</a>
                    </h4>
                    <p>{{$item->describtion}}</p>

                    <div class="course_meta d-flex justify-content-between">
                        {{-- <div>
                            <span class="meta_info">
                                <a href="#"><i class="lnr lnr-user"></i>355</a>
                            </span>
                            <span class="meta_info">
                                <a href="#">
                                    <i class="lnr lnr-bubble"></i>35
                                </a>
                            </span>
                        </div> --}}
                        <div>
                            <span class="price">$150</span>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main_title">
                    <h2>Popular Courses</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                        telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular
                            fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#"><i class="lnr lnr-user"></i>355</a>
                                </span>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a>
                                </span>
                            </div>
                            <div>
                                <span class="price">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular
                            fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price df_color1">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular
                            fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single_course">
                    <div class="course_head overlay">
                        <img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
                        <div class="authr_meta">
                            <img src="img/author1.png" alt="">
                            <span>Mart Taylor</span>
                        </div>
                    </div>
                    <div class="course_content">
                        <h4>
                            <a href="course-details.html">Learn React js beginners</a>
                        </h4>
                        <p>When television was young, there was a huge popular show based on the still popular
                            fictional character of
                            Superman.</p>
                        <div class="course_meta d-flex justify-content-between">
                            <div>
                                <span class="meta_info">
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>355
                                    </a>
                                </span>
                                <span class="meta_info"><a href="#">
                                        <i class="lnr lnr-bubble"></i>35
                                    </a></span>
                            </div>
                            <div>
                                <span class="price df_color2">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
