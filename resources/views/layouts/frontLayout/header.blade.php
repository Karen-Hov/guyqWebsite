<header>
    <div class="mobileMenuHiddenInWeb">
        <span class="closeMenuMobile">
            <img src="{{asset('front/img/close.png')}}" alt="">
        </span>
        <div class="languageAndLogin">
            <div class="languages">
                <button @if(Config::get('app.locale')=='en') class="active" @endif><a href="{{asset('setlocale/en')}}">Eng</a></button>
                <button @if(Config::get('app.locale')=='hy') class="active" @endif><a href="{{asset('setlocale/hy')}}">Հայ</a></button>
                <button @if(Config::get('app.locale')=='ru') class="active" @endif><a href="{{asset('setlocale/ru')}}">Ру</a></button>
            </div>
            <div class="login">
                <button>@lang('navbar.login')</button>
            </div>
        </div>
        <ul>
            @if(Request::segment(1)==config('type.business'))
                <li><a href="{{route('home.business')}}" @if(url()->current()==route('home.business')) class="active" @endif>@lang('navbar.home')</a></li>
                <li>
                    <a href="{{route('business.products')}}" @if(url()->current()==route('business.products')) class="active" @endif>@lang('navbar.products')</a>
                </li>
                <li><a href="{{asset('/business#ourFeautures')}}" >@lang('navbar.features')</a></li>
                <li>
                    <a href="{{route('business.partners')}}" @if(url()->current()==route('business.partners')) class="active" @endif>@lang('navbar.partners')</a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{route('business.pricings')}}"  @if(url()->current()==route('business.pricings')) class="active" @endif>@lang('navbar.pricing')</a>--}}
{{--                </li >--}}
                <li ><a href="{{route('business.contact')}}"  @if(url()->current()==route('business.contact'))  class="active" @endif>@lang('navbar.contact_us')</a></li>

            @else
{{--@dd(url()->current()==route('customer.contact'),url()->current(),route('customer.contact'))--}}
                <li><a href="{{asset('/'.config('type.customer'))}}" @if(url()->current()==route('home.customer')) class="active" @endif>@lang('navbar.home')</a></li>
                <li ><a  href="{{asset('/customer#customerFeautures')}}">@lang('navbar.features')</a></li>
                <li><a href="{{route('customer.contact')}}" @if(url()->current()==route('customer.contact'))  class="active" @endif>@lang('navbar.contact_us')</a></li>

            @endif
            </ul>
    </div>
    <div class="myContainer">
        <div class="buttonsInNav">
            <div class="businnesAndCus">
                <button class="businnes @if(preg_match("/\b".config('type.business')."\b/i",url()->current())  == true )) active @endif"><a
                        href="{{route('home.business')}}">@lang('navbar.business')</a></button>
                <button class="customer @if(preg_match("/\b".config('type.customer')."\b/i",url()->current())  == true ) active @endif "><a href="{{route('home.customer')}}">@lang('navbar.customer')</a>
                </button>
            </div>
            <div class="logoPart">
                @if(Request::segment(1)==config('type.business'))
                    <a href="{{route('home.business')}}"> <img src="{{asset('front/img/fingerlogo-01 (1).png')}}" alt=""></a>
                    @elseif(Request::segment(1)==config('type.customer'))
                    <a href="{{route('home.customer')}}"> <img src="{{asset('front/img/fingerlogo-01 (1).png')}}" alt=""></a>
                @endif
            </div>
            <div class="languageAndLogin">
                <div class="languages">
                    <button @if(Config::get('app.locale')=='en') class="active" @endif><a href="{{asset('setlocale/en')}}">Eng</a></button>
                    <button @if(Config::get('app.locale')=='hy') class="active" @endif><a href="{{asset('setlocale/hy')}}">Հայ</a></button>
                    <button @if(Config::get('app.locale')=='ru') class="active" @endif><a href="{{asset('setlocale/ru')}}">Ру</a></button>
                </div>
                <div class="login">
                    <a href="{{asset('/logins')}}"><button>@lang('navbar.login')</button></a>
                </div>
            </div>
            <div class="mobileMenuIcon">
                <img src="{{asset('front/img/menu.png')}}" alt="">
            </div>
        </div>


    </div>
    <nav>
        <div class="myContainer">
            <ul>
{{--                @dd(Request::segment(1))--}}
                {{--                @dd(url()->current())--}}
{{--                @if(url()->current()==asset('/'.config('type.business')))--}}
                @if(Request::segment(1)==config('type.business'))
                    <li><a href="{{route('home.business')}}" @if(url()->current()==route('home.business')) class="active" @endif>@lang('navbar.home')</a></li>
                    <li>
                        <a href="{{route('business.products')}}" @if(url()->current()==route('business.products')) class="active" @endif>@lang('navbar.products')</a>
                    </li>
                    <li><a href="{{asset('/business#ourFeautures')}}" >@lang('navbar.features')</a></li>
                    <li>
                        <a href="{{route('business.partners')}}" @if(url()->current()==route('business.partners')) class="active" @endif>@lang('navbar.partners')</a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="{{route('business.pricings')}}"  @if(url()->current()==route('business.pricings')) class="active" @endif>@lang('navbar.pricing')</a>--}}
{{--                    </li >--}}
                    <li ><a href="{{route('business.contact')}}"  @if(url()->current()==route('business.contact'))  class="active" @endif>@lang('navbar.contact_us')</a></li>

             @else

                    <li><a href="{{asset('/'.config('type.customer'))}}" @if(url()->current()==route('home.customer')) class="active" @endif>@lang('navbar.home')</a></li>
                    <li ><a  href="{{asset('/customer#customerFeautures')}}">@lang('navbar.features')</a></li>
                    <li><a href="{{route('customer.contact')}}" @if(url()->current()==route('customer.contact'))  class="active" @endif>@lang('navbar.contact_us')</a></li>

             @endif
            </ul>
        </div>
    </nav>
</header>
