@extends('layouts.app')

@section ('content')

<div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-sm modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="login-modal">{{ __('Login') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col my-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                                <div class="col">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>

                                <div class="col">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-between">
                                <div class="col">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col ps-4 pe-0 me-0">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-8 mt-2 justify-content-center">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#register-modal">
                                        Not a member yet?
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col logo-col">
                        <img src="../img/HighResolutionLogo-TransparentBackground.png" alt="" class="m-auto login-logo float-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ----------------------------REGISTER MODAL---------------------------- -->
<div class="modal fade" id="register-modal" data-bs-backdrop="static" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="register-modal-label">{{ __('Register') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="TheBodyContent" class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address:') }}</label>

                                <div class="col-md-6">
                                    <input id="reg-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="reg-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ----------------------------MAIN---------------------------- -->
<div class="newsletter-h1">
    <h1>Updates on Education</h1>
</div>
<div class="conatiner text-justify mx-5 news newsletter" id="article"></div>


<div class="container my-5">
    <div class="card-container text-center">
        <div class="card-item">
            <a href="{{url('/banghay/gradeone')}}" type="button">
                <img src="img/G1.png" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 1
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>
        <div class="card-item">
            <a href="{{url('/banghay/gradetwo')}}" type="button">
                <img src="img/G2.jpg" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 2
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>
        <div class="card-item">
            <a href="{{url('/banghay/gradethree')}}" type="button">
                <img src="img/G3.jpg" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 3
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>

        <div class="card-item">
            <a href="{{url('/banghay/gradefour')}}" type="button">
                <img src="img/G4.jpg" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 4
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>
        <div class="card-item">
            <a href="{{url('/banghay/gradefive')}}" type="button">
                <img src="img/G5.jpg" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 5
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>
        <div class="card-item">
            <a href="{{url('/banghay/gradesix')}}" type="button">
                <img src="img/G6.jpg" alt="">
                <p class="fw-bolder"><span class="code">&lt;</span>
                    Grade 6
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>
    </div>
    <div class="share-container">
        <a type="button" name="share-button" id="share-btn" href="{{ url('/banghay') }}">Share your work</a>
    </div>
</div>


@endsection