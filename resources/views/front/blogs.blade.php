@extends('layout.layout') @section('content') @if($seo) @section('description', $seo->description_en) @section('keywords', $seo->keywords_en) @section('author', $seo->author_en) @section('title', $seo->title_en) @endif


<main class="js-page-wrap" data-smooth data-router-wrapper>
    <article data-router-view="experience" class="experience-template-default single single-experience postid-44">

        <div class="o-smooth-section" data-smooth-section>
            <section id="intro" class="c-intro-exp blog-sec o-mask js-transition-mask blog-sec">


                <div class="c-intro-exp__inner">
                    <h1 class="c-into-exp__title o-h2 js-loader-title " style="display: block">
                        Blogs </h1>
                    <h2 class="c-story-so-far__title o-content__title o-h3 " style="display: block">
                        {{$data["blog"]->title}} </h2>


                    <a href="#introduction" class="c-scroll-indicator js-scroll-indicator js-transition-scroll-indicator">
                        <svg width="100%" height="100%" class="c-scroll-indicator__svg-circle c-svg-circle" preserveAspectRatio="none">
                                <circle cx="50%" cy="50%" r="50%" vector-effect="non-scaling-stroke" class="c-scroll-indicator__circle" />
                            </svg>

                        <div class="c-arrow">
                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                <div class="c-arrow__head"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <section id="introduction" class="c-story-so-far js-introduction">
                <div class="o-container">
                    <div class="o-grid u-align-center">
                        <div class="o-cell-11@md">
                            <div class=" c-story-so-far__render">
                                <figure class="c-story-so-far__plane js-plane" data-parallax="-0.1" data-src="{{url(''.CRUDBooster::getResizeImage($data['blog']->image,700,900))}}">
                                    <img src="{{url(''.CRUDBooster::getResizeImage($data['blog']->image,700,900))}}" class="visible-mobile" class="u-hidden-mobile">
                                </figure>
                            </div>


                        </div>
                        <div class="o-cell-28@md o-cell-11@md o-offset-1@md">
                            <div class="o-content">
                                <h2 class="c-story-so-far__title o-content__title o-h3" style="display: block;" data-scroll="blurChars">
                                    {{$data["blog"]->title}} </h2>
                                <div class="o-mask" data-scroll="maskContent">
                                    <div class="o-txt" style="display: block;">
                                        <p>

                                            {!! $data["blog"]->text !!}
                                        </p>

                                    </div>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="example-slider" class="c-gallery o-smooth-section" data-smooth-section>
            <div class="c-gallery__lines">

            </div>
            <div class="o-container">
                <div class="o-grid u-align-center">
                    <div class="o-cell-18@md">
                        <div class="o-content o-content--center">
                            <span class="o-content__label o-sub-title">{{__('Cargo key Blogs')}}</span>
                            <h2 class="o-content__title o-h3">{{__('Related Blogs')}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-gallery__slider">

                <svg viewBox="0 0 2559.95 153.04" class="c-gallery__line" preserveAspectRatio="none">
                        <path d="M-1228.14,121.51c110.47-5.17,272.42-1,438.14,45,296,82,552,88,956,14s702-150,1032-58a873.3,873.3,0,0,0,133.73,26.24"
                            transform="translate(1228.16 -79.66)" x vector-effect="non-scaling-stroke" />
                    </svg>

                <div class="c-slider js-slider">
                    <div class="c-slider__inner js-slider__inner">

                        @foreach($data["blogs"] as $blog)

                        <div class="c-slide js-slide">
                            <div class="c-slide__inner js-slide__inner">
                                <figure class="c-slide__bg js-slide__bg" style="background-image: url('{{url(''.$blog->image)}}" alt="');"></figure>
                            </div>
                            <a href="{{url('/blogs/'.$blog->id)}}" style="pointer-events: auto;cursor: pointer;">
                                <div class="c-slide__content">
                                    <div class="o-content o-content--center">
                                        <div class="o-txt c-slide__text js-slide__text">
                                            <p>
                                                {!! str_limit($blog->text, $limit = 150, $end = '...') !!}


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a>


                        </div>


                        @endforeach




                    </div>
                </div>

                <!-- Prev btn -->
                <button type="button" class="c-slider-btn c-slider-btn--ex c-slider-btn--prev js-slider-btn--prev js-has-arrow">
                        <div class="c-slider-btn__circle c-circle">
                            <div class="c-arrow c-arrow--reversed">
                                <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                    <div class="c-arrow__head"></div>
                                </div>
                            </div>
                        </div>
                    </button>

                <!-- Next btn -->
                <button type="button" class="c-slider-btn c-slider-btn--ex c-slider-btn--next js-slider-btn--next js-has-arrow">
                        <div class="c-slider-btn__circle c-circle">
                            <div class="c-arrow">
                                <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                    <div class="c-arrow__head"></div>
                                </div>
                            </div>
                        </div>
                    </button>

            </div>
        </div>
        <div id="experience-slider" class="hide c-exp-pager c-exp-pager--experience o-smooth-section" data-smooth-section style="display:none;">


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
                                            <div class="o-content o-content--center">
                                                <h2 class="o-content__title o-h3 js-exp-slide__title">
                                                    Adventures </h2>
                                                <h3 class="c-exp-slide__text o-h4 js-exp-slide__text">
                                                    Immersive theatrical events, from a few days long to an entire vacation. </h3>

                                                <a href="../adventures/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
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

                                                <a href="../challenges/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
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
                        <figure class="c-exp-slide__bg o-mask js-exp-slide__mask">
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

                                                <a href="../celebrations/index.html" class="c-exp-slide__btn c-btn-big c-btn-big--small js-has-arrow js-exp-slide__btn">
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

                <!-- Back to home -->
                <a href="{{url('/')}}" class="c-exp-slider-close">
                    <div class="c-exp-slider-close__circle c-circle">
                        <span class="c-exp-slider-close__x">X</span>
                    </div>
                </a>

            </div>
        </div>
        @include('front.footer')


    </article>
</main>

@endsection