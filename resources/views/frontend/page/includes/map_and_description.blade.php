<section class="faq-one section-space" style="background-color: var(--floens-black2, #2B1E16);background-image: url({{ asset('assets/frontend/images/shapes/contact-info-bg.png') }});">
    @php [$remaining, $last] = splitWordsFromEnd($element->first()->title, 2);
    @endphp
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="faq-one__image">
                    <div class="faq-one__image__inner">
                        @if($setting_data && $setting_data->google_map)
                            <iframe src="{{ $setting_data->google_map }}" style="border:0;width: 560px;height: 735px; border-radius: 8px" allowfullscreen="" loading="lazy"></iframe>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="faq-one__content">
                    <div class="sec-title sec-title--border">
                        <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>
                        <h3 class="sec-title__title" style="color: #f1944b;">{{ $remaining ?? '' }} <br/> {{ $last ?? '' }}</h3>
                    </div>
                    <p class="faq-one__text text-align-justify" style="color:#cbc8c3">
                        {{ $element->first()->description ?? '' }}
                    </p>
                    @if($element->first()->button_link)
                        <a href="{{$element->first()->button_link}}" class="projects-one__btn floens-btn floens-btn--border">
                            <span>{{ $element->first()->button ?? 'Explore more' }}</span>
                            <i class="icon-right-arrow"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
