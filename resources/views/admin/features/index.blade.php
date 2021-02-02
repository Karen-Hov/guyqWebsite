{{--@extends('layouts.adminLayout.admin_design')--}}
{{--@section('content')--}}

{{--    <div id="content">--}}
{{--        <div id="content-header">--}}
{{--                        <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                                    class="icon-home"></i> Գլխավոր</a> <a href="#">Home</a><a href="#">About Us</a></div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid">--}}
{{--            <hr>--}}
{{--            <div class="row-fluid">--}}
{{--                <div class="span12">--}}
{{--                    <h2>Features</h2>--}}
{{--                    <div class="buttonEd">--}}
{{--                            <a href="{{route('features.create',['type'=>config('type.features')])}}"--}}
{{--                               class="btn btn-inverse btn-large ">Ավելացնել</a>--}}

{{--                            @dd($features->id)--}}
{{--                            <a href="{{route('features.edit',$features->id)}}"--}}
{{--                            <a href=""--}}
{{--                               class="btn btn-inverse btn-large ">Կարգավորել</a>--}}

{{--                    </div>--}}


{{--                    @if($features!=null)--}}
{{--                        @foreach($features as $item)--}}


{{--                        <div class="howItWorks about item">--}}
{{--                            <a href="{{route('features.edit',$item->id)}}"--}}
{{--                               class="btn btn-inverse btn-large ">Կարգավորել</a>--}}
{{--                            <a onclick="deleteItem(this,'{{ url('/my_admin/features/'.$item->id) }}', 'DELETE')"--}}
{{--                               class="btn btn-danger ">Ջնջել</a>--}}
{{--                            <div class="myContainer">--}}
{{--                                <div class="title">--}}

{{--                                    <div class="emptyLine"></div>--}}
{{--                                </div>--}}
{{--                                <div class="owlItemContent">--}}
{{--                                    <div class="textInfo">--}}
{{--                                        <h3>{{isset($item->translate[0]->title)?$item->translate[0]->title:''}} </h3>--}}
{{--                                        <h3>{{isset($item->translate[0]->subtitle)?$item->translate[0]->subtitle:''}} </h3>--}}
{{--                                        <div class="p">{!! isset($item->translate[0]->content)?$item->translate[0]->content:''!!}</div>--}}
{{--                                        <a class="showMoreText">@lang('home.read_more')</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{asset('/storage/home/picture').'/'.$item->file}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--@endsection--}}
@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">

                    <div class="title">
                        <h2>Features</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                        <a href="{{route('features.create')}}"
                           class="btn btn-inverse btn-large ">Ավելացնել</a>



                    </div>


                    @if($features!=null)

                        @foreach($features as $item)
                            <div class="partnersContent item">
                                <div class="myContainer">
                                    <div class="info">
                                        <h3>{{isset($item->translate[0]->title)?$item->translate[0]->title:''}} </h3>
                                        <h3>{{isset($item->translate[0]->subtitle)?$item->translate[0]->subtitle:''}} </h3>
                                        <div class="p">{!! isset($item->translate[0]->content)?$item->translate[0]->content:''!!}</div>
                                        <div >
                                            <img src="{{asset('/storage/features/medium').'/'.$item->file}}" alt="">
                                        </div>
{{--                                        <h3>{{$item->faqTranslate[0]->title}}</h3>--}}
{{--                                        {!! html_entity_decode(isset($item->translate[0]->content)?$item->translate[0]->content:'')!!}--}}
                                    </div>
                                </div>

                            <div><a href="{{route('features.edit',$item->id)}}" class="btn btn-inverse btn-small ">Կարգավորել</a>
                                <a onclick="deleteItem(this,'{{ url('/my_admin/features/'.$item->id) }}', 'DELETE')"
                                   class="btn btn-danger ">Ջնջել</a>
                            </div>
                            </div>
                            <hr>
                        @endforeach
                    @endif


                </div>
            </div>
            <div class="">{{ $features->links() }}</div>
        </div>
    </div>




@endsection
