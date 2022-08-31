@extends('layouts.educore_index')
@section('content')
<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Contact</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Contact Start ======-->

<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Address</h5>
                        <p>297 Central Street, New Town North City, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Phone</h5>
                        <p><a href="tel:+62548254658">+62548 254 658</a></p>
                        <p><a href="tel:+99875587478">+99875 587 478</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="far fa-globe"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Web</h5>
                        <p><a href="mailto://info@example.com">info@example.com</a></p>
                        <p><a href="www.example.html">www.example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-title text-center">
                        <h3 class="title">Leave a message here</h3>
                        <p>Here is our event schedule where you can get information about time schedule about this event so it's very easy for you to manage your time and schedule</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <form id="contact-form" action="https://template.hasthemes.com/edumate-v1/edumate/{{ asset('website') }}/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Write here..."></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form text-center">
                                        <button class="main-btn">Submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Contact Ends ======-->
@endsection