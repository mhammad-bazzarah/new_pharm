@extends('frontend.layouts.layout')
@section('content')
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">{{ $about_settings->title }}</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                {!! $about_settings->sub_title !!}<br>
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 about-img" data-aos="fade-right">
                <img src="{{ asset($about_us->image) }}" alt="">
            </div>
            <div class="col-lg-6 content" data-aos="fade-left">
                {!! $about_us->description !!}
            </div>
        </div>
    </div>
</section>
@endsection
