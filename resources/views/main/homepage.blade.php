@extends('layouts.main')
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
                                    <h1 class="text-white text-uppercase fancy-big-text  text-center">{!!  $slide->description !!}</h1>
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
                <div class="col-md-4">
                    <div class="promo-offer">
                        <div class="single-offer">
                            <img src="/frontend/images/promo1.jpg" class="img-fluid" alt=""/>
                            <p>Концерти</p>
                            <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-offer">
                        <div class="single-offer">
                            <img src="/frontend/images/promo2.jpg" class="img-fluid" alt=""/>
                            <p>Америка Work & Travel</p>
                            <h3 class="entry-title"><a href="#">Авио билети за Amerika & TraveL</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-offer">
                        <div class="single-offer">
                            <img src="/frontend/images/promo3.jpg" class="img-fluid" alt=""/>
                            <p>Грција</p>
                            <h3 class="entry-title"><a href="#">Свети Влас</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Promo offers end -->

    <section><!-- Other offers -->
        <div id="big-promo-offers" class="col-md-12">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer1.jpg" class="img-fluid" alt=""/>
                        <h2>Далечни патувања</h2>
                        <a href="categories/dalechni-destinatsii-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer2.jpg" class="img-fluid" alt=""/>
                        <h2>Грција</h2>
                        <a href="/categories/grtsija-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer3.jpg" class="img-fluid" alt=""/>
                        <h2>Бугарија</h2>
                        <a href="/categories/bugarija-0" class="btn btn-primary">Погледни повеќе</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-offer fancy-offer">
                        <img src="/frontend/images/offer4.jpg" class="img-fluid" alt=""/>
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
                                <div class="single-offer">
                                    <img src="/frontend/images/fancy1.jpg" class="img-fluid" alt=""/>
                                    <p>Концерти</p>
                                    <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy2.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy3.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="masonry-offer small-horizontal">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy4.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="masonry-offer">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy5.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="masonry-offer">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy6.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="masonry-offer">
                                    <div class="single-offer">
                                        <img src="/frontend/images/fancy7.jpg" class="img-fluid" alt=""/>
                                        <p>Концерти</p>
                                        <h3 class="entry-title"><a href="#">Andre Rieu</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Last post section end -->




@endsection

