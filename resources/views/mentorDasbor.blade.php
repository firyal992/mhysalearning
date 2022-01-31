<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row mt-4 ml-4">
        <div class="col-md-8 col-sm-8 col-8">
            <p style="font-size: 24px">Kelas Anda</p>
            <div class="row">
                <div class="col-md-4 col-sm-11 col-11 mb-4">
                    <div class="card" style="width: 200px">
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6 col-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                            </div>
                        </div>
                        <h5 class="card-title text-center my-4" style="font-weight: 700">UI/UX</h5>
                        <p class="card-text text-center py-2" style="font-size: 14px; background: #263238; color: #fff">15 Hari Lagi</p>
                        <a href="#" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="background: #F1CA6D; color:#223844; font-size: 14px">Konfirmasi Booking</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-11 col-11">
                    <div class="card" style="width: 200px">
                        {{-- <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap"> --}}
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                            </div>
                        </div>
                        <h5 class="card-title text-center my-4" style="font-weight: 700">UI/UX</h5>
                        <p class="card-text text-center py-2" style="font-size: 14px; background: #263238; color: #fff">5 Hari Lagi</p>
                        <p class="card-text text-center mb-3 font-italic font-weight-bold" style="font-size: 14px">Dikonfirmasi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card mt-5" style="width: 305px">
                <div class="container col-md-11 col-sm-11 col-11">
                    <img src="{{ asset('image/image/Rectangle343.png') }}" style="height: 150px;" class="card-img-top mt-4" alt="Card image cap">
                    <p class="card-title mt-4" style="font-size: 16px; color: #365B6D">Nama</p>
                    <p class="card-text" style="color: #365B6D">{{ Auth::user()->name }}</p>
                    <hr style="margin-top: -13px; color:#92B5C8">
                    <p class="card-title" style="font-size: 16px; color: #365B6D">Email</p>
                    <p class="card-text" style="color: #365B6D">{{ Auth::user()->email }}</p>
                    <hr style="margin-top: -13px; color:#92B5C8">

                    <a href="{{url('/settings')}}" class="col-8 mx-auto btn btn-card text-center mb-4 mt-2" role="button" style="background: #263238; color:#fff; font-size: 17px; height: 40px">Ubah Profile</a>
                </div>
            </div>
            <p class="mt-3 text-center" style="font-size: 24px">Reminder</p>
            <div class="card" style="width: 305px; background:#263238; color: #fff">
                <h5 class="card-title text-center mt-3">UI/UX Class</h5>
                <p class="card-text text-center mt-1 mb-3">
                    Kelas akan berlangsung <br>
                    5 hari lagi
                </p>
            </div>
        </div>
    </div>
</div>
@endsection