<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="image" content="@yield('image')">
    <meta name="title" content="@yield('title')">
    <meta name="author" content="@yield('author')">

    <meta property="og:description" content="@yield('description')">
    <meta property="og:keywords" content="@yield('keywords')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:author" content="@yield('author')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{url('img/logo.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" type="text/css" href="/temp/slider/css/style.css" />
    <script type="text/javascript" src="/temp/slider/js/modernizr.custom.28468.js"></script>
    <link rel="stylesheet" href="/temp/wp-content/themes/asaro/dist/app.bundle34d1.css?ver=1083550084">
    <link rel="stylesheet" href="/temp/css/normalize.css">

    <link rel="stylesheet" type="text/css" href="slider/css/style.css" />
    <script type="text/javascript" src="/temp/slider/js/modernizr.custom.28468.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
    <noscript>
        <link rel="stylesheet" type="text/css" href="slider/css/nojs.css" />
    </noscript>
    <link rel="stylesheet" href="/temp/wp-content/themes/asaro/dist/app.bundle34d1.css?ver=1083550084">
    <link rel="stylesheet" href="/temp/css/normalize.css">

    <link rel="stylesheet" href="/temp/style.css">

    <!-- @if(LaravelLocalization::getCurrentLocale()=='ar')
    <link rel="stylesheet" href="{{ asset('css/rtl_style.css') }}">
	@endif -->
    <title>
        cargo key - @yield('title')
    </title>

    <style> </style>
</head>

<body>

    <?php
?>

    <body class="is-loading" onscroll="checkScroll()" itemscope>


        <header class="c-site-head js-site-head is-active">
            <div class="c-site-head__inner">
                <button aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation"
                    class="c-toggle-menu js-toggle-menu o-sub-title">
                    <div class="c-burger js-burger">
                        <div class="c-burger__row">
                            <div class="c-burger__line c-burger__line--first js-burger__line--first"></div>
                            <div class="c-burger__line c-burger__line--last js-burger__line--last"></div>
                        </div>
                        <div class="c-burger__row">
                            <div class="c-burger__line c-burger__line--first js-burger__line--first"></div>
                            <div class="c-burger__line c-burger__line--last js-burger__line--last"></div>
                        </div>
                        <div class="c-burger__row">
                            <div class="c-burger__line c-burger__line--first js-burger__line--first"></div>
                            <div class="c-burger__line c-burger__line--last js-burger__line--last"></div>
                        </div>
                    </div>
                    <div class="c-toggle-menu__labels">
                        <div class="c-toggle-menu__label c-toggle-menu__label--open js-toggle-menu__label--open">
                            Navigation</div>
                        <div class="c-toggle-menu__label c-toggle-menu__label--close js-toggle-menu__label--close">Close
                        </div>
                    </div>
                </button>
                <figure class="c-site-head__logo">
                    <a href="{{url('/')}}" title="Back to the homepage">
                        <img src="/temp/images/img/logo.png" alt="cargo logo">
                    </a>
                </figure>

            </div>
            <nav id="main-menu" class="c-site-nav js-site-nav hide">
                <div class="c-site-nav__inner js-site-nav__inner">

                    <div class="c-site-nav__content">
                        <ul id="main-navigation" class="c-site-nav__menu ">

                            @foreach($menus as $item)

                            @if(!isset($item->sons))
                            <li id="menu-item-46" class="nav-item c-site-nav__item">
                                <a class="nav-link  c-site-nav-link js-site-nav-link" href="{{url(''.$item->url)}}">
                                    <div class="c-site-nav-link__inner js-site-nav-link__inner">
                                        <div class="c-site-nav-link__text o-sub-title">{{$item->title_en}}</div>
                                        <div class="c-site-nav-link__arrow c-arrow js-site-nav-link__arrow">
                                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                <div class="c-arrow__head"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endif

                            @if(isset($item->sons))

                            <li id="menu-item-47" class="nav-item c-site-nav__item">
                                <a class="nav-link  c-site-nav-link js-site-nav-link" href="{{url(''.$item->url)}}">
                                    <div class="c-site-nav-link__inner js-site-nav-link__inner">
                                        <div class="c-site-nav-link__text o-sub-title">{{$item->title_en}} >

                                        </div>
                                        <div class="c-site-nav-link__arrow c-arrow js-site-nav-link__arrow">
                                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                <div class="c-arrow__head"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <ul class="sub-ul-menu">
                                    @foreach($item->sons as $m)
                                    <li id="menu-item-77" class="  c-site-nav__item c-site-nav__item--nested">
                                        <a class="nav-link  menu-item-object-experience c-site-nav-link c-site-nav-link--nested"
                                            href="{{url(''.$m->url)}}">
                                            <div class="c-site-nav-link__text o-sub-title">{{$m->title_en}}</div>
                                        </a>
                                    </li>
                                    @endforeach



                                </ul>

                            </li>

                            @endif

                            @endforeach


                            <li id="menu-item-52" class="js-form-trigger nav-item c-site-nav__item">
                                <a class="nav-link js-form-trigger c-site-nav-link js-site-nav-link"
                                    href="#get-in-touch">
                                    <div class="c-site-nav-link__inner js-site-nav-link__inner">
                                        <div class="c-site-nav-link__text o-sub-title" style="color:#eec968">Quote !
                                        </div>
                                        <div class="c-site-nav-link__arrow c-arrow js-site-nav-link__arrow">
                                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                <div class="c-arrow__head"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li id="menu-item-52" class=" nav-item c-site-nav__item">
                                <a class="nav-link  c-site-nav-link js-site-nav-link" href="#get-in-touch">
                                    <div class="c-site-nav-link__inner js-site-nav-link__inner">
                                        <div class="c-site-nav-link__text o-sub-title">AR</div>
                                        <div class="c-site-nav-link__arrow c-arrow js-site-nav-link__arrow">
                                            <div class="c-arrow__line c-arrow__line--first js-arrow-line"></div>
                                            <div class="c-arrow__line c-arrow__line--last js-arrow-head">
                                                <div class="c-arrow__head"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>



                </div>
            </nav>
        </header>
        @yield('content')




        <aside id="get-in-touch" class="c-form-overlay js-form-overlay ">
            <div class="c-form-overlay__inner">
                <div class="o-container">
                    <div class="o-grid u-align-center">
                        <div class="o-cell-28@sm o-cell-18@md">
                            <div class="c-form-overlay__content">

                                <div class="c-form-overlay__content-bg js-form-overlay__content-bg"></div>

                                <button type="button" class="c-modal-close js-form-close">
                                    <svg width="100%" height="100%" class="c-modal-close__circle"
                                        preserveAspectRatio="none">
                                        <circle cx="50%" cy="50%" r="50%" stroke-width="1" stroke-miterlimit="3"
                                            stroke-dasharray="3 3" fill="none" vector-effect="non-scaling-stroke" />
                                    </svg>
                                    <span class="c-modal-close__x">X</span>
                                </button>

                                <div class="c-form-outer js-form-outer">

                                    <div class="o-content o-content--center">
                                        <h3 class="o-content__title c-form__title o-h3 js-form-title">
                                            <span class="js-form-slide">{{__('Get Started Now')}}</span>
                                        </h3>
                                        <div class="o-content__text c-form__message s-form-message">
                                            <p>
                                                <span
                                                    class="js-form-slide">{{__('Thank you for your interested in shipping with us')}}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <form method="post" id="get-in-touch-form" method="post" action="{{url('/request_quote')}}" class="c-form">
                                        <div class="c-form__row c-form__row--1 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--1">
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="company" id="title" class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">company</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" id="first_name" name="follower_name"
                                                        class="js-form-fade">
                                                    <label for="first_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">follower name</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" id="second_name" name="address"
                                                        class="js-form-fade">
                                                    <label for="second_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">address</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-form__row c-form__row--1 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--1">
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="mobile" id="title" class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">mobile</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" id="first_name" name="tel" class="js-form-fade">
                                                    <label for="first_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">tel</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" id="second_name" name="email"
                                                        class="js-form-fade">
                                                    <label for="second_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">email</span>
                                                        </div>
                                                    </label>
                                                </div>





                                            </div>
                                        </div>

                                        <div class="c-form__row c-form__row--1 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--1">

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="title" id="title" class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">Gross Weight</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <select name="trade_term_id" class="js-form-fade select-form">
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>

                                                    </select>
                                                    <label for="first_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">trade_term_id</span>
                                                        </div>
                                                    </label>
                                                </div>


                                                <div class="c-form__input js-form__input">
                                                    <input type="text" id="second_name" name="place_of_loading"
                                                        class="js-form-fade">
                                                    <label for="second_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">place_of_loading</span>
                                                        </div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="c-form__row c-form__row--1 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--1">

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="type_goods" id="title"
                                                        class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">type_goods</span>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="c-form__input js-form__input">
                                                    <select name="shipping_term_id" class="js-form-fade select-form">
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>

                                                    </select>
                                                    <label for="first_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">shipping_term_id</span>
                                                        </div>
                                                    </label>
                                                </div>


                                             

                                            </div>
                                        </div>

                                        <div class="c-form__row c-form__row--2 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--2">
                                                <div class="c-form__input js-form__input">
                                                    <input type="tel" name="height" title="title_supplier"
                                                        id="contact_number" pattern="[0-9-\(\)\+ \s]+"
                                                        class="js-form-fade">
                                                    <label for="contact_number" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">height</span>
                                                        </div>
                                                    </label>
                                                </div>

                                               

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="type_goods" id="title"
                                                        class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">width</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-form__row c-form__row--2 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--2">
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="length" title="title_supplier"
                                                        id="contact_number" 
                                                        class="js-form-fade">
                                                    <label for="contact_number" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">length</span>
                                                        </div>
                                                    </label>
                                                </div>

                                               

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="weight" id="title"
                                                        class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">weight</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        


                                        <div class="c-form__row c-form__row--1 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--1">

                                             
                                                <div class="c-form__input js-form__input">
                                                    <select name="trade_term_id" class="js-form-fade select-form">
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>

                                                    </select>
                                                    <label for="first_name" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">type quote</span>
                                                        </div>
                                                    </label>
                                                </div>


                                                <div class="c-form__input js-form__input">
                                                    <input type="number" id="number_packages" name="number_packages"
                                                        class="js-form-fade">
                                                    <label for="number_packages" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">number packages</span>
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="volume" title="title_supplier"
                                                        id="contact_number" 
                                                        class="js-form-fade">
                                                    <label for="contact_number" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">volume</span>
                                                        </div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="c-form__row c-form__row--2 js-form__row">
                                            <div class="c-form__inputs c-form__inputs--2">
                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="origin" title="title_supplier"
                                                        id="contact_number" 
                                                        class="js-form-fade">
                                                    <label for="contact_number" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">origin</span>
                                                        </div>
                                                    </label>
                                                </div>

                                               

                                                <div class="c-form__input js-form__input">
                                                    <input type="text" name="destination" id="title"
                                                        class="js-form-fade">
                                                    <label for="title" class="o-sub-title">
                                                        <div>
                                                            <span class="js-form-slide">destination</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="c-form__row c-form__row--4 js-form__row">
                                            <label for="message" class="c-form__message-label o-sub-title">
                                                <span class="js-form-slide">Note</span>
                                            </label>
                                            <textarea id="message" name="note" placeholder="Please Type your note."
                                                class="js-form-fade"></textarea>
                                        </div>

                                       

                                        <div class="c-form__row c-form__row--submit js-form-fade">
                                            <button type="submit" class="c-btn-big c-btn-big--small js-has-arrow">
                                                <div class="c-btn-big__inner">
                                                    <div class="c-btn-big__title o-h4 js-btn__text">Send</div>

                                                    <div class="c-arrow">
                                                        <div class="c-arrow__line c-arrow__line--first js-arrow-line">
                                                        </div>
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

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="c-video u-hidden js-video">
            <div class="c-video__inner">

                <div class="c-video__bg js-video-close"></div>

                <button type="button" class="c-modal-close js-video-close">
                    <svg width="100%" height="100%" class="c-modal-close__circle" preserveAspectRatio="none">
                        <circle cx="50%" cy="50%" r="50%" stroke-width="1" stroke-miterlimit="3" stroke-dasharray="3 3"
                            fill="none" vector-effect="non-scaling-stroke" />
                    </svg>
                    <span class="c-modal-close__x">X</span>
                </button>

                <div class="o-container">
                    <div class="o-grid u-align-center">
                        <div class="o-cell-28@sm o-cell-18@md">
                            <div class="c-video__content">
                                <iframe class="js-iframe" src="https://player.vimeo.com/video/291472773" frameborder="0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen
                                    allow="autoplay; encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="c-loader js-loader">
            <div class="c-loader__border js-loader-border"></div>
            <figure class="c-loader__wrap c-loader__wrap--logo">
                <img src="/temp/images/img/logo.png" class="c-loader__logo js-loader-logo" alt="Asaro logo">
            </figure>
            <div class="c-loader__wrap c-loader__wrap--text">
                <p class="o-sub-title js-loader-text">{{__('preparing your journey')}}</p>
            </div>
            <div class="c-loader__line js-loader-line"></div>
            <div class="c-loader__counter js-loader-counter">
                0
            </div>
        </div>

        <script src="/temp/js/jquery.js"></script>

        <script src="{{ asset('jssocials-1.4.0/dist/jssocials.min.js') }}" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $("#share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: ["twitter", "facebook", "linkedin"]
                });
            });


            $('a').click(function () {
                    location.href = $(this).attr('href');
                })
        </script>


        <script type='text/javascript' defer="defer"
            src='/temp/wp-content/themes/asaro/dist/vendor.bundlee9b0.js?ver=905403908'></script>


        <script type='text/javascript' defer="defer"
            src='/temp/wp-content/themes/asaro/dist/app.bundle2d21.js?ver=1183174987'></script>

        <script src="/temp/js/curtains.js"></script>




        <script src="/temp/js/circleMagic.js"></script>
        <script src="/temp/js/circleMagic.js"></script>

        <script type="text/javascript" src="/temp/slider/js/jquery.cslider.js"></script>

        <script type="text/javascript">
            $(function () {

                
                // (Optional) Active an item if it has the class "is-active"
                $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();

                $(".accordion > .accordion-item").click(function () {
                    // Cancel the siblings
                    $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
                    // Toggle the item
                    $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
                });


                $('.c-toggle-menu').click(function () {
                    $('.c-site-nav').toggleClass('hide');
                })

                $('#da-slider').cslider();


            });
        </script>
        <script>
            $('#intro').circleMagic({
                elem: '#intro',
                radius: 7,
                densety: 10,
                color: '#a7adc6',
                //color: 'random',
                clearOffset: 1
            });
            $(window).on("load", function () {
                if ($(document).width() > 640) {
                    $("#logo-sec1").animate({ top: '37%' }, 5500);

                }
                else {
                    $("#logo-sec1").animate({ top: '20%' }, 5500);


                }
            });











        </script>


        <script>

$("#get-in-touch-form").submit(function (e) {

e.preventDefault();
$(document.body).css({ 'cursor': 'wait' });
$(".ajax-request button").prop("disabled", true);

var form = $(this);
var url = form.attr('action');
var msg_alert = document.getElementsByClassName("msg_alert")[0].textContent;
$.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (data) {
       
    }
});

});
</script>


    </body>

</html>