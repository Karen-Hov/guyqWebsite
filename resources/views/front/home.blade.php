@extends('layouts.site')
@section('content')
<!-- <div class="loader">
	<div class="center">
		<img src="{{asset('front/img/loader.gif')}}" alt="">
	</div>
</div> -->
<main class="main">
{{--    @dd($android_app)--}}
		 <div class="imageQueue myContainer">
		 	<div class="imagePart">
		 		<img src="{{asset('front/img/sg.png')}}" alt="">
		 	</div>
		 	<div class="gplyAppStore">
		 		<h1>@lang('home.desc_title')</h1>
		 		<p>@lang('home.desc_desc')</p>
		 		<div class="icons">
		 			<a href="{{$android_app->value}}" target="_blank"><img src="{{asset('front/img/app-download-buttons-(1).png')}}" alt="{{$android_app->name}}"></a>
		 			<a href="{{$ios_app->value}}" target="_blank"><img src="{{asset('front/img/app-download-buttons.png')}}" alt="{{$ios_app->name}}"></a>
		 		</div>
				<div class="img">
					<p></p>
				</div>
{{--		 		<img src="{{asset('front/img/scroll.png')}}" alt="">--}}
		 	</div>
		 </div>
		 <div class="ourFeautures" id="ourFeautures">

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
		 <div class="howItWorks">

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
                        @foreach($works as $item )
                            <div class="item">
                                <div class="owlItemContent">
                                    <div class="textInfo">
                                        <h3>{{$item->homeTranslate[0]->title}}</h3>
                                        <h4>{{$item->homeTranslate[0]->subtitle}}</h4>
                                        <div class="p">{!!$item->homeTranslate[0]->desc!!}</div>
                                        <a href="{{asset('logins')}}">@lang('home.try_it_now')</a>
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('/storage/home/picture').'/'.$item->file}}" alt="">
                                    </div>
                                </div>

                            </div>

                        @endforeach

					</div>
		 		 </div>
		 		</div>
		 	</div>
		 </div>
		<div class="howItWorks about">

		 	<div class="myContainer">
		 		<div class="title">
		 			<h2>@lang('home.about_us')</h2>
		 			<div class="emptyLine"></div>
		 		</div>
		 		<div class="owlItemContent">
	  			 	<div class="textInfo">
	  			 		<h3>{{$about_us->homeTranslate[0]->title}} </h3>
	  			 		<h4>{{$about_us->homeTranslate[0]->subtitle}}</h4>
	  			 		<div class="p">{!!  $about_us->homeTranslate[0]->desc!!}</div>
	  			 		<a class="showMoreText">@lang('home.read_more')</a>
	  			 	</div>
	  				<div class="image">
	  				 	<img src="{{asset('/storage/home/picture').'/'.$about_us->file}}" alt="">
	  				</div>
	  			</div>
		 	</div>
		 </div>
		 <div class="howItWorks industries">

		 	<div class="myContainer">
		 		<div class="title">
		 			<h2>@lang('home.industries')</h2>
		 			<div class="emptyLine"></div>
		 		</div>
		 		<div class="industriesItems">
                    @foreach($industries as $item )
		 			<div class="item">
		 				<div class="image">
		 					<img src="{{asset('/storage/home/picture').'/'.$item->file}}" alt="">
		 				</div>
		 				<p>{{$item->homeTranslate[0]->title}}</p>
		 				<div class="hoverText">{!!  $item->homeTranslate[0]->desc!!}</div>
		 			</div>
                    @endforeach

		 		</div>
		 	</div>
		 </div>


	</main>
{{--@dd($about_us)--}}
    <div class="modalForAboutInfo">
        <p class="close">
            <span>&#215;</span>
        </p>
        <p class="text">{!!  $about_us->homeTranslate[0]->desc!!}</p>
    </div>
@endsection
