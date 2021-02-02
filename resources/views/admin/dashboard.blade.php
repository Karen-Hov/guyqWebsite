@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            {{--        <div id="breadcrumb"> <a href="{{url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Գլխավոր</a></div>--}}
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    {{--<li class="bg_lg span3" style="height: 120px;padding-top: 15px;;background-color: #2c4c2e"><a--}}
                                {{--href="{{url('admin/journal')}}"> <i class="icon icon-th-list"></i>--}}
                            {{--<p>Հայ Զինվոր թողարկումներ : <span style="color:#fff;font-size: 14px">{{$hay_zinvor}}</span>--}}
                            {{--</p>--}}
                            {{--Հայ Զինվոր Հոդվածներ:<span--}}
                                    {{--style="color:#fff;font-size: 14px">{{$hay_zinvor_tesanyut}}</span></a></li>--}}
                    {{--<li class="bg_ly span3" style="height: 120px;padding-top: 15px;;background-color: #38903e"><a--}}
                                {{--href="{{url('admin/lrahos')}}"> <i class="icon icon-th-list"></i> Լրահոս <p--}}
                                    {{--style="color:#fff;font-size: 18px;padding-top: 5px">{{$lrahos}}</p></a></li>--}}
                    {{--<li class="bg_ly span3" style="height: 120px;padding-top: 15px;;background-color: #78e27f"><a--}}
                                {{--href="{{url('admin/slider')}}"> <i class="icon-facetime-video"></i> Սլայդեր <p--}}
                                    {{--style="color:#fff;font-size: 18px;padding-top: 5px">{{$slayder}}</p></a></li>--}}
                    {{--<li class="bg_lg span3" style="height: 120px;padding-top: 15px;;background-color: #3e3b3b"><a--}}
                                {{--href="{{url('admin/zinuj')}}"> <i class="icon icon-th-list"></i>--}}
                            {{--<p>Զինուժ թողարկումներ : <span style="color:#fff;font-size: 14px">{{$zinuj_toxatkum}}</span>--}}
                            {{--</p>--}}
                            {{--Զինուժ տեսանյութեր:<span style="color:#fff;font-size: 14px">{{$zinuj_tesanyut}}</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="bg_lg span3" style="height: 120px;padding-top: 15px;;background-color: #3e3b3bab"><a--}}
                                {{--href="{{url('admin/radio_aspar')}}"> <i class="icon icon-th-list"></i>--}}
                            {{--<p> «Ասպար» թողարկումներ : <span--}}
                                        {{--style="color:#fff;font-size: 14px">{{$aspar_toxatkum}}</span></p>--}}
                            {{--«Ասպար» ռեպորաժներ:<span style="color:#fff;font-size: 14px">{{$aspar_tesanyut}}</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="bg_ly span3" style="height: 120px;padding-top: 15px;;background-color: #3e3b3b3d"><a--}}
                                {{--href="{{url('admin/zoratesakner')}}"> <i class="icon-facetime-video"></i> Զորատեսակներ--}}
                            {{--<p style="color:#fff;font-size: 18px;padding-top: 5px">{{$zoratesakner}}</p></a></li>--}}
                    {{--<li class="bg_ly span3" style="height: 120px;padding-top: 15px;;background-color: #283246"><a--}}
                                {{--href="{{url('admin/videos')}}"> <i class="icon-facetime-video"></i> Տեսահոլովակներ <p--}}
                                    {{--style="color:#fff;font-size: 18px;padding-top: 5px">{{$videoCount}}</p></a></li>--}}
                    {{--<li class="bg_lb span3" style="height: 120px;padding-top: 15px;background-color: #2f4a80e0;"><a--}}
                                {{--href="{{url('admin/music')}}"> <i class="icon-headphones"></i> Ձայնադարան <p--}}
                                    {{--style="color:#fff;font-size: 18px;padding-top: 5px ">{{$musicCount}}</p></a></li>--}}
                    {{--<li class="bg_lg span3" style="height: 120px;padding-top: 15px;;background-color: #052a739e"><a--}}
                                {{--href="{{url('admin/albom')}}"> <i class="icon-picture"></i>--}}
                            {{--<p>Ալբոմներ : <span style="color:#fff;font-size: 14px">{{$albomCount}}</span></p>--}}
                            {{--Լուսանկարներ:<span style="color:#fff;font-size: 14px">  {{$fotoCount}}</span></a></li>--}}


                </ul>
            </div>
            <!--End-Action boxes-->

            <!--Chart-box-->

            <!--End-Chart-box-->
            <hr/>


        </div>
    </div>
    {{--</div>--}}
@endsection
