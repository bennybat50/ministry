@extends('layouts.frontend')

@section('content')
<style>
    .blog-body {
        font-size: 18px;
        display: block;
        /* Fallback for non-webkit */
        display: -webkit-box;
        height: 7.0em !important;
        /* Fallback for non-webkit, line-height * 2 */
        line-height: 19px;
        -webkit-line-clamp: 18px;
        /* if you change this, make sure to change the fallback line-height and height */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .blog-title {
        font-size: 20px;
        font-weight: 600;
        display: block;
        display: -webkit-box;
        height: 2.0em;
        line-height: 1.1em;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .blogs {
        text-decoration: none;
        color: black;
    }

    .blogs .blog:hover {
        background-color: #f5f5f5;
        color: black;
    }

    .file {
        border: 1px solid #dedede;
        border-radius: 2px;
        padding: 0;
        background-color: #fff;
        position: relative;
    }

    .file-name {
        text-align: center;
        padding: 10px;
    }

    .file .icon {
        padding: 15px 10px;
        display: table;
        width: 100%;
        text-align: center;
    }

    .file .icon,
    .file .image {
        height: 150px;
        overflow: hidden;
        background-size: cover;
        background-position: top;
    }

    .icon {
        height: 150px !important;
    }

    .icon img {
        height: 130px;
        width: 100%;
        object-fit: cover;
    }

    .icon i {
        font-size: 90px;
        color: black;
    }

    li {
        list-style: none;
    }
    iframe{
        width: 100% !important;
        height: 200px !important;
    }

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('assets/css/spotlight.min.css') }}">
<link rel="preload" href="{{ asset('assets/js/spotlight.bundle.js') }}" as="script">


<div class="page-banner" style="background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.214), rgba(0, 0, 0, 0.214)), url({{ asset('uploads/'.$page->page_img ) }})">
    <h1> {{ $page->title  }}</h1>
</div>
<div class="container ">
    <br>
    @if($page->url=="/contact")

    <section class="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 left-contact">
                    <h4> <b>Send Us A Message</b></h4>
                    <br>
                    <form class="form-inline " name="contact" method="post" action="{{ route('message.store') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-12  col-md-4">
                                <input type="text" class="form-control" name="name" id="yourName" placeholder="Your Name">
                                <input type="hidden" class="form-control" name="category" value="message">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <input type="email" class="form-control" name="email" id="yourEmail" placeholder="Your Email">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Phone Number">
                            </div>
                            <br>
                            <br>
                            <div class="form-group form-textarea col-sm-12 col-md-12">
                                <textarea id="textarea" class="form-control" name="report" rows="6" placeholder="Your Messages"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-success btn-rounded   " style="background-color:#1A7BB7;">Send Message</button>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissable txt-light">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{ session('success') }}
                        </div>
                        @endif
                    </form> <!-- End Form -->
                </div> <!-- End col -->
                <div class="col-md-4 right-contact">

                    <ul class="address">
                        <li>
                            <h4><b>Contact Info</b></h4>
                            <br>
                        </li>
                        <li>
                            <p><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp; Phase 1, Federal Secretariat Complex, Abuja, Nigeria.</p>
                        </li>
                        <li>
                            <p><i class="bi bi-phone-fill"></i>&nbsp;&nbsp; 09-1234567 +234 803 456 7890</p>
                        </li>
                        <li>
                            <p> <i class="bi bi-envelope-fill"></i>&nbsp;&nbsp; info@health.gov.ng, report@health.gov.ng</p>
                        </li>
                        <li>
                            <p> <i class="bi bi-clock-fill"></i>&nbsp;&nbsp; Mon-Fri 09:00 - 17:00</p>
                        </li>
                    </ul>
                </div> <!-- End col -->
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section Google Map -->
    <div class="mt-5">
        <div class="row">
            <div style="width:100%; height:400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.25176976016147!2d7.4970001090628555!3d9.061181467662651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bba0d1893b3%3A0x444a6bd9c9d7da7a!2sFederal%20Secretariat%20Abuja!5e0!3m2!1sen!2sng!4v1670968942061!5m2!1sen!2sng" width="600" height="450" style="border:0; width:100%;height:400px;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- End Section -->
    @endif

    @if ($page->main_content == "post")
    @foreach ($allNews as $news)
    <a href="/post/{{ $news->id }}" class="blogs">
        <div class="col-md-12">
            <div class="blog">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-1">
                            <center>
                                <p class="m-0">{{ Carbon\Carbon::parse($news->published_at)->format('D')  }}</p>
                                <h5>{{ Carbon\Carbon::createFromTimeString($news->published_at)->format('g:i a')  }}</h5>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <div class="txt ps-4">
                                <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
                                        </svg> <b>{{ $page->title }} -</b></span>{{ Carbon\Carbon::parse($news->published_at)->format('d F Y')  }}</p>
                                <h4 class="blog-title"><b>{!! $news->title !!}</b></h4>
                                <div class="blog-body">
                                    <p>{!! $news->body !!} </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <img src="{{ asset('uploads/'.$news->thumbnail ) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
    {{ $allNews->links() }}
    @endif



    @if($page->main_content == "page_content")
    <br>
    <div class="row">
        <div class="col-md-9">
            <h1 class="py-4 ">{!! $page->row_1_title !!}</h1>
            <div>{!! $page->row_1_content !!}</div>
            <h1 class="py-4 ">{{ $page->row_2_title  }}</h1>
            <div>{!! $page->row_2_content !!}</div>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('uploads/'.$page->side_img ) }}" class="py-4" alt="" style="width: 100%">
            <h4 class="py-1 ">{!! $page->side_title !!}</h4>
            <div style="">{!! $page->side_content !!}</div>
        </div>
    </div>

    @endif

    @if ($page->main_content == "gallery" || $page->main_content == "document")
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <h1 class="py-4 ">{!! $page->row_1_title !!}</h1>
                <div>{!! $page->row_1_content !!}</div>
            </div>
            <div class="row spotlight-group">
                @foreach ($allGallery as $cont )
                @if($cont->extention=="jpg" || $cont->extention=="png" || $cont->extention=="webp")
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 file-box">
                    <div class="file">
                        <div class="icon">
                            <a class="spotlight" href="{{ asset('uploads/'.$cont['resource_link'] ) }}">
                                <img src="{{ asset('uploads/'.$cont['resource_link'] ) }}">
                            </a>
                        </div>
                        <div class="file-name">
                            {{ $cont->description }}
                        </div>
                    </div>
                </div>
                @elseif ($cont->status=="youtube")
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 file-box">
                    <div class="file">
                        <div class="icon">
                            {!! $cont->resource_link !!}
                        </div>
                        <div class="file-name">
                            {{ $cont->description }}
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                    <div class="file">
                        @if ($cont->status=="offline")
                        <a href="{{ asset('uploads/'.$cont['resource_link'] ) }}" target="_blank">
                            <div class="icon">
                                <i class="bi bi-file-earmark-richtext-fill"></i>
                            </div>
                        </a>
                        @else
                        <a href="{{  $cont['resource_link'] }}" target="_blank">
                            <div class="icon">
                                <i class="bi bi-file-earmark-richtext-fill"></i>
                            </div>
                        </a>
                        @endif
                        <div class="file-name">
                            {{ $cont->description }}

                            <br>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </div>

    @endif
</div>
<br>
<br>


<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/spotlight.bundle.js') }}" defer></script>

@endsection
