<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Nama Anda</title>

    {{-- CSS terpisah --}}
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    {{-- Navbar khusus layout --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
    @yield('content')
</body>
</html>
