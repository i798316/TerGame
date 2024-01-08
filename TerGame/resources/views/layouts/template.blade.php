<!-- layouts/template.blade.php (Vista Principal) -->
<html>
@include('partials.header')

<body class="d-flex flex-column h-100">
    @include('partials.navigation')
    @yield('content')

    @include('partials.footer')
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->


</html>
