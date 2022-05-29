@extends('layouts.loginStyle')

<title>Login | PSMES</title>

@section('content')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <!-- 
                    <div style="padding:10px;">
                        <a href="/mainpage"><button type="submit" class="btn btn-secondary customButton"><span class="bi bi-arrow-left-circle"></span> Back to Mainpage</button></a>
                    </div> -->
                    <div class="row">
                        <img src="{{URL::asset('/images/logoUMP.png')}}" alt="UMP Logo" class="logo">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line text-center">
                        <h1>PSMES</h1>
                        <h2>PSM Evaluation System for PSM Coordinator & Students</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3 text-center">
                        <h6 class="mb-0 mr-4 mt-2">SIGN IN</h6>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- ID -->
                        <!--<div class="row mb-3">
                            <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>

                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->

                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Role -->
                        <!--<div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Choose Role</option>
                                    <option value="{{ old('psmcoordinator') }}">PSM Coordinator</option>
                                    <option value="{{ old('psmevaluator') }}">PSM Evaluator</option>
                                    <option value="{{ old('student') }}">Student</option>
                                </select>
                            </div>
                        </div>-->

                        <!-- Password -->
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

                        <div class="row m-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="customButton">
                                    {{ __('Login') }}
                                </button><br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="row mb-4 px-3 text-center">
                        <strong>
                            <small class="font-weight-bold">Don't have an account?
                                <a href="/register" class="text-danger ">Register</a>
                            </small>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
@endsection
