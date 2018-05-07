<!-- test -->
<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="http://localhost/LUXIN/assets/images/luxin_fb.jpg" />
    <title>Luxin - Furniture & Decor Boutique</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/font-awesome.min.css">
    <link rel="shortcut icon" href="http://localhost/LUXIN/assets/images/luxin-fav-icon.png" type="image/x-icon">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="mobile-web-app-capable" content="yes" />
    <style type="text/css" title="Default">
    body, div, h1, h2, h3, span, p {
        font-family: 'Raleway', sans-serif !important;
    }
    html {
        height:100%;
    }
    body {
        height:100%;
        margin: 0px;
        font-size: 10pt;
    }
    ::-webkit-scrollbar {
        background-color: rgba(0,0,0,0.5);
        width: 0.75em;
    }
    ::-webkit-scrollbar-thumb {
        background-color:  rgba(255,255,255,0.5);
    }
</style>
</head>
<body>
<section class="heightt">
    

@yield('menu')

@yield('slider')

<div id="page-start"></div>

@yield('content')

<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/frontend/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="/assets/frontend/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.3.1/vivus.js"></script>
<script type="text/javascript" src="/assets/frontend/js/main.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-101485544-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
