<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/sertifikatSurvey2.css') }}" rel="stylesheet">



@extends('layouts.sidebar')

@section('content')
<div class="container mt-5 px-4 ">

    <div class="sertif-kelas">
        <h3> Sertifikat Kelas</h3>
    </div>
    <br>
    <div class="sertif-survey">
        <h5> Survey Kepuasan Pelanggan</h5>
    </div>


        
        <table class="table table-responsive table-borderless "  style=" border : 1px solid #92B5C8;border-radius: 20px;" >
            <thead>
            
                    <th scope="col" width="60%" style="padding-bottom: 40px">Layanan Umum</th>
                    <th scope="col" width="5%"></th>
                    <th scope="col" width="12%" style="padding-bottom: 15px ;"> 
                        <div class="txt" >
                            <h3>1</h3>
                        </div>
                           
                        <div class="txt">
                          
                            <h6 style="font-size: 10px;">Sangat Tidak Setuju</h6>
                        </div>
                        
                    
                    </th>
                    <th scope="col" width="12%" style="padding-bottom: 25px"> 
                        <div class="txt" >
                            <h3>2</h3>
                        </div>
                           
                        <div class="txt"  style="margin-top: 10px" >
                          
                            <h6 style="font-size: 10px; margin-top:10px">Tidak Setuju</h6>
                        </div>
                     </th>
                    <th scope="col" width="12%" style="padding-bottom: 35px"> 
                        <div class="txt" >
                            <h3>3</h3>
                        </div>
                        <div class="txt"  style="margin-top: 10px" >
                          
                            <h6 style="font-size: 11px;">Setuju</h6>
                        </div>
                    </th>
                    <th scope="col" class="" width="12%" style="padding-bottom: 25px ;" >
                      
                        <div class="txt" style="margin-top: 10px;" >
                        <h3>4</h3>
                        </div>
                        <div class="txt"  >
                          
                            <h6 style="font-size: 10px;">Sangat Setuju</h6>
                        </div>
                      
                    </th>
                    <th></th>
            </thead>
          
            <tbody>
                <tr >
                  
                    <td class="noBorder" style="border-right: 1px solid #92B5C8; border-top:none" >1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
                    <td style="border: none"></td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox" />
                            <label for="checkbox"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox1" />
                            <label for="checkbox1"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox2" />
                            <label for="checkbox2"></label>
                          </div>
                     </td>
                    <td  class="noBorder text-end" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox3" />
                            <label for="checkbox3"></label>
                          </div>
                    </td>
                    <td class="noBorder" style="border: none"></td>
                </tr>

                <tr >
                  
                    <td class="noBorder" style="border-right: 1px solid #92B5C8; border-top:none;" >1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
                    <td style="border: none"></td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox4" />
                            <label for="checkbox4"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox5" />
                            <label for="checkbox5"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox6" />
                            <label for="checkbox6"></label>
                          </div>
                     </td>
                    <td  class="noBorder text-end" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox7" />
                            <label for="checkbox7"></label>
                          </div>
                    </td>
                    <td class="noBorder" style="border: none"></td>
                </tr>


                <tr >
                  
                    <td class="noBorder" style="border-right: 1px solid #92B5C8; border-top:none" >1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
                    <td style="border: none"></td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox8" />
                            <label for="checkbox8"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox9" />
                            <label for="checkbox9"></label>
                          </div>
                     </td>
                    <td  class="noBorder" style="border: none">
                        <div class="round">
                            <input type="checkbox" id="checkbox10" />
                            <label for="checkbox10"></label>
                          </div>
                     </td>
                    <td  class="noBorder text-end" style="border: none"> 
                        <div class="round">
                            <input type="checkbox" id="checkbox11" />
                            <label for="checkbox11"></label>
                          </div>
                    </td>
                    <td class="noBorder" style="border: none"></td>
                </tr>
                
            
                
              
            </tbody>
        </table>
    


    

    <div class="box-write">
        <div class="title-box">
            <h6>Tuliskan Testimoni kamu disini! (Pendapatmu beharga sekali untuk kami)</h6>
        </div>
        <div class="form-group">
            
            <input class="form-control" id="exampleFormControlInput1" rows="3"></input>
          </div>
    </div>
    <div class="submit">
        <button type="button" class="button-submit btn-add-now mb-2 px-4">
            <span class="button_text">Submit</span>
        </button>
    </div>
   
</div>
@endsection