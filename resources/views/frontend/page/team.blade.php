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
                @foreach($data['rows'] as $team)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="team-card__image">
                                <img  data-src="{{ asset(imagePath($team->image)) }}" alt="" class="lazy">
                                <div class="team-card__hover">
                                    @if(@$team->fb_link || @$team->twitter_link || @$team->instagram_link || @$team->linkedin_link)
                                        <div class="team-card__social">
                                            @if($team->fb_link)
                                                <a href="{{ $team->fb_link ?? '#' }}">
                                                    <i class="icon-facebook" aria-hidden="true"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                            @endif
                                            @if($team->twitter_link)
                                                <a href="{{ $team->twitter_link  ?? "#" }}">
                                                    <i class="icon-twitter" aria-hidden="true"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                            @endif
                                            @if($team->instagram_link)
                                                <a href="{{ $team->instagram_link  ?? "#" }}">
                                                    <i class="icon-instagram" aria-hidden="true"></i>
                                                    <span class="sr-only">Instagram</span>
                                                </a>
                                            @endif
                                            @if($team->linkedin_link)
                                                <a href="{{ $team->linkedin_link  ?? "#" }}">
                                                    <i class="icon-linkedin" aria-hidden="true"></i>
                                                    <span class="sr-only">Linked In</span>
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="team-card__identity">
                                        <div class="team-card__identity__inner">
                                            <h3 class="team-card__name"><a>{{$team->title ?? ''}}</a></h3>
                                            <span class="team-card__designation">{{$team->designation ?? ''}}</span>
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
