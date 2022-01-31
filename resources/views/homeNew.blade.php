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
    {{-- awal slider baru --}}
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide col-md-12 col-sm-12 col-xs-12 col-12 mt-3 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators ">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/image/about us.png') }}" alt="" style="border-radius: 10px">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/image/knpPilih.png') }}" alt="" style="border-radius: 10px">
                </div>
              
            </div>
        </div>
    </div>
    {{-- eo slider baru --}}


    {{-- Awal Sponsor: Sponsor disuru apus dulu katanya --}}
    <!--<div class="container col-md-10 col-sm-10 mx-auto">-->
    <!--    <div class="row">-->
    <!--        <div class="section-headline mx-auto">-->
    <!--            <p style="font-size: 35px; font-weight: 700; color: #223844;">Sponsor</p>-->
    <!--        </div>-->
    <!--        <div class="container card" style="margin-top:-35px; background: #FFFFFF; box-shadow: inset 0px 4px 2px rgba(146, 181, 200, 0.1), inset 0px -4px 2px rgba(146, 181, 200, 0.1); border-radius: 48px;">-->
    <!--            <div class="card-body text-center mx-auto">-->
    <!--                {{-- <div class="row"> --}}-->
    <!--                    <img class="col-md-3 col-sm-3 col-3 img-fluid" src="{{ asset('image/image/jenius2.png') }}">-->
    <!--                    <img class="col-md-3 col-sm-3 col-3 img-fluid" src="{{ asset('image/image/gojek2.png') }}">-->
    <!--                    <img class="col-md-3 col-sm-3 col-3 img-fluid" src="{{ asset('image/image/tokopedia2.png') }}">-->
    <!--                {{-- </div> --}}-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    {{-- Akhir Sponsor --}}

    {{-- Awal Popular Classes --}}
    <div class="counter-area fix area-padding" style="align-items:center;justify-content:center;display:flex; margin-top: -50px">
        <div class="container">
            <div class="section-headline text-center">
                <h3 style="font-size: 35px; font-weight: 700; color: #223844;">Popular Classes</h3>
            </div>
            <div class="row">
                @foreach ($courses as $crs)
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
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 18px; color: #223844;">{{ $crs->category->name }}</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                    <p class="card-text" style="font-size: 18px; color: #223844 ; padding-right:3px">{{ $crs->tanggal }}</p>
                                </div>
                            </div>
                            <a href="/class-detail/{{ $crs->id }}" style="font-weight: 700;color:#223844">
                                <h5 class="card-title" style="font-weight: 700; margin-left: 20px; margin-top: 10px">{{ $crs->nm_course }}</h5>
                            </a>
                            <div style="background: #A4778B; height: 70px;">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                        <p class="card-text" style="font-size: 16px; color: #fff;font-family:'Lato'">{{ $crs->jam }}</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                                        <p style="font-family:'Lato';color:#fff; font-size: 16px;padding-right:16px;">
                                            <i class="fas fa-user-friends" style="color:#fff; font-size: 16px;;"></i> 2 Students

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 19px; height: 100px; border: 1px solid #A4778B; box-sizing: border-box;">
                                <img src="{{ url('/image/tutor-profile-pic/'.$crs->tutor_detail->profile_pic) }}" alt="tutor-pic" style="height:98px; width:98px">
                                <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">{{ $crs->tutor_detail->user->name }}</p>
                                <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">{{ $crs->tutor_detail->pengalaman_kerja }}</p>
                            </div>
                            <h4 class="card-title" style="font-weight: 700; margin-left: 192px; margin-top: 21px; margin-bottom: 31px; color:#A4778B;">Rp. {{ number_format($crs->harga, 0, '', '.') }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Akhir Popular Class --}}

    {{-- Awal Ourspeaker --}}
    <div class="counter-area fix area-padding" style="align-items:center;justify-content:center;display:flex; margin-top: -100px">
        <div class="container">
            <div class="text-center mx-auto">
                <p style="font-size: 35px; font-weight: 700; color: #223844;">Our Speakers</p>
            </div>
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
    </div>
    {{-- Akhir Ourspeaker --}}

    {{--awal testi baru--}}
    <div class="container col-11">
        <div class="col-12">
        <div class="text-center mx-auto">
            <p style="font-size: 35px; font-weight: 700; color: #223844;">Testimonial</p>
        </div>
        </div>

        
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="col-10" style="color: #223844; font-size: 27px; font-weight: bold; margin-top: 15px; margin-left: 10%">Apa kata alumni setelah mengikut kelas online</p>
                <img src="{{ asset('image/image/trending_flat_24px.png') }}" style="width: 35px; height: 35px; margin-top: 20px; margin-left: 10%" alt="">

                <div class="card col-11" style="float: right;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="margin-top: 50px; margin-left: 300px; color:#223844 ">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Alumni</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;"> Ikut kelas di Mhysa itu materinya daging semua. Pematerinya juga ahlinya ahli, jadi kami tuh mudah memahami kelasnya</p> <br>
                                <div class="col-12 mb-5">
                                    <img src="{{ asset('image/siswa-profile-pic/stefanuss.png') }}" alt="siswa-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Stefanus Hermawan Sebastian</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Alumni UI/UX</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Alumni</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;">Ikut kelas di Mhysa itu materinya daging semua. Pematerinya juga ahlinya ahli, jadi kami tuh mudah memahami kelasnya</p> <br>
                                <div class="col-10 mb-5">
                                    <img src="{{ asset('image/siswa-profile-pic/tirtaa.png') }}" alt="siswa-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Miftahul Tirta Irawan</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Alumni MS OFfice</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Alumni</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;"> Ikut kelas di Mhysa itu materinya daging semua. Pematerinya juga ahlinya ahli, jadi kami tuh mudah memahami kelasnya</p> <br>
                                <div class="col-10 mb-5">
                                    <img src="{{ asset('image/siswa-profile-pic/ainii.png') }}" alt="siswa-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Nur Aini Azizah</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Alumni Digital Marketing</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <p class="col-10" style="color: #223844; font-size: 27px; font-weight: bold; margin-top: 15px; margin-left: 10%">Apa kata speaker setelah bergabung dengan speaker camp</p>
                <img src="{{ asset('image/image/trending_flat_24px.png') }}" style="width: 35px; height: 35px; margin-top: 20px; margin-left: 10%" alt="">

                <div class="card col-11" style="float: right;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="margin-top: 50px; margin-left: 300px; color:#223844 ">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Pembicara</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;"> Setelah gabung di Mhysa, saya di notice begitu cepat hingga mendapatkan invitation sebagai speaker event #personalbranding</p>
                                <div class="col-10 mb-5">
                                    <img src="{{ asset('image/tutor-profile-pic/erica-sanger.png') }}" alt="tutor-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Erica G Sanger</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Digital Marketing Mentor</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                                        </div>
                            <div class="carousel-item">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Pembicara</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;">Setelah gabung di Mhysa, saya di notice begitu cepat hingga mendapatkan invitation sebagai speaker event #personalbranding</p>
                                <div class="col-10 mb-5">
                                    <img src="{{ asset('image/tutor-profile-pic/intan-salamina.png') }}" alt="tutor-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Intan Salamina</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Pembicara Personal Branding</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="col-10" style="color: #223844; font-size: 20px; font-weight: bold; margin-top: 15px;">Kata Pembicara</p>
                                <p class="col-11" style="color: #223844; font-size: 21px; margin-top: 10px; font-family: Lato;"> Setelah gabung di Mhysa, saya di notice begitu cepat hingga mendapatkan invitation sebagai speaker event #personalbranding</p>
                                <div class="col-10 mb-5">
                                    <img src="{{ asset('image/tutor-profile-pic/felix-malvian.png') }}" alt="tutor-pic" style="border-radius: 12px; height:90px; width:90px; margin-top: 15px">
                                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -90px">Felix Malvian</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">MS Office Mentor</p>
                                    <p style="font-size: 15px; color: #223844; margin-left: 110px; margin-top: -20px">Mhysa Learning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{--akhir testi baru--}}

    {{-- Awal Gabung class --}}
    <div class="container col-md-10 col-sm-10 mt-5 mx-auto">
        <div class="row">
            <div class="col-md-6  mb-4">
                <div class="card" style="border-radius: 12px;" >
                    <img src="{{ asset('image/image/Rectangle 69.png') }}" alt="" class="card-img" style="opacity: 95%">
                    <div class="card-img-overlay text-center mx-auto" style="padding-top:60px;padding-bottom:20px">
                        <p class="card-title text-center font-weight-bold  " style="font-size: 30px; color: #fff;">Gabung Kelas</p>
                        <p class="card-text text-center col-md-9 col-sm-9 col-9  mx-auto" style="font-size: 24px; color: #fff">Bergabung untuk menambah ilmu dan skill</p>
                        <a href="/skill-centre" style="background-color: #fff; color: #223844;" class="btn align-content-center text-center mx-auto font-weight-bold" role="button">Gabung Kelas</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6  mb-4">
                <div class="card" style="border-radius: 12px;">
                    <img src="{{ asset('image/image/Rectangle 67.png') }}"  alt="" class="card-img" style="opacity: 95%">
                    <div class="card-img-overlay text-center mx-auto "style="padding-top:60px;padding-bottom:20px">
                        <p class="card-title text-center font-weight-bold" style="font-size: 30px; color: #fff">Mencari Speaker</p>
                        <p class="card-text text-center col-md-9 col-sm-9 col-9  mx-auto" style="font-size: 24px; color: #fff">Hadirkan speaker kompeten dalam kegiatan anda</p>
                        <a href="{{url('/speaker-camp')}}" style="background-color: #fff; color: #223844;" class="btn align-content-center text-center mx-auto font-weight-bold" role="button">Mencari Speaker</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhhir Gabung class --}}
@endsection
