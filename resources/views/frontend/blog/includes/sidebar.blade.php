<div class="sidebar">
    <aside class="widget-area">
        <div class="sidebar__form sidebar__single">
            <h4 class="sidebar__title sidebar__form__title">search here</h4><!-- /.sidebar__title -->
            {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'sidebar__search search-form']) !!}
             <input type="text" name="for"  placeholder="Search Blogs.." />
                <button type="submit" aria-label="search submit">
                    <span class="icon-search1"></span>
                </button>
            {!! Form::close() !!}
        </div>
        @if(count( $data['latest']) > 0)
            <div class="sidebar__posts-wrapper sidebar__single">
                <h4 class="sidebar__title sidebar__posts-title">Latest posts</h4>
                <ul class="sidebar__posts list-unstyled">
                    @foreach($data['latest'] as $latest)
                        <li class="sidebar__posts__item">
                            <div class="sidebar__posts__image">
                                <img data-src="{{ asset(imagePath($latest->image)) }}" class="lazy" alt="Latest posts">
                            </div>
                            <div class="sidebar__posts__content">
                                <p class="sidebar__posts__meta"><a href="{{ route($module.'blog.show',$latest->slug) }}">
                                        <span class="icon-calendar"></span>
                                        {{date('d M Y', strtotime($latest->created_at))}}</a></p>
                                <h4 class="sidebar__posts__title">
                                    <a href="{{ route($module.'blog.show',$latest->slug) }}">
                                        {{ $latest->title }}
                                    </a>
                                </h4>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(count( $data['categories']) > 0)
            <div class="sidebar__categories-wrapper sidebar__single">
                <h4 class="sidebar__title">Categories</h4>
                <ul class="sidebar__categories list-unstyled">
                    @foreach($data['categories'] as $index=>$category)
                        <li><a href="{{ route($base_route.'category',$category->slug) }}">
                                {{$category->title}} <span>({{$category->blogs_count}})</span></a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </aside>
</div>
