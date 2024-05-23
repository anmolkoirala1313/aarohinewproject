<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url({{asset('assets/frontend/images/shapes/footer-bg-1-1.png')}});"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <a href="/" class="footer-widget__logo">
                            <img class="lazy" data-src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" width="123" alt="">
                        </a>
                        <p class="footer-widget__about-text text-align-justify">
                            {{ $setting_data->description ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    @if($footer_nav_data1!==null)
                        <div class="footer-widget footer-widget--links footer-widget--links-one">
                            <div class="footer-widget__top">
                                <div class="footer-widget__title-box"></div>
                                <h2 class="footer-widget__title">{{ $footer_nav_title1 ?? ''}}</h2>
                            </div>
                            <ul class="list-unstyled footer-widget__links">
                                @foreach(@$footer_nav_data1 as $nav)
                                    @if(empty(@$nav->children[0]))
                                        <li>
                                            <a  href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    @if($footer_nav_data2!==null)
                        <div class="footer-widget footer-widget--links footer-widget--links-two">
                            <div class="footer-widget__top">
                                <div class="footer-widget__title-box"></div>
                                <h2 class="footer-widget__title">{{ $footer_nav_title2 ?? ''}}</h2>
                            </div>
                            <ul class="list-unstyled footer-widget__links">
                                @foreach(@$footer_nav_data2 as $nav)
                                    @if(empty(@$nav->children[0]))
                                        <li>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-xl-3 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="footer-widget footer-widget--contact">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div>
                            <h2 class="footer-widget__title">Get inTouch</h2>
                        </div>
                        <ul class="list-unstyled footer-widget__info">
                            <li><a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->address ?? '' }}</a></li>
                            <li><span class="icon-paper-plane"></span> <a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->email ?? '' }}</a></li>
                            <li><span class="icon-phone-call"></span> <a href="tel:{{ $setting_data->phone ?? $setting_data->mobile }}">{{ $setting_data->phone ?? $setting_data->mobile }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="main-footer__social floens-social">
                            @if(@$setting_data->facebook)
                                <a href="{{ $setting_data->facebook ?? '#' }}">
                                    <i class="icon-facebook" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            @endif
                            @if(@$setting_data->instagram)
                                    <a href="{{ $setting_data->instagram ?? '#' }}">
                                        <i class="icon-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                @endif
                                @if(@$setting_data->youtube)
                                    <a href="{{ $setting_data->youtube ?? '#' }}">
                                        <i class="icon-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                @endif
                                @if(@$setting_data->linkedin)
                                    <a href="{{ $setting_data->linkedin ?? '#' }}">
                                        <i class="icon-linkedin" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <a href="{{ $setting_data->ticktock ?? '#' }}">
                                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="main-footer__bottom__copyright">
                            <p class="main-footer__copyright">
                                &copy; Copyright <span class="dynamic-year"></span> by {{$setting_data->title ?? ''}}. Developed By <a href="https://www.canosoft.com.np/" class="text-white" target="_blank">Canosoft Techonology</a> - All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : asset(imagePath($setting_data->logo_white))}}" width="155" alt="logo-light" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->email ?? '' }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ $setting_data->phone ?? $setting_data->mobile }}">{{ $setting_data->phone ?? $setting_data->mobile }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            @if(@$setting_data->facebook)
                <a href="{{$setting_data->facebook}}">
                    <i class="icon-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
            @endif
            @if(@$setting_data->instagram)
                <a href="{{$setting_data->instagram}}">
                    <i class="icon-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            @endif
            @if(@$setting_data->youtube)
                <a href="{{$setting_data->youtube}}">
                    <i class="icon-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            @endif
            @if(@$setting_data->linkedin)
                <a href="{{$setting_data->linkedin}}">
                    <i class="icon-linkedin" aria-hidden="true"></i>
                    <span class="sr-only">LinkedIn</span>
                </a>
            @endif
            @if(!empty(@$setting_data->ticktock))
                <a href="{{$setting_data->linkedin}}">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                    <span class="sr-only">Tiktok</span>
                </a>
            @endif
        </div>
    </div>
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        {!! Form::open(['route' => $module.'job.search', 'role'=>'search','method'=>'GET', 'class'=>'search-popup__form submit_form','novalidate'=>'novalidate']) !!}
         <input type="text" id="search" name="for"  placeholder="Search Demands..." />
            <button type="submit" aria-label="search submit" class="floens-btn">
                <span class="icon-search"></span>
            </button>
        {!! Form::close() !!}
    </div>
</div>
<!-- /.search-popup -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
        <div class="sidebar-one__logo sidebar-one__item">
            <a href="/" aria-label="logo image">
                <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : asset(imagePath($setting_data->logo_white))}}" width="220" alt="logo-dark" />
            </a>
        </div><!-- /.sidebar-one__logo -->
        <div class="sidebar-one__about sidebar-one__item">
            <p class="sidebar-one__about__text text-align-justify">
                {{ $setting_data->description ?? '' }}
            </p>
        </div><!-- /.sidebar-one__about -->
        <div class="sidebar-one__info sidebar-one__item">
            <h4 class="sidebar-one__title">Information</h4>
            <ul class="sidebar-one__info__list">
                <li><span class="icon-location-2"></span>
                    <address>{{ $setting_data->address ?? '' }}</address>
                </li>
                <li><span class="icon-paper-plane"></span> <a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->email ?? '' }}</a></li>
                <li><span class="icon-phone-call"></span> <a href="tel:{{ $setting_data->phone ?? $setting_data->mobile }}">{{ $setting_data->phone ?? $setting_data->mobile }}</a></li>
            </ul>
        </div>
        <div class="sidebar-one__social floens-social sidebar-one__item">
            @if(@$setting_data->facebook)
                <a href="{{$setting_data->facebook}}">
                    <i class="icon-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
            @endif
            @if(@$setting_data->instagram)
                <a href="{{$setting_data->instagram}}">
                    <i class="icon-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            @endif
            @if(@$setting_data->youtube)
                <a href="{{$setting_data->youtube}}">
                    <i class="icon-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            @endif
            @if(@$setting_data->linkedin)
                <a href="{{$setting_data->linkedin}}">
                    <i class="icon-linkedin" aria-hidden="true"></i>
                    <span class="sr-only">LinkedIn</span>
                </a>
            @endif
            @if(!empty(@$setting_data->ticktock))
                <a href="{{$setting_data->linkedin}}">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                    <span class="sr-only">Tiktok</span>
                </a>
            @endif
        </div><!-- /sidebar-one__social -->
        <div class="sidebar-one__newsletter sidebar-one__item">
            <label class="sidebar-one__title" for="sidebar-email">Reach out and Send us a message</label>
            <a href="{{route('frontend.contact-us')}}" class="floens-btn services-one__top__btn">
                <span>Contact Us</span>
                <i class="icon-right-arrow"></i>
            </a>
        </div><!-- /.sidebar-one__form -->
    </div><!-- /.sidebar__content -->
</aside><!-- /.sidebar-one -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

<script src="{{ asset('assets/frontend/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/swiper/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/slick/slick.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/frontend/js/floens.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets/common/lazyload.js') }}"></script>
<script>
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });
</script>
@yield('js')
@stack('scripts')
</body>

</html>
