@extends('layouts.site')
@section('content')

  <div class="pricingContent">
  	<div class="myContainer">
  		<div class="items">
            @if($pricings)

                @foreach($pricings as $k => $item)
  			<div class="item @if($k==1) proffesional @endif">
  				<div class="image">
  					<img src="{{asset('storage/pricing/picture/'.$item->file)}}" alt="">
  				</div>
  				<div class="info">
  					<h3>{{$item->pricingTranslate[0]->title}}</h3>
                     {!!  ($item->pricingTranslate[0]->desc) !!}
  					<p class="price">
                        {{$item->price}} $
  					</p>
  					<button class="getStarted">@lang('button.get_started')</button>
  				</div>
  			</div>
                @endforeach
  			@endif
  		</div>
      <div class="owlCarouselInPricing dataForNavigation" data-right = "{{asset('front/img/Captureright.png')}}" data-left = "{{asset('front/img/CaptureLeft.png')}}">
        <div  class="owl-carousel owl-theme owlPricing ">
                        @if($pricings)

                @foreach($pricings as $k => $item)
                   <div class="item @if($k==1) proffesional @endif">
                    <div class="image">
                      <img src="{{asset('storage/pricing/picture/'.$item->file)}}" alt="">
                    </div>
                    <div class="info">
                      <h3>{{$item->pricingTranslate[0]->title}}</h3>
                               {!!  ($item->pricingTranslate[0]->desc) !!}
                      <p class="price">
                                  {{$item->price}} $
                      </p>
                      <button class="getStarted">@lang('button.get_started')</button>
                    </div>
                  </div>

                @endforeach
              @endif
          </div>
      </div>
  	</div>
  </div>

@endsection
<!-- <div class="loader">
	<div class="center">
		<img src="{{asset('front/img/loader.gif')}}" alt="">
	</div>
</div> -->
