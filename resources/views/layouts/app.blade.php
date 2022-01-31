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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    
    <!-- Icon -->
    <link rel="icon" href="{{ asset ('image/image/logo_biru.png') }}" type="image/gif" sizes="17x17">
    

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
                        <ul class="navbar-nav" >
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
                                    <a class="dropdown-item" href="{{url('/speaker-camp')}}">Mhysa Speaker Camp</a>
                    
                                </div>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link" href="{{url('/contact-us/')}}">Contact Us</a>
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

        <main class="py-4">
            @yield('content')
        </main>

        {{-- livechta --}}
        <div class="fixed-btn" id="fixedbuton" style="position: fixed;bottom: 10%;
        right: 3%;background: #223844;width: 155px;height: 54px;line-height: 45px;
        text-align: center;border-radius: 3px;box-shadow: 2px 2px 2px #000;
        cursor: pointer;z-index: 3;">
            <a href="{{url('/livechat')}}" class="" style=" text-transform: uppercase;font-family: 'Lato';font-weight: 200;color: #fff;">  <img src="{{ asset('image/image/livechat.png') }}" class="mt-2" alt="" width="30px" height="30px"> Live chat</a>
        </div>

        <!-- Footer -->
        <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-5 col-xs-12">
                    
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <a class="footer-black-logo" href="#"><img src="{{ asset ('image/image/Ellipse8.png') }}" alt=""></a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Explore</h4>
                                    <ul class="footer-list">
                                        <p> <a class ="link" href="#" style="">Media Partner</a> </p>
                                        <p> <a class ="link" href="#" style="">Populer Class</a> </p>
                                        <p> <a class ="link" href="#" style="">Testimonial</a> </p>
                                        <!-- <li><a href="#">Blog</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Social</h4>
                                    <ul class="footer-list">
                                        <p> <a class ="link" href="#" style="">Instagram</a> </p>
                                        <p> <a class ="link" href="#" style="">LinkedIn</a> </p>
                                        <p> <a class ="link" href="#" style="">Tiktok</a> </p>
                                        <!-- <li><a href="#">Blog</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4>
                                    <ul class="footer-list">
                                        <p> <a class ="link" href="{{ url('/') }}" style="">Home</a> </p>
                                        <p> <a class ="link" href="#"style="">Program</a> </p>
                                        <p> <a class ="link" href="{{url('/about-us')}}" style="">About</a> </p>
                                        <p> <a class ="link" href="{{url('/contact-us/')}}" style="">Contact</a> </p>
                                        <!-- <li><a href="#">Blog</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Our Partners</h4>

                                    <ul class="list-inline mt-2">
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner">	<img src="{{ asset('image/image/imconnect.png') }}"  alt="imconnect" width="48" height="48"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/BemVokasiUB.png') }}"  alt="BemVokasiUB" width="45" height="45"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/Sejutacita.PNG') }}"  alt="SejutaCita" width="48" height="48"></a></li>
                                    </ul>
                                    <ul class="list-inline mt-2">
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/paradigma.PNG') }}"  alt="paradigma" width="48" height="48"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/Fiestaradio.png') }}"  alt="Fiestaradio" width="48" height="48"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/Himbara.PNG') }}"  alt="Himbara" width="48" height="48"></a></li>
                                    </ul>

                                    <ul class="list-inline mt-2">
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/Narc.png') }}"  alt="Narc" width="48" height="48"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/CiptaPrestasi.png') }}"  alt="CiptaPrestasi" width="48" height="48"></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank" title="Our Partner"><img src="{{ asset('image/image/QLP.PNG') }}"  alt="QLP" width="50" height="50"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="copyright" style="text-align: center;justify-content:center;display:flex">
                    <p>
                        Copyright © 2022 All rights reserved | This template
                    </p>
                    
                </div>
                <div class="copyright" style="text-align: center;justify-content:center;display:flex">
                    <p>
                        is made with by Mhysa Learning
                    </p>
                    
                </div>
            </div>
        </footer>
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
