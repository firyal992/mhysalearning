<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/speakerlearning.css') }}" >

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset ('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset ('css/magnific.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('css/home.css') }}">
<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset ('css/pembayaran.css') }}">

<script src="{{ asset ('js/vendor/modernizr-2.8.3.min.js') }}" > </script>

@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="teks">
        <h3 >AMANKAN KURSIMU SEKARANG</h3>
    </div>
    <br>

    <div class="text d-flex flex-column align-items-center text-center">
        <h3 >Segera bergabung bersama MHYSA Learning di kelas kelas</h3>
        <h3> premium dan mari belajar bersama!</h3>
    </div>
    <br></br>
    <div class="row" >
        {{-- <div class="col-md-4 col-sm-12 col-xs-12 clas" style="margin-top: 25px;margin-left:40px;margin-right: 90px">
            <div class="single-blog ">
                <div class="blog-image">
                    <a class="image-scale" href="#">
                        <img src="{{ asset('image/image/Rectangle341.png') }}" alt="">
                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="admin-type">
                            UI / UX Design
                        </span>
                            <span class="admin-type second">
                                <i class="fa fa-calendar"></i>
                                06 / 09 / 2021
                            </span>
                    </div>
                    <a href="#">
                        <h4>Ms.Office</h4>
                    </a>
                </div>
                <div class="blog-content" style="background-color: #223844;">
                    <div class="blog-meta">
                        <div class="row">
                            <span class="float-left">
                                <p> <style></style>
                                    <i class="text-warning fa fa-star"style="margin-top:5px;"></i>
                                </p>
                            </span>
                            <span class="float-left">
                                <p style="color:white;">4,5</p>
                            </span>
                            <span class="float-left">
                                <p style="color:white;maegin-top:3px"><img src="{{ asset('image/image/schedule.png') }}"  width="20px" height="20px" style="margin-bottom: 2px;"> 12.00-14.00</p>
                            </span>
                            <span class="float-left">
                                <p>
                                    <i class="fa fa-users" style="color:white;margin-top:5px"> 2 Students</i>
                                </p>
                                
                            </span>
                        </div>
                    </div>
                </div>
                <div class="blog" style="border-bottom: 1px solid #92B5C8;border-top: 1px solid #92B5C8;padding:30px;margin-top:20px;">
                        <div class="comments-list-img">
                            <img src="{{ asset('image/image/Rectangle343.png') }}" alt="post-author" width="100px" >
                        </div>
                        <div class="comments-content-wrap">
                            <span>
                                <b>Suharto</b>
                                <br>
                                Tokopedia
                            </span>
                            <span>
                            </span>
                        </div>
                </div>
                <div class="blog-title">
                    <h3>200.000</h3>
                </div>
                <br>
            </div>
        </div> --}}
        {{-- speaker detail --}}
        <div class="col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px;margin-left:40px;margin-right: 90px">
            <div class="card" style="width: 350px">
                <img src="{{ asset('image/image/Rectangle341.png') }}" class="card-img-top" alt="Card image cap">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                        <p class="card-text" style="font-size: 18px; color: #223844;">UI / UX Design</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 mt-4 text-center">
                        <p class="card-text" style="font-size: 18px; color: #223844">6/9/2021</p>
                    </div>
                </div>
                <h5 class="card-title" style="font-weight: 700; margin-left: 20px; margin-top: 10px">Introduction Figma Prototype</h5>
                <div style="background: #223844; height: 70px;">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-3 col-3 mt-4">
                            <i class="fa fa-star ml-3" style="color:#fff; font-size: 16px;"> 4.5</i>
                        </div>
                        <div class="col-md-5 col-sm-5 col-5 mt-4">
                            <i class="far fa-clock" style="color:#fff; font-size: 16px;"> 12.00 - 14.00</i>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4 mt-4">
                            <i class="fas fa-user-friends" style="margin-left: -15px; color:#fff; font-size: 16px;"> 2 Students</i>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 19px; height: 100px; border: 1px solid #223844; box-sizing: border-box;">
                    <img src="{{ asset('image/image/Rectangle343.png') }}" alt="post-author" width="100px">
                    <p style="font-size: 20px; color: #223844; font-weight: 700; margin-left: 110px; margin-top: -80px"> Suharto </p>
                    <p style="font-size: 20px; color: #223844; margin-left: 110px; margin-top: -20px"> Tokopedia</p>
                </div>
                <h4 class="card-title" style="font-weight: 700; margin-left: 192px; margin-top: 21px; margin-bottom: 31px; color:#223844;">Rp. 100.000</h4>
            </div>
        </div>
        {{-- eo speaker detail --}}
        
        
        <div class="col-lg-6 m-15px-tb blog-aside" >
            <!-- Author -->
            <div class="widget widget-author">
                <div class="card card-details card-right">
                    <table class="trip-informations">
                        <tr>
                            <th style="font-size: 20px;font-weight:200px">Yang kamu dapatkan</th>
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">Waktu Akses</th>
                            <th class="text-right" style="font-weight: 200px">1 Bulan</th>
                        </tr>
                        
                        <br>

                        <tr>
                            <th style="font-weight: 300;font-size:18px">Mentoring dan Aset</th>
                            <th class="text-right" style="font-weight: 200px">Tersedia</th>
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">E-Sertifikat</th>
                            <th class="text-right" style="font-weight: 200px">Tersedia</th>
                        </tr>
                    </table>

                        <br>

                    <table class="trip-informations">
                        <tr>
                            <th style="font-size: 20px;font-weight:200px">Detail Pembayaran</th>
                            
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">Harga Awal</th>
                            <td class="text-right" style="font-size:20px">Rp.250.000</td>
                        </tr>
                        <tr>
                            <th>
                                <div class="container">
                                    
                        
                     <tr>
                        <th style="font-weight: 300;font-size:18px">Harga Awal</th>
                        <td class="text-right" style="font-size:20px">Rp.250.000</td>
                      </tr>

                      
                      <tr>
                          <th>
                            <div class="container">
                                <form method="POST"  action="{{ route('coupon.store') }}">
                                    @csrf
                                    <div class="row align-items-start">
                                    
                                        <input class="col-4 widget-square1"style="font-weight: 300;font-size:16px;margin-left:5px;padding:5px" name="coupon_code" id="coupon_code">
                                          </input>
                                          <button class="col-3 widget-square2"style="font-weight: 100px;font-size:10x;color:#fff"> Masukkan</button>
                                        
                                     
                                      </div>
                                        
                                </form>
                               

                          </th>
                        
                        
                      
                      </tr>

                                    {{-- <div class="row align-items-start">
                                        <input class="col-4 widget-square1"style="font-weight: 300;font-size:16px;margin-left:5px;padding:5px">
                                            
                                        </input>
                                        <div class="col-3 widget-square2"style="font-weight: 100px;font-size:10x;">
                                            <a class ="link" href="{{url('/speaker/book/payment2')}}" style="">Masukkan</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">Harga Kelas</th>
                            <td class="text-right" style="font-size:20px">Rp.250.000</td>
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">Commitment Fee</th>
                            <td class="text-right" style="font-size:20px">Rp.125.000</td>
                        </tr>
                    </table>
                    <table class="trip-informations">
                        <tr>
                            <td class="warning"style="font-size:10px;color:#FF0000">**Commitment Fee akan dikembalikan jika kamu menyelesaikan Case Study-mu</td>
                        </tr>
                        <tr>
                            <th style="font-weight: 300;font-size:18px">TOTAL TRANSFER</th>
                            <th class="text-right" style="font-weight: 200px;font-size:20px">Rp.350.000</th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="font-size: 20px;font-weight:200px">Transfer Pembayaran</th>
                        </tr>
                        <tr>
                            <th>
                                <img src="{{ asset('image/image/BCA.png') }}"  alt="" width="168px" height="112px" class="emoney">
                                <img src="{{ asset('image/image/Gopay.png') }}"  alt="" width="168px" height="112px" class="emoney gopay">
                            </th>
                        </tr>
                        <tr>
                            <th style="font-size: 18px;font-weight:2px">PT. Mhysa (atas nama )</th>
                        </tr>
                        <tr>
                            <th style="font-size: 18px;font-weight:2"> 222-333-444-555</th>
                        </tr>
                    </table>
                    <br>
                    <div class="tef">
                         <u> <a href="https://wa.me/+62895360735691" >Kirim Bukti Transfer</a></u>
                    </div>
                    <button type="button" class="button btn-add-now mb-2 px-4">
                        <a href="{{url('/speaker/book/payment3')}}" >
                          <span class="button_text"> Konfirmasi Pembayaran</span>
                        </a>
                      
                    </button>
                </div>
            </div>
            <!-- End Author -->

            <!-- Latest Post -->
            <div class="widget widget-latest-post" style="padding: 30px">
                <div class="widget-title2">
                    <h3>Informasi Penting</h3>
                    <br>
                    <ul style="list-style-type: Disc">
                        <li>Proses konfirmasi pembayaran-mu memakan waktu sekitar 45menit</li>
                        <li>Mohon hanya melakukan pembayaran dengan Nomor dan Rekening
                            atas nama PT MHYSA</li>
                    </ul>
                </div>
            </div>
            <!-- End Latest Post -->

            <!-- Latest Post -->
            <div class="widget widget-contact" style="padding: 30px">
                <div class="float-left cs">
                    <h3 style="font-weight:650px">
                        Perlu bantuan ?
                    </h3>
                    <h4>
                        Hubungi Kami
                    </h4>
                </div>
                <button class="btn bg-transparant float-left" data-original-title="" title="" style="   align-items: center;
                    justify-content: center;display: flex;margin-top: 5px;margin-left:70px">
                    <a class ="link" href="https://lin.ee/Y6XarhL" style=""> <img src="{{ asset('image/image/line.png') }}" alt="" width="48px"height="48px"></a>
                </button>
            </div>
            <!-- End Latest Post -->
        </div>
    </div>
</div>



@endsection