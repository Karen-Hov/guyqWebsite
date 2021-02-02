@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
{{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Pricing</a></div>--}}
{{--            <h1>Pricing</h1>--}}

        </div>
        <div class="container-fluid">
            <hr>
            <h1>Pricing</h1>
            <div class="row-fluid">

                <div class="buttonEd">

                    <a href="{{route('pricing.create')}}" class="btn btn-inverse btn-large ">Ավելացնել</a>

                </div>
                <div class="buttonAdd">
            <div class="pricingContent">
                <div class="myContainer">
                    <div class="items">
{{--                        @dd($pricing)--}}
                        @if($pricing)

                            @foreach($pricing as $k => $item)
                                <div class="item ">
                                    <div class="image">
                                        <img src="{{asset('storage/pricing/medium/'.$item->file)}}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>{{isset($item->translate[0]->title)?Str::limit($item->translate[0]->title,30):''}}</h4>
                                        {!!  (isset($item->translate[0]->content)?Str::limit($item->translate[0]->content,30):'') !!}
                                        <p class="price">
                                            {{isset($item->price)?$item->price:''}} ֏
                                        </p>
                                        <button class="getStarted">@lang('button.get_started')</button>
                                    </div>
                                    <div><a href="{{route('pricing.edit',$item->id)}}"
                                            class="btn btn-inverse btn-small ">Կարգավորել</a>
                                        <a onclick="deleteSlider(this,'{{ url('/my_admin/pricing/'.$item->id) }}', 'DELETE')"
                                           class="btn btn-danger ">Ջնջել</a>
                                    </div>
                                </div>


                            @endforeach
                        @endif
                    </div>
                    <div class="owlCarouselInPricing dataForNavigation" data-right = "{{asset('front/img/Captureright.png')}}" data-left = "{{asset('front/img/CaptureLeft.png')}}">
                        <div  class="owl-carousel owl-theme owlPricing ">
                            @if($pricing)

                                @foreach($pricing as $k => $item)
                                    <div class="item">
                                        <div class="image">
                                            <img src="{{asset('storage/pricing/picture/'.$item->file)}}" alt="">
                                        </div>
                                        <div class="info">
{{--                                            <h3>{{$item->pricingTranslate[0]->title}}</h3>--}}
{{--                                            {!!  ($item->pricingTranslate[0]->desc) !!}--}}
{{--                                            <p class="price">--}}
{{--                                                {{$item->price}} $--}}
{{--                                            </p>--}}
                                            <button class="getStarted">@lang('button.get_started')</button>
                                        </div>
                                        <div><a href="{{route('pricing.edit',$item->id)}}"
                                                class="btn btn-inverse btn-small ">Կարգավորել</a>
                                            <a onclick="deleteSlider(this,'{{ url('/my_admin/pricing/'.$item->id) }}', 'DELETE')"
                                               class="btn btn-danger ">Ջնջել</a>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
