<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iTeckFix Official</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <script src="iteckfix/scripts/jquery.min.js"></script>
    <script src="iteckfix/scripts/main.js"></script>
    <link rel="stylesheet" href="iteckfix/css/bootstrap-grid.css">
    <link rel="stylesheet" href="iteckfix/css/style.css">
    <link rel="stylesheet" href="iteckfix/css/glide.css">
    <link rel="stylesheet" href="iteckfix/css/magnific-popup.css">
    <link rel="stylesheet" href="iteckfix/css/content-box.css">
    <link rel="stylesheet" href="iteckfix/css/contact-form.css">
    <link rel="stylesheet" href="iteckfix/css/media-box.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/noUiSlider/nouislider.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/noUiSlider/custom-nouiSlider.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet" type="text/css">
    <!--  END CUSTOM STYLE FILE  -->
    
<!-- Start of Async Callbell Code -->
    <script>
    window.callbellSettings = {
        token: "4t7hPk327mN7NMMP3VgVpYKu"
    };
    </script>
    <script>
    (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
    </script>
    <!-- End of Async Callbell Code -->


</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-top-logo menu-float" >
        <div class="container">
            <div class="menu-brand">
                <a href="/">
                    <img class="logo-default scroll-hide" src="media/logo.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li><a href="/" >Home</a></li>
                    <li><a href="service" >Services</a></li>
                    <li><a href="track">Track</a></li>
					<li><a href="faqs">FAQs</a></li>
					<li><a href="#">E-Store</a></li>
                    <li><a href="team">Team</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li class="nav-label">
                        <ul>
                        
                        @if (Route::has('login'))
                            @auth
                            
                            <a href="{{ url('/home') }}"><div class="btn btn-success">&nbsp My Account &nbsp</div></a>
                            @else 
                    
                            <a href="{{ route('login') }}"><div class="btn btn-success btn-sm">&nbsp Login &nbsp</div></a> &nbsp
                            @if (Route::has('register'))       
                    
                            <a href="{{ route('register') }}"><div class="btn btn-success btn-sm">&nbsp Register &nbsp</div></a>
                            @endif
                        
                            @endauth
                        
                        @endif
                        </ul>
                    </li>  
                           
                    
                </ul>
                <div class="menu-right">
                    
                    <form role="search" method="get" id="searchform" class="search-btn">
                        <div class="search-box-menu">
                            <input type="text" placeholder="Track ID">
                            <i></i>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </nav>