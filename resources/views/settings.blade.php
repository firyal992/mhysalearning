<!-- STYLING -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('css/settings.css') }}" rel="stylesheet">

@extends('layouts.sidebar')

@section('content')
<div class="container">
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
    <form>
        @csrf
        <div class="row">
            <div class="col mx-auto text-center align-self-center">
                <div class="form-group">
                    <img class="text-center rounded-circle w-50 p-3" src="https://billatowing.com/wp-content/uploads/2016/06/team-1.jpg" alt="Card image cap">
                    <input type="file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="col align-self-center">
                <div class="form-group">
                    <h3 class="title"> Account </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-center">
                <div class="form-group">
                    <h3 class="title"> Profile </h3>
                </div>
            </div>
            <div class="col">
                <label for="username" class="col">{{ __('Username') }}</label>
                <input id="username" type="text" class="form-control" @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row justify-content-around mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="name" class="col">{{ __('Full Name') }}</label>
                    <input id="name" type="text" class="form-control" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phonenumber" class="col">{{ __('Phone Number') }}</label>
                    <input id="phonenumber" type="tel" class="form-control" @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>
                    @error('phonenumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="col">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="old_password" class="col">{{ __('Old Password') }}</label>
                    <input id="old_password" type="password" class="form-control" @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="password">

                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password" class="col">{{ __('New Password') }}</label>
                    <input id="new_password" type="password" class="form-control" @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="password">
                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="confirm_password" class="col">{{ __('Confirm Password') }}</label>
                    <input id="confirm_password" type="password" class="form-control" @error('confirm_password') is-invalid @enderror" name="confirm_password" required autocomplete="password">
                    @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> 
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary" name="role_id" value="3">
                {{ __('Save') }}
            </button>
        </div>
    </form>
    
</div>
@endsection