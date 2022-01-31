<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/sertifikat.css') }}" rel="stylesheet">



@extends('layouts.sidebar')

@section('content')
<div class="container p-0">

    <div class="head" style="margin-top: 60px">
        <a href="#" class="btn btn-primary float-right mt-n1"><i class="fas fa-plus"></i> Live chat</a>
        <h1 class="h3 mb-3" style="margin-left: 25px">Sertifikat Kelas</h1>
    </div>

	<div class="row" style="margin-left: 10px">
			
		
		<div class="col-12 col-md-6 col-lg-3 rounded">
			<div class="card">
                <img class="card-img-top" src="{{ asset('image/image/Rectangle341.png') }}" alt="">
				

				
				<div class="card-body px-4 pt-2" style="margin-top:10px">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                        </div>
                        <div class="judul">
                            <h4 style="margin-left: 5px;margin-top:10px;">Ms.Office </h4>
                        </div>
                    </div>
                   
				</div>
                <button type="button" class="buton btn-add-now mb-7 ">
                    <span class="button_text">
                        <a href="/certificateSurvey" class="link1"  style="text-decoration: none">Unduh Sertifikat</a>
                    </span>
                </button>

                <br>
				
			</div>
		</div>

        <div class="col-12 col-md-6 col-lg-3 rounded">
			<div class="card">
                <img class="card-img-top" src="{{ asset('image/image/Rectangle341.png') }}" alt="">
				

				
				<div class="card-body px-4 pt-2" style="margin-top:10px">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                        </div>
                        <div class="judul">
                            <h4 style="margin-left: 5px;margin-top:10px;">Ms.Office </h4>
                        </div>
                    </div>
				</div>
                <button type="button" class="buton btn-add-now mb-7 ">
                    <span class="button_text">
                        <a href="/certificateSurvey" class="link1"  style="text-decoration: none">Unduh Sertifikat</a>
                    </span>
                </button>

                <br>
				
			</div>
		</div>

        <div class="col-12 col-md-6 col-lg-3 rounded">
			<div class="card">
                <img class="card-img-top" src="{{ asset('image/image/Rectangle341.png') }}" alt="">
				

				
				<div class="card-body px-4 pt-2" style="margin-top:10px">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">14.00 - 15.00</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="card-text" style="font-size: 14px; color: #365B6D">6/10/2021</p>
                        </div>
                        <div class="judul">
                            <h4 style="margin-left: 5px;margin-top:10px;">Ms.Office </h4>
                        </div>
                    </div>
				</div>
                <button type="button" class="buton btn-add-now mb-7 ">
                    <span class="button_text">
                        <a href="/certificateSurvey" class="link1"  style="text-decoration: none">Unduh Sertifikat</a>
                    </span>
                </button>

                <br>
				
			</div>
		</div>
        
		
		
	</div>
</div>
@endsection