<!DOCTYPE html>
<html lang="zxx">
<head>
    @include ('includes.frontend.meta')
    @include ('includes.frontend.style')
    <!-- BEGIN SHAREAHOLIC CODE -->
    <!-- <link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
    <meta name="shareaholic:site_id" content="26523ddc10db4c268c23f0e5cdb4172f" />
    <script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script> -->
    <!-- END SHAREAHOLIC CODE -->
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include ('includes.frontend.navbar')
    @yield('content')
    @include ('includes.frontend.footer')
    @include ('includes.frontend.scripts')
    @stack('after-script')
</body>
</html>