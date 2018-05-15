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
@section('content')
    <section><!-- Promo offers start -->
        <div id="promo-offers" class="container my-4 py-4">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="my-3 section-title">Понуди кои ги препорачуваме</h2>
                </div>
                @foreach($products as $products)
                    <div class="col-md-4">
                        <div class="promo-offer">
                            <div class="single-offer">
                                <img src="/assets/img/products/medium/{{ $products->imagethumb }}" class="img-fluid"
                                     alt="{{ $products->title }}"/>
                                <p>{{$products->cat->name}}</p>
                                <h3 class="entry-title"><a
                                            href="/product/{{ $products->slug }}">{{ $products->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- Promo offers end -->

@endsection

