@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{route('config.index')}}">Config </a> <a
                    href="#"
                    class="current">
                    Create</a></div>
            <h1>Config </h1>
        </div>


        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Config</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{route('config.store')}}">
                                @csrf
                                @method('POST')

                                <div class="widget-content tab-content">
                                    <div class="control-group">
                                        <label for="type" class="control-label">create config name</label>
                                        <div class="controls">

                                            <input type="text" name="name"
                                                   value="{{old('name')}}">
                                            @if ($errors->has('name'))
                                                <span
                                                    class="valid-error">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="value" class="control-label">create config value</label>
                                        <div class="controls">

                                            <input type="text" name="value"
                                                   value="{{old('value')}}">
                                            @if ($errors->has('value'))
                                                <span
                                                    class="valid-error">{{ $errors->first('value') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="CREATE" class="btn btn-success">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>

    </script>

@endsection
