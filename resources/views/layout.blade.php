<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>

<div class="container">
    @yield('content')
</div>

@include('scripts')

<script src="/js/libs.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();
    });
</script>

<script type="text/javascript">
    $.backstretch([
        "/unify/img/bg/3.jpg",
        "/unify/img/bg/16.jpg",
    ], {
        fade: 1000,
        duration: 7000
    });
</script>

@include('flash')

</body>
</html>
