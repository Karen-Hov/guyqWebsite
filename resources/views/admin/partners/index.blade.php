@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            {{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
            {{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Home</a><a href="#">Partners</a></div>--}}

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">

                    <div class="title">
                        <h2>Գործընկերներ</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                        @if($partners==null)
                            <a href="{{route('partners.create')}}"
                               class="btn btn-inverse btn-large ">Ավելացնել</a>
                        @else
                            <a href="{{route('partners.edit',$partners->id)}}"
                               class="btn btn-inverse btn-large ">Կարգավորել</a>
                        @endif

                    </div>


                    @if($partners!=null)

                        <div class="partnersContent">
                            <div class="myContainer">
                                <div class="info">
                                    <h3>{{isset($partners->translate[0]->title)?$partners->translate[0]->title:''}} </h3>
                                    <h5>{{isset($partners->translate[0]->subtitle)?$partners->translate[0]->subtitle:''}} </h5>
                                    <div class="p">{!! isset($partners->translate[0]->content)?$partners->translate[0]->content:''!!}</div>
{{--                                    {!! html_entity_decode($partners->homeTranslate[0]->desc)!!}--}}
                                </div>
                            </div>
                        </div>

                    @endif


                </div>
            </div>
        </div>
    </div>




@endsection
