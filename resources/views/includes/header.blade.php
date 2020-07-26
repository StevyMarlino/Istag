<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title> {{ __('Istag-Institut') }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset("Istag/css/open-iconic-bootstrap.min.css")}}" >
    <link rel="stylesheet" href="{{asset("Istag/css/animate.css")}}">

    <link rel="stylesheet" href="{{asset("Istag/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("Istag/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("Istag/css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("Istag/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("Istag/css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("Istag/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("Istag/css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("Istag/css/style.css")}}">


    <link rel="shortcut icon" href="{{asset("Istag/images/favicon.jpg")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("Istag/images/favicon.jpg")}}" type="image/x-icon">
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="header-logo">
                    <a class="site-logo" href=" {{ url('/') }} ">
                       <img src="{{asset("Istag/images/favicon.jpg")}}" alt="Homepage">
                    </a>
                 </div>
    		{{-- <div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">Fox. <span>University</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 1235 2355 98</span>
						    </div>
                        </div>
                    --}}
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
                                @if(Route::has('login'))
					    		<a href=" {{ route('login') }} " class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span> {{ __('Se Connecter') }} </span>
                                </a>
                                @endif
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
