@extends('layouts.frontend')

@section('content')
<style>
    a{text-decoration: none; }
</style>
<div class="page-banner" style="background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.214), rgba(0, 0, 0, 0.214)), url({{ asset('uploads/'.$post->thumbnail ) }})">

</div>

<div class="container">
    <br>
    @if (!Str::contains($post->slug,"/"))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ol>
      </nav>
    @else
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item" aria-current="{{ $post->slug }}"><a href="{{ $post->slug }}">{{ Str::remove("/",$post->slug ) }}</a></li>
          <li class="breadcrumb-item active" aria-current="{{ $post->id }}"> {{ $post->id }}</li>
        </ol>
      </nav>
    @endif
    <br>
<h1> {{ $post->title  }}</h1>
<hr>
<div class="row">
    <div class="col-md-11">
        <img src="{{ asset('uploads/'.$post->banner ) }}" class="py-4" alt="" style="width: 100%">
        <h5 class="py-4 ">{!! $post->excerpt !!}</h5>
        <div>{!! $post->body !!}</div>

    </div>

</div>
</div>
<br>
<br>
@endsection
