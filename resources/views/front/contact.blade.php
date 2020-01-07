@extends('layout.layout') @section('content') @if($seo) @section('description', $seo->description_en)
@section('keywords',
$seo->keywords_en) @section('author', $seo->author_en) @section('title', $seo->title_en) @endif


<main class="js-page-wrap" data-smooth data-router-wrapper>
        <article data-router-view="page">

            <div class="o-page o-mask js-transition-mask" data-smooth-section>

                <figure class="o-page__bg" data-parallax="0.1" data-parallax-mobile="true">
                    <img src="/temp/images/img/sec1/highlight 2-01.png" alt="Drop">
                </figure>
                <div class="o-page__inner ">
                    <div class="o-container">
                        <div class="o-grid u-align-center service-sec">
                            <div class="o-cell-28@sm o-cell-20@md o-cell-16@lg">
                                <div class="o-content o-content--center">
                                    <h1 class="o-page__title o-h2 js-loader-title js-transition-title">contact us</h1>
                                </div>


                                <div  class="row">

                                    <div class="left-map">
                                        <div class="gmap_canvas">
                                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=damscus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://www.bitgeeks.net"></a>
                                        </div>
                                    
                                    </div>
                                    <div class="right-form">
                                        <form method="post" id="" class="c-form">
                                            <div class="c-form__row c-form__row--2 js-form__row">
                                                <div class="c-form__inputs c-form__inputs--2">
                                                    <div class="c-form__input js-form__input">
                                                        <input type="tel" name="contact_number" title="valid phone numbers only" id="contact_number" pattern="[0-9-\(\)\+ \s]+" class="js-form-fade">
                                                        <label for="contact_number" class="o-sub-title">
                                                            <div>
                                                                <span class="js-form-slide">Phone number + dial code</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="c-form__input js-form__input">
                                                        <input type="email" name="email_address" id="email_address" class="js-form-fade">
                                                        <label for="email_address" class="o-sub-title">
                                                            <div>
                                                                <span class="js-form-slide">Email address</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="action" value="get_in_touch">
                                                </div>
                                            </div>

                                            <div class="c-form__row c-form__row--2 js-form__row">
                                                <div class="c-form__inputs c-form__inputs--2">
                                                    <div class="c-form__input js-form__input">
                                                        <input type="tel" name="contact_number" title="valid phone numbers only" id="contact_number" pattern="[0-9-\(\)\+ \s]+" class="js-form-fade">
                                                        <label for="contact_number" class="o-sub-title">
                                                            <div>
                                                                <span class="js-form-slide">Phone number + dial code</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="c-form__input js-form__input">
                                                        <input type="email" name="email_address" id="email_address" class="js-form-fade">
                                                        <label for="email_address" class="o-sub-title">
                                                            <div>
                                                                <span class="js-form-slide">Email address</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="action" value="get_in_touch">
                                                </div>
                                            </div>


                                            <div class="c-form__row c-form__row--4 js-form__row">
                                                <label for="message" class="c-form__message-label o-sub-title">
                                                    <span class="js-form-slide">Event details</span>
                                                </label>
                                                <textarea id="message" name="message" placeholder="Please provide a brief description of your event requirements, including dates, number of guests and location."
                                                    class="js-form-fade"></textarea>
                                            </div>

                                            <div class="c-form__row c-form__row--5 c-form__checkbox js-form__row js-form-fade">
                                                <div class="c-form__checkbox">
                                                    <input type="checkbox" name="opt_in" id="opt_in">
                                                    <label class="o-sub-title" for="opt_in">
                                                        I would like to sign up to receive email updates from Asaro.
                                                    </label>
                                                </div>
                                                <p class="c-form__policy">
                                                    <a href="privacy-policy/index.html" target="_blank">See Privacy Policy</a>
                                                </p>
                                            </div>

                                            <div class="c-form__row c-form__row--submit js-form-fade">
                                                <button type="submit" class="c-btn-big c-btn-big--small js-has-arrow">
                                                    <div class="c-btn-big__inner">
                                                        <div class="c-btn-big__title o-h4 js-btn__text">SEND MESSAGE</div>

                                                        <div class="c-arrow">
                                                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                                <div class="c-arrow__head"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                                <div class="o-page__link">
                                <a href="{{url('/')}}" class="c-btn">
                                    <span class="o-sub-title">{{__('Back to homepage')}}</span>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            
            @include('front.footer')

        </article>
    </main>
@endsection