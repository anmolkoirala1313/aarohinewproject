<section class="blog-page section-space" style="padding-top: 0px;padding-bottom: 0px;">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-12">
                <div class="blog-details">
                    <div class="sec-title sec-title--border sec-title--center">
                        <h3 class="sec-title__title">{{ $element->first()->subtitle ?? '' }}</h3>
                    </div>
                    <div class="blog-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="blog-card__content">
                            <div class="blog-card__text blog-card__text--two text-align-justify custom-description">
                                {!! $element->first()->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
