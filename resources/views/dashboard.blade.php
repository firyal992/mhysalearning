<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row p-3 mt-1 mb-1 mr-1 ml-1">
        <div class="col-8">
            <div class="row mr-3">
                <h3> Kelas yang Diambil </h3>
                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                        <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('14.00-15.00') }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('6/10/2021') }}</h6>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Ms. Office') }}</h5>
                        </div>
                        <div class="row justify-content-center">
                            <a href="" class="btn-card">Join Kelas</a>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                        <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('14.00-15.00') }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('6/10/2021') }}</h6>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Ms. Office') }}</h5>
                        </div>
                        <div class="row justify-content-center">
                            <a href="" class="btn-card">Join Kelas</a>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                        <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('14.00-15.00') }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('6/10/2021') }}</h6>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Ms. Office') }}</h5>
                        </div>
                        <div class="row justify-content-center">
                            <a href="" class="btn-card">Join Kelas</a>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                        <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('14.00-15.00') }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('6/10/2021') }}</h6>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Ms. Office') }}</h5>
                        </div>
                        <div class="row justify-content-center">
                            <a href="" class="btn-card">Join Kelas</a>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row mr-3">
                <h3> Speaker yang Dipesan </h3>    
                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img src="{{ asset('image/image/Rectangle343.png')}}" class="card-img-top" alt="Card image cap">
                        <a href="/speaker/profile" class="card-title text-center mt-2" style="font-weight: 700; font-style: 17px; color: #263238">Dika Irawan</a>
                        <h5 class="card-title text-center mt-1" style="color: #263238">CEO DikaLearn</h5>
                        <h6 class="card-text text-center mb-4" style="color: #263238">Product Manager</h6>
                        <a title="Mohon menunggu konfirmasi speaker" href="#" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="background: #F1CA6D; color:#223844; font-size: 14px">Menunggu Konfirmasi</a>
                    </div>
                </div>
                
                <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img src="{{ asset('image/image/Rectangle343.png')}}" class="card-img-top" alt="Card image cap">
                        <a href="/speaker/profile" class="card-title text-center mt-2" style="font-weight: 700; font-style: 17px; color: #263238">Dika Irawan</a>
                        <h5 class="card-title text-center mt-1" style="color: #263238">CEO DikaLearn</h5>
                        <h6 class="card-text text-center mb-4" style="color: #263238">Product Manager</h6>
                        <a title="Segera atur jadwal meeting dengan speeker" href="#" class="col-9 btn btn-card text-center mx-auto mb-3" role="button" style="background: #F1CA6D; color:#223844; font-size: 14px">Atur Jadwal</a>
                    </div>
                </div>

                

                {{-- <div class="col-6 col-md-4 mb-1">
                    <div class="card mb-3">
                        <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                        <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('14.00-15.00') }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="card-subtitle mb-2 text-muted">{{ __('6/10/2021') }}</h6>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Ms. Office') }}</h5>
                        </div>
                        <div class="row justify-content-center">
                            <a href="" class="btn-card">Join Kelas</a>
                        </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            
        </div>

        <div class="col-4 mt-5">
            <div class="row mb-2">
                <div class="card mb-3">
                    <img class="card-img-top rounded" src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" alt="Card image cap">
                    <div class="card-body">
                        <div class="row mb-5">
                            <h5 class="card-title">{{ __('Nama') }}</h5>
                            <p class="card-text">{{ Auth::user()->name }}</p>
                            <h5 class="card-title">{{ __('Email') }}</h5>
                            <p class="card-text">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="settings" class="btn-card">Ubah Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <h3 class="text-center"> Reminder </h3>  
                <div class="reminder-box">
                    <div class="reminder-title">
                        {{ __('Ms. Office Class') }}
                    </div>
                    <div class="reminder-details">
                        {{ __('Kelas akan berlangsung 3 hari lagi') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection