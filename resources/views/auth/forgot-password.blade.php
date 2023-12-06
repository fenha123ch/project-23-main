@extends('layouts.master_authen')
@section('content')
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(authen/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                    Forgot your password?
                    </span>

                </div>
                <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email">
                        <span class="label-input100">E-mail</span>
                        <input class="input100" type="email" name="email" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                    <div class="flex-sb-m w-full p-b-30">

                        <div>
                            <a href="{{route('login')}}" class="txt1">
                                เข้าใช้งานระบบที่นี่
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                        Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection