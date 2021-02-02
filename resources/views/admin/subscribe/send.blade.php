@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="{{url('admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Գլխավոր</a> <a href="{{url('my_admin/subscribe/send/')}}">«Թարմացում» </a> <a
                    href="#"
                    class="current">Ավելացնել
                    Թարմացում</a></div>
            <h1>«Թարմացում» </h1>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <li>Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                </ul>
            </div>
        @endif

        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>«Թարմացում»</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{url('/my_admin/subscribe/add/opdate')}}"
                                  name="create_about_us" id="create_about_us" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="widget-content tab-content">

                                            <div class="control-group">
                                                <label for="content" class="control-label">Ավելացնել
                                                    նյութը</label>
                                                <div class="controls">
                                                    <textarea type="text" name="text"
                                                              id="summary-ckeditor">{{old('text')}}</textarea>
                                                    @if ($errors->has('text'))
                                                        <span
                                                            class="valid-error">{{ $errors->first('text') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        <input type="hidden" name="translate" value="{{config('type.translate.home')}}">

                                        <div class="control-group">
                                            <label for="date" class="control-label">Հրապարակման ամսաթիվը</label>
                                            <div class="controls">

                                                <input type="date" name="date" id="date" value="{{old('date')}}">
                                                @if ($errors->has('date'))
                                                    <span class="valid-error">{{ $errors->first('date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                        <input type="submit" value="ՈՒղղարկել" class="btn btn-success">
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
