@extends('layouts.main')
@section('slider')
    <section class="sdasdas">
    <header>
        <a href="/">
            <img src="/assets/frontend/images/logo.png" alt="logo">
        </a>
    </header>


    <!-- section slider start -->
    <!-- ================ -->
    <div id="container" class="container-fluid">
        <div class="gallery_slider">
            @foreach($slides as $slide)
                <a href="#">
                    <img src="/assets/img/slider/{{ $slide->image }}" class="img img-responsive"
                         alt="{{ $slide->title }}">
                </a>
            @endforeach
        </div>
    </div>
@endsection
@section('content')
    <!-- section catogory list start -->
    <footer>
        <div class="container-fluid">
            <div class="row box-margin">
                @foreach($categories as $category)
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding">
                        <figure class="wp-caption">
                            <a href="/categories/{{ $category->slug }}">
                                <img src="/assets/img/categories/medium/{{ $category->image }}"
                                     class="img img-responsive"
                                     alt="{{ $category->name }}">
                            </a>
                            <figcaption class="wp-caption-text">{!! $category->name !!}</figcaption>

                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </footer>


    @include('main.java')
    <!-- section java google map start -->
@endsection
</section>