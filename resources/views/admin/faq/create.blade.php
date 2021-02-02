@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{route('faq.index')}}">Faq </a> <a
                    href="#"
                    class="current">
                   create</a></div>
            <h1>Faq </h1>
        </div>

        <div class="widget-box">
            <div class="widget-title">
                <ul class="nav nav-tabs">
                    @foreach(config('lang') as $lang)
                        <li class="@if($loop->first)active @endif"><a data-toggle="tab"
                                                                      href="#tab_{{$loop->index}}">{{$lang['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
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
                            <h5>Faq</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{route('faq.store')}}"
                                  name="create_about_us" id="create_about_us" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="widget-content tab-content">

                                    @foreach(config('lang') as $lang)

                                        <div role="tabpanel" class="tab-pane @if($loop->first) active @endif"
                                             id="tab_{{$loop->index}}">

                                            <div class="control-group">
                                                <label for="about_us_title_{{$lang['code']}}" class="control-label">Ավելացնել
                                                   Հարց</label>
                                                <div class="controls">

                                                    <input type="text" name="title_{{$lang['code']}}"
                                                           id="about_us_title_{{$lang['code']}}"
                                                           value="{{old('title_'.$lang['code'])}}">
                                                    @if ($errors->has('title_'.$lang['code']))
                                                        <span
                                                            class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                    @endif
                                                </div>
                                            </div>



                                            <div class="control-group">
                                                <label for="content_{{$lang['code']}}" class="control-label">Ավելացնել
                                                    Պատասխան</label>
                                                <div class="controls">
                                                    <textarea type="text" name="content_{{$lang['code']}}"
                                                              id="summary-ckeditor_{{$loop->index}}">{{old('content_'.$lang['code'])}}</textarea>
                                                    @if ($errors->has('content_'.$lang['code']))
                                                        <span
                                                            class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                    @endif
                                                </div>

                                                <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
                                                {{--                                                <script>--}}
                                                {{--                                                    var options = {--}}
                                                {{--                                                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',--}}
                                                {{--                                                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',--}}
                                                {{--                                                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',--}}
                                                {{--                                                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='--}}
                                                {{--                                                    };--}}
                                                {{--                                                </script>--}}
                                                <script>
                                                    CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );
                                                </script>

                                            </div>

                                        </div>
@endforeach
                                        <input type="hidden" name="translate" value="{{config('type.faq')}}">

                                    <div class="form-actions">
                                        <input type="submit" value="Ավելացնել" class="btn btn-success">
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
