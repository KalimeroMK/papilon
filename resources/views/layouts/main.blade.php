<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}">
    <meta name="author" content="Zoran Shefot Bogoevski">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/frontend/images/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/main.css" rel="stylesheet">
    <!-- Flexslider Css -->
    <link rel="stylesheet" href="/frontend/css/flexslider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid mx-0 px-0">
@yield('menu')
@yield('slider')
@yield('content')
<!-- Footer -->
    <div class="col-md-12 py-4" id="footer">
        <footer class="container my-3">
            <div class="row">
                <div class="col-md-4">
                    <p>Информации за папилон</p>
                    <a href="mailto:info@Papilon.mk">{{$settings->email}}</a>
                    <ul class="list-unstyled">
                        <li><a href=""> <i class="fa fa-envelope"> </i>{{ $settings->phone }}</a></li>
                        <li><a href="">Линк 1</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="">Линк 1</a></li>
                        <li><a href="">Линк 1</a></li>
                        <li><a href="">Линк 1</a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <p class="font-size-small">{!!$settings->description!!}</p>
                </div>
                <div class="col-md-12 copyright">
                    <p class="font-size-small">&copy;<a href="{{$settings->mainurl}}">{{$settings->title}}</a></p>

                </div>
        </footer>
        <!-- Footer end -->
    </div>


    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Bootstrap core JavaScript -->
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/frontend/js/libs/jquery-1.7.min.js">\x3C/script>')</script>


    <!-- Implementing Flexslider -->

    <!-- FlexSlider -->
    <script defer src="/frontend/js/jquery.flexslider.js"></script>

    <script type="text/javascript">

        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
@yield('scripts')
</body>
</html>
