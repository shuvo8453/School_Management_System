<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.header')
</head>

<body>
    <div class="wrapper">
         <!-- sidebar start -->
        @include('layout.partials.sidebar')
        <!-- sidebar end -->
        <div class="main">
        <!-- top navbar start -->
        @include('layout.partials.navbar')
        <!-- top navbar end -->
        <!-- main conten start-0 -->
        @yield('content')
        <!-- main content end -->
        <!-- footer start-0 -->
        @include('layout.partials.footer')
        <!-- footer end- -->
        </div>
    </div>

    @include('layout.partials.script')

    @yield('script')

</body>
</html>
