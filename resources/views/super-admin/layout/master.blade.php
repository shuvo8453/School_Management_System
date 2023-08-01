<!DOCTYPE html>
<html lang="en">

<head>
    @include('super-admin.layout.partials.header')
</head>

<body>
    <div class="wrapper">
         <!-- sidebar start -->
        @include('super-admin.layout.partials.sidebar')
        <!-- sidebar end -->
        <div class="main">
        <!-- top navbar start -->
        @include('navbar')
        <!-- top navbar end -->
        <!-- main conten start-0 -->
        @yield('content')
        <!-- main content end -->
        <!-- footer start-0 -->
        @include('super-admin.layout.partials.footer')
        <!-- footer end- -->
        </div>
    </div>

    @include('super-admin.layout.partials.script')
    @yield('script')

</body>
</html>
