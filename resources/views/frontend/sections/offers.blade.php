@extends('frontend.layouts.layout')
@section('content')
<section id="features">
    <div class="section light-bg" id="">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">{{ $offers_settings->title }}</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                    {{ $offers_settings->sub_title }}<br>
                </p>
            </div>
            <div class="img-gallery owl-carousel owl-theme">
                @foreach ($offers as $offer )
                    <div class="mm">
                        <img src="{{ asset($offer->image) }}" alt="image">
                        <p>{{ $offer->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
