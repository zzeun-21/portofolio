<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Azzuro Najma A.</title>

    {{-- CSS terpisah --}}
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">

      {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>
    {{-- Navbar khusus layout --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
    @yield('content')
</body>
</html>
