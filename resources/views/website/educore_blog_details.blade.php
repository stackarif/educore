@extends('layouts.educore_index')
@section('content')
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Blog Details</h2>
            </div>

            <nav>
                <ol class="cd-breadcrumb custom-separator">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="current"><em>Blog Details</em></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Blog Details Start ======-->

<section class="blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="details-content mt-50">
                        <img src="{{ asset('website') }}/images/blog-details.webp" width="771" height="439" alt="Blog Detaisl">
                        <ul class="meta">
                            <li><a href="#">25 May, 2020</a></li>
                            <li><a href="#">By: Alex</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul>
                        <h3 class="title">Latest Micro Biological basic Workshop for Research</h3>

                        <p>Micro Biology slightly believable. If you are going use a passage of Lorem Ipsum need equal belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy  distinguish These cases are perfectly simple and easy to distinguish. In a free hour, when our power of nothing prevents our being able to do what we like best, every pleasure welcome <br> <br> Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum blame belongs to those who fail in their duty through weakness of will, which is the same as through shrinking from toil and pain. These cases are perfectly simple and easy <br> <br> Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum all blame belongs to those who fail in their duty through weakness of will, which is the same as through shrinking from toil and pain. These cases are perfectly simple and easy distinguish dolor repellendus. Temporibus autem quibusdam et aut officiis debitis autnecessitatibus sae pe eveniet ut et voluptates repudiandae sint et molestiae.</p>

                        <ul class="blog-list">
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame belongs to those who fail in their duty through weakness </p>
                            </li>
                        </ul>

                        <p>Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum blame  belongs to those who fail in their duty through weakness of will, which is the same as through shrinking from toil and pain. These cases are perfectly simple and easy</p>
                    </div>

                   

                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar right-sidebar pt-20">
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
                                        <a href="blog-details.html"><img src="{{ asset('website') }}/images/post-1.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Guest Interview will Occur in English</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="{{ asset('website') }}/images/post-2.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Online Courses are available now</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="{{ asset('website') }}/images/post-3.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Workshop on English native Language</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="{{ asset('website') }}/images/post-4.webp" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">How to find resources for Laravel Language </a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-banner mt-30">
                        <a href="#">
                            <img src="{{ asset('website') }}/images/product/banner.webp" width="326" height="374" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Details Ends ======-->
@endsection