<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ __('Istag-Institut') }}</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href=" {{ asset("Istag/images/favicon.jpg") }} "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/bootstrap/css/bootstrap.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/animate/animate.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/css-hamburgers/hamburgers.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/animsition/css/animsition.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/select2/select2.min.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/vendor/daterangepicker/daterangepicker.css") }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/css/util.css") }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset("regist/css/main.css") }} ">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin=" {{ asset("regist/images/icons/map-marker.png") }} " data-scrollwhell="0" data-draggable="1"></div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" method="POST" action=" {{ route('guest') }} ">
			@csrf
				<span class="contact100-form-title">
					{{('Inscription')}}
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('Nom Requis') }} ">
					<span class="label-input100"> {{ __('Nom') }} </span>
					<input class="input100" type="text" name="name" placeholder=" {{ __('Entrez votre nom') }}">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('Prénom Requis') }} ">
					<span class="label-input100"> {{ __('Prénom') }} </span>
					<input class="input100" type="text" name="first_name" placeholder=" {{ __('Entrez votre prénom') }} ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('Email Requis ex: alphone@exemple.com') }} ">
					<span class="label-input100"> {{ __('Email') }} </span>
					<input class="input100" type="email" name="email" placeholder=" {{ __('Entrez votre email') }} ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('Numéro de téléphone requis') }} ">
					<span class="label-input100"> {{ __('Numéro') }} </span>
					<input class="input100" type="number" name="phone" placeholder=" {{ __('Entrez votre numéro') }} ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('date de naissance requis') }} ">
					<span class="label-input100">{{__('Date de naissance')}}</span>
					<input class="input100" type="date" name="date_born" placeholder=" {{ __('Date de naissance ') }}  ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('lieu de naissance requis') }} ">
					<span class="label-input100">{{__('Lieu')}}</span>
					<input class="input100" type="text" name="lieu" placeholder="Lieu de naissance">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('lieu de naissance requis') }} ">
					<span class="label-input100">{{__('Numéro de transantion')}}</span>
					<input class="input100" type="text" name="transaction" placeholder=" Numéro de transaction">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">{{__('Cours')}}</span>
					<select class="input100" name="cours" >
                            <option value="jour" selected> {{__('Jour')}} </option>
                            <option value="soir"> {{__('Soir')}} </option>
                    </select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="{{__('Niveau requis')}}">
					<span class="label-input100">{{__('Niveau')}}</span>
					<select class="input100" name="level" >
                            <option value="1" selected> {{__('Licence')}} 1</option>
                            <option value="2">{{__('Licence')}} 2</option>
							<option value="3"> {{__('Licence')}} 3</option>
                            <option value="4">{{__('Master')}} 1</option>
							<option value="5">{{__('Master')}} 2</option>
                        </select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate=" {{ __('Filière requis') }} ">
					<span class="label-input100"> {{ __('Filière') }} </span>
					<select class="input100" name="filiere" >
                            <option value="info_com"> {{__('Informatique & communication')}}</option>
                            <option value="gestion" selected >{{__('Gestion')}} </option>
							<option value="technology"> {{__('Techonologie')}} </option>
                            <option value="sante">{{__('Santé')}} </option>

                        </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "{{('Baccalauréat requis')}}">
					<span class="label-input100"> {{ __('Photocopie acte') }} </span>
					<input class="input100" type="file" name="acte_nais">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = " {{ __('Image non valide') }} ">
					<span class="label-input100"> {{ __('Photocopie baccalauréat') }} </span>
					<input class="input100" type="file" name="bacc" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100"> {{ __('Photocopie relevé de note') }} </span>
					<input class="input100" type="file" name="releve_note" >
					<span class="focus-input100"></span>
				</div>



				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type= "submit">
						<span>
							{{ __('Envoyer') }}
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>

				</div>

			</form>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/jquery/jquery-3.2.1.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/animsition/js/animsition.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/bootstrap/js/popper.js") }} "></script>
	<script src=" {{ asset("regist/vendor/bootstrap/js/bootstrap.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/select2/select2.min.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/daterangepicker/moment.min.js") }} "></script>
	<script src=" {{ asset("regist/vendor/daterangepicker/daterangepicker.js") }} "></script>
<!--===============================================================================================-->
	<script src=" {{ asset("regist/vendor/countdowntime/countdowntime.js") }} "></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src=" {{ asset("regist/js/main.js") }} "></script>




</body>
</html>
