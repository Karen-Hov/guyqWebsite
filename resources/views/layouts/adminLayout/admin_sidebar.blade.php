<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Գլխավոր</a>
    <ul>
        <li class="actives"><a href="{{url('/')}}"><i class="icon icon-home"></i> <span>Site</span></a> </li>
{{--        <li ><a href="{{url('admin/about_us')}}"><i class="icon icon-picture"></i> <span>Մեր մասին</span></a> </li>--}}
{{--@dd(strpos(url()->current(),'my_admin/about_us'))--}}
        <li class="submenu @if(strpos(url()->current(),'my_admin/about_us')!=false || (strpos(url()->current(),'my_admin/features')!=false) )open active"@endif"> <a href="#"><i class="icon icon-th-list"></i> <span>Home</span> <span class="label label-important"><i class="icon-arrow-down"></i></span></a>
            <ul>
                <li @if(url()->current()==url('my_admin/about_us/')) class="active" @endif><a href="{{url('my_admin/about_us/')}}"><i class="icon icon-th-list"></i> <span>Մեր մասին</span></a> </li>
                <li @if(url()->current()==url('my_admin/features/')) class="active" @endif><a href="{{url('my_admin/features')}}"><i class="icon icon-th-list"></i> <span>Features</span></a> </li>
            </ul>
        </li>


        <li @if(url()->current()==url('my_admin/partners')) class="active" @endif ><a href="{{url('my_admin/partners')}}"><i class="icon icon-th-list"></i> <span>Գործընկերներ</span></a> </li>
        <li @if(url()->current()==url('my_admin/products')) class="active" @endif><a href="{{url('my_admin/products')}}"><i class="icon icon-th-list"></i> <span>Ապրանքներ</span></a> </li>
        <li @if(url()->current()==url('my_admin/pricing')) class="active" @endif><a href="{{url('my_admin/pricing')}}"><i class="icon icon-th-list"></i> <span>Pricing</span></a> </li>
{{--        <li @if(url()->current()==url('my_admin/user')) class="active" @endif><a href="{{url('my_admin/user')}}"><i class="icon icon-th-list"></i> <span>Users</span></a> </li>--}}
{{--        <li @if(url()->current()==url('my_admin/faq')) class="active" @endif><a href="{{url('my_admin/faq')}}"><i class="icon icon-th-list"></i> <span>Faq</span></a> </li>--}}
{{--        <li @if(url()->current()==url('my_admin/config')) class="active" @endif><a href="{{url('my_admin/config')}}"><i class="icon icon-th-list"></i> <span>Config</span></a> </li>--}}




        <li class="submenu @if(strpos(url()->current(),'my_admin/messages/')!=false)open active"@endif"> <a href="#"><i class="icon icon-th-list"></i> <span>Նամակներ</span> <span class="label label-important"><i class="icon-arrow-down"></i></span></a>
        <ul>
            <li @if(url()->current()==url('my_admin/messages/contact')) class="active" @endif><a href="{{url('my_admin/messages/contact')}}"><i class="icon icon-th-list"></i> <span>Contacts messages</span></a> </li>
            <li @if(url()->current()==url('my_admin/messages/partners')) class="active" @endif><a href="{{url('my_admin/messages/partners')}}"><i class="icon icon-th-list"></i> <span>Partners messages</span></a> </li>
            <li @if(url()->current()==url('my_admin/messages/request')) class="active" @endif><a href="{{url('my_admin/messages/request')}}"><i class="icon icon-th-list"></i> <span>Request messages</span></a> </li>
        </ul>
        </li>
        <li class="submenu @if(strpos(url()->current(),'my_admin/subscribe/')!=false)open active"@endif"> <a href="#"><i class="icon icon-th-list"></i> <span>Subscribe</span> <span class="label label-important"><i class="icon-arrow-down"></i></span></a>
        <ul>
            <li @if(url()->current()==url('my_admin/subscribe/show')) class="active" @endif><a href="{{url('my_admin/subscribe/show')}}"><i class="icon icon-th-list"></i> <span>View</span></a> </li>
            <li @if(url()->current()==url('my_admin/subscribe/send')) class="active" @endif><a href="{{url('my_admin/subscribe/send')}}"><i class="icon icon-th-list"></i> <span>Updating</span></a> </li>
        </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->


