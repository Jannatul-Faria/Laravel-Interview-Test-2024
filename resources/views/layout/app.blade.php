<!DOCTYPE html>
<html lang="en">

<head>
   @include('includes.header')

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="loader_bars">
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- Dashboard start -->
    <div class="body-overlay"></div>
    <div class="dashboard__area">
        <div class="container-fluid p-0">
            <div class="dashboard__contents__wrapper">
                @include('includes.sidenav')
               @yield('content')
            </div>
        </div>
    </div>
    <!-- Dashboard end -->



    @include('includes.footer')
</body>

</html>
