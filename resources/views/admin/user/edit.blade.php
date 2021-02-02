@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('my_admin/products/')}}">Product </a> <a href="#">Edit  </a></div>
            <h1>Edit Product</h1>
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
                            <h5>Edit Product</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="POST"
                                  action="{{url('/my_admin/products/update/'.$products->id)}}" name="edit_products"
                                  id="edit_products" novalidate="novalidate" enctype="multipart/form-data">
                               @csrf
                                @method('PUT')


                                <div class="widget-content tab-content">

{{--                                    @dd($about_us);--}}
                                    @foreach(config('lang') as $lang)
                                        @foreach($products->productTranslate as $item)
                                            @if($lang['code'] == $item['code'])

                                                <div role="tabpanel" class="tab-pane @if($loop->first) active @endif"
                                                     id="tab_{{$loop->index}}">

                                                    <div class="control-group">
                                                        <label for="about_us_title_eidt_{{$lang['code']}}"
                                                               class="control-label"> Խմբագրել վերնագիր</label>
                                                        <div class="controls">

                                                            <input type="text" name="title_{{$lang['code']}}"
                                                                   id="about_us_title_edit_{{$lang['code']}}"
                                                                   value="{{isset($item->title) ? $item->title : old('title_'.$lang['code'])}}">
                                                            @if ($errors->has('title_'.$lang['code']))
                                                                <span class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label for="about_us_title_eidt_{{$lang['code']}}"
                                                               class="control-label"> Խմբագրել վերնագիր</label>
                                                        <div class="controls">

                                                            <input type="text" name="subtitle_{{$lang['code']}}"
                                                                   id="about_us_title_edit_{{$lang['code']}}"
                                                                   value="{{isset($item->title) ? $item->subtitle : old('subtitle_'.$lang['code'])}}">
                                                            @if ($errors->has('title_'.$lang['code']))
                                                                <span class="valid-error">{{ $errors->first('subtitle_'.$lang['code']) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label for="content_{{$lang['code']}}" class="control-label">Խմբագրել նյութը</label>
                                                        <div class="controls">
                                                            <textarea type="text" name="content_{{$lang['code']}}" id=summary-ckeditor_{{$loop->index}}> {{isset($item->desc)? $item->desc :old('desc_'.$lang['code']) }}</textarea>
                                                            @if ($errors->has('desc_'.$lang['code']))
                                                                <span class="valid-error">{{ $errors->first('desc_'.$lang['code']) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                            @endif
                                        @endforeach
                                    @endforeach
                                    <div class="control-group">
                                        <label class="control-label">Խմբագրել  Նկարը</label>
                                        <div class="controls">
                                            <input type="file" name="file" id="player" class="editImage"
                                                   accept=".jpg, .jpeg, .png">
                                        </div>
                                        <div class="flexTables image">
                                            @if($products->file)
                                            <img
                                                src="{{asset('storage/product/picture/'.$products->file)}} "
                                                class="tableImage" alt="">
                                                <span class="deletebutton" onclick="event.preventDefault();
                                                    removeImage(this,'/my_admin/product/{{$products->id}}')">x</span>
                                                @endif<span></span></div>
                                        <div class="editViewImage"></div>
                                    </div>
                                        @if ($errors->has('file'))
                                            <span class="valid-error">{{ $errors->first('file')}}</span>
                                        @endif


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


