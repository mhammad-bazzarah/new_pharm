<?php
$footerSocialLinks = App\Models\FooterSocialLink::all();
$footerContactInfos = App\Models\FooterContactInfo::first();
$footerInfos = App\Models\FooterInfo::first();

?>
<footer id="footer">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4">
                <div class="footer-about">
                    <h3>{{ $footerInfos->info }}</h3>
                    <p> </p>
                    <div class="social-links">
                        @foreach ($footerSocialLinks as $fsl)
                            <a href="{{$fsl->url}}"  ><i class="{{$fsl->icon}}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <p>{{ $footerContactInfos->location }}</p>
                    </div>
                    <div>
                        <i class="ion-ios-email-outline"></i>
                        <p>{{ $footerContactInfos->email }}</p>
                    </div>
                    <div>
                        <i class="ion-ios-telephone-outline"></i>
                        <p>{{ $footerContactInfos->phone }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright <strong>{{ $footerInfos->copyright }}</strong>. All Rights Reserved
                </div>
                <div class="credits">
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="{{route('home')}}" class="scrollto">Home</a>
                    <a href="{{route('aboutUs')}}" class="scrollto">About</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </nav>
            </div>
        </div>
    </div>
</footer>
