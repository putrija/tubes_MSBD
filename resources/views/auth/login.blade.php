@extends('layouts.app')

@section('content')

{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href={{ asset('assets/css/style-login.css') }}>
    <title>halaman login</title>
  </head>
  <body> --}}
    <div class="cotainer">
      <div class="box">
        <div class="row contentform">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <img src={{ asset('images/pendidikan.jpg') }} alt="" class="img-flex">
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <h4 class="text-center mb-3">login</h4>
            <h4 class="text-center mb-3">SMA NEGERI 14 MEDAN</h4>
            <form class="mt-3" method="POST" action="{{ route('login') }}">
                @csrf
              <div class="mb-3">
                <label for="Inputnimnip" class="form-label">username/nim/nip </label>
                <input placeholder = "masukkan nim/nip anda" type="text" class="form-control" id="Inputnimnip" name ="username" >
              </div>
              {{-- <div class="mb-3">
                <label for="InputEmail" class="form-label">Email </label>
                <input placeholder = "masukkan email anda" type="email" class="form-control" id="InputEmail">
              </div> --}}
              <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input placeholder = "masukkan password anda" type="password" class="form-control" id="InputPassword" name="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck">remember me❤️</label>
              </div>
              {{-- <div class="mb-3">
                <div class="dropdown">
                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    level user
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Guru</a></li>
                    <li><a class="dropdown-item" href="#">Siswa</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                  </ul>
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button>              
            </form>
            
            <a href="" ><h6 class="text-center mb-3">{{ __('lupa Password?') }}</h6></a>
          </div>
        </div>
      </div>
    </div>
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> --}}
@endsection




























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
