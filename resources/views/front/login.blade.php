@extends('layouts.site')
@section('header')
    <header class="headerInLogin">
        <div class="myContainer">
            <div class="buttonsInNav">
                <div class="languageAndLogin">
                    <div class="backButton">
                        <a href="{{route('start')}}"><img src="{{asset('front/img/left-arrow-(1).png')}}" alt=""></a>
                    </div>
                    <div class="languages">
                        <button @if(Config::get('app.locale')=='en') class="active" @endif><a
                                href="{{asset('setlocale/en')}}">Eng</a></button>
                        <button @if(Config::get('app.locale')=='hy') class="active" @endif><a
                                href="{{asset('setlocale/hy')}}">Հայ</a></button>
                        <button @if(Config::get('app.locale')=='ru') class="active" @endif><a
                                href="{{asset('setlocale/ru')}}">Ру</a></button>
                    </div>
                </div>
            </div>
        </div>
    </header>


@endsection
@section('content')
	<div class="loginPage">
      <div class="myContainer">
        <div class="gifPart">
          <img src="{{asset('front/img/fingerlogo-01 (1).png')}}" alt="">
        </div>
        <div class="loginForm">
          <div class="rightPositionedForm">
            <form action="">
              <h1>{{ __('home.login_page')}}</h1>
              <div class="inputs">
                <div class="item">
                  <input type="text" placeholder="{{ __('home.mail')}}">
                </div>
                <div class="item">
                  <input type="password" placeholder="{{ __('home.password')}}">
{{--                  <a href="">{{ __('home.forgot_password')}}</a>--}}
                </div>
                <div class="submit">
                  <input type="submit" value="{{ __('home.login')}}">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('footer')

    <footer class="footerInLogin">
    <div class="privacy">
        <p>@lang('footer.all_right_reserved')</p>
        <p>&copy;   2020 Touch and Take</p>
        <p>@lang('footer.powered_by')</p>

    </div>
    </footer>
@endsection
