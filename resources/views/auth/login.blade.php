<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ __('Istag-Institut') }}</title>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="{{asset("Istag/images/favicon.jpg")}}" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/vendor/bootstrap/css/bootstrap.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("style_log/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/vendor/animate/animate.css") }} ">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=" {{  asset("style_log/vendor/css-hamburgers/hamburgers.min.css")}} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/vendor/animsition/css/animsition.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/vendor/select2/select2.min.css") }} ">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/vendor/daterangepicker/daterangepicker.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/css/util.css")  }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset("style_log/css/main.css") }} ">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action = " {{ route('login') }} " >
                @csrf
					<span class="login100-form-title">
						{{ __('Connectez-vous') }}
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						<input type="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=" {{ __("Votre email") }} ">
						<span class="focus-input100"></span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
					</div>
                    

					<div class="wrap-input100 validate-input" >
						<input type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder=" {{ __("Mot de passe") }} ">
						<span class="focus-input100"></span>

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="text-right p-t-13 p-b-23">
						<div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Se connecter') }}
						</button>
					</div>
                    <div class="flex-col-c p-t-30 p-b-40">
                    <a class="site-logo" href=" {{ url('/') }} ">
                       <img src="{{asset("Istag/images/favicon.jpg")}}" alt="Homepage">
                    </a>
                    </div>
					<div class="flex-col-c p-t-30 p-b-40">
						 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublier ?') }}
                                    </a>
                                @endif
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/vendor/jquery/jquery-3.2.1.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/vendor/animsition/js/animsition.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{  asset("style_log/vendor/bootstrap/js/popper.js") }} "></script>
	<script src=" {{ asset("style_log/vendor/bootstrap/js/bootstrap.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/vendor/select2/select2.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/vendor/daterangepicker/moment.min.js") }} "></script>
	<script src=" {{ asset("style_log/vendor/daterangepicker/daterangepicker.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/vendor/countdowntime/countdowntime.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("style_log/js/main.js") }} "></script>

</body>
</html>