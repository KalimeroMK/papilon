@section('menu')
    <!-- header start -->
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container header-container">
            <a href="/"><img id="logo_img" src="/assets/img/logo/{{ $settings->logo }}"</a>
            <div class="collapse navbar-collapse" id="main-navbar">
                {{--<ul class="navbar-nav ml-auto align-items-center">--}}
                {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="/">Почетна <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {!! $tree !!}
                {{--@foreach($staticpages as $staticpage)--}}
                {{--<li class="nav-item">--}}
                {{--<a href="/{{ $staticpage->slug }}">{{ $staticpage->title }}</a>--}}
                {{--</li>--}}
                {{--@endforeach--}}
                {{--</ul>--}}
            </div>
        </div>
    </nav>
    <!-- header-top end -->


@endsection