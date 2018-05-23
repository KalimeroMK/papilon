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
            <ul class="slides">
                @foreach($slides as $slide)
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
            @endforeach
        </ul>
    </div>
</div>
</section> <!-- Main slider end-->
@endsection
@section('content')
<section><!-- src box start -->
 <div id="small-search" class="container">
     <div class="col-md-12">

      <form action="{{ url('/search') }}" method="post">
       {!! csrf_field() !!}
       <div class="row">
           <div class="form-group col-9">
            <label for="date" >Пребарај</label>
            <input type="serach" name="search" id="search" class="form-control" placeholder="Најди понуда...">
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i>Пребарај</button>
        </div>
    </div>
</form>

</div>
</div>

<!-- FFILTER -->

<div class=" py-5" id="frontpage-search-filter">
   <div class="container">
     <div class="col-md-12">
       <h2 class="text-white">Хотелски аранжмани</h2>
   </div>
   <div class="col-md-12">
       <form class="row">
         <div class="form-group mb-0  px-3 col-md-5">
           <label for="destination">Дестинација, Хотел</label>
           <select class="form-control" id="destination">
             <option disabled selected>Дестинација, Хотел</option>
             <option>2</option>
         </select>
     </div>
     <div class="form-group mb-0  px-3 col-md-3">
        <label for="date" >Датум</label>
        <input type="date" name="date" id="date" max="3000-12-31"
        min="1000-01-01" class="form-control">
    </div>
    <div class="col-md-3 d-flex align-items-center">
       <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Пребарај</button>
   </div>
</form>
</div>
</div>
</div>

</section><!-- src box end -->
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
                        <a href="/product/{{ $products1->slug }}"><img
                            src="/assets/img/products/medium/{{ $products1->imagethumb }}"
                            class="img-fluid" alt="{{ $products1->title }}"/></a>
                            <a href="/categories/{{$products1->cat->slug}}"><p>{{$products1->cat->name}}</p></a>
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
                            <a href="categories/dalechni-destinatsii" class="btn btn-primary">Погледни повеќе</a>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="single-offer fancy-offer">
                            <img src="/frontend/images/offer2.jpg" class="img-fluid" alt="offer"/>
                            <h2>Грција</h2>
                            <a href="/categories/grtsija" class="btn btn-primary">Погледни повеќе</a>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="single-offer fancy-offer">
                            <img src="/frontend/images/offer3.jpg" class="img-fluid" alt="offer"/>
                            <h2>Бугарија</h2>
                            <a href="/categories/bugarija" class="btn btn-primary">Погледни повеќе</a>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="single-offer fancy-offer">
                            <img src="/frontend/images/offer4.jpg" class="img-fluid" alt="offer"/>
                            <h2>Турција</h2>
                            <a href="/categories/turtsija" class="btn btn-primary">Погледни повеќе</a>
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
                                        <a href="/categories/{{$products2->cat->slug}}"><p>{{$products2->cat->name}}</p>
                                        </a>

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
                                            class="img-fluid" alt="{{ $products3->title }}"/>
                                            <a href="/categories/{{$products3->cat->slug}}">
                                                <p>{{$products3->cat->name}}</p></a>

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
                                                class="img-fluid" alt="{{ $products4->title }}"/>
                                                <a href="/categories/{{$products4->cat->slug}}">
                                                    <p>{{$products4->cat->name}}</p></a>

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
                                                    <a href="/categories/{{$products5->cat->slug}}">
                                                        <p>{{$products5->cat->name}}</p></a>

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
                                                <div class="masonry-offer vertical-masonry vertikal">
                                                    @foreach($products6 as $products6)
                                                    <div class="single-offer">
                                                        <img src="/assets/img/products/{{ $products6->imagethumb }}"
                                                        class="img-fluid"
                                                        alt="{{ $products6->title }}"/>
                                                        <a href="/categories/{{$products6->cat->slug}}">
                                                            <p>{{$products6->cat->name}}</p></a>

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
                                                            <a href="/categories/{{$products7->cat->slug}}">
                                                                <p>{{$products7->cat->name}}</p></a>

                                                                <h3 class="entry-title"><a
                                                                    href="/product/{{ $products7->slug }}">{{ $products7->title }}</a>
                                                                </h3>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="masonry-offer vertical-masonry vertikal">
                                                            @foreach($products8 as $products8)
                                                            <div class="single-offer">
                                                                <img src="/assets/img/products/{{ $products8->imagethumb }}"
                                                                class="img-fluid"
                                                                alt="{{ $products8->title }}"/>
                                                                <a href="/categories/{{$products8->cat->slug}}">
                                                                    <p>{{$products8->cat->name}}</p></a>

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



