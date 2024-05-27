{{--<div class="about-home-five mt-100 mb-80">--}}
{{--    <div class="container">--}}
{{--        <div class="row ">--}}
{{--            <div class="col-12 col-lg-5 col-md-8 col-sm-8">--}}
{{--                <div class="bg-img w-100 bora-20">--}}
{{--                    <img class="hover-scale display-block bora-20 lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-6 ml-65">--}}
{{--                <div class="text-about">--}}
{{--                    @if ($element->first()->subtitle)--}}
{{--                        <div class="text-sub-heading2 text-white pt-8 pb-8 pl-16 pr-16 bg-blue bora-8 display-inline-block">{{ $element->first()->subtitle ?? '' }}</div>--}}
{{--                    @endif--}}
{{--                    <div class="heading4 mt-16">{{ $element->first()->title ?? '' }}</div>--}}
{{--                    <div class="body3 text-secondary mt-2 text-align-justify">  {!! $element->first()->description ?? '' !!}</div>--}}
{{--                    @if($element->first()->button_link)--}}
{{--                        <div class="button-block button-block-2 mt-3 flex-item-center gap-24">--}}
{{--                            <a class="button-share display-inline-block hover-button-black border-none bg-blue text-white text-button pl-28 pr-28 pt-12 pb-12 bora-8" href="{{$element->first()->button_link}}">--}}
{{--                                <span> {{ $element->first()->button ?? 'Reach Out' }}</span></a>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<section class="about-three section-space" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="1500ms">
                <div class="about-three__image">
                    <div class="about-three__image__inner">
                        <img data-src="{{ asset(imagePath($element->first()->image)) }}" alt="" class="about-three__image__one lazy">
                        <div class="about-three__image__shape"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-three__content">
                    <div class="sec-title @@extraClassName sec-title--border">
                        @if ($element->first()->subtitle)
                            <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>
                        @endif
                        <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3>
                    </div>
                    <div class="about-three__text wow fadeInUp animated text-align-justify" data-wow-duration="1500ms">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    @if($element->first()->button_link)
                        <div class="about-three__button wow fadeInUp animated" data-wow-duration="1500ms">
                            <a href="{{$element->first()->button_link}}" class="floens-btn about-three__btn">
                                <span>{{ $element->first()->button ?? 'Reach Out' }}</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</section>
