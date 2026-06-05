<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins">
        @yield('content')
</body>
</html>