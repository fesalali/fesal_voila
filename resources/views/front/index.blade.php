@extends('layout.layout') @section('content') @if($seo) @section('description',
$seo->description_en)
@section('keywords',
$seo->keywords_en) @section('author', $seo->author_en) @section('title', $seo->title_en)
@endif

<main class="js-page-wrap" data-smooth data-router-wrapper>
        <article data-router-view="home">

            <section id="intro" class=" c-intro o-mask js-transition-mask js-hero" data-smooth-section>


                <center>
                    <img src="/temp/images/img/sec1/rock-logo.png"  id="logo-sec1">

                </center>
                <!-- div that will hold our WebGL canvas -->
                <!-- <div id="canvas" ></div> -->

                <!-- div used to create our plane -->
                <div class="c-bg js-bg " style="z-index: 0">

                    <!-- image that will be used as a texture by our plane -->
                    <img src="/temp/images/img/sec1/highlight 2-01.png" crossorigin="anonymous" />
                </div>







                <div class="c-intro__inner">
                    <h1 class="c-intro__title o-h1 js-loader-title js-transition-title">{{__('header_home_page')}}</h1>

                    <div class="c-intro__content">
                        <div class="o-container">
                            <div class="o-grid u-align-center">
                                <div class="o-cell-28@sm o-cell-19@md">
                                    <nav class="c-intro__links c-box-links">

                                        <a href="#incredible-experiences" class="c-box-link c-box-link--intro js-box-link js-has-arrow">

                                            <div class="c-box-link__lines">
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                            </div>

                                            <div class="c-box-link__inner">
                                                <span class="c-box-link__label o-sub-title js-btn__text">{{__('What we do')}}</span>
                                                <div class="c-box-link__bottom">
                                                    <div class="c-box-link__title o-h4">
                                                        {{$data["services"][0]->title}} 
                                                        
                                                        </div>

                                                    <div class="c-arrow">
                                                        <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                        <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                            <div class="c-arrow__head"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>

                                        <a href="#total-support" class="c-box-link c-box-link--intro js-box-link js-has-arrow">

                                            <div class="c-box-link__lines">
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                                <div class="c-box-link__line"></div>
                                            </div>

                                            <div class="c-box-link__inner">
                                                <span class="c-box-link__label o-sub-title js-btn__text">{{__('What we do')}}</span>
                                                <div class="c-box-link__bottom">
                                                    <div class="c-box-link__title o-h4">
                                                    {{$data["services"][3]->title}} 
                                                    </div>

                                                    <div class="c-arrow">
                                                        <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                        <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                            <div class="c-arrow__head"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="incredible-experiences" class="c-what-we-do" data-smooth-section>

                <div class="c-line-wrap c-line-wrap--one u-hidden-mobile">
                    <svg viewBox="0 0 1327.78 2952.52" preserveAspectRatio="none">
                        <path class="c-line c-line--fill c-line--fill-1" d="M.11.49s415.15,96,291.15,576-132,896,340,1284,732,472,692,1092" vector-effect="non-scaling-stroke"
                        />
                        <path class="c-line c-line--fill c-line--fill-2 js-line--fill" d="M.11.49s415.15,96,291.15,576-132,896,340,1284,732,472,692,1092"
                            vector-effect="non-scaling-stroke" />
                        <path class="c-line c-line--dashed" d="M.11.49s415.15,96,291.15,576-132,896,340,1284,732,472,692,1092" vector-effect="non-scaling-stroke"
                        />
                    </svg>
                </div>

                <figure class="c-what-we-do__clock u-hidden-mobile" data-parallax="-0.1">
                    <img src="/temp/wp-content/themes/asaro/static/images/clock.png" alt="">
                </figure>

                <div class="c-what-we-do__inner">
                    <div class="o-container">
                        <div class="o-grid">
                            <div class="o-cell-28@sm o-cell-11@md o-cell-9@lg o-offset-5@md">
                                <div class="c-what-we-do__content o-content">
                                    <div class="o-content__circle-label">
                                        <div class="c-what-we-do__circle o-content__circle">
                                            <svg width="100%" height="100%" class="c-svg-circle" preserveAspectRatio="none">
                                                <circle cx="50%" cy="50%" r="50%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                                            </svg>
                                            <span>01</span>
                                        </div>
                                        <span class="c-what-we-do__label o-content__label o-sub-title">{{$data["services"][0]->title}}</span>
                                    </div>
                                    <h2 class="o-content__title o-h1" data-scroll="blurChars">{{$data["services"][0]->title}}</h2>
                                    <div class="o-mask" data-scroll="maskContent">
                                        <div class="c-what-we-do__text o-txt">
                                            <p>
                                                <span style="font-weight: 400;">
                                                {!! $data["services"][0]->text !!}
                                            </p>

                                        </div>

                                        <div class="o-h3 c-what-we-do__toggle-video js-toggle-video">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="o-cell-28@sm o-cell-12@md o-cell-14@lg">
                                <figure class="c-what-we-do__pirate">
                                    <picture class="lazy">
                                        <source srcset="{{$data['services'][0]->image}}" media="(min-width: 640px)">
                                        <img src="{{$data['services'][0]->image}}" alt="">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="adventure-awaits" class="c-experience o-smooth-section" data-smooth-section>

                <div class="hide c-experience__slider js-experience__slider">
                    <div class="c-exp-slider js-exp-slider">
                        <div class="c-exp-slider__inner js-exp-slider__inner">


                            <article class="c-exp-slide js-exp-slide" data-title="Adventures">
                                <figure class="c-exp-slide__bg o-mask js-exp-slide__mask">
                                </figure>
                                <div class="c-exp-slide__inner">
                                    <div class="o-container">
                                        <div class="o-grid u-align-center">
                                            <div class="o-cell-24@sm o-cell-12@md">
                                                <div class="c-exp-slide__content">
                                                    <div class="o-content ">
                                                        <h2 class="o-content__title o-h3 js-exp-slide__title">
                                                            Adventures </h2>
                                                        <h3 class="c-exp-slide__text o-h4 js-exp-slide__text">
                                                            Immersive theatrical events, from a few days long to an entire vacation. </h3>

                                                        <a href="experiences/adventures/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
                                                            <div class="c-btn-big__inner">
                                                                <div class="c-btn-big__title o-h4 js-btn__text">Discover more</div>

                                                                <div class="c-arrow">
                                                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                                        <div class="c-arrow__head"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="c-exp-slide js-exp-slide" data-title="Challenges">
                                <figure class="c-exp-slide__bg o-mask js-exp-slide__mask">
                                </figure>
                                <div class="c-exp-slide__inner">
                                    <div class="o-container">
                                        <div class="o-grid u-align-center">
                                            <div class="o-cell-24@sm o-cell-12@md">
                                                <div class="c-exp-slide__content">
                                                    <div class="o-content o-content--center">
                                                        <h2 class="o-content__title o-h3 js-exp-slide__title">
                                                            Challenges </h2>
                                                        <h3 class="c-exp-slide__text o-h4 js-exp-slide__text">
                                                            Cleverly created games and challenges, designed to stimulate, engage and entertain. </h3>

                                                        <a href="experiences/challenges/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
                                                            <div class="c-btn-big__inner">
                                                                <div class="c-btn-big__title o-h4 js-btn__text">Discover more</div>

                                                                <div class="c-arrow">
                                                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                                        <div class="c-arrow__head"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="c-exp-slide js-exp-slide" data-title="Encounters">
                                <figure class="c-exp-slide__bg o-mask js-exp-slide__mask" style="background-image: url('../s3-eu-west-2.amazonaws.com/asaro.co.uk/wp-content/uploads/2018/10/03141119/encounters_small.png')">
                                </figure>
                                <div class="c-exp-slide__inner">
                                    <div class="o-container">
                                        <div class="o-grid u-align-center">
                                            <div class="o-cell-24@sm o-cell-12@md">
                                                <div class="c-exp-slide__content">
                                                    <div class="o-content o-content--center">
                                                        <h2 class="o-content__title o-h3 js-exp-slide__title">
                                                            Encounters </h2>
                                                        <h3 class="c-exp-slide__text o-h4 js-exp-slide__text">
                                                            Smaller, one-off events that take place entirely within the comfort and privacy of the yacht. </h3>

                                                        <a href="experiences/encounters/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
                                                            <div class="c-btn-big__inner">
                                                                <div class="c-btn-big__title o-h4 js-btn__text">Discover more</div>

                                                                <div class="c-arrow">
                                                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                                        <div class="c-arrow__head"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="c-exp-slide js-exp-slide" data-title="Celebrations">
                                <figure class="c-exp-slide__bg o-mask js-exp-slide__mask" style="background-image: url('../s3-eu-west-2.amazonaws.com/asaro.co.uk/wp-content/uploads/2018/10/03141114/celebrations_small.png')">
                                </figure>
                                <div class="c-exp-slide__inner">
                                    <div class="o-container">
                                        <div class="o-grid u-align-center">
                                            <div class="o-cell-24@sm o-cell-12@md">
                                                <div class="c-exp-slide__content">
                                                    <div class="o-content o-content--center">
                                                        <h2 class="o-content__title o-h3 js-exp-slide__title">
                                                            Celebrations </h2>
                                                        <h3 class="c-exp-slide__text o-h4 js-exp-slide__text">
                                                            Celebrations with a difference – from birthdays and anniversaries to engagements and retirements. </h3>

                                                        <a href="experiences/celebrations/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
                                                            <div class="c-btn-big__inner">
                                                                <div class="c-btn-big__title o-h4 js-btn__text">Discover more</div>

                                                                <div class="c-arrow">
                                                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                                        <div class="c-arrow__head"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>



                        </div>

                        <!-- Prev btn -->
                        <button type="button" class="c-slider-btn c-slider-btn--exp c-slider-btn--prev js-exp-btn js-exp-btn--prev js-has-arrow">
                            <svg width="100%" height="100%" class="c-svg-circle c-svg-circle--hover c-svg-circle--exp" preserveAspectRatio="none">
                                <circle cx="50%" cy="50%" r="40%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                            </svg>

                            <div class="c-slider-btn__circle c-circle">
                                <div class="c-arrow c-arrow--reversed">
                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                        <div class="c-arrow__head"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-slider-btn__text js-exp-btn__text--prev">
                                <div class="c-slider-btn__text-wrap js-exp-btn__text-wrap"></div>
                            </div>
                        </button>

                        <!-- Next btn -->
                        <button type="button" class="c-slider-btn c-slider-btn--exp c-slider-btn--next js-exp-btn js-exp-btn--next js-has-arrow">
                            <svg width="100%" height="100%" class="c-svg-circle c-svg-circle--hover c-svg-circle--exp" preserveAspectRatio="none">
                                <circle cx="50%" cy="50%" r="40%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                            </svg>

                            <div class="c-slider-btn__circle c-circle">
                                <div class="c-arrow">
                                    <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                    <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                        <div class="c-arrow__head"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-slider-btn__text js-exp-btn__text--next">
                                <div class="c-slider-btn__text-wrap js-exp-btn__text-wrap"></div>
                            </div>
                        </button>

                        <!-- Close slider -->
                        <button type="button" class="c-exp-slider-close js-exp-slider-close">
                            <div class="c-exp-slider-close__circle c-circle">
                                <span class="c-exp-slider-close__x">X</span>
                            </div>
                        </button>

                    </div>
                </div>

                <div class="c-experience__inner js-experience__inner">

                    <figure class="c-experience__splash c-experience__splash--right" data-parallax="-0.05" data-parallax-mobile="true">
                        <div class="c-experience__mask js-slider-out-img">
                            <img srcset="{{url(''.CRUDBooster::getResizeImage($data['services'][1]->image,933,1800))}}" sizes="(max-width: 639px) 555px,
                1100px" src="{{url(''.CRUDBooster::getResizeImage($data['services'][1]->image,933,1800))}}" alt="Splash left" draggable="false">
                        </div>
                    </figure>

                    <figure class="c-experience__splash c-experience__splash--left img-right-sec4" data-parallax="0.05" data-parallax-mobile="true">
                        <div class="c-experience__mask js-slider-out-img">
                            <img srcset="{{url(''.CRUDBooster::getResizeImage($data['services'][2]->image,829,1260))}}" sizes="(max-width: 639px) 555px,
                1100px" src="{{url(''.CRUDBooster::getResizeImage($data['services'][2]->image,829,1260))}}" alt="Splash right" draggable="false">
                        </div>
                    </figure>

                    <div class="c-experience__content">
                        <div class="o-container">
                            <div class="o-grid u-align-center">
                                <div class="o-cell-18@md">
                                    <div class="o-content  right-text-sec2">
                                        <div class="o-content__circle v-style">
                                            <svg width="100%" height="100%" class="c-svg-circle" preserveAspectRatio="none">
                                                <circle cx="50%" cy="50%" r="50%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                                            </svg>
                                            <span>02</span>

                                        </div>


                                        <span class="o-content__label o-sub-title" data-scroll>{{$data['services'][1]->title}}</span>
                                        <h2 class="o-content__title o-h2" data-scroll="maskContent">{{$data['services'][1]->title}}</h2>
                                        <div class="o-grid u-align-center ">
                                            <div class="o-mask">
                                                <div>
                                                    <div class="o-txt o-mask js-slider-out-mask" data-scroll="maskContent">
                                                        <p>
                                                        {!! $data['services'][1]->text !!}
                                                        </p>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-line-wrap c-line-wrap--three u-hidden-mobile my-svg">
                                            <svg viewBox="0 0 845.12 998.28" preserveAspectRatio="none">
                                                <path class="c-line c-line--fill c-line--fill-1" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                                                    vector-effect="non-scaling-stroke" />
                                                <path class="c-line c-line--fill c-line--fill-2 js-line--fill" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                                                    vector-effect="non-scaling-stroke" />
                                                <path class="c-line c-line--dashed" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                                                    vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="c-line-wrap c-line-wrap--two u-hidden-mobile">
                    <svg viewBox="0 0 938.36 1894.84" preserveAspectRatio="none">
                        <path class="c-line c-line--fill c-line--fill-1" d="M.5.07c7.73 56.7 10.31 358.28 595.42 510.36s268.07 618.63 146.92 812-203.63 391.74-108.25 572.17"
                            vector-effect="non-scaling-stroke" />
                        <path class="c-line c-line--fill c-line--fill-2 js-line--fill" d="M.5.07c7.73 56.7 10.31 358.28 595.42 510.36s268.07 618.63 146.92 812-203.63 391.74-108.25 572.17"
                            vector-effect="non-scaling-stroke" />
                        <path class="c-line c-line--dashed" d="M.5.07c7.73 56.7 10.31 358.28 595.42 510.36s268.07 618.63 146.92 812-203.63 391.74-108.25 572.17"
                            vector-effect="non-scaling-stroke" />
                    </svg>
                </div>


                <div class="c-what-we-do__content o-content text-left-sec4">
                    <div class="o-content__circle circl-sec3">
                        <!-- fesal -->
                        <svg width="100%" height="100%" class="c-svg-circle" preserveAspectRatio="none">
                            <circle cx="50%" cy="50%" r="50%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                        </svg>
                        <span>03</span>
                    </div>
                    <h2 class="o-content__title o-h1" data-scroll="maskContent">{{$data['services'][2]->title}} </h2>
                        <div class="o-mask" data-scroll="maskContent">
                            <div class="c-what-we-do__text o-txt">
                                <p>
                                    <span style="font-weight: 400;">
                                    {!! $data['services'][2]->text !!}
                                    </span>
                                </p>

                            </div>



                        </div>
                </div>

            </section>
            <section id="total-support" class="c-how-we-do-it c-accordion js-accordion" data-smooth-section>
                <div class="o-container">
                    <div class="o-grid">
                        <div class="o-cell-28@sm o-cell-13@md">
                            <div class="c-accordion__images ">

                                <figure class="c-accordion-image ">
                                    <div class="c-accordion-image__inner  img-home">
                                        <img srcset="{{url(''.CRUDBooster::getCropImage($data['services'][3]->image,894,866))}}"
                                            sizes="(max-width: 639px) 555px,
                                            1100px" src="{{url(''.CRUDBooster::getCropImage($data['services'][3]->image,894,866))}}">
                                    </div>
                                </figure>



                            </div>
                        </div>
                        <div class="o-cell-28@sm o-cell-9@md o-offset-2@md">
                            <div class="o-content">
                                <div class="o-content__circle-label">
                                    <div class="o-content__circle">
                                        <svg width="100%" height="100%" class="c-svg-circle" preserveAspectRatio="none">
                                            <circle cx="50%" cy="50%" r="50%" vector-effect="non-scaling-stroke" class="c-svg-circle__inner" />
                                        </svg>
                                        <span>04</span>
                                    </div>
                                    <span class="o-content__label o-sub-title">{{$data['services'][3]->title}}</span>
                                </div>
                                <h2 class="o-content__title o-h1" data-scroll="maskContent">{{$data['services'][3]->title}}</h2>

                                <div class="c-accordion__top js-accordion-top">
                                    <div class="o-content__text o-txt o-mask" data-scroll="maskContent">
                                    {!! $data['services'][3]->text !!}
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

                <div class="c-line-wrap c-line-wrap--three u-hidden-mobile">
                    <svg viewBox="0 0 845.12 998.28" preserveAspectRatio="none">
                        <path class="c-line c-line--fill c-line--fill-1" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                            vector-effect="non-scaling-stroke" />
                        <path class="c-line c-line--fill c-line--fill-2 js-line--fill" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                            vector-effect="non-scaling-stroke" />
                        <path class="c-line c-line--dashed" d="M844.37,0c3.37,81-26.59,170.22-112.47,264.08C406.42,619.87,40.29,557.25.5,998.24"
                            vector-effect="non-scaling-stroke" />
                    </svg>
                </div>

            </section>

            @include('front.footer')


        </article>
    </main>

	@endsection