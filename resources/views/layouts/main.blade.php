<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="description" content="{!! str_limit(strip_tags($settings->description), 100, '...')!!}">
    <meta name="author" content="Zoran Shefot Bogoevski">
    <meta name="keywords"
    content="туристичка-агенција, агенција, патување, туризам, странство, аранжмани, аранжман, тура, грција, бугарија, турција, банско, халкидики, крф, лето, зима, летување, зимување, касандра, tourism, tourists, tour-operator, оператор, папилон, papillon-com-mk, papillon, скопје"/>
    <meta name="news_keywords"
    content="туристичка-агенција, агенција, патување, туризам, странство, аранжмани, аранжман, тура, грција, бугарија, турција, банско, халкидики, крф, лето, зима, летување, зимување, касандра, tourism, tourists, tour-operator, оператор"/>
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/frontend/images/favicon.png">
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

        @include('layouts.footer')
        <!-- JavaScript files placed at the end of the document so the pages load faster -->
        <!-- ================================================== -->
        <!-- Bootstrap core JavaScript -->
        <script src="/frontend/js/jquery.min.js"></script>
        <script src="/frontend/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
        <script src="/frontend/js/meni.js"></script>
        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
