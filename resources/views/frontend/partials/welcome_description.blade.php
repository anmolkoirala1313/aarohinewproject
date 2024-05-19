<div class="about-two__content">
        <div class="sec-title sec-title--border">

            <h6 class="sec-title__tagline">{{ $data['homepage']->subtitle ?? 'about us' }}</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">{{ $data['homepage']->title ?? '' }}</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->


        <div class="about-two__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <div class="about-two__text text-align-justify">{!! $data['homepage']->description ?? '' !!}</div><!-- /.about-two__text -->
        </div>
        @if($data['homepage']->link)
            <div class="about-two__button wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <a href="{{ $data['homepage']->link ?? '' }}" class="floens-btn">
                    <span>{{ $data['homepage']->button  ?? 'more about us'}}</span>
                    <i class="icon-right-arrow"></i>
                </a>
            </div>
        @endif
    </div>

