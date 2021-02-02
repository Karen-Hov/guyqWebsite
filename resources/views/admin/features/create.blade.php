@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('my_admin/')}}">Features </a> <a
                    href="#"
                    class="current">Create
                   </a></div>
            <h1>Create Features</h1>
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
                            <h5>Features</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{route('features.store')}}"
                                  name="create_product" id="create_product" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="widget-content tab-content">

                                    @foreach(config('lang') as $lang)

                                        <div role="tabpanel" class="tab-pane @if($loop->first) active @endif"
                                             id="tab_{{$loop->index}}">

                                            <div class="control-group">
                                                <label for="features_title_{{$lang['code']}}" class="control-label">Վերնագիր</label>
                                                <div class="controls">

                                                    <input type="text" name="title_{{$lang['code']}}"
                                                           id="product_title_{{$lang['code']}}"
                                                           value="{{old('title_'.$lang['code'])}}">
                                                    @if ($errors->has('title_'.$lang['code']))
                                                        <span
                                                            class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label for="features_title_{{$lang['code']}}" class="control-label">Ենթավերնագիր</label>
                                                <div class="controls">

                                                    <input type="text" name="subtitle_{{$lang['code']}}"
                                                           id="product_subtitle_{{$lang['code']}}"
                                                           value="{{old('subtitle_'.$lang['code'])}}">
                                                    @if ($errors->has('subtitle_'.$lang['code']))
                                                        <span
                                                            class="valid-error">{{ $errors->first('subtitle_'.$lang['code']) }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label for="content_{{$lang['code']}}" class="control-label">Նկարագրություն</label>
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

                                        <input type="hidden" name="translate" value="{{config('type.features')}}">
                                    @endforeach

                                    <div class="control-group">
                                        <label class="control-label">Նկար</label>
                                        <div class="controls">
                                            <input type="file" name="file" id="player" class="viewImage"
                                                   accept=".jpg, .jpeg, .png">
                                        </div>
                                        <div class="addImage"></div>
                                    </div>
                                    @if ($errors->has('file'))
                                        <span class="valid-error">{{ $errors->first('file')}}</span>
                                    @endif
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
