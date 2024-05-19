<div class="about-two__image">
        <div class="about-two__image__inner">
            <img data-src="{{ asset(imagePath($data['homepage']->image)) }}" alt="about" class="about-two__image__one lazy">
            @if ($data['homepage']->video )
                <div class="experience {{ $data['homepage']->image_position == 'left' ? 'about-two__experience':'about-two__experience2' }}">
                    <div class="experience__inner">
                        <div class="video-one__wrapper" style="padding-top: 0px; padding-bottom: 0px; background-image: url({{ asset('assets/frontend/images/shapes/reliable-shape-1-1.png') }});">
                            <a href="{{$data['homepage']->video }}" class="video-button video-button--large video-popup" style="width: 90px;height: 90px;margin: 10px;background-color: #f9fafc;">
                                <span class="icon-play"></span>
                                <i class="video-button__ripple"></i>
                            </a>
                        </div>
                        <p class="experience__text">Click to<br> view</p>
                    </div>
                @endif
            </div><!-- /.experience -->
        </div><!-- /.about-two__image__inner -->
    </div>

