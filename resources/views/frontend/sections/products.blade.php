<section id="pricing" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">{{ $productSettings->title }}</h3>
            <span class="section-divider"></span>
            <p class="section-description">{!! $productSettings->sub_title !!}</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="fade-right">
                    <h3> Medicines</h3>
                    <img id='img1' src="{{ asset('img/tool2.jpg') }}"><br>
                    <a href="{{ route('shop') }}" class="get-started-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box "  data-aos="fade-up">
                    <h3>Tools</h3>
                    <img id='img1' src="{{ asset('img/tool.jpg') }}"><br>
                    <a href="{{ route('shop') }}" class="get-started-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="fade-left">
                    <h3>Seeds</h3>
                    <img id='img1' src="{{ asset('img/seeds/seeds17.jpg') }}"><br>
                    <a href="{{ route('shop') }}" class="get-started-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
