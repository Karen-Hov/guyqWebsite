@extends('layouts.adminLayout.admin_design')
@section('content')


    <div id="content">
        <div id="content-header">
{{--            <div id="breadcrumb"> <a href="#">Subscribe</a></div>--}}
            <div class="container-fluid" >
            <h1>Subscribe</h1>

        </div>

            <hr>
            <div class="row-fluid">
                <div class="span12">





                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Subscribe</h5>
                    </div>
                    <div class="widget-content nopadding">


                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>E-mail</th>
                                <th>Date</th>
{{--                                <th>Վերջին թարմացումը {{$updating}}</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @if(isset($mail))
                                @foreach($mail as $item)
                                    <tr class="gradeX">
                                        <td>{{$item->id }}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->created_at}}</td>
{{--                                        <td>{{$item->status}}</td>--}}
                                        <td class="center"><a onclick="deleteMessage(this,'{{ url('/my_admin/subscribe/'.$item->id) }}', 'DELETE',{{$redirectPage = $mail->total() % $mail->perPage()>1 ? true : false }})" class="btn btn-danger ">Delete</a></td>
                                    </tr>



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

@endsection
