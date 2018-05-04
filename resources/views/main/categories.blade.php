@extends('layouts.main')
<header>
    <a href="/">
        <img src="/assets/frontend/images/logo.png" alt="logo">
    </a>
</header>
@section('content')
<div class="container-fluid no-padding bg-category">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1 class="category-title">{{ $category->name }}</h1>
		</div>
	</div>
</div>
<div class="container">
    <!-- breadcrumb start -->

    <!--<ol class="breadcrumb">
        <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
        <li class="active">{{ $category->name }}</li>
    </ol>-->
    <!-- breadcrumb end -->
    <!-- main-container start -->
    <div class="row">
	    <div class="col-md-12">
		<div class="category-products">
            @foreach($products as $product)
            <a href="/product/{{ $product->slug }}">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 3%">
                    <img src="/assets/img/products/{{ $product->image }}" class="img img-responsive"
                    alt="{{ $product->title }}">
					<p class="product-title">{{ $product->title }}</p>
                </div>
            </a>
            @endforeach
        </div>
		</div>
    </div>
</div><!--cintainer fluit-->
<!-- main end -->
@include('main.java')
</section>
<!-- main-container end -->
@endsection