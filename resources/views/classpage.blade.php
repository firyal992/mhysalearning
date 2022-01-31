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
                @foreach ($courses as $crs)
                    @if ($crs->is_bundle == 1) 
                        {{-- class bundle --}}
                        <div class="col-xl-4 col-md-6 col-sm-12 col-xs-12 mb-1">
                            <div class="card" style="width: 350px">
                                @if ($crs->category_id == 1)
                                    <img src="{{ asset('image/image/uiux-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @elseif ($crs->category_id == 2)
                                    <img src="{{ asset('image/image/digimar-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @else
                                    <img src="{{ asset('image/image/office-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @endif
                                <div class="card-header text-center" style="position: absolute;top: -5px;z-index: 2;background-color:#000; opacity: 0.4; filter: alpha(opacity=40);width:100%;height:60px;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                    BUNDLE
                                </div>
                                <div class="mt-4" style="height: 190px;">
                                    <p class="card-text" style="margin-left: 20px; font-size: 18px; color: #223844;">{{ $crs->category->name }}</p>
                                    <a href="/class-detail/{{ $crs->id }}" style="font-weight: 700;color:#223844">
                                        <p class="card-title" style="font-size: 19px; font-weight: 700; margin-left: 20px; margin-right: 5px; margin-top: 15px; color:#223844">{{ $crs->nm_course }}</p>
                                    </a> 
                                </div>
                                <div style="background: #A4778B; height: 70px;">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-6 col-6 mt-4">
                                            <p class="card-text" style="font-size: 16px; margin-left: 20px; color: #fff; font-family:'Lato'; margin-top: -15px">{{ $crs->tanggal }}</p>
                                        </div>
                                        <div class="col-md-5 col-sm-6 col-6 mt-4 text-center">
                                                <p style="font-family:'Lato';color:#fff; font-size: 16px;padding-right:16px;">
                                                <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;;"></i> 2 Students
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <h4 class="card-title" style="font-weight: 700; margin-left: 192px; margin-top: 21px; margin-bottom: 31px; color:#223844;">Rp. {{ number_format($crs->harga, 0, '', '.') }}</h4>
                            </div>
                        </div>
                    @else
                        {{-- class satuan --}}
                        <div class="col-xl-4 col-md-6 col-sm-12 col-xs-12 mb-1">
                            <div class="card" style="width: 350px">
                                @if ($crs->category_id == 1)
                                    <img src="{{ asset('image/image/uiux-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @elseif ($crs->category_id == 2)
                                    <img src="{{ asset('image/image/digimar-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @else
                                    <img src="{{ asset('image/image/office-course.jpg') }}" class="card-img-top" style="width: 345px; height: 222px" alt="Card image cap">
                                @endif
                                <div class="row justify-content-center">
                                    <div class="col-md-7 col-sm-6 col-6 mt-4">
                                        <p class="card-text" style="margin-left: 20px; font-size: 18px; color: #223844;">{{ $crs->category->name }}</p>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-6 mt-4 text-center">
                                        <p class="card-text" style="font-size: 18px; color: #223844;padding-right:5px">{{ $crs->tanggal }}</p>
                                    </div>
                                </div>
                                <a href="/class-detail/{{ $crs->id }}" style="font-weight: 700;color:#223844">
                                    {{-- <a href="{{  Route::get('users/{id}', function ($id) {}); }}" style="font-weight: 700;color:#223844"> --}}
                                    <h5 class="card-title" style="font-weight: 700; margin-left: 20px; margin-top: 10px">{{ $crs->nm_course }}</h5>
                                </a> 
                                <div style="background: #223844; height: 70px;">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-6 col-6 mt-4">
                                            <p class="card-text" style="font-size: 16px; margin-left: 20px; color: #fff;font-family:'Lato'">{{ $crs->jam }}</p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                                <p style="font-family:'Lato';color:#fff; font-size: 16px;padding-right:16px;">
                                                <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;;"></i> 2 Students
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 19px; height: 100px; border: 1px solid #223844; box-sizing: border-box;">
                                    <img src="{{ url('/image/tutor-profile-pic/'.$crs->tutor_detail->profile_pic) }}" alt="tutor-pic" style="height:98px; width:98px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">{{ $crs->tutor_detail->user->name }}</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px"> {{ $crs->tutor_detail->pengalaman_kerja }}</p>
                                </div>
                                <h4 class="card-title" style="font-weight: 700; margin-left: 192px; margin-top: 21px; margin-bottom: 31px; color:#223844;">Rp. {{ number_format($crs->harga, 0, '', '.') }}</h4>
                            </div>
                        </div>
                    @endif
                @endforeach     
            </div>
        </div>
    </div>
</div>
@endsection