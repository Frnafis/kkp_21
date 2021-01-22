@extends('auth.layouts.app')
@section('title')
<title>Sign Up | BLOG</title>
@section('content')
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <!-- <div class="brand">
                    <img src="img/logo.jpg" alt="bootstrap 4 login page">
                </div> -->
                <div class="card fat mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Sign Up</h4>
                        <hr>
                        <form method="POST" class="my-login-validation row" novalidate="" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" data-eye name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm-password">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye autocomplete="new-password">
                            </div>

                            <div class="form-group col-md-12">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                    <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
                                    <div class="invalid-feedback">
                                        You must agree with our Terms and Conditions
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-0 col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                            <div class="mt-4 text-center col-md-12">
                                Already have an account? <a href="{{route('login')}}">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2020 &mdash; Blog 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
