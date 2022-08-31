@extends('layouts.educore_index')
@section('content')
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Education & Career Counseling</h2>
            </div>

            <nav>
                <ol class="cd-breadcrumb custom-separator">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="current"><em>Education & Career Counseling</em></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Notice Start ======-->

<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="services-img">
                        <img src="{{ asset('website') }}/images/country/uk.jpg" alt="uk">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bl-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae velit quidem animi nisi quod commodi corrupti maiores assumenda, impedit necessitatibus a amet sit numquam eveniet fugit ipsum libero incidunt! Minus, laudantium perspiciatis? Velit, maiores! Culpa aspernatur corrupti ut? Commodi quod exercitationem, qui nisi hic ex obcaecati earum rerum in veritatis ratione eligendi quae voluptates architecto a quidem nostrum quaerat praesentium minima voluptas ab labore. Necessitatibus dicta sunt fugit libero deserunt aut nostrum provident delectus! Velit autem quod numquam similique. Expedita placeat nemo atque tenetur tempore in delectus sequi nam, aperiam sit magnam neque natus numquam temporibus dignissimos ipsam ut. Dolores laudantium nam eius reprehenderit quod dignissimos nobis debitis natus, deleniti libero, at dolor aliquid architecto sapiente optio iure temporibus est dolorum dicta velit eos! Nobis error omnis, eveniet voluptate quasi natus suscipit minus voluptates facere nostrum cumque expedita, ea perferendis magnam aliquam, quibusdam fugit officiis ipsam delectus vel. Dolor culpa quam, ea id nulla, sit nesciunt ratione ullam nihil error voluptatum molestiae rem nostrum autem. Similique ipsum eum cumque dolore! Repellat eveniet numquam aut temporibus libero blanditiis, soluta hic id vel magnam, quibusdam facere harum porro maiores veniam optio earum. Impedit praesentium iste molestiae? Voluptas voluptatem repudiandae ab pariatur saepe.</p>
            </div>
        </div>
    </div>
</section>

<!--====== Notice Ends ======-->
@endsection