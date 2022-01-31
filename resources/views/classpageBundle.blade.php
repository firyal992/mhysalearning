<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/speakerlearning.css') }}" >
<link rel="stylesheet" href="{{ asset ('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset ('css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset ('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset ('css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset ('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset ('css/magnific.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('css/home.css') }}">
<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
<script src="{{ asset ('js/vendor/modernizr-2.8.3.min.js') }}" > </script>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mr-5 pt-4">
            <div class="dropdown align-middle d-flex justify-content-start mb-9">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Semua kelas
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/skill-centre2') }}">Bundle</a>
                    <a class="dropdown-item" href="#">Digital Marketing</a>
                    <a class="dropdown-item" href="#">Ms.Office</a>
                </div>
            </div>
        </div>
    
        <div class="col ml-5 pb-3">
            <nav>
                <ul class="pagination d-flex justify-content-end">
                    <li class="page-item px-2 py-2 btn btn-dark">
                    <a class="page-link px-2 py-2 bg-transparent text-light" href="#" aria-label="Previous" style>
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item px-2 py-2 btn btn-outline-dark"><a class="page-link px-2 py-2 bg-transparent" href="#">1</a></li>
                    <li class="page-item px-2 py-2 btn btn-dark">
                    <a class="page-link px-2 py-2 bg-transparent text-light" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <br/>
    <div class="counter-area fix area-padding-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="counter-area fix area-padding-2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-area fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="single-blog ">

                      
                        
                        <div class="blog-image" style="margin-bottom:10px" >
                           

                            <div class="card" href="#" style="    border-top-left-radius: 15px;
                            border-top-right-radius: 15px;">
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000;  opacity: 0.4;
                                filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <a class="image-scale" href="#" style="position: relative;
                                  z-index: 1;">
                                    <img src="{{ asset('image/image/Rectangle82.png') }}" alt="" height="308px" width="100%">
                                </a>
                            </div>
                        </div>
                        
                        <div class="blog-content">
                            <div class="blog-meta" >
                                <span class="admin-type" style="color: #A4778B;font-size:18px;font-family:'Lato';font-weight:600">
                                    UI / UX Design
                                </span>
                               
                            </div>
                            <a href="class-detailBundle">
                                <h4>Design Thinking, Problem Solving, Empathy, User Persona</h4>
                            </a>
                        </div>
                        <div style="background: #A4778B; height: 70px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 16px; color: #fff;">6/9/2021</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;"> 2 Students</i>
                                </div>
                                
                            </div>
                        </div>
                       

                        
                            <h4 class="card-title" style="font-weight: 700; margin-left: 194px; margin-top: 20px; margin-bottom: 31px; color:#A4778B;font-family:'Lato';">Rp. 100.000</h4>
                     

                        <div class="col-2" style=""></div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>
@endsection