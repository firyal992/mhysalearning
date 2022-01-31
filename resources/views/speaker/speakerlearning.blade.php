<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/speaker/learning.css') }}" >

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron mt-4" style="height: 520px">
        <center>			
            <h2>SPACE AVAILABLE</h2>
            <p>ASDFJHGKL</p><br/><br/>
        </center>
    </div>
    <div class="row">
        <div class="col mr-5 pt-4">
            <div class="dropdown align-middle d-flex justify-content-start mb-9">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Semua Speaker
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
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
    <div class="row">
        @foreach ($speakers as $speaker)
            <div class="col-xl-4 col-md-6 col-sm-12 col-xs-12 mb-1">
                <div class="card" style="width: 350px; border: 1px solid #FAB400">
                    <img class="mx-auto" src="{{ url('/image/tutor-profile-pic/'.$speaker->profile_pic) }}" alt="post-author" style="margin-top: 39px; border-radius: 100%; width: 160px; height: 160px">
                    <div style="height:150px; margin-top: 10px">
                        <h2 style="font-weight: 700; color: #223844; margin-top: 13px"  class="card-title text-center">
                            <a  href="/speaker/profile/{{ $speaker->id }}" style="font-weight: 700; color: #223844;">{{ $speaker->user->name }}</a>
                        </h2>
                        <p style="font-size: 20px; color: #f1ca6d;"  class="card-title mx-3 mt-2 text-center">{{ $speaker->pengalaman_kerja }}</p>
                    </div>
                    <div class="col-md-9 col-sm-9 col-9 mx-auto text-center" style="margin-top: 30px">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-2"  style="margin-left: 10px">
                                <div style="width: 35px; height: 35px; border-radius: 100%; background: #223844">
                                    <i style="color: #fff; font-size: 17px; margin-top: 8px" class="fas fas fa-microphone"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-2 " style="margin-left: 16px">
                                <div style="width: 35px; height: 35px; border-radius: 100%; background: #223844">
                                    <i style="color: #fff; font-size: 17px; margin-top: 8px" class="fas fas fa-desktop"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-2 " style="margin-left: 16px">
                                <div style="width: 35px; height: 35px; border-radius: 100%; background: #223844">
                                    <i style="color: #fff; font-size: 17px; margin-top: 8px" class="fas fa-user-friends"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-2" style="margin-left: 16px">
                                <div style="width: 35px; height: 35px; border-radius: 100%; background: #223844">
                                    <i style="color: #fff; font-size: 17px; margin-top: 8px" class="fas fa-video"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mx-auto" style="height:140px; margin-top: 20px">
                        <p class="mx-3" style="font-size: 18px; color: #223844;">
                            "{{ $speaker->quote }}"
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection