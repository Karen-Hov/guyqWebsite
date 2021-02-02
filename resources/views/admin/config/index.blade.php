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
                        <h2>Config</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                            <a href="{{route('config.create')}}"
                               class="btn btn-inverse btn-large ">ADD</a>

                    </div>


                    @if($config!=null)

@foreach($config as $item)
{{--    @dd($item)--}}
                            <hr>
                        <div class="partnersContent">
                            <div class="myContainer">
                                <div class="info">
                                    <p>{{$item->name}}  - <span class="config">{{$item->value??''}}</span> </p>

                                </div>
                            </div>
                        </div>
                            <div><a href="{{route('config.edit',['config'=>$item->id])}}" class="btn btn-inverse btn-small ">EDIT</a>
                                <a onclick="deleteItem(this,'{{ url('/my_admin/config/'.$item->id) }}', 'DELETE')"
                                   class="btn btn-danger ">DELETE</a>
                            </div>
                            <hr>
@endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>




@endsection
