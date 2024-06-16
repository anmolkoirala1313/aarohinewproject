@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])

    <section class="blog-page blog-page--sidebar blog-page--sidebar-list section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-40">
                        @foreach( $data['rows']  as $index=>$row)
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <div class="blog-card__image">
                                        <img data-src="{{ asset(imagePath($row->image))}}" alt="" class="lazy">
                                        <a href="{{ route('frontend.blog.show', $row->slug) }}" class="blog-card__image__link">
                                            <span class="sr-only">{{ $row->title ?? '' }}</span>
                                            <!-- /.sr-only --></a>
                                    </div>
                                    <div class="blog-card__date">
                                        <span class="blog-card__date__day">{{date('d M', strtotime($row->created_at))}}</span>
                                        <span class="blog-card__date__month">{{date('Y', strtotime($row->created_at))}}</span>
                                    </div><!-- /.blog-card__date -->
                                    <div class="blog-card__content">
                                        <h3 class="blog-card__title"><a href="{{ route('frontend.blog.show', $row->slug) }}">
                                                {{ $row->title ?? '' }}
                                            </a></h3>
                                        <p class="blog-card__text">{{ elipsis(strip_tags($row->description ?? '')) }}</p>
                                    </div>
                                    <ul class="list-unstyled blog-card__meta">
                                        <li><a href="{{ route($base_route.'category',$row->blogCategory->slug) }}"><i class="icon-clipboard"></i> {{ $row->blogCategory->title ?? '' }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12">
                            {{ $data['rows']->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
