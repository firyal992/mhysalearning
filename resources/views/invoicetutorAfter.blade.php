<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/invoicetutor.css') }}" rel="stylesheet">



@extends('layouts.sidebar')

@section('content')

<div class="container">
    
    <div class="tutorr">
        <img class="rounded-circle"src="{{ asset('image/image/Rectangle343.png') }}" alt="" width="203px" height="203px">

    </div>
    <div class="titlecontent">
        <h3 >Susilo Bambang</h3>
    </div>
    <div class="titlecont">
       <p> Digital Marketing Tutor</p>
    </div>
    <div class="contentbar">                
        <!-- Start row -->
        <div class="row" style="align-items: center;justify-content:center;display:flex;margin-bottom:30px">
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 ">
                
                    <div class=" col-lg-12 col-xl-12">
                        <div class="squarecont align-items-center ">
                            
                            <div class="row p-4 align-items-center"style="display:flex;justify-contet:center;">
                                <div class="col-sm-12 col-md-6 " style="margin-top: -15px">
                                    <h3 class="font-light mb-0">   <img src="{{ asset('image/image/Group237.png') }}" alt="" width="24px" height="24px"> Total Komisi</h3>
                                </div>
                                <div class="col-sm-12 col-md-6" style="margin-top: -10px" >
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-info mr-3">
                                            <div class="text-harga  ">
                                                <h5>Rp.100.000</h5>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>

                            </div>
                              
                            
                            
                        </div>
                       
                        <select name="one" class="dropdown-select shadow p-3 mb-5 rounded" style="width: 35%">
                            <option value="">Januari</option>
                            <option value="1">Februari</option>
                            <option value="2">Maret </option>
                            <option value="3">April</option>
                            <option value="3">Mei</option>
                            <option value="3">Juni</option>
                            <option value="3">Juli</option>
                            <option value="3">Agustus</option>
                            <option value="3">September</option>
                            <option value="3">Oktober</option>
                            <option value="3">November</option>
                            <option value="3">Desember</option>
                          </select>
                          <br></br>
                          <div class="table-responsive" style="margin-top: 40px;margin-bottom:30px">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        
                                        <th widht="40px" style="border: none"><span>Recruiter</span></th>
                                        <th class="text-center" style="border: none"><span>Tanggal</span></th>
                                        
                                        <th class="text-center" widht="40px" style="border: none"><span> Aquisition Cost</span></th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td widht="40px">Dika Learning</td>
                                         <td class="text-center">
                                            18 Juni 2021
                                         </td>
                                        
                                        <td class="text-center" widht="40px">Rp.100.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="rekening">
                            <h6>Masukkan Nomor Rekening</h6>
                            <div class="row">
                                
                             <div class="form-group col-xs-4 col-sm-3  ">
                                <label for="inputPassword2" class="sr-only ">Password</label>
                                <input type="password" class="form-control border border-secondary " id="inputPassword2" placeholder="Password">
                              </div>

                            </div>
                            
                        </div>
                        <div class="float-right">
                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                
                                <li class="list-inline-item ">
                                    <div class="attention">
                                        <h6>**Pencairan dana memakan waktu 2x24 jam</h6>
                                        <h6>Silahkan update secara berkala</h6>
                                    </div>
                                </li>
                                <button type="button" class="button-form btn-add-now mb-3 px-6" style="background-color: #C7C7C7">
                                    <span class="button_texttform" style="color: #868796">Pencairan diajukan</span>
                                </button>
    
                            </ul>
                        </div>
                    </div>
                    
                    
            
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    </div>
    
</div>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
           

@endsection