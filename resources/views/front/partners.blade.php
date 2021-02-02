@extends('layouts.site')
@section('content')
    <div class="partnersContent">
{{-- 	<div class="myContainer">--}}
{{-- 		<div class="info">--}}
{{-- 			<h3>Why become a partner ?...</h3>--}}
{{-- 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. And we have Advantages such as:</p>--}}
{{-- 			<ul>--}}
{{-- 				<li>Wide Product Range</li>--}}
{{-- 				<li>Full Customization</li>--}}
{{-- 				<li>Eco-Friendly Solution</li>--}}
{{-- 				<li>Pre-Agreed Commision Structure</li>--}}
{{-- 			</ul>--}}
{{-- 		</div>--}}
{{-- 	</div>--}}
        <div class="myContainer">
            <div class="info">
{{--                @dd($partners->homeTranslate[0])--}}
                <h3>{{$partners->homeTranslate[0]->title}}</h3>
                {!! html_entity_decode($partners->homeTranslate[0]->desc)!!}
            </div>
        </div>
 	<div class="becamApartner" id="form">
 		<div class="myContainer">
 			<div class="becamepartnerForm">
 				<h3>{{__("form.partners_form_title")}}</h3>
 				<p>{{__("form.partners_form_subtitle")}}</p>
				<form action="{{route('contact.send')}}" method="POST"  >
                    @csrf
                    <input type="hidden" id="fname" name="type" value="partners"><br>
					<input type="text" placeholder="{{__("form.full_name")}} *" name="name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <span
                            class="valid-error">{{ $errors->first('name') }}*</span>
                    @endif
					<input type="text" placeholder="{{__("form.company_name")}} *" name="company" value="{{old('company')}}">
                    @if ($errors->has('company'))
                        <span
                            class="valid-error">{{ $errors->first('company') }} *</span>
                    @endif
					<input type="text" placeholder="{{__("form.country")}} *" name="country" value="{{old('country')}}">
                    @if ($errors->has('country'))
                        <span
                            class="valid-error">{{ $errors->first('country') }} *</span>
                    @endif
					<input type="email" placeholder="{{__("form.email")}} *" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span
                            class="valid-error">{{ $errors->first('email') }} *</span>
                    @endif
					<input type="number" placeholder="{{__("form.phone_number")}} *" name="phone" value="{{old('phone')}}">
                    @if ($errors->has('phone'))
                        <span
                            class="valid-error">{{ $errors->first('phone') }} *</span>
                    @endif
					<textarea name="message" id="" cols="30" rows="10" placeholder="{{__("form.message")}} *" >{{old('message')}}</textarea>
                    @if ($errors->has('message'))
                        <span
                            class="valid-error">{{ $errors->first('phone') }} *</span>
                    @endif
					<input type="submit" value="@lang('footer.send')">
				</form>
 			</div>
 			<div class="imagePart">
 				<img src="{{asset('front/img/patners-banner-illustration.png')}}" alt="">
 			</div>
 		</div>
 	</div>
 </div>
    @if ($message = Session::get('success'))
        <div class="successOrErrorMessage ">
            <p class="success">
                {{$message}}
            </p>

        </div>
    @endif
    @if ($errors->any() && !$errors->has('subscribe'))

        <script>
            window.location.replace(window.location.href+'#form');
        </script>
    @endif
<!-- <div class="loader">
    <div class="center">
        <img src="{{asset('front/img/loader.gif')}}" alt="">
    </div>
</div> -->
@endsection



