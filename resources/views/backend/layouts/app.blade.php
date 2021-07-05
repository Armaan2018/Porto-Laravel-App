<!doctype html>
<html lang="en">
 <!-- Sidebar Navigation--->
    @include('backend.layouts.header')
 <!----->
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="backend/assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->


 <!-- Sidebar Navigation--->
    @include('backend.layouts.leftnav')
 <!----->

    </div>

    <div class="main-panel">



   <!-- Sidebar Navigation--->
    @include('backend.layouts.topnav')
   <!------------------------->



        <div class="content">
            <div class="container-fluid">


                   @section('shakebaby')
                   @show


            </div>
        </div>


    <!-- Sidebar Navigation--->
    @include('backend.layouts.footer')
    <!------------------------>

    </div>
</div>


</body>

    <!--   Core JS Files   -->

 @include('backend.layouts.partials.script')





</html>
