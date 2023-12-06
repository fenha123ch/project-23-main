@extends('layouts.master_authen')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(authen/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign in now
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="name">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="username">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="email">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Phone">
						<span class="label-input100">Phone</span>
						<input class="input100" type="Phone" name="phone" placeholder="Enter Phone">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm-Password">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="password_confirmation" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="{{route('login')}}" class="txt1">
								Sign up
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection