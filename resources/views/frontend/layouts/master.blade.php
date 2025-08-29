<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreTech Dispatch - Logistics Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/favicon/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('frontend/assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/assets/favicon/site.webmanifest') }}" />
</head>

<body>

    @include('frontend.layouts.navbar')


    @yield('main-content')


    @include('frontend.layouts.footer')

</body>
<script src="{{ asset('frontend/assets/js/header.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animation.js') }}"></script>


@stack('js')

</html>
