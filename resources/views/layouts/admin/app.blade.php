<!DOCTYPE html>
<html lang="en">
<head>
    @include ('includes.admin.meta')
    <title>@yield('title')</title>
    @include ('includes.admin.style')
</head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include ('includes.admin.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include ('includes.admin.navbar')
                    @yield('content')
                </div>
                <!-- End of Main Content -->
                @include ('includes.admin.footer')
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        @include ('includes.admin.scroll')
        @include ('includes.admin.modal')
        @include ('includes.admin.scripts')    
    </body>
</html>