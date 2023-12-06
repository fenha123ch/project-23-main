@extends('layouts.master_authen')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('{{asset('authen/images/bg-01.jpg') }}');">
					<span class="login100-form-title-1">
                    Reset Password
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
					@csrf
					
<!-- Password Reset Token -->
<input type="hidden" name="token" value="{{ $request->route('token') }}">
					

                    <div class="wrap-input100 validate-input m-b-26" data-validate="email">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email"value="{{ $request->email }}">
						<span class="focus-input100"></span>
					</div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger " />
                    

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger " />

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm-Password">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="password_confirmation" placeholder="Password">
						<span class="focus-input100"></span>
					</div>


					<div class="flex-sb-m w-full p-b-30">

						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Reset Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection