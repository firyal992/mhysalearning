<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MHYSA LEARNING</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-1" href="{{ url('/') }}">
                    <img src="{{ asset('image/image/Ellipse8.png') }}" alt="" width="48" height="48" class="d-inline-block ">
                   
                    <div class="nav-brand-font">
                        <h4 class="font-weight-bold" style="margin-top: -40px; margin-left: 65px; "> Mhysa Learning </h4>
                    </div>
                    
                </a>
                <div class="nav-font-item">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav" style="">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home </a>
                            </li>
                            <li class="nav-item dropdown ml-4">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Program
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{url('/skill-centre')}}">Mhysa Skill Center</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('/speaker/learning')}}">Mhysa Speaker Camp</a>
                    
                                </div>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{url('/contact-us/')}}">Contact Us</a>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{(' https://mhysalearning.medium.com/')}}"> Blog</a>
                            </li>
                        @guest
                           <li class="nav-item ml-5 mt-2">
                            <div class="form_toggle">
                                
                                @if (Route::has('login'))
                                <div class="form_toggle-item item-1">
                                    <input id="fid-1" type="radio" name="radio" value="off">
                                    
                                    <label for="" class="btn btn-light"><a class="linkk" href="{{ route('login') }}">{{ __('Login') }}</a></label>
                                </div>
                                @endif

                                @if (Route::has('register'))
                                <div class="form_toggle-item item-2">
                                    <input id="fid-2"  type="radio" name="radio" value="off">
                                    <label for="fid-2" class="active" style="margin-bottom: 10px;"> <a class="linkk2" href="{{ route('register') }}">{{ __('Register') }}</a></label>
                                </div>
                                @endif
                            </div>
                               
                            
                             

        
                           </li>
                        
                       
                    

                    @else
                            <li class="nav-item ml-4 dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="dashboard">
            <h1 class="visually-hidden">Sidebars</h1>
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white text-left bg-dark" style="width: 280px;">
                <a href="/" class="mt-3 text-decoration-none">
                    <div class="text-center dashboard-profile">
                        <img class="mb-2 text-center" src="{{ asset('image/image/Rectangle343.png')}}" alt="Card image cap">
                        <p class="fs-4">{{ Auth::user()->name }}</p> 
                    </div>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column ml-2 mb-auto">
                    <li class="nav-item mt-1 mb-1">
                        <a href="{{url('/dashboard')}}" class="nav-link text-white {{'dashboard'== request()-> path() ? 'active' : '' }} " aria-current="page">
                            <i class="fas fa-columns"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="{{url('/resources')}}" class="nav-link text-white  {{'resources'== request()-> path() ? 'active' : '' }} ">
                            <i class="fas fa-layer-group"></i> Resources
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        {{-- <a href="{{url('/certificateSurvey')}}" class="nav-link text-white"> --}}
                        <a href="{{url('/certificates')}}" class="nav-link text-white {{'certificates'== request()-> path() ? 'active' : '' }}">
                            <i class="fas fa-award"></i> Certificate 
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="{{url('/settings')}}" class="nav-link text-white {{'settings'== request()-> path() ? 'active' : '' }}">
                            <i class="fas fa-cog"></i> Setting
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="{{url('/invoices')}}" class="nav-link text-white {{'invoices'== request()-> path() ? 'active' : '' }}">
                            
                            <i class="fas fa-money-check"></i> Invoice 
                        </a>
                    </li>
                    <li class="nav-item mt-5 mb-5">
                        <a href="{{ route('logout') }}" method="POST" class="nav-link text-white">
                            <i class="fas fa-arrow-right"></i> Sign Out
                        </a>
                    </li>
                </ul>  
            </div>
            <div class="divider"></div>
            @yield('content')
        </div>
        </main>
        <script src="{{ asset ('js/vendor/jquery-1.12.4.min.js') }}"> </script>
        <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset ('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset ('js/magnific.min.js') }}"></script>
        <script src="{{ asset ('js/wow.min.js') }}"></script>
        <script src="{{ asset ('js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset ('js/form-validator.min.js') }}"></script>
        <script src="{{ asset ('js/plugins.js') }}"></script>
        <script src="{{ asset ('js/main.js') }}"></script>
    </div>
</body>
</html>
