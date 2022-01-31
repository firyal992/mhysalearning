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
{{-- <link rel="stylesheet" href="{{ asset ('css/aboutus.css') }}"> --}}
<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
<script src="{{ asset ('js/vendor/modernizr-2.8.3.min.js') }}" > </script>

@extends('layouts.app')

@section('content')
<div class="container col-md-10 col-sm-10 col-10 mx-auto">
    <div class="row">
        <div class="col-md-5 col-sm-11 col-11 mb-5">
            <h1 style="font-size: 50px; font-weight:700; margin-top: 97px; color: #223844;">Kontak Kami</h1>
            <ul style="color: #223844; margin-top: 55px">
                <li class="mt-4 mb-2" style="font-size: 20px">
                    <i class="far fa-envelope"></i>
                    mhysalearning@gmail.com
                </li>
                <li class="mt-4 mb-2" style="font-size: 20px">
                    <i class="fab fa-line" style="font-size: 25px"></i>
                    <a href="https://lin.ee/Y6XarhL" target="_blank" style="color: #223844;">Mhysa Learning (click here)</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-11 col-md-7 col-11">
            <div class="mx-auto">
                <h2 style="color: #223844" class="font-weight-bold text-center mt-1">
                    Kritik/Saran
                </h2>
                <div class="container">
                    <form method="POST" action="{{ route('contact-us-store') }}">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="fullname" style="font-size: 20px; color: #223844">Full Name</label>
                            <input type="textl" class="form-control" id="fullname" name="fullname" placeholder="Ex : Harry Styles" style="color: #223844 outline: 0; border-width: 0 0 1px; border-color: #757575; box-sizing: border-box;">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="phonenumber" style="font-size: 20px; color: #223844">Phone Number</label>
                            <input type="textl" class="form-control" id="phonenumber" name="phonenumber" placeholder="Ex : Harry Styles" style="color: #223844 outline: 0; border-width: 0 0 1px; border-color: #757575; box-sizing: border-box;">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-size: 20px; color: #223844">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ex : harryganteng@gmail.com" style="color: #223844 outline: 0; border-width: 0 0 1px; border-color: #757575; box-sizing: border-box;">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="message" style="font-size: 20px; color: #223844">Pesan/Masukan</label>
                            <textarea class="form-control" id="message" name="message" rows="6" style="border: 1px solid #223844; box-sizing: border-box; border-radius: 12px;"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn col-md-4 py-2" style="font-size: 17px; color: #fff; background: #223844; border-radius: 30px;">Kirim Masukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection