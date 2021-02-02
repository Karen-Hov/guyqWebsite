@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('my_admin/user/')}}">User </a> <a
                    href="#"
                    class="current">Create
                   </a></div>
            <h1>Create User</h1>
        </div>


        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>User</h5>
                        </div>

                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{route('user.store')}}"
                                  name="create_product" id="create_product" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="widget-content tab-content">

                                            <div class="control-group">
                                                <label for="user_name" class="control-label">Full Name</label>
                                                <div class="controls">

                                                    <input type="text" name="name"
                                                           id="user_name"
                                                           value="{{old('name')}}">
                                                    @if ($errors->has('name'))
                                                        <span
                                                            class="valid-error">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label for="email" class="control-label">E-mail adress</label>
                                                <div class="controls">

                                                    <input type="text" name="email"
                                                           id="email"
                                                           value="{{old('email')}}">
                                                    @if ($errors->has('email'))
                                                        <span
                                                            class="valid-error">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                    <div class="control-group">
                                        <label for="login" class="control-label">Login</label>
                                        <div class="controls">

                                            <input type="text" name="login"
                                                   id="login"
                                                   value="{{old('login')}}">
                                            @if ($errors->has('login'))
                                                <span
                                                    class="valid-error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                            <div class="control-group">
                                                <label for="phone" class="control-label">Phone Number</label>
                                                <div class="controls">

                                                    <input type="tel" name="phone"
                                                           id="phone"
                                                           value="{{old('phone')}}"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
                                                    @if ($errors->has('phone'))
                                                        <span
                                                            class="valid-error">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                    <div class="control-group">
                                        <label for="pricing_user" class="control-label">Pricing</label>
                                        <div class="controls">
@if($pricing)

                                                <select id="pricing_user" class="my_select" name="price">
                                            @foreach($pricing as $item)
{{--                                                <option  value="{{$item->id}}">{{$item->pricingTranslate[0]->title}} ({{$item->price}}$)</option>--}}

                                                    @endforeach
                                            </select>
    @endif
                                        </div>
                                    </div>

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


@endsection
