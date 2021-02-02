@extends('layouts.site')
@section('content')

 <main class="main">
     <div class="imageQueue myContainer">
         <div class="imagePart">
             <img src="{{asset('front/img/Grou7.png')}}" alt="">
         </div>
         <div class="gplyAppStore">
             <h1>@lang('home.desc_title')</h1>
             <p>@lang('home.desc_desc_customer')</p>
             <div class="icons">
                 <a href="{{$android_app->value}}" target="_blank"><img src="{{asset('front/img/app-download-buttons-(1).png')}}" alt="{{$android_app->type}}"></a>
                 <a href="{{$ios_app->value}}" target="_blank"><img src="{{asset('front/img/app-download-buttons.png')}}" alt="{{$ios_app->value}}"></a>
             </div>
             <div class="img">
                 <p></p>
             </div>
{{--             <img src="{{asset('front/img/scroll.png')}}" alt="">--}}
         </div>
     </div>
     <div class="howItWorks about customer">

         <div class="myContainer">
             <div class="title">
                 <h2>@lang('home.about_us')</h2>
                 <div class="emptyLine"></div>
             </div>
         </div>
{{--         @dd($about_us)--}}
         @if($about_us)
             <div class="owlItemContent">
                 <div class="myContainer">
                 <div class="textInfo">
                     <h3>{{$about_us->homeTranslate[0]->title??'Touch and Take'}} </h3>
                     <h4>{{$about_us->homeTranslate[0]->subtitle}}</h4>
                     <div class="p">{!!  $about_us->homeTranslate[0]->desc??''!!}</div>
                     <a class="showMoreText">@lang('home.read_more')</a>
                 </div>
                 <div class="image">
                     <img src="{{asset('front/img/aboutcustomer.png')}}" alt="">
                 </div>
             </div>
         </div>
             @endif
     </div>
		 <div class="ourFeautures" id="customerFeautures">

		 	<div class="myContainer">
		 		<div class="title">
		 			<h2>@lang('home.features') </h2>
		 			<div class="emptyLine"></div>
		 		</div>
		 		<div class="itemsOfFeauture">
                    @foreach($features as $item )

                            <div class="item">
                                <div>
                                    <div class="imageParentDiv">
                                        <img src="{{asset('/storage/home/picture').'/'.$item->file}}" alt="">
                                    </div>
                                    <p>{{$item->homeTranslate[0]->title}}</p>
                                    <div class="hoverText">{!!  $item->homeTranslate[0]->desc!!}</div>
                                </div>
                            </div>
                        @endforeach
		 		</div>
		 	</div>
		 </div>
     <div class="howItWorks customer">

         <div class="myContainer">
             <div class="title">
                 <h2>@lang('home.how_it_works')</h2>
                 <div class="emptyLine"></div>
             </div>

         </div>
         <div class="sliderBackgroundDiv">
             <div class="myContainer">
                 <div class="sliderParent dataForNavigation" data-right = "{{asset('front/img/Captureright.png')}}" data-left = "{{asset('front/img/CaptureLeft.png')}}">
                     <div  class="owl-carousel onePart owl-theme  ">
                         @foreach($customer_works as $item )
{{--                             @dd($item->homeTranslate[0]->title)--}}
                             <div class="item">

                                 <div class="owlItemContent">
                                     <div class="image">
                                         <img src="{{asset('/storage/home/picture').'/'.$item->file}}" alt="">
                                     </div>
                                     <div class="textInfo">

                                         <h4>{{$item->homeTranslate[0]->title}}</h4>
                                         <div class="p">{!! $item->homeTranslate[0]->desc !!}</div>

                                     </div>

                                 </div>

                             </div>
                         @endforeach

                     </div>
                 </div>
             </div>
         </div>
     </div>
	</main>

@endsection
<div class="modalForAboutInfo">
    <p class="close">
        <span>&#215;</span>
    </p>
    <p class="text">{!!  $about_us->homeTranslate[0]->desc!!}</p>
</div>
<!-- <div class="loader">
	<div class="center">
		<img src="{{asset('front/img/loader.gif')}}" alt="">
	</div>
</div> -->
