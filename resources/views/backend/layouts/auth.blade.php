<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/logo/favicon.ico') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            @yield('content')

        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/backend/js/vendors.min.js') }}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('assets/backend/js/app.min.js') }}"></script>

</body>

</html>