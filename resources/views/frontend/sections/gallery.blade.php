<section id="gallery">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">{{$gallerySettings->title}}</h3>
            <span class="section-divider"></span>
            <p class="section-description">{!! $gallerySettings->sub_title !!}</p>
        </div>
        <div class="row no-gutters">
            @foreach ($galleryItems as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item" data-aos="fade-up">
                        <a href="{{$item->image}}" class="gallery-popup">
                            <img src="{{asset($item->image) }}" alt="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
