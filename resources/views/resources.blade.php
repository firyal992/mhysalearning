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
        <div class="col-md-8">
            <p style="font-size: 24px">Materi Kelas</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 200px">
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                            </div>
                        </div>
                        <h6 class="card-title mt-1 mb-4 ml-1" style="font-weight: 700">Ms. Office</h6>
                        {{-- <p class="card-text text-center py-2" style="font-size: 14px; background: #263238; color: #fff">15 Hari Lagi</p> --}}
                        <a href="/resources-materi" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="border-radius: 12px; background: #223844; color: #fff; font-size: 14px; height: 30px">Akses Kelas</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 200px">
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                            </div>
                        </div>
                        <h6 class="card-title mt-1 mb-4 ml-1" style="font-weight: 700">Digital Marketing</h6>
                        {{-- <p class="card-text text-center py-2" style="font-size: 14px; background: #263238; color: #fff">15 Hari Lagi</p> --}}
                        <a href="/resources-materi" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="border-radius: 12px; background: #223844; color: #fff; font-size: 14px; height: 30px">Akses Kelas</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 200px">
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" class="card-img-top" alt="Card image cap">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                            </div>
                        </div>
                        <h6 class="card-title mt-1 mb-4 ml-1" style="font-weight: 700">UI/UX</h6>
                        {{-- <p class="card-text text-center py-2" style="font-size: 14px; background: #263238; color: #fff">15 Hari Lagi</p> --}}
                        <a href="/resources-materi" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="border-radius: 12px; background: #223844; color: #fff; font-size: 14px; height: 30px">Akses Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection