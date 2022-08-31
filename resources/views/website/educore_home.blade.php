@extends('layouts.educore_index')
@section('content')
<!--====== Slider Start ======-->

<section class="slider-area slider-02 slider-active">
    @foreach ($sliders as $slider)

        <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url({{ asset($slider->image) }});">
            <div class="container">
                <div class="slider-content slider-content-2">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">{{ $slider->title }}</h2>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn main-btn-2" href="our-courses-left-sidebar.html">View Courses</a></li>
                        <li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn" href="#">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

</section>

<!--====== Slider Ends ======-->

<!--====== About Start ======-->

<section class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-content mt-40">
                    <h2 class="about-title">About <span>Educore</span></h2>
                    <span class="line"></span>
                    <p>Even slightly believable. If you are going use passage of Lorem Ipsum need desire to obtain pain of itself, because it is pain de sires many pain of itself occur for your study <br> <br> Even slightly believable. If you are going use passage of Lorem Ipsum need desir</p>
                    <a href="about-us.html" class="main-btn">Explore</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <div class="single-image">
                        <img src="{{ asset('website') }}/images/about.jpg" alt="about">
                    </div>
                    <!-- <div class="single-image image-1">
                        <img src="assets/images/about/about-1.webp" width="290" height="290" alt="about">
                    </div>
                    <div class="single-image image-2">
                        <img src="assets/images/about/about-2.webp" width="225" height="225" alt="about">
                    </div>
                    <div class="single-image image-3">
                        <img src="assets/images/about/about-3.webp" width="190" height="190" alt="about">
                    </div>
                    <div class="single-image image-4">
                        <img src="assets/images/about/about-4.webp" width="140" height="140" alt="about">
                    </div>

                    <div class="about-icon icon-1">
                        <img src="assets/images/about/icon/icon-1.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-2">
                        <img src="assets/images/about/icon/icon-2.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-3">
                        <img src="assets/images/about/icon/icon-3.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-4">
                        <img src="assets/images/about/icon/icon-4.webp" width="46" height="46" alt="icon">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== About Ends ======-->

<!--====== Top Course Start ======-->

<section class="top-courses-area">
    <div class="container">            
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-40 mb-80">
                    <h2 class="title">Choose your<br><span>Destination</span> </h2>
                    <p>Educore processes Student Visa, Student Spouse Visa and Parents Visitors Visa for UK, USA, Canada, Australia, Sweden and Malaysia.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6  mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/australia.png" alt="australia">
                    <h3 class="mb-20">Australia</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-australia.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/uk.png" alt="australia">
                    <h3 class="mb-20">UK</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-uk.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/usa.png" alt="australia">
                    <h3 class="mb-20">USA</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-usa.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/canada.png" alt="australia">
                    <h3 class="mb-20">Canada</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-canada.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/sweden.png" alt="australia">
                    <h3 class="mb-20">Sweden</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-sweden.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-70">
                <div class="country">
                    <img src="{{ asset('website') }}/images/flag/malaysia.png" alt="australia">
                    <h3 class="mb-20">Malaysia</h3>
                    <p class="mb-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium harum sit provident aspernatur delectus consectetur!</p>
                    <a href="des-malaysia.html">Explore <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!--====== Top Course Ends ======-->


<!--====== Counter Start ======-->

<div class="counter-area-2">
    <div class="container">
        <div class="counter-wrapper-2 bg_cover" style="background-image: url({{ asset('website') }}/images/gallery/Study-Abroad.jpg);">
            <div class="row">
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count" data-count="12">0</span> +</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <span class="counter-count"><span class="count" data-count="600">0</span> +</span>
                        <p>Success Story</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                        <span class="counter-count"><span class="count" data-count="6">0</span></span>
                        <p>Countries</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <span class="counter-count"><span class="count" data-count="100">0</span> +</span>
                        <p>Universities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Counter Ends ======-->

<!--====== Event Start ======-->

<!-- <section class="event-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="event-image mt-50">
                    <img src="aseets/images/event-1.webp" width="548" height="337" alt="Event">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-title mt-40">
                    <div class="section-title-2">
                        <h2 class="title">Upcoming <br> Events</h2>
                        <span class="line"></span>
                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="event-wrapper-2">
                    <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="event-date">
                            <span class="date">25 May 2020</span>
                        </div>
                        <div class="event-content">
                            <h4 class="event-title-2"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <span class="time">10.35 am to 1.00 pm</span>
                            <a href="event-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="event-date">
                            <span class="date">25 May 2020</span>
                        </div>
                        <div class="event-content">
                            <h4 class="event-title-2"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <span class="time">10.35 am to 1.00 pm</span>
                            <a href="event-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-wrapper-2 ml-lg-auto">
                    <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="event-date">
                            <span class="date">25 May 2020</span>
                        </div>
                        <div class="event-content">
                            <h4 class="event-title-2"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <span class="time">10.35 am to 1.00 pm</span>
                            <a href="event-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="event-date">
                            <span class="date">25 May 2020</span>
                        </div>
                        <div class="event-content">
                            <h4 class="event-title-2"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <span class="time">10.35 am to 1.00 pm</span>
                            <a href="event-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--====== Event Ends ======-->

<!--====== Testimonial Start ======-->

<section class="testimonials-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-wrapper-2 mt-40">
                    <div class="section-title-2">
                        <h2 class="title">Our Students <br> <span>Review</span></h2>
                        <span class="line"></span>
                    </div>

                    <div class="testimonials-content">
                        <div class="single-testimonial-content">
                            <div class="content-text">
                                <i class="fas fa-quote-right"></i>
                                <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                            </div>
                        </div>
                        <div class="single-testimonial-content">
                            <div class="content-text">
                                <i class="fas fa-quote-right"></i>
                                <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                            </div>
                        </div>
                        <div class="single-testimonial-content">
                            <div class="content-text">
                                <i class="fas fa-quote-right"></i>
                                <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-wrapper-2">
                    <div class="testimonials-shape shape-1"></div>
                    <div class="testimonials-shape shape-2"></div>

                    <div class="testimonials-image">
                        <div class="single-testimonial-image">
                            <img src="{{ asset('website') }}/images/testimonials-3.webp" width="313" height="579" alt="Testimonials">

                            <div class="content-meta">
                                <p class="name">Alex Smith</p>
                                <p class="designation">CEO, Xelopex Group</p>
                            </div>
                        </div>
                        <div class="single-testimonial-image">
                            <img src="{{ asset('website') }}/images/testimonials-2.webp" width="313" height="579" alt="Testimonials">

                            <div class="content-meta">
                                <p class="name">Alex Amith</p>
                                <p class="designation">CEO, Xelopex Group</p>
                            </div>
                        </div>
                        <div class="single-testimonial-image">
                            <img src="{{ asset('website') }}/images/testimonials-1.webp" width="313" height="579" alt="Testimonials">

                            <div class="content-meta">
                                <p class="name">Alex Smith</p>
                                <p class="designation">CEO, Xelopex Group</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Testimonial Ends ======-->

<!--====== Blog Start ======-->

<section class="blog-area-2">
    <h4 class="trending-title">Trending blogs</h4>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title-2">
                    <h2 class="title">Explore top <span>Post</span></h2>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row-wrapper blog-active">
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('website') }}/images/blog-1.webp" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('website') }}/images/blog-2.webp" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="{{ asset('website') }}/images/blog-3.webp" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="blog-left-sidebar.html" class="more-post">View more post</a>
        </div>
    </div>
</section>

<!--====== Blog Ends ======-->


@endsection
