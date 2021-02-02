<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}">
	<link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('front/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('front/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/media.css')}}">

	<script src="{{asset('front/js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('front/js/fontawesome.min.js')}}"></script>
	<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front/js/main.js')}}"></script>
{{--    @dd(Session::get('subscribe_success'))--}}
</head>
<body class="fixed">
{{--@include('layouts.frontLayout.header')--}}
@yield('header')
@yield('content')

{{--@include('layouts.frontLayout.footer')--}}
@yield('footer')
@yield('scripts')
@if ($message = Session::get('subscribe_message'))
    <div class="successOrErrorMessage ">
        <p class="success">
            {{$message}}
        </p>
        <script>
            $( window ).on('load', function(){
                $('.successOrErrorMessage').addClass('show')
                $('.successOrErrorMessage').css({
                    'opacity':'1'
                })
                console.log('s');
                $('.successOrErrorMessage').delay(1500).fadeOut(2000)
            })
        </script>
@endif

    </div>
</body>
</html>
