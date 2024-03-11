<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Your App Name')</title>

    <!-- Add your stylesheets, scripts, and other meta tags here -->
</head>
<body>
    <header>
        <!-- Your header content goes here -->
    </header>

    <nav>
        <!-- Your navigation/menu goes here if needed -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Add your scripts here -->
</body>
</html>
