{{--@extends('layouts.adminLayout.admin_design')--}}
{{--@section('content')--}}

{{--    <div id="content">--}}
{{--        <div id="content-header">--}}
{{--            <div id="breadcrumb">--}}
{{--                <a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
{{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Products</a>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        <div class="container-fluid">--}}
{{--            <hr>--}}
{{--            <h1>Products</h1>--}}
{{--            <div class="myContainer">--}}
{{--                <div class="buttonEd">--}}

{{--                    <a href="{{route('products.create')}}" class="btn btn-inverse btn-large ">Add products</a>--}}

{{--                </div >--}}
{{--            <div class="productsPage">--}}

{{--                    <div class="sliderParent dataForNavigation">--}}
{{--                        <div class="owl-carousel owl-theme onePart ">--}}
{{--                            @if($products)--}}
{{--                                @foreach($products as $item)--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="owlItemContent">--}}
{{--                                            <div class="textInfo">--}}
{{--                                                <h3>{{$item->productTranslate[0]->title}}</h3>--}}
{{--                                                <h4>{{$item->productTranslate[0]->subtitle}}</h4>--}}
{{--                                                <p>{!!  $item->productTranslate[0]->desc!!}</p>--}}
{{--                                                <div class="icons">--}}
{{--                                                    <a href=""><img--}}
{{--                                                            src="{{asset('front/img/app-download-buttons-(1).png')}}"--}}
{{--                                                            alt=""></a>--}}
{{--                                                    <a href=""><img--}}
{{--                                                            src="{{asset('front/img/app-download-buttons.png')}}"--}}
{{--                                                            alt=""></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="{{asset('storage/product/picture/'.$item->file)}}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div><a href="{{route('products.edit',$item->id)}}" class="btn btn-inverse btn-small ">Կարգավորել</a>--}}
{{--                                    <a onclick="deleteSlider(this,'{{ url('/my_admin/products/'.$item->id) }}', 'DELETE')"--}}
{{--                                                                                   class="btn btn-danger ">Ջնջել</a>--}}
{{--                                </div>--}}
{{--                                    </div>--}}



{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--@endsection--}}



@extends('layouts.adminLayout.admin_design')
@section('content')


    <div id="content">
        <div id="content-header">
            {{--            <div id="breadcrumb"><a href="{{url('/my_admin/dashboard/')}}" title="Go to Home" class="tip-bottom"><i--}}
            {{--                        class="icon-home"></i> Գլխավոր</a> <a href="#">Users</a></div>--}}



        </div>
        <div class="container-fluid">
            <hr>
{{--            <h1>Ապրանքներ</h1>--}}


            <div class="row-fluid">
                <div class="span12">
                    <div class="title">
                        <h2>Ապրանքներ</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                        <a href="{{route('products.create')}}" class="btn btn-inverse btn-large ">Ավելացնել</a>

                    </div >

                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Ապրանքներ</h5>
                    </div>
                    <div class="widget-content nopadding">


                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>

                                <th>Վերնագիր</th>
                                <th>Ենթավերնագիր</th>
                                <th>Նկարագրություն</th>
{{--                                <th>Նկար</th>--}}
                                <th>Գործողություն</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(isset($products))
                                @foreach($products as $item)

                                    <tr class="gradeX item">

                                        <td>{{isset($item->translate[0]->title)?Str::limit($item->translate[0]->title,50):''}} </td>
                                        <td>{{isset($item->translate[0]->subtitle)?Str::limit($item->translate[0]->subtitle,50):''}} </td>
                                        <td class="p">{!! isset($item->translate[0]->content)?Str::limit($item->translate[0]->content,70):''!!}</td>
{{--                                        <td> <img style="width: 100px;height: 100px" src="{{asset('/storage/products/small').'/'.$item->file}}" alt=""></td>--}}


                                        <td class="center">

                                            <a href="#myModal_{{$loop->index}}" data-toggle="modal"
                                                  class="btn btn-success ">View</a>
                                                <a href="{{route('products.edit',$item->id)}}" class="btn btn-inverse btn-small ">Կարգավորել</a>
                                                <a onclick="deleteSlider(this,'{{ url('/my_admin/products/'.$item->id) }}', 'DELETE')"
                                                                                           class="btn btn-danger ">Ջնջել</a>
                                                </td>
                                            </tr>


                                            <div id="myModal_{{$loop->index}}" class="modal hide">
                                                <div class="modal-header">
                                                    <button data-dismiss="modal" class="close" type="button">×</button>
                                                    <h4 class="text-center"> {{isset($item->translate[0]->title)?$item->translate[0]->title:'' }}</h4>
                                                    <h5 class="text-center"> {{isset($item->translate[0]->subtitle)?$item->translate[0]->subtitle:''}}</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{!! isset($item->translate[0]->content)?$item->translate[0]->content:''!!}</p>
                                                </div>
                                                <div class="modal-body">
                                                     <img style="" src="{{asset('/storage/products/small').'/'.$item->file}}" alt="">
                                                </div>
                                            </div>

                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                            </div>



                    <div class="myPaginate col-md-6 ml-auto mr-auto">{{ $products->links() }}</div>
                </div>
                    </div>
                </div>
            </div>

        @endsection
