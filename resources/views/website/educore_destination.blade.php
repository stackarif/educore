@extends('layouts.educore_index')
@section('content')
 <!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Study in UK</h2>
            </div>

            <nav>
                <ol class="cd-breadcrumb custom-separator">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="destination.html">Destination</a></li>
                    <li class="current"><em>Study in UK</em></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Destination Start ======-->

<section class="destination-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="border-right: 0.5px solid rgb(216, 216, 216)">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="destination-img">
                            <img src="{{ asset('website') }}/images/country/uk.jpg" alt="uk">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="accordion mb-50" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Lorem Ipsum
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, dolorum repellat ipsam aut maxime, iste ducimus voluptas quis quae earum aspernatur saepe, obcaecati deserunt est corrupti quam vitae atque perspiciatis dolorem? Provident enim quas officia odit vitae quod tenetur quaerat, numquam exercitationem sint similique. Nulla recusandae aspernatur laudantium sunt libero, accusamus tenetur consectetur vel repellat odit inventore animi incidunt. Ea omnis recusandae accusantium eius voluptates assumenda dicta numquam voluptatibus quidem delectus voluptate placeat libero tenetur possimus ratione error, eveniet saepe repellat magni odio quas. In ex expedita maxime voluptate modi delectus corporis minima, est quibusdam repellendus distinctio sapiente, eligendi ipsum?
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Lorem Ipsum
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae ex sapiente necessitatibus dolorum dicta vitae quisquam temporibus minima, sequi, adipisci ea suscipit excepturi hic quos. Sapiente, culpa! Voluptates blanditiis minima suscipit expedita harum quisquam quo nesciunt maxime nulla recusandae, odit, adipisci id est animi provident impedit quaerat optio vero deserunt fugiat? Ratione non placeat eius vero ea dolor accusamus nihil deserunt ipsum, repellendus voluptatibus officiis obcaecati, molestias libero blanditiis! Aut repellat, libero quidem consequatur modi illo expedita nam voluptas ducimus blanditiis optio rem, natus ex perspiciatis labore vitae veritatis accusamus deserunt laudantium asperiores? Est minus dicta expedita vitae doloremque dolorum!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Lorem Ipsum
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci debitis commodi dolorum! Facere quidem consequuntur beatae ipsa ipsum quo perferendis culpa tempora quae adipisci, officia iusto sapiente debitis non quam, architecto soluta similique expedita. Exercitationem vero dolorum ea qui dolore ex eos voluptate earum. Expedita atque, ipsa consequuntur quae alias consectetur rem architecto, earum sequi officia tenetur id nam libero exercitationem nesciunt vel at in fuga! Magni numquam quidem saepe deleniti! Temporibus fugit saepe ipsam assumenda quisquam delectus sequi ratione nobis, provident similique optio quaerat sint molestias repellat maiores asperiores dolorem magni! Eveniet voluptatibus voluptate adipisci praesentium! In, ad. Blanditiis!
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-form">
                    <h5 class="text-center pb-10 pt-10">Need more info? <br> Contact with us</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-form">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
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

<!--====== Destination Ends ======-->
@endsection