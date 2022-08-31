@extends('layouts.educore_index')
@section('content')
<!--====== Page Banner Start ======-->

 <section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('website') }}/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Notice</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Notice Start ======-->

<section class="notice-area">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12" style="overflow-x: auto">
                <table id="notice" class="table notice-board table-striped table-responsive" style="width:100%;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat.</td>
                            <td>2022-07-24 12:58:47</td>
                            <td>
                                <a href="{{ asset('website') }}/images/pdf/test.pdf"><i class="fas fa-file-pdf"></i>Download</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat.</td>
                            <td>2022-07-24 12:58:47</td>
                            <td>
                                <a href="{{ asset('website') }}/images/pdf/test.pdf"><i class="fas fa-file-pdf"></i>Download</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat.</td>
                            <td>2022-07-24 12:58:47</td>
                            <td>
                                <a href="{{ asset('website') }}/images/pdf/test.pdf"><i class="fas fa-file-pdf"></i>Download</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--====== Notice Ends ======-->
@endsection