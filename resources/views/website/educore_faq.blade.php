@extends('layouts.educore_index')
@section('content')
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">FAQ's</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== FAQ's Start ======-->

<section class="faq-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-2">
                    <h2 class="title">FAQ's</h2>
                    <span class="line"></span>
                    <p>Find your desired questioner here If you are going use a passage of Lorem Ipsum need equal belongs to those who fail in their duty of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy</p>
                </div>
            </div>
        </div>
        <div class="faq-wrapper">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingOne">
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne">There are so many schools in the U.S. How do I decide which schools to apply to?</a>                            
                    </div>
                
                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingTwo">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">What’s the difference between a college and a university?</a>                            
                    </div>
                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingThree">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Is it possible to take a professional degree program without first earning a bachelor's degree?</a>                            
                    </div>
                    <div id="collapseThree" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingFour">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">What is the difference between "Undergraduate" and "Graduate" degrees?</a>                            
                    </div>
                    <div id="collapseFour" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingFive">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">There are so many schools in the U.S. How do I decide which schools to apply to?</a>                            
                    </div>
                    <div id="collapseFive" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingSix">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">What is the academic calendar for universities in the United States?</a>                            
                    </div>
                    <div id="collapseSix" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingNine">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine">Can you work while studying in the United States?</a>                            
                    </div>
                    <div id="collapseNine" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingTen">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen">What is the difference between online studies and distance studies?</a>                            
                    </div>
                    <div id="collapseTen" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingEleven">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEleven">How do you transfer from a community college to a four-year university? </a>                            
                    </div>
                    <div id="collapseEleven" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingTwelve">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">How can I find out which universities are rated best for a specific academic major?</a>                            
                    </div>
                    <div id="collapseTwelve" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingThirteen">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThirteen">I want to study in the United States, but my English proficiency isn’t good enough yet. What can I do?</a>                            
                    </div>
                    <div id="collapseThirteen" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <span class="question">Q:</span>
                    <div class="card-header" id="headingFourteen">
                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFourteen">How can an international student find out what academic subjects from their country are acceptable for a U.S. university?</a>                            
                    </div>
                    <div id="collapseFourteen" class="collapse" data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <span class="answer">A:</span>
                            <p>The academic year usually runs from August through May with breaks for holidays. <br> Most universities use either the semester system (two terms), the quarter system <br> (students attend three out of four total terms), or the trimester system (three terms).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== FAQ's Ends ======-->
@endsection