<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/Admin-pannel.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/favicon/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('frontend/assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/assets/favicon/site.webmanifest') }}" />
    @stack('css')
</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    @yield('main-content')
    <script src="{{ asset('admin/js/Admin-pannel.js') }}"></script>
    @stack('scripts')
</body>

</html>
