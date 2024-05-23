@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])

    <section class="contact-one section-space">
        <div class="contact-one__bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/contact-bg-1.png')}});"></div>
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="sec-title sec-title--border">
                            <h6 class="sec-title__tagline">contact</h6>
                            <h3 class="sec-title__title">Reach out & <br> Connect with Us</h3>
                        </div>
                        <p class="contact-one__text">
                            Our deep understanding of the enterprise psyche, coupled with multi-dimensional analytical technique enables
                            us to assess issues and suggest solution approaches in alignment with a global vision.
                        </p>
                        <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="contact-one__info__bg" style="background-image: url({{ asset('assets/frontend/images/shapes/contact-info-bg.png') }});">
                            </div>
                            <div class="contact-one__info__content">
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <p class="contact-one__info__text">
                                            <a href="tel:{{ $data['setting_data']->mobile ?? $data['setting_data']->phone ?? '' }}">
                                                {{ $data['setting_data']->mobile ?? $data['setting_data']->phone ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-paper-plane"></span>
                                        </div>
                                        <p class="contact-one__info__text"><a href="mailto:{{ $data['setting_data']->email ?? '' }}"> {{ $data['setting_data']->email ?? '' }}</a></p>
                                    </div>
                                </div>
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <address class="contact-one__info__text"><a href="mailto:{{ $data['setting_data']->email ?? '' }}">
                                                {{ $data['setting_data']->address ?? '' }}
                                            </a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <img data-src="{{ asset('assets/frontend/images/shapes/contact-shape-1-1.png') }}" alt="" class="contact-one__info__image lazy">
                        </div><
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-lg-6">
                    {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'contact-one__form contact-form-validated form-one wow fadeInUp submit_form','novalidate'=>'novalidate']) !!}
                    <div class="contact-one__form__bg" style="background-image: url({{ asset('assets/frontend/images/shapes/contact-info-form-bg.png') }});"></div>
                    <div class="contact-one__form__top">
                        <h2 class="contact-one__form__title">Get In Touch With Us And Get <br>
                            Consultation Support</h2>
                    </div>
                    <div class="form-one__group form-one__group--grid">
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="email" id="email" placeholder="your email">
                        </div>
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="company_name" id="company_name" placeholder="Company name" required>
                        </div>
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="designation" id="designation" placeholder="Designation" required>
                        </div>
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="phone" id="phone" placeholder="Contact Number" required>
                        </div>
                        {{--                            <div class="form-one__control form-one__control--full">--}}
                        {{--                                <select class="selectpicker" aria-label="Choose service">--}}
                        {{--                                    <option selected>Choose service</option>--}}
                        {{--                                    <option value="1">Tiling & concrete</option>--}}
                        {{--                                    <option value="2">Industrial Flooring</option>--}}
                        {{--                                    <option value="3">Vinyl Plank</option>--}}
                        {{--                                    <option value="4">Carpets & rugs</option>--}}
                        {{--                                    <option value="5">Oak Flooring</option>--}}
                        {{--                                    <option value="6">Vein Patterns</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        <div class="form-one__control form-one__control--mesgae form-one__control--full">
                            <textarea name="message" placeholder="Write message"></textarea>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="floens-btn" id="submit-quick-inquiry">
                                <span>send message</span>
                                <i class="icon-right-arrow"></i>
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <img data-src="{{ asset('assets/frontend/images/contact/contact-1-2.jpg') }}" alt="" class="contact-one__image-two wow lazy fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
    </section><!-- /.contact-one section-space -->

    @if($data['setting_data'] && $data['setting_data']->google_map)
        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe src="{{$data['setting_data']->google_map}}" width="800" height="600" style="border:0;" class="map__contact" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </section>
    @endif

@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
