<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" type="text/css">
    <title>@yield('title')</title>
</head>

<body>
    @if ($show_header)
        <header>
            header
        </header>
    @endif
    <main>
        @yield('content')
    </main>
    @if ($show_footer)
        <footer>
            <p>Website Footer</p>
        </footer>
    @endif
</body>

</html>
