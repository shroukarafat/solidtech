<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('front.parts.head')


<body>

    <!--preloader start-->
    @include('front.parts.preloader')

    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header start-->
        @include('front.parts.header')
        <!--header end-->
@yield('contant')



        <!-- Footer -->
        @include('front.parts.footer')
        <!-- Footer -->

        @include('front.parts.script')
</body>



</html>