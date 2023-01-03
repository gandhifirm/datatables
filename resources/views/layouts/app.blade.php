<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.meta')

        <title>@yield('pageTitle') | GAPENSI (Gabungan Pelaksana Konstruksi)</title>

        @include('includes.style')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <!-- ./ wrapper -->
        <div class="wrapper">
            <!-- /. navbar -->
            @include('includes.navbar')
            <!-- /. navbar -->

            <!-- /. aside main-sidebar -->
            @include('includes.sidebar')
            <!-- /. aside main-sidebar -->

            <!-- /. content-wrapper -->
            @yield('content')
            <!-- /. content-wrapper -->

            <!-- /. control-sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- control sidebar content goes here -->
            </aside>
            <!-- /. control-sidebar -->

            <!-- /. footer main-footer -->
            @include('includes.footer')
            <!-- /. footer main-footer -->
        </div>
        <!-- ./ wrapper -->

        @include('includes.scripts')
    </body>

</html>
