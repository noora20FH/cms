<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
                                        <!-- {{asset('assets/css/custom.css')}} 
                                                {{asset('assets/images/apple-touch-icon.png')}}-->
    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @yield('header')
    
    @yield('content')
    
    @yield('footer')
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
                    
    <!-- ALL JS FILES -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.superslides.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/inewsticker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootsnav.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/images-loded.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

    
</body>
</head>