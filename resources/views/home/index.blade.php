@extends('layouts.frontend')

@section('content')
<style>
    .blog-line {
        font-size: 16px;
        display: block;
        /* Fallback for non-webkit */
        display: -webkit-box;
        height: 7.5em;
        /* Fallback for non-webkit, line-height * 2 */
        line-height: 1.3em;
        -webkit-line-clamp: 6;
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
        height: 2.2em;
        line-height: 1.1em;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .gallery-title {
        display: block;
        display: -webkit-box;
        height: 1em;
        line-height: 1.1em;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .gallery-line {
        display: block;
        display: -webkit-box;
        height: 1em;
        line-height: 1em;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .minister-statement a {
        text-decoration: none
    }

    .news a {
        text-decoration: none;
        color: black
    }

</style>
<div class="">
    <div id="containers">
        <div id="theTarget">
            @foreach ($sliders as $slide )
            @if($slide->category=="home_page")
            <div class="p-5" style="background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.450), rgb(0, 0, 0, 0.450)), url( {{ asset('uploads/'.$slide['image'] ) }})">
                <div class="text text-center p-5">
                    <h1 class="pt-5 display-3">{!! $slide->title !!}</h1>
                    <P class="pt-3">{!! $slide->sub_title !!}</P>
                    <div class="py-5">
                        <a href="{{ $slide->url }}" class="btn btn-success px-5 py-3">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 minister-statement">
            @foreach ($sliders as $slide )
            @if($slide->category=="statement")
            <a href="{{ $slide->url }}">
                <div class="minister-banner" style="background-image:linear-gradient(180deg, rgba(0, 73, 7, 0.827), rgba(0, 73, 7, 0.827)), url( {{ asset('uploads/'.$slide['image'] ) }})">
                    <h2 class="">{!! $slide->title !!}</h2>
                    <div class="">{!! $slide->sub_title !!}</div>
                </div>
            </a>
            @endif

            @endforeach
        </div>

        <div class="col-md-4">
            <div id="carouselExampleFade" class="carousel slide carousel-fade animated-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($caroselSlider as $key=> $slide )
                    <div class="carousel-item @if ($key==1) active @endif" data-bs-interval="5000">
                        <a href="{{ $slide['url'] }}"><img src="{{ asset('uploads/'.$slide['image'] ) }}" class="d-block w-100" alt="..."></a>
                    </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="news">
    <div class="container">
        <div class="pb-5 pt-3">
            <div class="head">
                <h2 class="m-0">Health News</h2>
                <p><span></span><b> recent news and press releases</b></p>
            </div>
            <div class="row mt-4">
                @foreach ($healthNews as $key=> $news )
                @if($key < 3) <div class="col-md-3">
                    <a href="/post/{{ $news->id }}">
                        <div class="each">
                            <div class="back" style="background-image: url({{ asset('uploads/'.$news['thumbnail'] ) }});">
                                <p class="green">{!! $news->excerpt !!}</p>
                            </div>
                            <div class="text">
                                <p class="gray"><b>{{ Carbon\Carbon::parse($news->published_at)->format('d F Y')  }}</b></p>
                                <div class="blog-title">{!! $news->title !!}</div>
                                <div class="blog-line"> {!! $news->body !!}</div>
                            </div>
                            <div class="pan">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
            </div>
            @endif

            @endforeach



            <div class="col-md-3">
                <div class="eachs">
                    <a href="/minister-of-state-for-health">
                        <div class="back" style="background-image: url({{ asset('uploads/'.$ministerHealth['thumbnail'] ) }});">
                            <center>
                                <div class="light">
                                    <p>{!! $ministerHealth['title'] !!}</p>
                                    <span>{!! $ministerHealth['excerpt'] !!}</span>
                                </div>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="eachs mt-3">
                    <a href="/permanent-secretary">
                        <div class="back" style="background-image: url({{ asset('uploads/'.$permanentSecretary['thumbnail'] ) }});">
                            <center>
                                <div class="light">
                                    <p>{!! $permanentSecretary['title'] !!}</p>
                                    <span>{!! $permanentSecretary['excerpt'] !!}</span>
                                </div>
                            </center>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="project">
    <div class="container">
        <div class="pt-4 pb-5">
            <div class="row">
                <div class="col-md-9">
                    <div class="head">
                        <h3>Health Projects</h3>
                    </div>
                    <div class="pro">
                        <div class="row mt-3">
                            @foreach ($siteItems as $item)
                            @if ($item->category =="images_text" && $item->site_area =="project")
                            <div class="col-md-4">
                                <div class="bland">
                                   <a href="{!! $item->url !!}"  style="color: black">
                                    <center>
                                        <img src="{{  asset('uploads/'.$item['text'] )}}"  alt="">
                                        <p>{!! $item->sub_text !!} </p>
                                    </center>
                                   </a>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="center">
                        <div class="head mt-3">
                            <h3>COVID 19 info center</h3>
                        </div>
                        <div class="row mt-3 mb-2">

                            @foreach ($siteItems as $item)
                            @if ($item->category =="text" && $item->site_area =="info_center")
                            <div class="col-md-4">
                                <div class="new">
                                    <a href="{!! $item->url !!}" style="color: black">
                                        <center>
                                            <p>{!! $item->text !!}</p>
                                        </center>
                                    </a>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="help">
                        <center>
                            <h4>Helpdesk & <br> Resources Links</h4>
                        </center>
                        <ul class="">
                            @foreach ($siteItems as $item)
                            @if ($item->category =="links" && $item->site_area =="resource_links")
                            <li>
                                <a href="{{ $item->url }}">{{ $item->text }}</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="pub mt-3">
                        <center>
                            <h4>Publications</h4>
                        </center>
                        <ul class="">
                            @foreach ($siteItems as $item)
                            @if ($item->category =="links" && $item->site_area =="publications")


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                            </svg>
                            <a href="{{ $item->url }}">{{ $item->text }}</a>
                        </li>
                            @endif
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feature">
    <div class="container">
        <div class="pt-4 pb-5">
            <div class="feat">
                <div class="head">
                    <h4><b>Featured Gallery</b></h4>
                    <p><span></span><b> <i>featured gallery and video updates</i></b></p>
                </div>
            </div>
            <div class="row">
                @foreach ($showCaseGallery as $key=> $gal )
                @if($key <= 3) <div class="col-md-4 p-4">
                    <a href="{{ asset('uploads/'.$gal['url'] ) }}" target="_blank">
                        <div class="celes mt-4 " style="background-image: url({{ asset('uploads/'.$gal['text'] ) }});" width="100%">
                            <div class="text">
                                <h5><b class="gallery-title">{!! $gal->sub_text !!}</b></h5>
                                <div class="off">

                                    <div class="gallery-line">{!! $gal->category !!}</div>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            @endif

            @endforeach



        </div>
    </div>
</div>
</div>
<div class="three ">
    <div class="container">
        <div class="pt-4 pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="head">
                        <h5><b>FMoH Newslettter </b></h5>
                        <p><span></span><b> <i>be the first to hear it from us</i></b></p>
                    </div>
                    <div class="from">
                        <div class="inp">
                            <form action="/subscribe" method="POST" >
                                @csrf
                                <input type="email" name="email" placeholder="Enter your email and signup"> <br>
                                <button><b>Signup</b></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    @foreach ($siteItems as $item)
                    @if ($item->category =="images_text" && $item->site_area =="promotions")

                    <a href="{{ $item->url }}" class="">
                        <div class="head">
                            <h5><b>Health Promotions </b></h5>
                            <p> <b> {!! $item->sub_text !!}</b></p>
                        </div>
                        <div class="promo">
                            <img src="{{  asset('uploads/'.$item['text'] )}}" alt="">
                        </div>
                    </a>
                    @endif
                    @endforeach

                </div>
                <div class="col-md-4">
                    @foreach ($siteItems as $item)
                    @if ($item->category =="images_text" && $item->site_area =="downloads")

                    <a href="{{ $item->url }}"  >
                        <div class="head">
                            <h5><b>Important Downloads </b></h5>
                            <p><b>  {!! $item->sub_text !!}</b></p>
                        </div>
                        <div class="promo">
                            <img src="{{  asset('uploads/'.$item['text'] )}}" alt="">
                        </div>
                    </a>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
