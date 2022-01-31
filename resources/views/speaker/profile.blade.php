<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/speaker/learning.css') }}" >

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

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
<link rel="stylesheet" href="{{ asset ('css/profilspeaker.css') }}">

<script src="{{ asset ('js/vendor/modernizr-2.8.3.min.js') }}" > </script>

@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="page-areaa" style="background-image: url({{asset('assets/img/bg.png')}})">
    
    <!-- <div class="breadcumb-overlay"></div> -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="faq-area bg-color page-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-member bg-white " style="color:#e6922e;">
                    <center>
                        {{-- <div class="tim-img">
                            <a href="#"> --}}
                                <img src="{{ url('/image/tutor-profile-pic/'.$speaker->profile_pic) }}" style="height: 200px; width: 200px; border-radius:100%" alt="speaker-pic">
                            {{-- </a>
                        </div> --}}
                    </center>
                    <div class="team-content">
                        <center>
                            <h2 style="font-weight: 700; color: #223844;">{{ $speaker->user->name }}</h2>
                            <h4 style="color:#A4778B;">{{ $speaker->pengalaman_kerja }}</h4>
                            <a href="{{url('/speaker/book')}}" class="blog-btn"
                                style="background-color: #223844;">
                                Booking {{ $speaker->user->username }}
                            </a>
                            <br><br>
                            <ul class="tim list-inline mb-0"style="margin-left: 10px">
                                <li class="list-inline-item mr-4" >
                                    <p class="text-muted f-15 mb-0"><img src="{{ asset('image/image/Group.png') }}"  alt="" width="19px" height="20px"> 
                                        <a class ="link" href="{{ $speaker->link_ig }}" style="">{{ $speaker->insta_un }}</a>
                                    </p>
                                </li>

                                <li class="list-inline-item mr-4">
                                    <p class="text-muted f-15 mb-0"><img src="{{ asset('image/image/Linkedin.png') }}"  alt="" width="24px" height="24px"> 
                                    <a class ="link" href="{{ $speaker->link_linkedin }}" style="" class="text-center">{{ $speaker->linkedin_un }}</a>
                                    </p>
                                </li>

                                <li class="list-inline-item">
                                    <p class="text-muted f-15 mb-0">
                                        <i class="fa fa-envelope" style=""></i>
                                        <a class ="link" href="#" style="" class="text-center">{{ $speaker->user->email }}</a>
                                    </p>
                                </li>
                            </ul>
                        </center>
                        <br>
                        <div class="team-content">
                            <a href="#" class="list-group-item list-group-item-action">
                                <b>Tersedia</b><span class="badge badge-pill  pull-right">Online</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <b>Tarif</b><span class="badge badge-pill pull-right">Rp.
                                    150.000/jam</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <b>Bahasa</b><span class="badge badge-pill  pull-right">Eng /
                                    Indonesia</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <b>Volunteer</b><span class="badge badge-pill  pull-right">Ya</span>
                            </a>
                        </div>
                        <center>
                            <p style="padding: 15px;">{{ $speaker->quote }}</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-7 col-sm- col-xs-12">
                        <div class="single-member bg-white " style="color:#e6922e;">
                            <div class="faq-quote">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <ul id="myTab2" role="tablist"
                                            class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                                            <li class="nav-item flex-sm-fill">
                                                <a id="home2-tab" data-toggle="tab" href="#home2" role="tab"
                                                    aria-controls="home2" aria-selected="true"
                                                    class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Semua</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill">
                                                <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab"
                                                    aria-controls="profile2" aria-selected="false"
                                                    class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Foto</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill">
                                                <a id="contact2-tab" data-toggle="tab" href="#contact2" role="tab"
                                                    aria-controls="contact2" aria-selected="false"
                                                    class="nav-link text-uppercase font-weight-bold rounded-0">Video</a>
                                            </li>
                                        </ul>
                                        <br>
                                        <div id="myTab2Content" class="tab-content">
                                            <div id="home2" role="tabpanel" aria-labelledby="home-tab"
                                                class="tab-pane fade row in active">
                                                <div class="row" style="margin-left: 10px">
                                                    <div class="col-sm ">
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>

                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div id="profile2" role="tabpanel" aria-labelledby="profile-tab"
                                                class="tab-pane fade">
                                                <div class="row" style="margin-left: 10px">
                                                    <div class="col-sm ">
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="contact2" role="tabpanel" aria-labelledby="contact-tab"
                                                class="tab-pane fade">
                                                <div class="row" style="margin-left: 10px">
                                                    <div class="col-sm ">
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>
                                                        <div class="avatar mr-10 col-md-4 text-center">
                                                            <img widht ="100px" src="{{ asset('image/image/Group_247.png') }}" alt="post-author">
                                                            
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="padding-top: 37px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="single-member bg-white " style="color:#e6922e;">
                            <div class="faq-quote">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <a
                                            class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Rekomendasi</a>
                                        <hr>
                                        <div class="team-content text-center">
                                            <button type="submit" id="submit" class="blog-btn"
                                                style="background-color: #223844;">Rekomendasikan {{ $speaker->user->username }}</button>
                                            <br><br>
                                            <button type="submit" id="submit" class="blog-btn"
                                                style="background-color: #223844;">Tulis testimoni kamu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="single-member bg-white " style="color:#e6922e;">
                            <a class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Alasan
                                Memilih
                                {{ $speaker->user->username }}</a>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna iaculis blandit dictum
                                enim velit, duis. Nulla id purus, diam, gravida diam erat.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="single-member bg-white " style="color:#e6922e;">
                            <a
                                class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Keahlian</a>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <button type="submit" id="submit" class="blog-btn btn-block"
                                        style="background-color: #223844;">{{ $speaker->skill }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="single-member" style="color:#e6922e;">
                            <a class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Pembicara
                                Lainnya</a>
                            <hr>
                            <div class="row">
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <a href="{{url('/speaker/profile')}}" class="comments-details">
                                        <div class="comments-list-img">
                                            <img widht ="100px" src="{{ asset('image/image/Ellipse155.png') }}" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b>Teddy Schumacher</b>
                                                <br>
                                                UI/UX Designer
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <a href="{{url('/speaker/profile')}}" class="comments-details">
                                        <div class="comments-list-img">
                                            <img widht ="100px" src="{{ asset('image/image/Ellipse155.png') }}" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b>Teddy Schumacher</b>
                                                <br>
                                                UI/UX Designer
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <a href="{{url('/speaker/profile')}}" class="comments-details">
                                        <div class="comments-list-img">
                                            <img widht ="100px" src="{{ asset('image/image/Ellipse160.png') }}" alt="post-author">
                                            
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b>Sumanto hasyam</b>
                                                <br>
                                                Product Manager
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <a href="{{url('/speaker/profile')}}" class="comments-details">
                                        <div class="comments-list-img">
                                            <img widht ="100px" src="{{ asset('image/image/Ellipse160.png') }}" alt="post-author">
                                           
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b>Sumanto hasyam</b>
                                                <br>
                                                Product Manager
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection