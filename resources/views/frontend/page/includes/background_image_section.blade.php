<section class="projects-three" id="projects" style="    padding-bottom:0px;">
    <div class="projects-three__bg floens-jarallax" data-jarallax data-speed="0.3" style="background-image: url({{ asset('assets/frontend/images/backgrounds/projects-bg-3.jpg') }});"></div><!-- /.projects-three__bg -->
    <div class="container">
        <div class="projects-three__top">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-title @@extraClassName">

                        <h6 class="sec-title__tagline"> {{ $element->first()->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                </div><!-- /.col-lg-8 -->
                <!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.projects-three__top -->
        <div class="projects-three__grid" style="    display: block;">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="reliable-one__text text-align-justify" style="color: #ebe2e2">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="team-two__image__inner" style="max-width: 470px;margin-left: 96px;">
                        <img src="{{ asset(imagePath($element->first()->image)) }}" alt="" style="position: relative; display: block;width: 450px;z-index: 1;">
                    </div>
                </div>
            </div>

        </div><!-- /.projects-three__grid -->
    </div><!-- /.container -->
</section>
