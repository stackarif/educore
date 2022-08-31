@extends('layouts.educore_index')
@section('content')
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Blog</h2>
            </div>

            <nav>
                <ol class="cd-breadcrumb custom-separator">
                    <li><a href="{{'educore.home'}}">Home</a></li>
                    <li class="{{'educore.blog'}}"><em>Blog</em></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Blog Start ======-->

<section class="blog-page">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-1.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Latest Micro Biological basic Workshop for Research</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-2.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Post Graduate Certification giving Program 2020</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-4.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Advantage of Laravel in you Programming language</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-5.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Resources for PHP Developer and UX Designer</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-7.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Workshop on Presentation of your Project</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{route('educore._blog_details')}}">
                                    <img src="{{ asset('website') }}/images/blog-8.webp" width="370" height="250" alt="blog">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">25 May, 2020</a></li>
                                    <li><a href="#">By: Alex</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('educore._blog_details')}}">Cultural Program Festival for all new Students</a></h4>
                                <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination-items text-center">
                    <li><a class="active" href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                    <li><a href="#">05</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="blog-sidebar-category mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Categories</h4>
                        </div>
                        <ul class="category-items">
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio1">
                                    <label for="categoryRadio1"> <span></span> Science <strong>(25)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio2">
                                    <label for="categoryRadio2"> <span></span> Marketing <strong>(18)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio3">
                                    <label for="categoryRadio3"> <span></span> Design <strong>(10)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio4">
                                    <label for="categoryRadio4"> <span></span> Social Marketing <strong>(05)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio5">
                                    <label for="categoryRadio5"> <span></span> Fine Arts <strong>(12)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio6">
                                    <label for="categoryRadio6"> <span></span> Law <strong>(05)</strong></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-post mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Recent Post</h4>
                        </div>
                        <ul class="post-items">
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{route('educore._blog_details')}}"><img src="{{ asset('website') }}/images/post-1.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="{{route('educore._blog_details')}}">Guest Interview will Occur in English</a></h4>
                                        <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{route('educore._blog_details')}}"><img src="{{ asset('website') }}/images/post-2.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="{{route('educore._blog_details')}}">Online Courses are available now</a></h4>
                                        <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{route('educore._blog_details')}}"><img src="{{ asset('website') }}/images/post-3.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="{{route('educore._blog_details')}}">Workshop on English native Language</a></h4>
                                        <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{route('educore._blog_details')}}"><img src="{{ asset('website') }}/images/post-4.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="{{route('educore._blog_details')}}">How to find resources for Laravel Language </a></h4>
                                        <a href="{{route('educore._blog_details')}}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-banner mt-30">
                        <a href="#">
                            <img src="{{ asset('website') }}/images/product/banner.webp" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Ends ======-->
@endsection