@extends('layouts.adminLayout.admin_design')
@section('content')


    <div id="content">
        <div id="content-header">
{{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Users</a></div>--}}



        </div>
        <div class="container-fluid">
            <hr>
        <h1>Users</h1>


            <div class="row-fluid">
                <div class="span12">
                    <div class="buttonEd">

                        <a href="{{route('user.create')}}" class="btn btn-inverse btn-large ">Add User</a>

                    </div >

{{--                    <div style="margin:0 auto;width:100%">--}}

{{--                        <ul class="nav nav-tabs">--}}

{{--                            <li class="@if(Route::currentRouteName()=='contacts.contact')active @endif"><a--}}
{{--                                    href="{{route('contacts.contact')}}">Contacts messages</a></li>--}}
{{--                            <li class="@if(Route::currentRouteName()=='contacts.partners')active @endif"><a--}}
{{--                                    href="{{route('contacts.partners')}}">Partners messages</a></li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}



                        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                            <h5>Users</h5>
                        </div>
                        <div class="widget-content nopadding">


                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>

                                    <th>Full Name</th>
                                    <th>E-mail</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>price(package)</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                @if(isset($users))
                                    @foreach($users as $item)

                                        <tr class="gradeX">

                                            <td>{{$item->name }}</td>
{{--                                            <td>{{$item->company}}</td>--}}
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->role}}</td>
                                            <td>{{$item->price}}</td>
{{--                                            <td>{{$item->country}}</td>--}}
                                            <td>{{$item->created_at}}</td>
                                            <td class="center">
                                                <a href="#myModal_{{$loop->index}}" data-toggle="modal"
                                                   class="btn btn-success ">View</a>
                                                <a onclick="deleteItem(this,'{{ url('/my_admin/user/' . $item->id) }}', 'DELETE')"
                                                   class="btn btn-danger ">Delete</a></td>
                                        </tr>


                                        <div id="myModal_{{$loop->index}}" class="modal hide">
                                            <div class="modal-header">
                                                <button data-dismiss="modal" class="close" type="button">×</button>
                                                <h3 class="text-center"> {{$item->name }}</h3>
                                                <h3 class="text-center"> {{$item->email}}</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{$item->message}}</p>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>


                    <div class="myPaginate col-md-6 ml-auto mr-auto">{{ $users->links() }}</div>

                </div>
            </div>
        </div>
    </div>

@endsection
