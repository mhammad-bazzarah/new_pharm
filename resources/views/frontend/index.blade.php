@extends('frontend.layouts.layout')
@section('content')
    <!-- Intro Section -->
        @include('frontend.sections.intro')
    <!-- #intro -->
    <main id="main">
        <!-- About Us Section-->
            {{-- @include('frontend.sections.about_us') --}}
        <!-- #about -->
        <!-- Offers Section -->
            {{-- @include('frontend.sections.offers') --}}
        <!-- #offers-->
        <!-- Products -->
            @include('frontend.sections.products')
        <!-- #Products -->
        <!-- Our Team Section -->
            {{-- @include('frontend.sections.team') --}}
        <!-- #team -->
        <!-- Gallery Section -->
            @include('frontend.sections.gallery')
        <!-- #gallery -->
        <!-- Contact Section -->
            {{-- @include('frontend.sections.contact') --}}
        <!-- #Contact -->
    </main>
@endsection
