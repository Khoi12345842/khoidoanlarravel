<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ - YaMe')</title>
    <link rel="stylesheet" href="{{ asset('layouts/css/style.css') }}">
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Nội dung chính -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Include JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>