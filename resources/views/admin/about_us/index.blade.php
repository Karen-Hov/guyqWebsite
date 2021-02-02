@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            {{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
            {{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Home</a><a href="#">About Us</a></div>--}}
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="title">
                        <h2>Մեր Մասին</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                        @if($about_us==null)
                            <a href="{{route('about_us.create',['type'=>config('type.about_us')])}}"
                               class="btn btn-inverse btn-large ">Ավելացնել</a>
                        @else
{{--                            @dd($about_us->id)--}}
                            <a href="{{route('about_us.edit',$about_us->id)}}"
                               class="btn btn-inverse btn-large ">Կարգավորել</a>
                        @endif

                    </div>


                    @if($about_us!=null)

                        {{--                        <div class="howItWorks about">--}}

                        {{--                            <div class="myContainer">--}}
                        {{--                                <div class="title">--}}
                        {{--                                    <h2>About Us</h2>--}}
                        {{--                                    <div class="emptyLine"></div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="owlItemContent">--}}
                        {{--                                    <div class="textInfo">--}}
                        {{--                                        <h3>{{$about_us->homeTranslate[0]->title}} </h3>--}}
                        {{--                                        <h4>{{$about_us->homeTranslate[0]->subtitle}}</h4>--}}
                        {{--                                        <p>{!!  $about_us->homeTranslate[0]->desc!!}</p>--}}
                        {{--                                        <a href="#">Read More</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="image">--}}
                        {{--                                        <img src="{{asset('/storage/home/picture').'/'.$about_us->file}}" alt="">--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <div class="howItWorks about">

                            <div class="myContainer">
{{--                                <div class="title">--}}
{{--                                    <h2>Մեր Մասին</h2>--}}
{{--                                    <div class="emptyLine"></div>--}}
{{--                                </div>--}}
{{--                                <div class="owlItemContent">--}}
{{--                                    <div class="textInfo">--}}
{{--                                        <h3>{{$about_us->translate[0]->title}} </h3>--}}
{{--                                        <h4>{{$about_us->translate[0]->subtitle}}</h4>--}}
{{--                                        <div class="p">{!!  $about_us->translate[0]->desc!!}</div>--}}
{{--                                        <a class="showMoreText">@lang('home.read_more')</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{asset('/storage/home/picture').'/'.$about_us->file}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="partnersContent">
                                    <div class="myContainer">
                                        <div class="info">
                                            <h3>{{isset($about_us->translate[0]->title)?$about_us->translate[0]->title:''}} </h3>
                                            <h5>{{isset($about_us->translate[0]->subtitle)?$about_us->translate[0]->subtitle:''}} </h5>
                                            <div class="p">{!! isset($about_us->translate[0]->content)?$about_us->translate[0]->content:''!!}</div>
                                            {{--                                    {!! html_entity_decode($partners->homeTranslate[0]->desc)!!}--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif


                </div>
            </div>
        </div>
    </div>




@endsection
