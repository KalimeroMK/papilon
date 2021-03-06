@extends('layouts.main')
@include('layouts.menu')

@section('content')
<section><!-- Categori info start -->
    <div class="col-md-12 my-2 py-4" id="category-header">
        <div class="container my-3 py-4">
            <div class="row align-items-center ">
                <div class="col-md-5">
                    <h1 class="category-title fancy-big-text">{!! $category->name !!}</h1>
                </div>
                <div class="col-md-7 category-desc">

                    {!! $category->description !!}

                </div>
            </div>
        </div>
    </div>
</section><!-- Categori info end -->

<!-- masonry grid item start -->
<div id="promo-offers" class="container my-4 py-4">
    <div class="row">
        @foreach($category->getImmediateDescendants() as $descendant)
        <div class="col-md-4">
            <div class="promo-offer">
               @if($descendant->image)
               <a href="/categories/{{ $descendant->slug }}"><div class="single-offer">
                <img src="/assets/img/categories/{{ $descendant->image }}" class="img-fluid" alt="slika">
                <h3 class="entry-title">{{ $descendant->name }}</h3>
            </div></a>
            @endif

        </div>
    </div>
    @endforeach
</div>
</div>
<!-- masonry grid item end -->

<section><!--categori post list section start-->
    <div id="promo-offers" class="container my-4 py-4">
        <div class="row">
            @foreach($products as $product)

            <div class="col-md-4">
                <div class="promo-offer">
                    <div class="single-offer">
                        <a href="/product/{{ $product->slug }}"><img src="/assets/img/products/medium/{{ $product->image }}" class="img-fluid"
                            alt="{{ $product->title }}"></a>
                            <p>{{$product->cat->name}}</p>
                            <h3 class="entry-title"><a
                                href="/product/{{ $product->slug }}">{{ $product->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $products->links() }}


        </div>
    </section><!--categori post list section end-->

    @endsection