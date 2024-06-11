<section class="pricing-page section-space" style="padding-top: 40px;padding-bottom: 70px;">
    @php [$remaining, $last] = splitWordsFromEnd($element->first()->title, 3);
    @endphp
    <div class="container">
        <div class="sec-title sec-title--center">
            <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>
            <h3 class="sec-title__title">{{ $remaining ?? '' }} <br/> {{ $last ?? '' }}</h3><!-- /.sec-title__title -->
        </div>
        <div class="pricing-page__main-tab-box tabs-box">
            <div class="row gutter-y-30 fadeInUp animated" data-wow-delay="200ms">
                @foreach($element as $index=>$row)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="pricing-card">
                            <div class="pricing-card__top">
                                <div class="pricing-card__top__content" style="text-align: center;">
                                    <span class="service-card-two__icon {{ get_flash_card_icons($index) }}"></span>
                                    <h2 class="pricing-card__title">{{$row->list_title ?? ''}}</h2>
                                </div>
                                <div class="pricing-card__top__bg" style="background-image: url({{ $row->image ? asset(imagePath($row->image)) : asset('assets/frontend/images/pricing/pricing-t-bg-1-2.jpg')}});">
                                </div>
                            </div>
                            <div class="pricing-card__content h-100">
                                <p class="pricing-card__text pricing-card__list text-align-justify">
                                    {{$row->list_description ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

