<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Home | Cooking</title>
            <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
               
            <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('/home') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('/home') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>



        <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                      
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +92 3000000000</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>  cooking.online@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li class="sociallinks"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="sociallinks"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                           <!--  <a href="{{url('/home')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a> -->
                           <a href="{{url('/home')}}"><h1 style="text-decoration: none;">Cooking Portal</h1></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                              
                            </div>
                            
                            <div class="btn-group">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                           <ul class="nav navbar-nav">
                            @if(!empty(Auth::user()))

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                 <button type="submit"><li><i class="fa fa-lock"></i> Logout</li></button>
                            </form>
                           @else
                                <li><a href="home"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{url('home')}}"><i class="fa fa-unlock"></i> Register</a></li>
                            @endif
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{url('/home')}}" class="active">Home</a></li>
                                @if(!empty(Auth::user()))
                                    @if(Auth::user()->role == "customer")
                                        <li><a href="{{url('customer-profile')}}">Profile</a></li>
                                    @else
                                        <li><a href="{{url('driver-profile')}}">Profile</a></li>
                                    @endif    
                                @endif
                            </ul>
                        </div>
                    </div>
                   <!--  <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        
        <!--/header-bottom-->
    </header>
    <!--/header-->
                 @yield('content')

<br>
<footer id="footer">
    <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 Cooking Portal </p>
                    <p class="pull-right">Developed by <span><a target="_blank" href="#">Zahid Akbar Jakhar</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>     
    </body>
</html>
