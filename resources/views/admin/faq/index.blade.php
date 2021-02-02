@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">

        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">

                    <div class="title">
                        <h2>Faq</h2>
                        <div class="emptyLine"></div>
                    </div>
                    <div class="buttonEd">

                            <a href="{{route('faq.create',['type'=>config('type.home.faq')])}}"
                               class="btn btn-inverse btn-large ">Ավելացնել</a>



                    </div>


                    @if($faq!=null)

@foreach($faq as $item)
                        <div class="partnersContent">
                            <div class="myContainer">
                                <div class="info">
                                    <h3>{{$item->faqTranslate[0]->title}}</h3>
                                    {!! html_entity_decode($item->faqTranslate[0]->desc)!!}
                                </div>
                            </div>
                        </div>
                            <div><a href="{{route('faq.edit',['faq'=>$item->id])}}" class="btn btn-inverse btn-small ">Կարգավորել</a>
                                <a onclick="deleteItem(this,'{{ url('/my_admin/faq/'.$item->id) }}', 'DELETE')"
                                   class="btn btn-danger ">Ջնջել</a>
                            </div>
                            <hr>
@endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>




@endsection
