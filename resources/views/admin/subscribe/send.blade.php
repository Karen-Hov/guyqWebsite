{{--@extends('layouts.adminLayout.admin_design')--}}
{{--@section('content')--}}

{{--    <div id="content">--}}
{{--        <div id="content-header">--}}
{{--            <div id="breadcrumb"><a href="{{url('admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                        class="icon-home"></i> Գլխավոր</a> <a href="{{url('my_admin/subscribe/send/')}}">«Թարմացում» </a> <a--}}
{{--                    href="#"--}}
{{--                    class="current">Ավելացնել--}}
{{--                    Թարմացում</a></div>--}}
{{--            <h1>«Թարմացում» </h1>--}}
{{--        </div>--}}


{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    <li>Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="container-fluid">--}}
{{--            <hr>--}}
{{--            <div class="row-fluid">--}}
{{--                <div class="span12">--}}
{{--                    <div class="widget-box">--}}
{{--                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>--}}
{{--                            <h5>«Թարմացում»</h5>--}}
{{--                        </div>--}}

{{--                        <div class="widget-content nopadding">--}}
{{--                            <form class="form-horizontal" method="post" action="{{url('/my_admin/subscribe/add/opdate')}}"--}}
{{--                                  name="create_about_us" id="create_about_us" novalidate="novalidate"--}}
{{--                                  enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                @method('POST')--}}

{{--                                <div class="widget-content tab-content">--}}

{{--                                            <div class="control-group">--}}
{{--                                                <label for="content" class="control-label">Ավելացնել--}}
{{--                                                    նյութը</label>--}}
{{--                                                <div class="controls">--}}
{{--                                                    <textarea type="text" name="text"--}}
{{--                                                              id="summary-ckeditor">{{old('text')}}</textarea>--}}
{{--                                                    @if ($errors->has('text'))--}}
{{--                                                        <span--}}
{{--                                                            class="valid-error">{{ $errors->first('text') }}</span>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        <input type="hidden" name="translate" value="{{config('type.translate.home')}}">--}}

{{--                                        <div class="control-group">--}}
{{--                                            <label for="date" class="control-label">Հրապարակման ամսաթիվը</label>--}}
{{--                                            <div class="controls">--}}

{{--                                                <input type="date" name="date" id="date" value="{{old('date')}}">--}}
{{--                                                @if ($errors->has('date'))--}}
{{--                                                    <span class="valid-error">{{ $errors->first('date') }}</span>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    <div class="form-actions">--}}
{{--                                        <input type="submit" value="ՈՒղղարկել" class="btn btn-success">--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <script>--}}

{{--    </script>--}}

{{--@endsection--}}



@extends('layouts.adminLayout.admin_design')
@section('content')


    <div id="content">
        <div id="content-header">
            {{--            <div id="breadcrumb"> <a href="#">Subscribe</a></div>--}}
            <div class="container-fluid" >
{{--                <h1>Subscribe</h1>--}}

            </div>

            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <h1>Subscribe</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                        Send  message
                    </button>
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Subscribe</h5>
                    </div>
                    <div class="widget-content nopadding">


                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Հաղորդագրություն</th>
                                <th>Հրապարակման ամսաթիվը</th>
                                <th>Թարմացում</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($mail))
                                @foreach($mail as $item)
                                    <tr class="gradeX item">
                                        <td>{{$item->id }}</td>
                                        <td>{{$item->text}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>
                                            @if($item->status)
                                                Կատարվել է
                                                @else
                                                Սպասման մեջ
                                                @endif
                                        </td>
                                        {{--                                        <td>{{$item->status}}</td>--}}
                                        <td class="center"><a onclick="deleteItem(this,'{{ url('/my_admin/subscribe/updating/'.$item->id) }}', 'DELETE',{{$redirectPage = $mail->total() % $mail->perPage()>1 ? true : false }})" class="btn btn-danger ">Delete</a></td>
                                    <tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="myPaginate col-md-6 ml-auto mr-auto">{{ $mail->links() }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-primary" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h4 class="modal-title">«Update»</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  method="post" action="{{url('/my_admin/subscribe/add/update')}}"
                          name="create_about_us" id="create_updating" novalidate="novalidate"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="widget-content tab-content">

                            <div class="control-group">
                                <label for="content" class="control-label">Add message *</label>
                                <div class="controls">
                                    <span class="error_message"></span>
                                    <textarea type="text" name="text" class="text_updating"
                                              id="summary-ckeditor">{{old('text')}}</textarea>
                                    @if ($errors->has('text'))
                                        <span
                                            class="valid-error">{{ $errors->first('text') }}</span>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" name="translate" value="{{config('type.translate.home')}}">

                            <div class="control-group">
                                <label for="date" class="control-label">Date of publication *</label>
                                <div class="controls">
                                    <span class="error_message_date"></span>
                                    <input type="date" name="date" id="date" value="{{old('date')}}">
                                    @if ($errors->has('date'))
                                        <span class="valid-error">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>
                            {{--                            <div class="form-actions">--}}
                            {{--                                <input type="submit" value="ՈՒղղարկել" class="btn btn-success">--}}
                            {{--                            </div>--}}
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-light save">Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>   $('.save').click(function () {
            var date = new Date();
            var dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000 )).toISOString().split("T")[0];


            if($('.text_updating').val() == ''){
                $('.error_message').text('The  field is required. !!!')
            }else{
                $('.error_message').text('')
            }

            if($('#date').val() == ''){
                $('.error_message_date').text('The : field is required. !!!')
            }else if(dateString > $('#date').val()){
                $('.error_message_date').text('Wrong time selected !!!')
            }


            else{
                $('.error_message_date').text('');
                if($('.text_updating').val()){
                    $('#create_updating').submit();
                }


            }

        })</script>
@endsection
