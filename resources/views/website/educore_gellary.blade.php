@extends('layouts.educore_index')
@section('content')
<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Gallery</h2>
            </div>

            <nav>
                <ol class="cd-breadcrumb custom-separator">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Media</a></li>
                    <li class="current"><em>Gallery</em></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Gallery Start ======-->

<div class="gallery-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-01.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-01.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-02.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-02.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-03.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-03.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-04.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-04.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-05.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-05.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-06.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-06.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-07.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-07.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-08.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-08.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-09.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-09.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-10.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-10.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-11.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-11.webp" width="371" height="257" alt="gallery">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-gallery mt-30">
                    <a class="image-popup" href="{{ asset('website') }}/images/gallery/gallery-12.webp">
                        <img src="{{ asset('website') }}/images/gallery/gallery-12.webp" width="371" height="257" alt="gallery">
                    </a>
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
</div>

<!--====== Gallery Ends ======-->
@endsection