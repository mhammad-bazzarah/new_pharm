@extends('frontend.layouts.layout')
@section('content')
<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">{{ $teamSettings->title }}</h3>
            <span class="section-divider"></span>
            <p class="section-description">{{ $teamSettings->sub_title }}</p>
        </div>
        <div class="row" data-aos="fade-up">
            @foreach ($teamMembers as $member)
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset($member->image) }}" alt=""></div>
                        <h4>{{ $member->name }}</h4>
                        <span>{{ $member->job_title }}</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
