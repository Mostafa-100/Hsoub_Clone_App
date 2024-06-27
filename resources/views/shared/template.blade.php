<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="storage/assets/hsoub-icon.png">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <!-- Custom CSS & Javascript -->
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('shared.nav')
    <div style="margin-top: 30px">
        @yield('content')
    </div>
    @yield('scripts')
    <script src="https://kit.fontawesome.com/9e56a67cbb.js" crossorigin="anonymous"></script>
</body>

</html>
