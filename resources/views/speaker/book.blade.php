<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/speaker/book.css') }}" >

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="speaker-box">
            <img class="text-center speaker-icon" src="{{ asset('assets/icons/0.png') }}" alt="Card image cap">
            <img class="text-center speaker-img" src="{{ asset('image/image/Rectangle343.png')}}" alt="Card image cap">
            <img class="text-center speaker-icon" src="{{ asset('assets/icons/0.png') }}" alt="Card image cap">
            <div class="speaker-details">
                <h3> Dika Irawan </h3>
                <h4> CEO DikaLearn </h4>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <div class="row justify-content-md-center">
        <form method="POST"  action="{{ route('speaker.book-store') }}">
            @csrf
            <h3>Pilih Waktu</h3>
            <div class="form-row p-2 mb-3">
                <div class="form-group col-md-4">
                    <label for="date">Tanggal</label>
                    <input type="date" name="date" class="form-control rounded-sm border-dark bg-transparent" 
                    id="date" placeholder="Date" required>
                  
                </div>

                <div class="form-group col-md-2">
                    <label for="start_time">Waktu Mulai</label>
                    <input type="time" class="form-control rounded-sm border-dark bg-transparent" 
                    id="start_time" placeholder="Time" required name="start_time">
                </div>
                <div class="form-group col-md-2">
                    <label for="end_time">Waktu Berakhir</label>
                    <input type="time" class="form-control rounded-sm border-dark bg-transparent" id="end_time" 
                    placeholder="Time" required name="end_time">
                </div>
            </div>

            <h3>Bentuk Acara</h3>
            <label>Butuh pembicara mengisi: </label>
            <div class="form-row mb-3 mt-3">
                <div class="btn-group d-flex flex-wrap mb-5" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 mt-1 mb-1 rounded-sm" required name="acara" style="display: none">Webinar</button>
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 mt-1 mb-1 rounded-sm">Talkshow</button>
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 mt-1 mb-1 rounded-sm">Moderator</button>
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 mt-1 mb-1 rounded-sm">Workshops</button>
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 mt-1 mb-1 rounded-sm">Lain-lain</button>
                </div>
                <div class="form-group col-md-4 ">
                    <textarea class="form-control border-dark bg-transparent mr-2 ml-2 mt-1 mb-1 py-1 px-3" id="detail_event" ></textarea>
                </div>
            </div>
            <h3>Deskripsi Acara</h3>
            <div class="form-row mb-3">
                <div class="form-group col-md-4 p-2">
                    <label for="detail_event">Detail acara yang akan diisi</label>
                    <textarea class="form-control border-dark bg-transparent" id="detail_event" rows="3"required name="detail_event" ></textarea>
                </div>
                <div class="form-group col-md-4 p-2">
                    <label for="topic">Topik yang ingin dibahas</label>
                    <textarea class="form-control border-dark bg-transparent" id="topic" rows="3" required name="topic"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col text-center">
                    <button type="button" class="btn btn-outline-dark mr-2 ml-2 py-1 px-3 rounded-sm" data-toggle="modal" data-target="#exampleModal">
                        Lanjutkan
                    </button>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Bookingan Kamu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row justify-content-start">
                                <div class="modal-details">
                                    <h4> Sesi  <b>{{ __('Webinar') }}</b> dengan <b>{{ __('Dika Irawan') }}</b></h4>
                                    <h5> Fee pembicara <b>Rp.{{ __('250000') }}</b></h5>
                                    <div class="modal-time">
                                        <i class="far fa-calendar-alt"></i>{{ __('Kamis, 15 Juli 2021') }}
                                        <i class="far fa-clock"></i>{{ __('19:00')}} - {{ __('19:00')}}
                                    </div>
                                </div>
                            </div>
                            <h5>Deskripsi acara</h5>
                            <div class="row justify-content-md-center">
                                <div class="modal-description">
                                    <p>
                                    {{ __('
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Magna iaculis blandit dictum enim velit, duis. 
                                        Nulla id purus, diam, gravida diam erat. 
                                        Pharetra adipiscing nunc nisl enim, pellentesque ultrices 
                                        nulla pharetra massa. Porttitor cursus erat ac vulputate 
                                        lorem pharetra egestas.
                                    
                                    ') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark mr-2 ml-2 py-1 px-3 rounded-sm" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-outline-dark mr-2 ml-2 py-1 px-3 rounded-sm">Button Booking</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

</div>
@endsection