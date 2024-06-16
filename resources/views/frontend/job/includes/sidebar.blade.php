<aside class="product__sidebar" style="    margin-top: 0px;">
    <div class="product__search-box product__sidebar__item">
        {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'product__search']) !!}
         <input type="text" name="for" placeholder="Search demands.." />
            <button type="submit" aria-label="search submit">
                <span class="icon-search1"></span>
            </button>
        {!! Form::close() !!}
    </div>

    <div class="product__categories product__sidebar__item">
        <h3 class="product__sidebar__title product__categories__title">Categories</h3>
        <ul class="list-unstyled">
            @foreach($data['categories'] as $index=>$category)
                <li>
                    <a href="{{ route($base_route.'category',$category->slug) }}"
                       data-text="{{$category->title}}"><span>
                             {{$category->title}} ({{$category->jobs_count}})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @if(count( $data['latest']) > 0)
        <div class="sidebar__posts-wrapper sidebar__single mt-4">
            <h4 class="sidebar__title sidebar__posts-title">Latest Demands</h4>
            <ul class="sidebar__posts list-unstyled">
                @foreach($data['latest'] as $latest)
                    <li class="sidebar__posts__item">
                        <div class="sidebar__posts__image">
                            <img data-src="{{ asset(imagePath($latest->image)) }}" class="lazy" alt="Latest posts">
                        </div>
                        <div class="sidebar__posts__content">
                            <p class="sidebar__posts__meta"><a href="{{ route($module.'job.show',$latest->slug) }}">
                                    <span class="icon-calendar"></span>
                                    @if(@$job->end_date >= date('Y-m-d'))
                                        {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                    @else
                                        Expired
                                    @endif
                                </a></p>
                            <h4 class="sidebar__posts__title">
                                <a href="{{ route($module.'job.show',$latest->slug) }}">
                                    {{ $latest->title }}
                                </a>
                            </h4>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</aside>


