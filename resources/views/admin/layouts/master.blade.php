<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core-Tech-Dispatch | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/Admin-pannel.css') }}">

    <style>
        .coretech-alert-success {
            display: none;
            background: #ecfdf5;
            color: #065f46;
            border: 1px solid #6ee7b7;
            padding: 12px 16px;
            margin-bottom: 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            position: relative;
            animation: fadeIn 0.4s ease;
        }

        .coretech-alert-success i {
            margin-right: 8px;
        }

        .coretech-alert-success .close-btn {
            position: absolute;
            top: 8px;
            right: 12px;
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            color: #065f46;
        }
    </style>

</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    @yield('main-content')
</body>
<script src="{{ asset('admin/css/Admin-pannel.js') }}"></script>

</html>
