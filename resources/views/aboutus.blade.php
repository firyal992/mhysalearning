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

    {{-- Awal slideshow baru --}}
    <div class="container">
        <img src="{{ asset('image/image/about us.png') }}" alt="" class="col-12" style="border-radius: 40px">
        <a class="col-xl-2 col-md-2 col-sm-4 col-4 mx-auto d-block btn btn-light font-weight-bold" style="color: #223844; margin-top:-75px" href="{{ route('register') }}" role="button">
            Bergabung
        </a>
    </div>
    {{-- eo slideshow baru --}}

    {{-- awal moto ala ala --}}
    <div class="fontbout container">
        <div class="counter-area fix">
            <div class="section-headline text-center">
                <p style="font-size: 24px; font-weight:800">IMPROVE, STUDY, LEARN & MASTER <br>
                    THINGS FASTER THAN THE OTHER</p>
            </div>
            <div class="col-md-8 mx-auto text-center">
                <p style="font-size: 24px">
                    Kami menghubungkan para pelajar dengan Mentor Mentor terbaik pilihan Myhsa Learning agar bersama mencapai tujuan dan meraih masa depan yang lebih baik
                </p>
            </div>
        </div>
    </div>
    {{-- akhir moto ala ala --}}

    {{-- awal about text --}}
    <div style="margin-top: 150px">
        <div class="container col-sm-10 mx-auto">
            <div class="row">
                <div class="col-sm-6 " style="">
                    <img class="" src="{{ asset('image/image/buibu.png') }}" alt="image">
                </div>
                <div class="col-sm-6">
                    <div class="mx-auto text-justify">
                        {{-- <p style="font-size: 24px; font-weight:700;">
                            MENGAPA MEMILIH MHYSA?
                        </p>
                        <p class="text-justify" style="font-size: 18px">
                            Mhysa, sebagai platform berbagi pengetahuan dan wawasan bagi mahasiswa, memiliki tujuan yang sederhana, yaitu meningkatkan rasa percaya diri generasi muda. Kami berkomitmen untuk mengubah pribadi yang kekurangan akses menjadi pribadi lebih pengalaman melalui peer-to-peer learning dengan bantuan mentor yang pengalaman dan kompeten. 
                            <br>
                            Mhysa mengerti kamu, mhypeeps. Oleh sebab itu, kami hadir sebagai teman belajar, tempat berbagi wawasan, hingga mentor untuk kamu. Mhysa memiliki banyak konten yang membantu kamu, yaitu Growth Class, Growth Talk, Growth Live, dan Mhytalk. Kamu, bisa mengakses konten tersebut sesuai dengan kebutuhan dan mudah untuk dipahami.
                        </p> --}}
                        <div class="collapse show showing" id="kenapaMhysa">
                            <p style="font-size: 24px; font-weight:700;">
                                MENGAPA MEMILIH MHYSA?
                            </p>
                            <p class="text-justify" style="font-size: 18px">
                                Mhysa, sebagai platform berbagi pengetahuan dan wawasan bagi mahasiswa, memiliki tujuan yang sederhana, yaitu meningkatkan rasa percaya diri generasi muda. Kami berkomitmen untuk mengubah pribadi yang kekurangan akses menjadi pribadi lebih pengalaman melalui peer-to-peer learning dengan bantuan mentor yang pengalaman dan kompeten. 
                                <br>
                                Mhysa mengerti kamu, mhypeeps. Oleh sebab itu, kami hadir sebagai teman belajar, tempat berbagi wawasan, hingga mentor untuk kamu. Mhysa memiliki banyak konten yang membantu kamu, yaitu Growth Class, Growth Talk, Growth Live, dan Mhytalk. Kamu, bisa mengakses konten tersebut sesuai dengan kebutuhan dan mudah untuk dipahami.
                            </p>
                        </div>
                        <div class="collapse showing" id="asalMula">
                            <p style="font-size: 24px; font-weight:700;">
                                TENTANG MHYSA
                            </p>
                            <p class="text-justify" style="font-size: 18px">
                                Sejak 2020, Mhysa Learning hadir sebagai platform bagi mahasiswa untuk berbagi pengetahuan dan wawasan dengan sepenuh hati kepada masyarakat melalui metode peer-to-peer learning. Mhysa Learning terbentuk berdasarkan keinginan meningkatkan kualitas pendidikan Indonesia yang rendah.
                                <br>
                                Mahasiswa, sebagai tingkat pendidikan akhir, menjadi target peningkatan pendidikan oleh Mhysa Learning. Melalui metode peer to peer learning, antar mahasiswa dapat berbagi pengetahuan dan wawasan tanpa memandang latar belakang. Mhysa Learning dengan persona muda, sepenuh hati, penuh, banyak akal, penasaran, dan bersemangat merupakan representasi dari mahasiswa.
                            </p>
                        </div>
                        <nav class="col-md-10 col-sm-10 col-10">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6 ">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item btn btn-dark">
                                        <a class="page-link bg-transparent text-light" href="#" aria-label="Previous" style>
                                            <span aria-hidden="true">&lt;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        </li>
                                        <li class="page-item btn btn-outline-dark"><a class="page-link bg-transparent" href="#">1</a></li>
                                        <li class="page-item btn btn-dark">
                                        <a class="page-link bg-transparent text-light" href="#" aria-label="Next">
                                            <span aria-hidden="true">&gt;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6 ">
                                    <a href="/skill-centre" class="btn btn-lg btn-light" role="button" style="margin-left: 130px; margin-top:20px; background: #F3E9D8; color:#223844; font-size: 18px">View All Class</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir about text --}}

    {{-- awal about previwe --}}
    <div style="margin-top: 80px">
        <div class="container col-sm-10 mx-auto">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="" src="{{ asset('image/image/MaskGroup.png') }}" alt="">
                        <a data-toggle="collapse" href="#kenapaMhysa" role="button" aria-expanded="false" aria-controls="kenapaMhysa" class="card-body bg-light" style="font-size: 18px; font-weight: 700; color: rgba(34, 56, 68, 0.7);">
                            MENGAPA MEMILIH MHYSA?
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="" src="{{ asset('image/image/MaskGroup.png') }}" alt="">
                        <a data-toggle="collapse" href="#asalMula" role="button" aria-expanded="false" aria-controls="asalMula" class="card-body bg-light" style="font-size: 18px; font-weight: 700; color: rgba(34, 56, 68, 0.7);">
                            AWAL MULA MHYSA
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="" src="{{ asset('image/image/MaskGroup.png') }}" alt="">
                        <a href="/speaker/learning" class="card-body bg-light" style="font-size: 18px; font-weight: 700; color: rgba(34, 56, 68, 0.7);">
                            SPEAKER KAMI
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir about preview --}}

    {{-- awal sponsor --}}
    <div style="margin-top: 100px;">
        <div class="container col-sm-10 mx-auto">
            <div class="row">
                <div class="section-headline mx-auto">
                    <p style="font-size: 30px; font-weight: 700; color: #888888;">Sponsor</p>
                </div>
                <div class="container card" style="margin-bottom: 100px; border-radius: 48px; color:#fff; box-shadow: inset 0px 4px 2px rgba(146, 181, 200, 0.1), inset 0px -4px 2px rgba(146, 181, 200, 0.1);">
                    <div class="card-body text-center mx-auto">
                        <p class="align-text-middle" style="font-size: 27px; font-weight: 700; color: #888888; word-spacing: 60px">
                        Tokopedia NetTv Tiktok Bukalapak BinarAcademy
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir sponsor --}}

    


@endsection