@extends('layouts.site')
@section('header')


@endsection
@section('content')
 <div class="errorPage">
 	<div class="myContainer">
 		<div class="text">
 			<div class="error">
 				<p class="error">
                    @lang('home.error')
 				</p>
 				<p class="errorNumber">
 					404
 				</p>
 			</div>
 			<div class="image hideINweb">
	 			<img src="{{asset('front/img/sad-happy-man-broken-arm-leg-cast-crutch-fixing-collar-around-his-neck-fracture-limb-injury-vector-illustration-144814923.png')}}" alt="">
	 		</div>
 			<div class="mobileInfoAndBACK">
 				<p class="couldntFound">
					The requested page could not be found.
					Please check the URL and try again. 

	 			</p>
	 			<div class="backHome">
	 				<a href="{{route('start')}}">@lang('button.back_to_home_page')</a>
	 			</div>
 			</div>
 		</div>
 		<div class="image hideInMobile">
 			<img src="{{asset('front/img/error.png')}}" alt="">
 		</div>
 	</div>
 </div>
@endsection
@section('footer')


@endsection
