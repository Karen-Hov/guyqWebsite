@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{route('config.index')}}">Config </a><a
                    href="#"
                    class="current">
                    Edit</a></div>
            <h1>Config</h1>
        </div>

        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>edit config name</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="POST"
                                  action="{{route('config.update',['config'=>$config->id])}}">
                                @csrf
                                @method('PUT')


                                <div class="widget-content tab-content">

                                    {{--                                    @dd($about_us);--}}



                                        <div class="control-group">
                                            <label for="type"
                                                   class="control-label"> edit config type</label>
                                            <div class="controls">
                                                <input type="text" name="name"
{{--@dd(isset($config->type) ? $config->type : old('type'))--}}
                                                       value="{{isset($config->name) ? $config->name : old('name')}}">
                                                @if ($errors->has('type'))
                                                    <span
                                                        class="valid-error">{{ $errors->first('type') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label for="value"
                                                   class="control-label"> edit config value</label>
                                            <div class="controls">
                                                <input type="text" name="value"

                                                       value="{{isset($config->value) ? $config->value : old('value')}}">
                                                @if ($errors->has('value'))
                                                    <span
                                                        class="valid-error">{{ $errors->first('value') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                <div class="form-actions">
                                    <input type="submit" value="Խմբագրել" class="btn btn-success">
                                </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection


