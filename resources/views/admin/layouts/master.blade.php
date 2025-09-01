<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/Admin-pannel.css') }}">
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
