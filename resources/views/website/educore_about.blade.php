@extends('layouts.educore_index')
@section('content')
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">About Us</h2>
                </div>
                <nav>
                    <ol class="cd-breadcrumb custom-separator">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><em>About Us</em></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->
    
    <!--====== About Start ======-->

    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-image">
                        <div class="single-image text-center">
                            <img src="{{ asset('website') }}/images/about.jpg" class="img-responsive" alt="about"  style="max-height: 600px; width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus quis aperiam, amet cupiditate rem obcaecati veritatis fugit consequuntur sit? Maxime, minus dicta unde tempora distinctio magni laborum veritatis asperiores quis suscipit error officiis eaque quo incidunt illum ad fugit quae alias itaque? Molestiae veritatis natus nam nobis porro tempora unde doloremque fugiat molestias nulla, dignissimos deleniti quae earum possimus quaerat at, numquam tenetur, atque nesciunt quisquam nihil. Ratione rem suscipit ipsum excepturi exercitationem veritatis deleniti ea vel neque laborum dolorem natus facere velit quasi aliquid fugiat eaque dolorum, magnam ipsa totam, qui molestiae. Explicabo quidem placeat soluta quod nulla rerum?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== About Ends ======-->

    
    
    <!--====== Counter Start ======-->

    <div class="counter-area-2">
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

    <!--====== Teachers Start ======-->

    <section class="teachers-area">
        <div class="container">            
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mt-40">
                        <h2 class="title">Meet our <br><span>Experts</span></h2>
                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need</p>
                    </div>
                </div>
            </div>
            <div class="teachers-wrapper">
                <div class="row teachers-row">
                    <div class="col-md-4 col-sm-6 teachers-col">
                        <div class="single-teacher mt-30 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                <a href="teacher-details.html">
                                    <img src="{{ asset('website') }}/images/teachers/teacher-1.webp" width="266" height="359" alt="teacher">
                                </a>
                            </div>
                            <div class="teacher-content">
                                <h4 class="name"><a href="teacher-details.html">MD Ali</a></h4>
                                <span class="designation">Managing Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Teachers Ends ======-->
@endsection
