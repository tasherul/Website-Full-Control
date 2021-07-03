
<!DOCTYPE html>
<!--[if lt IE 9 ]><html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]><html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]><html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->

<head>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE TITLE                                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <title>@yield('title')</title>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="brief description here">
    <meta name="keywords" content="insert, keywords, here">
    <meta name="robots" content="index, follow">
    <meta name="author" content="EvenThemes">
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/icon" href="{{url('')}}/storage/app/{{$data[91]->value_1}}">
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:600,700" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Bootstrap -->
    <link href="{{asset('front_assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('front_assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Linearicons -->
    <link href="{{asset('front_assets')}}/vendors/linearicons/css/linearicons.css" rel="stylesheet">
    <!-- Webfont Medical Icons -->
    <link href="{{asset('front_assets')}}/vendors/webfont-medical-icons/css/wfmi-style.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('front_assets')}}/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('front_assets')}}/vendors/owl-carousel/owl.theme.min.css" rel="stylesheet">
    <!-- Magnific popup -->
    <link href="{{asset('front_assets')}}/vendors/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <!-- YTPlayer -->
    <link href="{{asset('front_assets')}}/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets')}}/vendors/bootstrap-datepicker/css/bootstrap.datepicker.css">
    <!-- Template Stylesheet -->
    <link href="{{asset('front_assets')}}/css/base.css" rel="stylesheet">
    <link href="{{asset('front_assets')}}/css/style.css" rel="stylesheet">
</head>

<body id="body" class="wide-layout preloader-active">
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader pos-center">
            <img src="{{asset('front_assets')}}/images/preloader.gif" alt="">
        </div>
    </div>
    <!-- End Preloader -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
    @include('frontend._layout.header')
        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            
            
            @yield('content')  
            
        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
    @include('frontend._layout.footer')
    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Placed at the end of the document so the pages load faster -->
    <!-- =========[ jQuery library ]========= -->
    <script src="{{asset('front_assets')}}/js/jquery-1.12.3.min.js"></script>
    <!-- ========[ Latest Bootstrap ]======== -->
    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap.min.js"></script>
    <!-- ========[ JavaScript Plugins ]======== -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <!-- Magnific popup -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- jQuery Easing v1.3 -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/jquery.easing.1.3.min.js"></script>
    <!-- MixItUp v2.1.11 -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/jquery.mixitup.js"></script>
    <!-- Bootstrap Datepicker -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <!-- YTPlayer -->
    <script type="text/javascript" src="{{asset('front_assets')}}/vendors/YTPlayer/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- =====[ Custom Template JavaScript ]===== -->
    <script type="text/javascript" src="{{asset('front_assets')}}/js/main.js"></script>
</body>

</html>
