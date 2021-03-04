@extends('layouts.mainLayouts.masterPage')
@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>BLog</h2>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than
                            the
                            building and launch of the space telescope known as the Hubble.</p>
                        <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="blog.html">BLog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="categories_post">
                    <a href="{{ route('filterBlog', "socialLife") }}">

                        <img src="{{URL::asset('template/img/blog/cat-post/cat-post-3.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <h5>Social Life</h5>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <a href="{{ route('filterBlog', "politics") }}">
                        <img src="{{URL::asset('template/img/blog/cat-post/cat-post-2.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <h5>Politics</h5>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories_post">
                    <a href="{{ route('filterBlog', "food") }}">
                        <img src="{{URL::asset('template/img/blog/cat-post/cat-post-1.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <h5>Food</h5>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    @if ($blogs->count()>0)
                    @foreach ($blogs as $blog)


                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">{{ ucfirst(trans($blog->category))}}</a>

                                </div>
                                <ul class="blog_meta list">
                                    <li>{{$blog->student_id}} <i class="lnr lnr-user"></i></li>
                                    <li><a href="#">{{$blog->created_at->format('M/d/Y')}}<i
                                                class="lnr lnr-calendar-full"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{asset('blog_image/'.$blog->image) }}" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>{{$blog->blog_name}}</h2>
                                    </a>
                                    <p>{{$blog->content}}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @else
                    <h2>No Blog For This Categoty</h2>
                    @endif



                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{-- <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left">{{ $blogs->links() }}</span>
                            </span>
                            </a>
                            </li> --}}
                            <li class="page-item">
                                {{-- <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true"> --}}
                                <span class="">{{ $blogs->links() }}</span>
                                </span>
                                </a>
                            </li>

                            {{-- <a href="#" class="page-link">{{ $blogs->links() }}</a> --}}

                            {{-- <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a> --}}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <form action="{{ route('searchBlog') }}" method="get" style="width: 100%">
                                <input type=" text" name="seacrhPost" class="form-control"
                                    placeholder="Search Posts by User Name">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </form>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>

                        <ul class="list cat-list">
                            <li>
                                <a href="{{ route('filterBlog', "all") }}" class="d-flex justify-content-between">
                                    <p>All</p>
                                    <p>{{$all}}</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('filterBlog', "politics") }}" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>{{$tech}}</p>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('filterBlog', "socialLife") }}"
                                    class="d-flex justify-content-between">
                                    <p>Lifestyle</p>
                                    <p>{{$socialLife}}</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('filterBlog', "fashion") }}" class="d-flex justify-content-between">
                                    <p>Fashion</p>
                                    <p>{{$fashion}}</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('filterBlog', "art") }}" class="d-flex justify-content-between">
                                    <p>Art</p>
                                    <p>{{$art}}</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('filterBlog', "food") }}" class="d-flex justify-content-between">
                                    <p>Food</p>
                                    <p>{{$food}}</p>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('filterBlog', "politics") }}" class="d-flex justify-content-between">
                                    <p>Politics</p>
                                    <p>{{$poli}}</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('filterBlog', "others") }}" class="d-flex justify-content-between">
                                    <p>others</p>
                                    <p>{{$others}}</p>
                                </a>
                            </li>

                        </ul>
                        <div class="br"></div>
                    </aside>

                    {{-- <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post2.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{asset('template/img/blog/popular-post/post3.jpg')}}" alt="post">
                    <div class="media-body">
                        <a href="blog-details.html">
                            <h3>Astronomy Or Astrology</h3>
                        </a>
                        <p>03 Hours ago</p>
                    </div>
                </div>
                <div class="media post_item">
                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                    <div class="media-body">
                        <a href="blog-details.html">
                            <h3>Asteroids telescope</h3>
                        </a>
                        <p>01 Hours ago</p>
                    </div>
                </div>
                <div class="br"></div>
                </aside> --}}
                <aside class="single_sidebar_widget ads_widget">
                    <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                    <div class="br"></div>
                </aside>

                <aside class="single-sidebar-widget newsletter_widget">
                    <h4 class="widget_title">Newsletter</h4>
                    <p>
                        Here, I focus on a range of items and features that we use in life without
                        giving them a second thought.
                    </p>
                    <div class="form-group d-flex flex-row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                        </div>
                        <a href="#" class="bbtns">Subcribe</a>
                    </div>
                    <p class="text-bottom">You can unsubscribe at any time</p>
                    <div class="br"></div>
                </aside>

            </div>
        </div>
    </div>
    </div>
</section>

@endsection
