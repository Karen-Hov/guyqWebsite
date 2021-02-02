<footer id="footer">
    <p class="folowUs"> @lang('footer.follow_us')</p>
    <div class="soc">
        <a href="{{$facebook_link->value}}" target="_blank">
            <img src="{{asset('front/img/fb.png')}}" alt="{{$facebook_link->name}}">
        </a>
        <a href="{{$instagram_link->value}}" target="_blank">
            <img src="{{asset('front/img/instagram-(2).png')}}" alt="{{$instagram_link->name}}" >
        </a>
    </div>
    <p>@lang('footer.follow_us_desc')</p>

    <form action="{{route('subscribe.mail')}}" method="post"   id="form-data">
        @csrf
        @method('POST')
        <input type="text"  name="url" value="{{URL::current()}}" style="display: none">
        <input type="email" id="subscribe" name="subscribe" class="email " placeholder=" {{__('form.email')}}"   >

        <input type="submit" class="send" value="@lang('footer.send')">
    </form>
    <div class="sub"></div>
    <div class="linksToFaqAnPrivacy">
{{--        <a href="{{route('faq',Request::segment(1)??'business')}}">{{__('footer.faq')}}</a>--}}
        <a href="{{route('privacy',Request::segment(1)??'business')}}" target="_blank">{{__('footer.policy_privacy')}}</a>
    </div>
    <div class="privacy">
        <p>@lang('footer.all_right_reserved')</p>
        <p>&copy; {{date('Y')}} Touch and Take</p>
        <p><a href="https://itresources.am/" target="_blank">@lang('footer.powered_by')</a></p>

    </div>
</footer>
@error('subscribe')
<script>
    $message =" {{$message}} *"
    window.location.replace(window.location.href+'#footer');
    $('#subscribe').attr("placeholder", $message).addClass('errorSub')
    // document.getElementById('subscribe').placeholder =$message
</script>

@enderror

{{--@if ($errors->any())--}}

{{--   --}}
{{--@endif--}}
