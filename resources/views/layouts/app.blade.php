<!DOCTYPE html>
<html lang="en" class="fullscreen">
<head>
    @yield('head')
</head>
<body class="page dashboard-page fullscreen relative">
<main class="dashboard-content relative">
@include('includes.sidebar-and-header')
    <!-- /content -->
@yield('content')
    <!-- content -->
</main>
<!-- /scripts -->
@yield('scripts')
<!-- /scripts -->
</body>
</html>