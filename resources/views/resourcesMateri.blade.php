<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/resourcesMateri.css') }}" rel="stylesheet"> --}}

@extends('layouts.sidebar')

@section('content')
<div class="container mt-4 ml-4">
    <nav aria-label="breadcrumb" style="background-color: #fff">
        <ol class="breadcrumb col-md-10 ml-2" style="font-size: 24px">
            <li class="breadcrumb-item"><a style="text-decoration: none; color: rgba(34, 56, 68, 0.5);" href="#">Materi Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #223844">UI/UX</li>
        </ol>
    </nav>
    <p class="mt-3 col-md-10 text-justify" style="color: rgba(34, 56, 68, 0.85);">
        UI/UX design course ini membawa design-centric approach kepada user interface dan user experience design, menawarkan instruksi praktikal 
        an skill-based dari perspektif desain komunikasi visual dan menerapkannya untuk menciptakan pengalaman berbasis layar yang efektif dan menarik. 
        Kamu akan merangkum dan mendemonstrasikan semua tahapan proses pengembangan UI/UX menggunakan aplikasi Adobe XD dan Figma, mulai dari riset pengguna 
        hingga menentukan strategi, ruang lingkup, dan arsitektur informasi proyek, hingga mengembangkan wireframe, mockup, dan design deliverable lainnya.
    </p>
    <div class="container mt-4">
        <ul style="margin-left: -7px" class="nav nav-pills col-md-10 col-sm-10 col-10">
            <li class="nav-item col-md-4">
                <div class="tab">
                    <a class="nav-link active" data-toggle="tab" href="#materi">
                        <i class="fas fa-list mr-2"></i>
                        Materi
                    </a>
                </div>
            </li>
            <li class="nav-item col-md-5">
                <div class="tab">
                    <a class="nav-link" data-toggle="tab" href="#posttest">
                        <i class="far fa-calendar mr-2"></i>
                        Post Test
                    </a>
                </div>
            </li>
            </li>
        </ul>
        <div class="tab-content col-md-10 ml-2 pb-4">
            <div class="tab-pane show active" id="materi" role="tabpanel">
                <ol>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, labore.
                    </li>
                </ol>
            </div>

            
            <div class="tab-pane " id="posttest" role="tabpanel">
                <form class="posttest p-3">
                    <div class="form-group">
                        <label for="soal1">1.  What skills should a UX designer have?</label>
                        <input type="text" class="form-control" id="soal1" aria-describedby="emailHelp" placeholder="isi disini">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">2.  What makes a good user interface?</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="isi disini">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn text-center mt-3 col-md-2 font-weight-bolder" style="background: #F1CA6D; color:#223844; font-size: 15px">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <br></br>
    </div>


</div>
@endsection