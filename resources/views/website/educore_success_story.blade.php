@extends('layouts.educore_index')
@section('content') 
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Testimonial</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Testimonial Start ======-->

<section class="testimonials-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="testimonials-title">
                    <h2 class="title">Our Students Review</h2>
                    <span class="line"></span>
                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need desire to obtain pain of itself, because it is pain de sires to obtain pain of itself occur</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonials-wrapper">
                    <div class="testimonials-shape shape-1"></div>
                    <div class="testimonials-shape shape-2"></div>
                    <div class="testimonials-shape shape-3"></div>

                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-5">
                            <div class="testimonials-image">
                                <div class="single-testimonial-image">
                                    <img src="{{ asset('website') }}/images/testimonials-1.webp" width="313" height="579" alt="testimonials">
                                </div>
                                <div class="single-testimonial-image">
                                    <img src="{{ asset('website') }}/images/testimonials-2.webp" width="313" height="579" alt="testimonials">
                                </div>
                                <div class="single-testimonial-image">
                                    <img src="{{ asset('website') }}/images/testimonials-1.webp" width="313" height="579" alt="testimonials">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="testimonials-content">
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
                                    <div class="content-meta">
                                        <p class="name">Alex Smith</p>
                                        <p class="designation">CEO, Xelopex Group</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
                                    <div class="content-meta">
                                        <p class="name">Alex Smith</p>
                                        <p class="designation">CEO, Xelopex Group</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
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
        </div>
    </div>
</section>

<!--====== Testimonial Ends ======-->

<!--====== Counter Start ======-->

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper-2 bg_cover" style="background-image: url({{ asset('website') }}/images/counter-bg-2.webp);">
            <div class="row">
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30">
                        <span class="counter-count"><span class="count" data-count="3652">0</span> +</span>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30">
                        <span class="counter-count"><span class="count" data-count="105">0</span> +</span>
                        <p>Faculties</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30">
                        <span class="counter-count"><span class="count" data-count="120">0</span> +</span>
                        <p>Branches</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30">
                        <span class="counter-count"><span class="count" data-count="30">0</span> +</span>
                        <p>Awards win</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Counter Ends ======-->
@endsection
