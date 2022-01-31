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
<link rel="stylesheet" href="{{ asset ('css/classdetail.css') }}">

<script src="{{ asset ('js/vendor/modernizr-2.8.3.min.js') }}" > </script>

@extends('layouts.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="teks">
        <h3 >UI/UX</h3>
     </div>

     <div class="text">
        <h3 >Design Thinking, Problem Solving, Empathy, User Persona</h3>
     </div>
    <div class="row">
        <div class="col-md-7">
            
            <div class="baner">
                <img src="{{ asset('image/image/Rectangle194.png') }}" alt="" class="rounded">
                
            </div>
           

            <article class="article">
            
                <div class="article-title">
                    <h2>Deskripsi Kelas</h2>
                    <p>Ingin belajar seputar UI / UX, tapi kamu bingung mau mulai dari mana. kamu gak perlu bingung lagi karena kelas ini akan membantu kamu belajar UI / UX sesuai dengan alur yang jelas dan pastinya mudah untuk kamu pahami.</p>
                    
                </div>
              
               
            </article>

           

            


        </div><!-- / column -->

       
        
        
        <div class="col-lg-5 m-15px-tb blog-aside">
            <!-- Author -->
            <div class="widget widget-author">
                       
                <div class="widget-title">
                    <h3>Introduction Figma protype</h3>
                </div>

                <div class="widget-harga">
                    <h3>Harga</h3>
                </div>

                
                
            
                <div class="card card-details card-right">
                    
                    <table class="trip-informations">

                     <tr>
                        <th width="50%">Pelaksanaan</th>
                        <td width="50%" class="text-right">3 Juni 2021 s/d 3 Juni 2021 </td>
                      </tr>

                      <br>
                    
                      <tr></tr>
                     
                     
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
                            <h4>Sertifikat</h4>
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
                <div class="widget-square3">
                    <a class ="link" href="{{ url('/classdetail-Bayr') }} " style="">
                        <div class="batas2">
                            <img src="{{ asset('image/image/textsms_24px.png') }}"  alt="" width="30px" height="30px">
                        </div>
                        <div class="batas2 tekss">
                            <h4>Studi Kasus</h4>
                        </div>
                    </a>
                 
                </div>
               
            </div>
            <!-- End Latest Post -->

            

            

        </div>
    </div>
    

</div>

<div class="counter-area fix area-padding-1">
    <div class="container">
        <div class="Review">
            <h2 >Review</h2>
         </div>
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