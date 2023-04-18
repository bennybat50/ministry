@extends('layouts.frontend')

@section('content')
<style>
    a {
        text-decoration: none;
    }

    .blog-line {
        font-size: 18px;
        display: block;
        /* Fallback for non-webkit */
        display: -webkit-box;
        height: 4.0em !important;
        /* Fallback for non-webkit, line-height * 2 */
        line-height: 1.3em;
        -webkit-line-clamp: 3;
        /* if you change this, make sure to change the fallback line-height and height */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <hr>
            <div class="container">
                <h4>Pages Results</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            @foreach ($pages_data as $page)
                            <div><a href="{{ $page->url }}">{!!$page->title !!}</a> <br>
                                <p style="text-transform: lowercase; font-size:13px;">{!!$page->row_1_title !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container">
                <h4>Post Results</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            @foreach ($allposts as $post)
                            <div><a href="/post/{{ $post->id }}">{!! $post->title !!}</a> <br>
                                <div class="blog-line" style="text-transform: lowercase; font-size:13px;">{!! $post->body !!}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container">
                <h4>Content Results</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            @foreach ($contentData as $con)
                            <div><a href="/uploads/{{ $con->resource_link }}">{!! $con->slug !!}</a> <br>
                                <div class="blog-line" style="text-transform: lowercase; font-size:13px;">{!! $con->description !!}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="" class="text-bold"><b>Search</b> </label>
            <form action="{{ route('search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 ">
                        <input type="text" name="search" placeholder="Enter any keyword" class="form-control">
                    </div>

                </div>
            </form><br>
            <div class="project">
                <div class="help">
                    <center>
                        <h4>Helpdesk & <br> Resources Links</h4>
                    </center>
                    <ul class="">
                        <li>
                            <p>Feedback & Information</p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </li>
                        <li>
                            <p>Make a Suggestion</p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </li>
                        <li>
                            <a href="/covid-hotlines">COVID-19 Hotlines</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </li>
                        <li>
                            <a href="/reports">iReport</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </li>
                        <li style="border: none;">
                            <a href="/faq">Health FAQs</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="pub mt-3">
                    <center>
                        <h4>Publications</h4>
                    </center>
                    <ul class="">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                            </svg>
                            <a href="/publications">Health Publications</a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                            </svg>
                            <a href="/downloads">Health Circulars</a>
                        </li>
                        <li style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                            </svg>
                            <a href="/downloads">Civil Service Handbook </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
