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

<link rel="stylesheet" href="{{ asset ('css/classdetail.css') }}">

@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="teks">
        <h3>{{ $course->category->name }}</h3>
    </div>
    <div class="text">
        <h3>{{ $course->nm_course }}</h3>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="baner">
                @if ($course->category_id == 1)
                    <img src="{{ asset('image/image/uiux-course.jpg') }}" class="rounded" alt="Card image cap">
                @elseif ($course->category_id == 2)
                    <img src="{{ asset('image/image/digimar-course.jpg') }}" class="rounded" alt="Card image cap">
                @else
                    <img src="{{ asset('image/image/office-course.jpg') }}" class="rounded" alt="Card image cap">
                @endif
            </div>
            @if ($course->is_bundle == 0)
                <article class="article">
                    <div class="article-title">
                        <h2>Deskripsi Kelas</h2>
                        <p>{{ Str::replace(';', ',',  $course->class_summary) }}</p>
                        <p>Hal Menarik Di kelas: {{ $course->tutor_detail->hal_menarik_dikelas }}</p>
                        <br>
                        <h2>Tutor Review</h2>
                        <div class="media">
                            <div class="avatar">
                                <img src="{{ url('/image/tutor-profile-pic/'.$course->tutor_detail->profile_pic) }}" style="height:100px; width:100px" title="" alt="tutor-pic">
                            </div>
                            <div class="media-body">
                                <label style="font-size: 18px; margin-top: 14px;">
                                    {{ $course->tutor_detail->user->name }} | 
                                    <a href="{{ $course->tutor_detail->link_linkedin }}" target="_blank"><i style="color: #223844" class="fab fa-linkedin"></i></a>
                                    <a href="{{ $course->tutor_detail->link_ig }}" target="_blank"><i style="color: #223844" class="fab fa-instagram-square"></i></a>
                                </label>
                                <br>
                                <span style="font-size: 14px">{{ $course->tutor_detail->pengalaman_kerja }}</span> 
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <p>Skill: {{ $course->tutor_detail->skill }}</p>
                    </div>
                </article>
            @else
                <article class="article">
                    <div class="article-title">
                        <h2>Deskripsi Kelas</h2>
                        <p style="font-size:20px">{{ Str::replace(';', ',',  $course->class_summary) }}</p>
                    </div>
                </article>
            @endif
        </div><!-- / column -->

        <div class="col-lg-5 m-15px-tb blog-aside">
            <!-- Author -->
            <div class="widget widget-author">
                <div class="widget-title">
                    <p style="font-family: 'Lato'; font-weight: bold; font-size: 20px; color: #223844">{{ $course->nm_course }}</p>
                </div>
                <div class="widget-harga">
                    <h3>Rp. {{ number_format($course->harga, 0, '', '.') }}</h3>
                </div>
                <div class="card card-details card-right">
                    <table class="trip-informations">
                        <tr>
                            <th width="50%">Pelaksanaan</th>
                            <td width="50%" class="text-right">{{ $course->tanggal }}</td>
                        </tr>
                        <br>
                        @if ($course->is_bundle == 0)
                            <tr>
                                <th width="50%">Jam</th>
                                <td width="50%" class="text-right">{{ $course->jam }}</td>
                            </tr>  
                        @endif
                        <tr>
                            <th width="50%">Bentuk Kelas</th>
                            <td width="50%" class="text-right">Kelas Online</td>
                        </tr>
                        <tr>
                    </table>

                    <br><br>

                    <button type="button" class="button btn-add-now mb-2 px-4">
                        <span class="button_text"> <a class ="link" href="{{url('/speaker/book/payment')}}" style="">Ambil Kelas</a></span>
                    </button>
                </div>
            </div>
            <!-- End Author -->

            <!-- Latest Post -->
            <div class="widget widget-latest-post">
                <div class="widget-title2">
                    <h3>Benefit</h3>
                </div>

                <div class="widget-square1">
                    <a class ="link" href="{{ url('/certificateSurvey') }} " style=""> 
                        <div class="batas">
                            <img src="{{ asset('image/image/card_membership.png') }}"  alt="" width="30px" height="30px">
                        </div>
                        <div class="batas text">
                            <h4>Sertivikat</h4>
                        </div>
                    </a>
                    
                </div>

                <div class="widget-square2">
                    <a class ="link" href="{{ url('/resources-materi') }} " style=""> 
                        <div class="batas1">
                            <img src="{{ asset('image/image/schedule_24px.png') }}"  alt="" width="30px" height="30px">
                        </div>
                        <div class="batas1 teks">
                            <h4>Post Test</h4>
                        </div>
                    </a>
                </div>

                <div class="widget-square3">
                    <a class ="link" href="{{ url('/classdetail-Bayr') }} " style="">
                        <div class="batas2">
                            <img src="{{ asset('image/image/import_contacts.png') }}"  alt="" width="30px" height="30px">
                        </div>
                        <div class="batas2 tekss">
                            <h4>Materi</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter-area fix area-padding-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-11 col-xs-12">
                <div class="member " >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="media-avatar">
                                    <img src="{{ asset('image/image/Rectangle343.png') }}" title="" alt="" style="border-radius: 10px;margin-bottom:10px">
                                </div>
                            </div>
                            <div class="col media-body1">
                                <h4>Susilo bambang</h4>
                                <p> Tokopedia</p>
                            </div>
                            <div class="col media-body2">
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            </div>
                            <div class="isian">
                                <p>Kelasnya tuh seru dan ilmunya berguna banget,
                                    recommended pokoknya deh buat yang baru belajar.</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            

            <div class="col-md-6 col-sm-11 col-xs-12">
                <div class="member " >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="media-avatar">
                                    <img src="{{ asset('image/image/Rectangle343.png') }}" title="" alt="" style="border-radius: 10px;margin-bottom:10px">
                                </div>
                            </div>
                            <div class="col media-body1">
                                <h4>Susilo bambang</h4>
                                <p> Tokopedia</p>
                            </div>
                        <div class="col media-body2">
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        </div>
                        <div class="isian">
                            <p>Kelasnya tuh seru dan ilmunya berguna banget,
                                recommended pokoknya deh buat yang baru belajar.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<div class="counter-area fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-11 col-xs-12">
                <div class="member " >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="media-avatar">
                                    <img src="{{ asset('image/image/Rectangle343.png') }}" title="" alt="" style="border-radius: 10px;margin-bottom:10px">
                                </div>
                            </div>
                            <div class="col media-body1">
                                <h4>Susilo bambang</h4>
                                <p> Tokopedia</p>
                            </div>
                            <div class="col media-body2">
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            </div>
                            <div class="isian">
                                <p>Kelasnya tuh seru dan ilmunya berguna banget,
                                    recommended pokoknya deh buat yang baru belajar.</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            

            <div class="col-md-6 col-sm-11 col-xs-12">
                <div class="member " >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="media-avatar">
                                    <img src="{{ asset('image/image/Rectangle343.png') }}" title="" alt="" style="border-radius: 10px;margin-bottom:10px">
                                </div>
                            </div>
                            <div class="col media-body1">
                                <h4>Susilo bambang</h4>
                                <p> Tokopedia</p>
                            </div>
                        <div class="col media-body2">
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        </div>
                        <div class="isian">
                            <p>Kelasnya tuh seru dan ilmunya berguna banget,
                                recommended pokoknya deh buat yang baru belajar.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>



@endsection