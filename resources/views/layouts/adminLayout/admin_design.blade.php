<!DOCTYPE html>
<html lang="hy">
<head>
    <title>Guyq</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/select2.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{ asset('fonts/backend_fonts/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css')}}" />
{{--    <link rel="stylesheet" href="{{ asset('css/backend_css/crop-canvas.css')}}" />--}}
    <link rel="stylesheet" href="{{ asset('css/backend_css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.default.min.css')}}">`
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/media.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico')}}" />

    <link href='{{ asset('css/backend_css/cropper.min.css')}}' rel='stylesheet' type='text/css'>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        let LARAVEL = {};
        LARAVEL.APP_URL = {!! json_encode(url('/')) !!};
    </script>

    <script>
        window.addEventListener("play", function(evt)
        {
            if(window.$_currentlyPlaying && window.$_currentlyPlaying != evt.target)
            {
                window.$_currentlyPlaying.pause();
            }
            window.$_currentlyPlaying = evt.target;
        }, true);
    </script>
<script src="{{asset('front/js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('js/backend_js/cropper.min.js')}}"></script>


</head>
<body>

<!--Header-part-->

<!--close-Header-part-->


<!--top-Header-menu-->
@include('layouts.adminLayout.admin_header')
<!--sidebar-menu-->
@include('layouts.adminLayout.admin_sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
@yield('content')

<!--end-main-container-part-->

<!--Footer-part-->

@include('layouts.adminLayout.admin_footer')

<!--end-Footer-part-->


<script src="{{asset('js/backend_js/excanvas.min.js')}}"></script>

{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

<script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/backend_js/select2.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.validate.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.tables.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.dashboard.js')}}"></script>
{{--<script src="{{asset('js/backend_js/jquery.gritter.min.js')}}"></script>--}}
<script src="{{asset('js/backend_js/matrix.interface.js')}}"></script>
{{--<script src="{{asset('js/backend_js/matrix.chat.js')}}"></script>--}}

<script src="{{asset('js/backend_js/jquery.wizard.js')}}"></script>


<script src="{{asset('js/backend_js/matrix.popover.js')}}"></script>


<script src="{{asset('js/backend_js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('js/backend_js/bootstrap-datepicker.js')}}"></script>
{{--<script src="{{asset('js/backend_js/jquery.toggle.buttons.js')}}"></script>--}}
<script src="{{asset('js/backend_js/masked.js')}}"></script>


<script src="{{asset('js/backend_js/matrix.form_common.js')}}"></script>








<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>



{{--<script>--}}
{{--    $('.textarea_editor').wysihtml5();--}}
{{--</script>--}}
<script src="{{asset('admin/js/main.js')}}"></script>
<script src="{{asset('js/backend_js/main.js')}}"></script>

</body>
</html>















