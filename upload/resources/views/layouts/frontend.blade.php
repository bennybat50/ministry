<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $page_title }}</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/img/fav-icon.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/skippr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css ') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        .goog-te-gadget-icon {
            display: none;
        }


        .goog-te-gadget-simple {
            background-color: #fff !important;
            border: 0 !important;
            border-radius: 3px;
            font-size: 8px;
            font-weight: 800;
            display: inline-block;
            padding: 2px 10px !important;
            cursor: pointer;
            zoom: 1;
        }

        .goog-te-gadget-simple span {
            color: #3e3065 !important;

        }

        .search-btn {
            widows: 100%;
            display: flex;
            background-color: white
        }

        .search-btn button {
            border: 0px;
            background-color: white;
        }

        .search-form{
            padding: 1px 20px !important;
            border: 0px !important;
            font-size: 14px !important;
        }

        .search-icon {
            font-size: 15px;
            color: #098611;
            margin-right: 10px
        }

    </style>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    @foreach ($siteItems as $item)
                    @if ($item->category =="logo" && $item->site_area =="top_bar")
                    <img src="{{  asset('uploads/'.$item['text'] )}}" alt="" width="200">
                    @endif
                    @endforeach
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @include('partials.nav')
                    </ul>


                </div>
            </div>
        </nav>
        <div class="secondnav">
            <div class="col-md-12">
                <div class="container">
                    <div class="dd">
                        <ul class="rep">

                            @foreach ($siteItems as $item)
                            @if ($item->category =="links" && $item->site_area =="top_bar")
                            <li><a href="{!! $item->url !!}">{!! $item->text !!}</a> </li>
                            <span>|</span>
                            @endif

                            @endforeach

                        </ul>
                        <ul class="rep">
                            <li>
                                <form action="{{ route('search') }}" method="post" class="search-btn">
                                    @csrf
                                    <input type="text" name="search" placeholder="Type Search Word" class="form-control search-form">
                                    <button> <i class="bi bi-search search-icon"></i></button>
                                </form>
                            </li>
                            <span>|</span>
                            <li>
                                <div id="google_translate_element"></div>
                            </li>
                        </ul>




                    </div>
                </div>
            </div>
        </div>

        <main class="">
            <div class="container">
                @if (session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>
            @yield('content')
        </main>

        <div class="container">


            <div class="agent">
                <div class="container">
                    <div class="pt-4 pb-5">
                        <div class="">
                            <h4 class="re"><b>FMOH AGENCIES</b></h4>
                            <div class="carousel mt-4" data-flickity='{ "autoPlay": 1500,"contain": true,"pageDots": false}'>
                                @foreach ($siteItems as $item)
                                @if ($item->category =="images" && $item->site_area =="carosel")
                                <div class="col-md-3">
                                    <div class="">
                                        <img src="{{  asset('uploads/'.$item['text'] )}}" alt="" width="45%">
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="col-md-12">
                <div class="footer">
                    <div class="container">
                        <div class="pt-4 pb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul>
                                        @foreach ($siteItems as $item)
                                        @if ($item->category =="logo" && $item->site_area =="footer")
                                        <li><img src="{{  asset('uploads/'.$item['text'] )}}" alt="" width="200"></li>
                                        @endif
                                        @endforeach
                                        @foreach ($siteItems as $item)

                                        @if ($item->category =="address" && $item->site_area =="footer")
                                        <li class="ipsum"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                            </svg>
                                            <span>{!! $item->text !!}</span></li>
                                        @endif

                                        @if ($item->category =="email" && $item->site_area =="footer")
                                        <li class="ipsum"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg><span>Email : <br> {!! $item->text !!}</span></li>
                                        @endif

                                        @if ($item->category =="phone" && $item->site_area =="footer")
                                        <li class="ipsum"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg><span>Phone : <br> {!! $item->text !!}</span></li>
                                        @endif



                                        @endforeach




                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li class="quick"><b>Quick Links</b></li>
                                        @foreach ($siteItems as $item)
                                        @if ($item->category =="quick_links" && $item->site_area =="footer")
                                        <li><a href="{{ $item->url }}">{!! $item->text !!}</a> </li>
                                        @endif

                                        @endforeach

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li class="quick"><b>FMOH Departments</b></li>
                                        @foreach ($siteItems as $item)
                                        @if ($item->category =="departments" && $item->site_area =="footer")
                                        <li><a href="{{ $item->url }}">{!! $item->text !!}</a> </li>
                                        @endif

                                        @endforeach

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li class="quick"><b>Follow Us</b></li>
                                        <li>
                                            <div class="">
                                                @foreach ($siteItems as $item)
                                                @if ($item->category =="social" && $item->site_area =="footer")
                                                <span>
                                                    <a href="{{ $item->url }}"><img src="{{  asset('uploads/'.$item['text'] )}}" alt="" width="30"></a>
                                                </span>
                                                @endif

                                                @endforeach

                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last">
                    <div class="container">
                        <div class="p-3">
                            <p> © {2022} Federal Ministry of Health. All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/skippr.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(function() {

                var dropdownMenu = $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        });

    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
                , layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $(document).ready(function() {
            $('#google_translate_element').bind('DOMNodeInserted', function(event) {
                $('.goog-te-menu-value span:first').html('Language');
                $('.goog-te-menu-frame.skiptranslate').load(function() {
                    setTimeout(function() {
                        $('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Language');
                    }, 100);
                });
            });
        });

    </script>
</body>
</html>
