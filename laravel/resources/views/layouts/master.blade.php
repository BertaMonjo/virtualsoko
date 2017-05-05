<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>
<body>
<div class="page">
    <header class="main-header">
        <span class="logo">virtualsoko</span>
    </header>

    <section class="main-page">
        @yield('content')
    </section>

    @yield('footer-scripts')
</div>
</body>
</html>