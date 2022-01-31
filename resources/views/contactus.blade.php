<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contactus.css') }}" >


    </head>
    <body>

    <!-- NAVBAR -->
    <!-- P.S. temporary navbar -->
    <!-- P.P.S. change to navbar from home.blade.php -->
        <div class="navbar">
            <a href="/">
                <img class="mhysa-logo" src="{{ asset('assets/logo_nama_biru.png') }}"> 
                <h1 class="mhysa-logo-title">Mhysa Learning</h1>
            </a>

            <a href="/" class="button-close">x</a>
        </div>

        <div class="container">
            <div class="row justify-content-between">

            <!-- CONTACT US -->

                <div class="col-4">
                    <div class="contact-us">
                        <ul class="link-contacts">
                            <h2>Kontak Kami</h2>

                            <li><i class="fas fa-phone fa-styling"></i> <h5>+62 XXX-XXX-XXX </h5> </li>
                            <li><i class="far fa-envelope fa-styling"></i> <h5>mhysalearning@gmail.com</h5></li>
                            <li><i class="fab fa-instagram fa-styling"></i> <h5>@mhysalearning</h5> </li>
                        </ul>

                    </div>
                </div>  
                <div clas="col-8">
                    <div class="form-kritik-saran">
                        <h2>Kritik/Saran </h2>
                        <div class="row">
                            <form>
                                <div class="form-item">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="text-input" placeholder="Ex : Harry Styles">
                                </div>

                                <div class="form-item">
                                    <label>Email</label>
                                    <input type="email" class="email-input" placeholder="Co : name@example.com">
                                </div>

                                <div class="form-item">
                                    <label>Nomor Telepon</label>
                                    <input type="tel" class="tel-input" placeholder="Ex : +62 812-3456-7890">
                                </div>

                                <div class="form-item">
                                    <label>Pesan/Masukan</label>
                                    <input type="text" class="message-box" placeholder="Ex : Harry Styles">
                                </div>

                                <div class="form-submit">
                                    <input type="submit" value="Kirim Masukan">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
            
    <!-- SARAN/KRITIK -->
            
    </body>
</html>