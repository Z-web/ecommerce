@extends('layouts.login')

@section('title','login')

@section('content')

    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h4 class="card-title mb-1">Welcome to Vuexy! 👋</h4>
            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

            @include('dashboard.includes.alerts.errors')
            @include('dashboard.includes.alerts.success')


            <form class="auth-login-form mt-2" action="{{route('admin.post.login')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="login-email">Email</label>
                    <input class="form-control" id="login-email" type="text" name="email" placeholder="faraj@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                    @error('email')
                        <span class="error">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password">Password</label><a href="page-auth-forgot-password-v2.html"><small>Forgot Password?</small></a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                    </div>

                    @error('password')
                    <span class="error">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="remember_me" id="remember-me" type="checkbox" tabindex="3" />
                        <label class="custom-control-label" for="remember-me"> Remember Me</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
            </form>

            <p class="text-center mt-2"><span>New on our platform?</span><a href="page-auth-register-v2.html"><span>&nbsp;Create an account</span></a></p>
            <div class="divider my-2">
                <div class="divider-text">or</div>
            </div>
            <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>
        </div>
    </div>


@endsection
