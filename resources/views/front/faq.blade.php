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
                                    <h1 class="o-page__title o-h2 js-loader-title js-transition-title">{{__('FAQ')}}</h1>
                                </div>
                                <div class="o-page__inner ">
                                    <div class="o-container">
                
                                <ul class="accordion">
                                  @foreach($data["faq"] as $key=>$item)
                                    <li class="accordion-item {{$key==0?'is-active':''}}">
                                        <h3 class="accordion-thumb">{{$item->title}}</h3>
                                        <p class="accordion-panel">
                                            {{$item->text}}
                                        </p>
                                    </li>
                                    @endforeach
                                    
                                  
                                </ul>
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
