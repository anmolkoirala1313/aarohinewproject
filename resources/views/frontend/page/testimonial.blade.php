@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])

    <section class="team-one team-one--page section-space">
        <div class="container">
            @if($data['heading'])
                <div class="sec-title sec-title--center">
                    <h6 class="sec-title__tagline">{{  $data['heading']->subtitle ?? ''  }}</h6>
                    <h3 class="sec-title__title sec-title--border" style="padding-bottom: 18px;">{{ $data['heading']->title ?? '' }}</h3>
                    <div class="reliable-one__text mt-3">{!!  $data['heading']->description ?? '' !!}</div>
                </div>
            @endif
            <div class="row gutter-y-30">
                @foreach($data['rows'] as $testimonial)
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                        <div class="testimonials-card testimonials-card--two" style="width: 100%;">
                            <div class="testimonials-card__bg" style="background-image: url({{ asset('assets/frontend/images/testimonials/testimonials-card-bg.png') }});">
                            </div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__top">
                                <svg class="testimonials-card__quotes__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87 64" fill="none">
                                    <path d="M0 40.1428H17.5714L5.85705 63.5713H23.4285L35.1428 40.1428V5H0V40.1428Z" fill="white"></path>
                                    <path d="M46.8572 5V40.1428H64.4286L52.7142 63.5713H70.2856L82 40.1428V5H46.8572Z" fill="white"></path>
                                    <path d="M22.5714 34.6428H5.5V0.5H39.6428V35.0248L28.1194 58.0713H11.6661L23.0186 35.3664L23.3804 34.6428H22.5714Z" stroke="#C7844F"></path>
                                    <path d="M69.4286 34.6428H52.3572V0.5H86.5V35.0248L74.9766 58.0713H58.5232L69.8758 35.3664L70.2376 34.6428H69.4286Z" stroke="#C7844F"></path>
                                </svg>
                            </div><!-- /.testimonials-card__top -->
                            <div class="testimonials-card__content">
                                <div class="testimonials-card__content__inner">
                                    <p class="testimonials-card__text text-align-justify">"{{ $testimonial->description }}"</p>
                                </div>
                                <div class="testimonials-card__person">
                                    <div class="testimonials-card__person__inner">
                                        <img data-src="{{ asset(imagePath($testimonial->image)) }}" alt="" class="testimonials-card__person__image lazy">
                                        <div class="testimonials-card__person__info">
                                            <h3 class="testimonials-card__person__name">{{ $testimonial->title ?? '' }}</h3>

                                            <span class="testimonials-card__person__designation">{{ $testimonial->position ?? '' }}</span><!-- /.testimonials-card__person__designation -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
