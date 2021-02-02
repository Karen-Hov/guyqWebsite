@extends('layouts.site')
@section('header')
    <header class="headerInLogin">
        <div class="myContainer">
            <div class="buttonsInNav">
                <div class="languageAndLogin">
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

    <div class="selectCustomerOrBusinnes">
        <div class="myContainer">
            <div class="item">
                <div class="image">
                    <img src="{{asset('front/img/business-icon-300x300.png')}}" alt="">
                </div>
                <div class="link">
                    <a href="{{route('home.business')}}">@lang('button.business')</a>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="{{asset('front/img/Customer-512.png')}}" alt="">
                </div>
                <div class="link">
                    <a href="{{route('home.customer')}}">@lang('button.customer')</a>
                </div>
            </div>
        </div>
    </div>


    <div class="loader">
        <div class="center">
            <img src="{{asset('front/img/loader.gif')}}" alt="">
        </div>
    </div>
@endsection
@section('footer')

    <footer class="footerInLogin">

        <div class="privacy">
            <p>@lang('footer.all_right_reserved')</p>
            <p>&copy;   {{date('Y') }}Touch and Take</p>
            <p><a href="https://itresources.am/" target="_blank">@lang('footer.powered_by')</a></p>

        </div>
    </footer>
@endsection

