@extends('layouts.site')

@section('content')
<!-- <div class="loader">
	<div class="center">
		<img src="{{asset('front/img/loader.gif')}}" alt="">
	</div>
</div> -->
    <main class="contactUs" id="form">
		<div class="contactForm">
			<div class="infoAndForm">
				<div class="infoPart">
					<h1>{{__('navbar.contact_us')}}</h1>
					<p class="contactusText">{{__('navbar.contact_us_desc')}} </p>
					<div>

						<a href="tel:{{$phone->value}}">
							<span><img src="{{asset('front/img/phone.png')}}" alt=""></span>
							<p>{{$phone->value}}</p>
						</a>
					</div>
					<div>
						<a href="mailto:{{$email->value}}" >
							<span><img src="{{asset('front/img/mail.png')}}" alt="{{$phone->name}}"></span>
							<p>{{$email->value}}</p>
						</a>
					</div>
					<div>
						<a  class="cursorText">
							<span><img src="{{asset('front/img/Untitled-1.png')}}" alt=""></span>
							<p>{{__('home.adress')}}</p>
						</a>
					</div>
				</div>
				<form action="{{route('contact.send')}}" method="POST"   >
{{--				<form data-route="{{route('contact.send')}}" method="post"  enctype="multipart/form-data" id="form-data">--}}
                    @csrf
                    @method('POST')
{{--                    @if ($errors->any())--}}
{{--                        @dd($errors->all())--}}

                    <input type="hidden" id="fname" name="type" value="contact"><br>

					<input type="text" placeholder="{{__("form.full_name")}} *" name="name" value="{{old('name')}}" class="cursorText">
                    @error('name')
                    <div class="">{{ $message }} *</div>
                    @enderror
					<input type="email" placeholder="{{__("form.email")}} *" name="email" value="{{old('email')}} " class="cursorText">
                    @error('email')
                    <div class="">{{ $message }} *</div>
                    @enderror
					<textarea name="message" id="" cols="30" rows="10" placeholder="{{__("form.message")}} *">{{old('message')}}</textarea>
                    @error('message')
                    <div class="">{{ $message }} *</div>
                    @enderror
{{--                    @endif--}}
					<button   type="submit">@lang('footer.send')</button>
				</form>
			</div>
			<div class="imagePart">
				<img src="{{asset('front/img/light-bulb_4x.png')}}" alt="">
			</div>
		</div>
	</main>
{{--@dd($message = Session::get('success'))--}}
@if ($message = Session::get('success'))
    <div class="successOrErrorMessage ">
        <p class="success">
            {{$message}}
        </p>

    </div>
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
@if($errors->any() && !$errors->has('subscribe'))

    <script>

        window.location.replace(window.location.href+'#form');
    </script>
@endif
{{--<div class="successOrErrorMessage ">--}}
{{--	<p class="success">--}}
{{--		Your message has sent.--}}
{{--	</p>--}}

{{--</div>--}}
{{--<div class="successOrErrorMessage">--}}

{{--    <p class="error">--}}
{{--        your message doesn'n sent.--}}
{{--    </p>--}}
{{--</div>--}}

@endsection


