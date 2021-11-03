<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


    {{-- Plantilla --}}

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{asset('ubold')}}/css/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('ubold')}}/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('ubold')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{asset('ubold')}}/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{asset('ubold')}}/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />
    <link href="{{asset('ubold')}}/css/app-dark.min.css" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('ubold')}}/css/icons.min.css" rel="stylesheet" type="text/css" />


</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>


    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.plantilla.aside-menu')
        <!-- Left Sidebar End -->

        <!-- Topbar Start -->
        @include('layouts.plantilla.header')
        <!-- end Topbar -->


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>
    <!-- END wrapper -->

    @stack('modals')

    @livewireScripts

    @include('layouts.plantilla.footer')

</body>

</html>
