@extends('layouts.site')
@section('content')
<!-- <div class="loader">
	<div class="center">
		<img src="{{asset('front/img/loader.gif')}}" alt="">
	</div>
</div> -->
    <div class="productsPage">
        <div class="myContainer">
            <div class="sliderParent dataForNavigation" data-right="{{asset('front/img/Captureright.png')}}"
                 data-left="{{asset('front/img/CaptureLeft.png')}}">
                <div class="owl-carousel owl-theme onePart ">
                    @if($products)
                        @foreach($products as $item)
                            <div class="item">
                                <div class="owlItemContent">
                                    <div class="textInfo">
                                        <h3>{{$item->productTranslate[0]->title}}</h3>
                                        <h4>{{$item->productTranslate[0]->subtitle}}</h4>
                                        <div class="p">{!!  $item->productTranslate[0]->desc!!}</div>
                                        <div class="icons">
                                            <a href=""><img src="{{asset('front/img/app-download-buttons-(1).png')}}"
                                                            alt=""></a>
                                            <a href=""><img src="{{asset('front/img/app-download-buttons.png')}}"
                                                            alt=""></a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('storage/product/picture/'.$item->file)}}" alt="">
                                    </div>
                                </div>

                            </div>



                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
