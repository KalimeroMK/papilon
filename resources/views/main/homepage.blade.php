@extends('layouts.main')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{$settings->title}}">
<meta itemprop="description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}">
<meta itemprop="image" content="/frontend/images/image.jpg">
<!-- Twitter Card data -->
<meta name="twitter:card" content="{{$settings->image}}">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="{{$settings->title}}">
<meta name="twitter:description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="/frontend/images/image.jpg">
<!-- Open Graph data -->
<meta property="og:locale" content="en_US"/>
<meta property="og:title" content="{{$settings->title}}"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{$settings->mainurl}}"/>
<meta property="og:image" content="/frontend/images/image.jpg"/>
<meta property="og:description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}"/>
<meta property="og:site_name" content="{{$settings->title}}"/>
@include('layouts.menu')
@section('slider')
    <section> <!--main slider start-->
        <div id="frontpage-slider">
            <div class="flexslider">
                @foreach($slides as $slide)
                    <ul class="slides">
                        <li class="slide has-gradient"
                            style="background-image:url('/assets/img/slider/{{ $slide->image }}');">
                            <div class="container d-flex align-items-center justify-content-center">
                                <div class="col-12 slider-content">
                                    <h3 class="text-white text-uppercase text-center">{{ $slide->title }}</h3>
                                    <h1 class="text-white text-uppercase fancy-big-text  text-center">{!! $slide->description !!}</h1>
                                    <div class="col-md-12  text-center">
                                        <a class="btn btn-primary" href="{{ $slide->link }}">Дознај повеќе</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </section> <!-- Main slider end-->
@endsection
@section('content')
    <!-- section start -->

    <section><!-- Promo offers start -->
        <div id="promo-offers" class="container my-4 py-4">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="my-3 section-title">Понуди кои ги препорачуваме</h2>
                </div>
                @foreach($products1 as $products1)
                    <div class="col-md-4">
                        <div class="promo-offer">
                            <div class="single-offer">
                                <img src="/assets/img/products/medium/{{ $products1->imagethumb }}" class="img-fluid"
                                     alt="{{ $products1->title }}"/>
                                <h3 class="entry-title"><a
                                            href="/product/{{ $products1->slug }}">{{ $products1->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- Promo offers end -->
    <section><!-- Other offers -->
        <div id="big-promo-offers" class="col-md-12">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer1.jpg" class="img-fluid" alt="offer"/>
                        <h2>Далечни патувања</h2>
                        <a href="categories/dalechni-destinatsii-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer2.jpg" class="img-fluid" alt="offer"/>
                        <h2>Грција</h2>
                        <a href="/categories/grtsija-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer3.jpg" class="img-fluid" alt="offer"/>
                        <h2>Бугарија</h2>
                        <a href="/categories/bugarija-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer4.jpg" class="img-fluid" alt="offer"/>
                        <h2>Турција</h2>
                        <a href="/categories/turtsija-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Category section start -->
    <section><!-- Last post section start -->
        <div class="my-4 py-4" id="newest-offers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Најнови понуди</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="masonry-offer">
                                @foreach($products2 as $products2)
                                    <div class="single-offer">
                                        <img src="/assets/img/products/medium/{{ $products2->imagethumb }}"
                                             class="img-fluid"
                                             alt="{{ $products2->title }}"/>
                                        <h3 class="entry-title"><a
                                                    href="/product/{{ $products2->slug }}">{{ $products2->title }}</a>
                                        </h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    @foreach($products3 as $products3)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/medium/{{ $products3->imagethumb }}"
                                                 class="img-fluid"
                                                 alt="{{ $products3->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products3->slug }}">{{ $products3->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    @foreach($products4 as $products4)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/medium/{{ $products4->imagethumb }}"
                                                 class="img-fluid"
                                                 alt="{{ $products4->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products4->slug }}">{{ $products4->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="masonry-offer small-horizontal">
                                    @foreach($products5 as $products5)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/{{ $products5->imagethumb }}"
                                                 class="img-fluid"
                                                 alt="{{ $products5->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products5->slug }}">{{ $products5->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="masonry-offer vertical-masonry">
                                    @foreach($products6 as $products6)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/{{ $products6->imagethumb }}"
                                                 class="img-fluid-h"
                                                 alt="{{ $products6->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products6->slug }}">{{ $products6->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    @foreach($products7 as $products7)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/{{ $products7->imagethumb }}"
                                                 class="img-fluid"
                                                 alt="{{ $products7->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products7->slug }}">{{ $products7->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="masonry-offer vertical-masonry  ">
                                    @foreach($products8 as $products8)
                                        <div class="single-offer">
                                            <img src="/assets/img/products/{{ $products8->imagethumb }}"
                                                 class="img-fluid-h"
                                                 alt="{{ $products8->title }}"/>
                                            <h3 class="entry-title"><a
                                                        href="/product/{{ $products8->slug }}">{{ $products8->title }}</a>
                                            </h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Last post section end -->
@endsection

