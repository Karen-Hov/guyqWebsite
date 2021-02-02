@extends('layouts.adminLayout.admin_design')
@section('content')


    <div id="content">
        <div id="content-header">
{{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Messages</a></div>--}}
            <div class="container-fluid">
                <hr>
{{--            <h1>Հաղորդագրություններ</h1>--}}

        </div>

            <div class="row-fluid">
                <div class="span12">
                    <div class="title">
                        <h2>Հաղորդագրություններ</h2>
                        <div class="emptyLine"></div>
                    </div>

{{--                    <div style="margin:0 auto;width:100%">--}}

{{--                        <ul class="nav nav-tabs">--}}

{{--                            <li class="@if(Route::currentRouteName()=='contacts.contact')active @endif"><a--}}
{{--                                    href="{{route('contacts.contact')}}">Contacts messages</a></li>--}}
{{--                            <li class="@if(Route::currentRouteName()=='contacts.partners')active @endif"><a--}}
{{--                                    href="{{route('contacts.partners')}}">Partners messages</a></li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}
{{--                    @dd(Route::currentRouteName())--}}
{{--                    @if(Route::currentRouteName()=='messages.contact')--}}
                        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                            <h5>Հաղորդագրություններ</h5>
                        </div>
                        <div class="widget-content nopadding">


                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
{{--                                    <th>N</th>--}}
                                    <th>Անուն Ազգանուն</th>
                                    <th>Էլ․հասցե</th>
                                    <th>Հաղորդագրություն</th>
                                    @if(Route::currentRouteName()=='messages.partners' || Route::currentRouteName()=='messages.request')
                                         <th>Company</th>
                                    @endif
                                    @if(Route::currentRouteName()=='messages.partners')
                                         <th>Country</th>
                                    @endif
                                    <th>Ժամանակ</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                @if(isset($messages))
                                    @foreach($messages as $contact)

                                        <tr class="gradeX">
{{--                                            <td>{{$contact->id}}</td>--}}
                                            <td>{{htmlspecialchars_decode($contact->full_name) }}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{htmlspecialchars_decode($contact->message)}}</td>
                                            @if(Route::currentRouteName()=='messages.partners' || Route::currentRouteName()=='messages.request')
                                                <td>{{$contact->company}}</td>
                                            @endif
                                            @if(Route::currentRouteName()=='messages.partners')
                                                <td>{{$contact->country}}</td>
                                            @endif
                                            <td>{{$contact->created_at}}</td>
                                            <td class="center">
                                                <a href="#myModal_{{$loop->index}}" data-toggle="modal"
                                                   class="btn btn-success ">View</a>
                                                <a onclick="deleteMessage(this,'{{ url('/my_admin/messages/'.$contact->id) }}', 'DELETE', {{$redirectPage = $messages->total() % $messages->perPage()>1 ? true : false }})"
                                                   class="btn btn-danger ">Delete</a></td>
                                        </tr>
                                        <div id="myModal_{{$loop->index}}" class="modal hide">
                                            <div class="modal-header">
                                                <button data-dismiss="modal" class="close" type="button">×</button>
                                                <h3 class="text-center"> {{htmlspecialchars_decode($contact->full_name) }}</h3>
                                                <h3 class="text-center"> {{$contact->email}}</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{htmlspecialchars_decode($contact->message)}}</p>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                    <div class="myPaginate col-md-6 ml-auto mr-auto">{{ $messages->links() }}</div>

                </div>
            </div>
        </div>
    </div>
    @endsection
