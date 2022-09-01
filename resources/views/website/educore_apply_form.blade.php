@extends('layouts.educore_index')
@section('content')
<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Admission Online</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== apply form Start ======-->

<section class="form-area">
   
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="info-form apply-form">
                    <h2 class="text-center pb-10 pt-10">ADMISSION ONLINE</h2>
                    <p class="text-center mb-10">Please complete each section of the form</p>
                    <form action="{{ route('educore.apply_form') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="name">Name</label>
                                    <input  type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="email">Email</label>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="Phone">Phone</label>
                                    <input type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="last_education">Last Education</label>
                                    <input type="text" name="last_education" required>
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="result">Result</label>
                                    <input type="text" name="result" required>
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="board">Board / Institution</label>
                                    <input type="text" name="board">
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="passing_year">Passing Year</label>
                                    <input type="text" name="passing_year">
                                </div>
                            </div>
                            <div class="col-md-6 px-0">
                                <div class="single-form">
                                    <label for="ielts">IELTS Score</label>
                                    <input type="text" name="ielts" required>
                                </div>
                            </div>
                            <div class="col-md-12 px-0">
                                <div class="single-form">
                                    <label for="notes">Notes</label>
                                    <textarea name="notes" placeholder="Write here..."></textarea>
                                </div>
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single-form text-center">
                                    <button class="main-btn" style="background-color: #000">Submit now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== apply form Ends ======-->
@endsection