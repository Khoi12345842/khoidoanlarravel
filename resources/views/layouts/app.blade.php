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
@if(session('success'))
    <div class="alert alert-success fade-in">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger fade-in">{{ session('error') }}</div>
@endif
@if($errors->any())
    <div class="alert alert-danger fade-in">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif