@extends('layouts.app')

@section('content')
<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >

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

<div id="carouselExampleIndicators" class="carousel slide col-sm-10 mt-3 mx-auto" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/org-duduk-tiga.jpg') }}" width="1232px" height="550" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <p>Tingkatkan Skill Kamu <br>
                Bersama Kami</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/lp-statistic.jpg') }}" width="1232px" height="550" alt="slide2">
            <div class="carousel-caption d-none d-md-block">
                <p>Tingkatkan Skill Kamu <br>
                Bersama Kami</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/laptop.jpg') }}" width="1232px" height="550" alt="slide3">
            <div class="carousel-caption d-none d-md-block">
                <p>Tingkatkan Skill Kamu <br>
                Bersama Kami</p>
            </div>
        </div>
    </div>
    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> --}}
</div>
{{-- Akhir Slide Show --}}


<div class="section-headline text-center">
    <h3>Media Patner</h3>
</div>
<div class="work-proses fix bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="work-proses-inner text-center">
                        <div class="biasa">
                            <img src="{{ asset('image/image/jenius2.png') }}" width="80%">
                        </div>
                        <div class="biasa divstatic">
                            <img src="{{ asset('image/image/gojek2.png') }}" width="70%">
                        </div>
                        <div class="biasa divstatic">
                            <img src="{{ asset('image/image/tokopedia2.png') }}" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter-area fix area-padding-2">
    <div class="container">
        <div class="section-headline text-center">
            <h3>Populer Class</h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-blog ">
                    <div class="blog-image">
                        <a class="image-scale" href="#">
                            <img src="{{ asset('image/image/Rectangle341.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="admin-type">
                                UI / UX Design
                            </span>
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>
                                06 / 09 / 2021
                            </span>
                        </div>
                        <a href="#">
                            <h4>Introduction Figma Prototype</h4>
                        </a>
                    </div>
                    <div class="blog-content" style="background-color: #a4778b;">
                        <div class="blog-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="color:white;">12.00-14.00</p>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-users" style="color:white;"> 2 Students</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="comments-details">
                            <div class="comments-list-img">
                                <img src="{{ asset('image/image/Rectangle343.png') }}" alt="post-author" width="100px">
                            </div>
                            <div class="comments-content-wrap">
                                <span>
                                    <b>Suharto</b>
                                    <br>
                                    Tokopedia
                                </span>
                                <span>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-blog ">
                    <div class="blog-image">
                        <a class="image-scale" href="#">
                            <img src="{{ asset('image/image/Rectangle341.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="admin-type">
                                UI / UX Design
                            </span>
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>
                                06 / 09 / 2021
                            </span>
                        </div>
                        <a href="#">
                            <h4>Introduction Figma Prototype</h4>
                        </a>
                    </div>
                    <div class="blog-content" style="background-color: #223844;">
                        <div class="blog-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="color:white;">12.00-14.00</p>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-users" style="color:white;"> 2 Students</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="comments-details">
                            <div class="comments-list-img">
                                <img src="{{ asset('image/image/Rectangle343.png') }}" alt="post-author" width="100px">
                            </div>
                            <div class="comments-content-wrap">
                                <span>
                                    <b>Suharto</b>
                                    <br>
                                    Tokopedia
                                </span>
                                <span>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-blog ">
                    <div class="blog-image">
                        <a class="image-scale" href="#">
                            <img src="{{ asset('image/image/Rectangle341.png') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="admin-type">
                                UI / UX Design
                            </span>
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>
                                06 / 09 / 2021
                            </span>
                        </div>
                        <a href="#">
                            <h4>Introduction Figma Prototype</h4>
                        </a>
                    </div>
                    <div class="blog-content" style="background-color: #223844;">
                        <div class="blog-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="color:white;">12.00-14.00</p>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-users" style="color:white;"> 2 Students</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="comments-details">
                            <div class="comments-list-img">
                                <img src="{{ asset('image/image/Rectangle343.png') }}" alt="post-author" width="100px">
                            </div>
                            <div class="comments-content-wrap">
                                <span>
                                    <b>Suharto</b>
                                    <br>
                                    Tokopedia
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="section-headline text-center">
        <h3>Our Speaker</h3>
    </div>
    <div class="row">

        <!-- <div class="col-md-3 col-sm-6"> -->
        <!-- <div class="col-md-12 col-sm-4"> -->
        <div class="col-sm-9 col-md-6">
            <div class="our-speaker">

                <div class="speaker-pic">
                    <img src="https://billatowing.com/wp-content/uploads/2016/06/team-1.jpg" alt="">
                </div>

                <div class="speaker-data">
                    <h5>Dika Iriawan</h5>
                    <h4>CEO DikaLearn<h4>
                    <h6>Product Manager</h6>

                </div>

                <!-- speaker socials styling not fixed yet -->
                <ul class="speaker-social">
                    <li><a title="Conference" href="" class="fas fa-microphone fa-styling"></a></li>
                    <li><a title="Workshops" href="" class="fas fa-desktop fa-styling"></a></li>
                    <li><a title="Moderator" href="" class="fas fa-user-friends fa-styling"></a></li>
                    <li><a title="Webinar" href="" class="fas fa-video fa-styling"></a></li>
                </ul>

                <div class="speaker-details">
                    <p>
                        Design Thinking, Problem Solving, Empathy, User Persona
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-9 col-md-6">
            <div class="our-speaker">

                <div class="speaker-pic">
                    <img src="https://billatowing.com/wp-content/uploads/2016/06/team-1.jpg" alt="">
                </div>

                <div class="speaker-data">
                    <h5>Dika Iriawan</h5>
                    <h4>CEO DikaLearn<h4>
                    <h6>Product Manager</h6>

                </div>

                <!-- speaker socials styling not fixed yet -->
                <ul class="speaker-social">
                    <li><a href="" class="fas fa-microphone fa-styling"></a></li>
                    <li><a href="" class="fas fa-desktop fa-styling"></a></li>
                    <li><a href="" class="fas fa-user-friends fa-styling"></a></li>
                    <li><a href="" class="fas fa-video fa-styling"></a></li>
                </ul>

                <div class="speaker-details">
                    <p>
                        Design Thinking, Problem Solving, Empathy, User Persona
                    </p>
                </div>
            </div>

        </div>                
        
    </div>

    <div class="payment-history-area bg-color fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center" style="margin-bottom: 20px">
                        <h3>Testimonial</h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="kuotes">
                        <img src="{{ asset('image/image/quote.png') }}" alt="" style="width: 33.81px;height:34px;">
                    </div>
                    <div class="alumni">
                        <h4>Apa kata alumni</h4>
                        <h4>setelah mengikut </h4>
                        <h4> kelas online</h4>
                    </div>
    
                </div>
    
                <div class="col-md-6">
                    <div class="card card-main border-0 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="card border-0 card-0">
                                        
                                        <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="card border-0 card-0">
                                      <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card border-0 card-0">
                                        <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
    

                    </div>
                    



            </div>
            
            
          
        </div>
    </div>

    <div class="payment-history-area bg-color fix area-padding-2">
        <div class="container">
            <div class="row">
            

                <div class="col-md-6">
                    <div class="card card-main1 border-0 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="card border-0 card-0">
                                        
                                        <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="card border-0 card-0">
                                      <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card border-0 card-0">
                                        <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                        <p class="content mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>

                    </div>
                <div class="col-md-6">
                    <div class="kuotes2">
                        <img src="{{ asset('image/image/quote.png') }}" alt="" style="width: 33.81px;height:34px;">
                    </div>
                    <div class="alumni2">
                        <h4>Apa kata alumni</h4>
                        <h4>setelah mengikut </h4>
                        <h4> kelas online</h4>
                    </div>
    
                </div>
    
              
                    



            </div>
            
            
          
        </div>
    </div>


    <div class="row">

        <div class="col-sm-9 col-md-6">
            <!-- ga tau deh namanya apaan -->
            <div class="our-services" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('https://i.pinimg.com/originals/7a/95/a6/7a95a6abf317320ccfcfccd0fe4771e9.jpg'); background-size: 180%;"> 
                <div class="services-details">
                    <h3> Gabung Kelas </h3>
                    <h5> Bergabung untuk menambah ilmu dan skill <h5>
                </div>

                <button type="button">Gabung Kelas</button>
                
            </div>
        </div>

        <div class="col-sm-9 col-md-6">
            <!-- ga tau deh namanya apaan -->
            <div class="our-services" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('https://i.pinimg.com/originals/7a/95/a6/7a95a6abf317320ccfcfccd0fe4771e9.jpg'); background-size: 180%;"> 
                <div class="services-details">
                    <h3> Gabung Kelas </h3>
                    <h5> Bergabung untuk menambah ilmu dan skill <h5>
                </div>

                <button type="button">Gabung Kelas</button>
                
            </div>
        </div>

        
    </div>


</div>


<!-- SCRIPT -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

@endsection