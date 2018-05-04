@extends('layouts.main')
<header>
    <a href="/">
        <img src="/assets/frontend/images/logo.png" alt="logo">
    </a>
</header>
@section('content')

<!-- main-container start -->
<!-- ================ -->
<div id="container" class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pictures">
            <div id="container" class="container-fluid">
                <div class="single_slider">
                    @foreach($sliders as $slider)
                    <div>
                       <img src="/assets/img/sliders/medium/{{ $slider->image }}" class="img img-responsive"/>
                   </div>
                   @endforeach

               </div>

           </div>
       </div>
       <div class="col-xs-5-text-center col-sm-5 col-md-6 col-lg-6 headings">
		<div class="product-info">
         <div class="back">
            <p><a href="{{ $product->title }}">Назад</a></p>
        </div>
        <h1 class="product-title">{{ $product->title }}</h1>
        <div class="product-description">{!! $product->description !!}</div>
    </div>
</div>
</div>
</div>
@include('main.java')

<!-- sidebar end -->

<!-- main-container end -->


@endsection

