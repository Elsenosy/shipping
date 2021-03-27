<!DOCTYPE html>
<html lang="ar" direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>اسعار الشحن والتوصيل</title>
    {{-- <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('dashboard') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css"
        rel="stylesheet" type="text/css" /> --}}
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    {{-- <link href="{{ asset('dashboard') }}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('dashboard') }}/assets/css/themes/layout/header/base/light.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/themes/layout/header/menu/light.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/themes/layout/brand/dark.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/themes/layout/aside/dark.rtl.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    @yield('styles')
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/media/logos/favicon.ico" /> --}}
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    @yield('content')
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    {{-- <script src="{{ asset('dashboard') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('dashboard') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('dashboard') }}/assets/js/pages/widgets.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/pages/custom/login/login-general.js"></script> --}}
    <!--end::Page Scripts-->

    @include('sweetalert::alert')
    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const formID = $(this).data('form');

            swal({
                title: 'Are you sure to delete?',
                text: 'The item will be permentaly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Confirm"],
            }).then(function(value) {
                if (value) {
                    $("#"+formID).submit();
                }
            });
        });
    
    </script>

    @if(count($errors->all()) > 0)

    @foreach($errors->all() as $error)
    @if (!empty($error))
    <script>
        Swal.fire({
        text: "{{ $error }}",
        icon: "error",
    });
    </script>
    @endif
    @endforeach

    @endif
    @if(session()->has('error') && !empty(session('error')))
    <script>
        Swal.fire({
        text: "{{ session('error') }}",
        icon: "error",
    });

    </script>
    @endif

    @if(session()->has('success'))
    <script>
        Swal.fire({
        text: "{{ session('success') }}",
        icon: "success",
    });
    
    </script>
    @endif
    
    @stack('scripts')
</body>
<!--end::Body-->

</html>