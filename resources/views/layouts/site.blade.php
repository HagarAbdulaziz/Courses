<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app() -> getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">



</head>
<body>

@yield('content')






<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/popper.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/animated.headline.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/gijgo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.barfiller.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/hover-direction-snake.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/contact.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.form.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/mail-script.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>







@yield('script')
</body>
</html>

