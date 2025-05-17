<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Royal UI CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    @yield('head')
</head>
<body>
    <div class="container-scroller">
        <!-- Top Navbar -->
        @include('layouts.admin_navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('layouts.admin_sidebar')
            <!-- Main Panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('layouts.admin_footer')
            </div>
        </div>
    </div>
    <!-- Royal UI JS -->
    <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    @yield('scripts')
</body>
</html>