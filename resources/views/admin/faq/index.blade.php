@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
{{--                        <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                                    class="icon-home"></i> Գլխավոր</a> <a href="#">Users</a></div>--}}
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="title">
                        <h2>ՀՏՀ</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">
                        <a href="{{route('faq.create')}}" class="btn btn-inverse btn-large ">Ավելացնել</a>
                    </div >
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>ՀՏՀ</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Հարց</th>
                                <th>Պատասխան</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($faq))
                                @foreach($faq as $item)
                                    <tr class="gradeX item">
                                        <td>{{isset($item->translate[0]->title)?Str::limit($item->translate[0]->title,80):''}} </td>
                                        <td class="p">{!! isset($item->translate[0]->content)?Str::limit($item->translate[0]->content,100):''!!}</td>
                                        <td class="center">
                                            <a href="#myModal_{{$loop->index}}" data-toggle="modal"
                                               class="btn btn-success ">View</a>
                                            <a href="{{route('faq.edit',$item->id)}}" class="btn btn-inverse btn-small ">Կարգավորել</a>
                                            <a onclick="deleteSlider(this,'{{ url('/my_admin/faq/'.$item->id) }}', 'DELETE')"
                                               class="btn btn-danger ">Ջնջել</a>
                                        </td>
                                    </tr>
                                    <div id="myModal_{{$loop->index}}" class="modal hide">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button">×</button>
                                            <h3 class="text-center"> {{isset($item->translate[0]->title)?$item->translate[0]->title:''}}</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{isset($item->translate[0]->content)?$item->translate[0]->content:''}}</p>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="myPaginate col-md-6 ml-auto mr-auto">{{ $faq->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
