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
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <livewire:backend.theme.header />
            <!-- Header END -->

            <!-- Side Nav START -->
            <livewire:backend.theme.sidebar />
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                @yield('content')
                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2021 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="#" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="#" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content END -->


        </div>
    </div>


    <!-- Core Vendors JS -->
    <script data-navigate-once="true" src="{{ asset('assets/backend/js/vendors.min.js') }}"></script>

    <!-- page js -->
    <script data-navigate-once="true" src="{{ asset('assets/backend/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/backend/js/pages/dashboard.js') }}"></script>

    <!-- Core JS -->
    <script data-navigate-once="true" src="{{ asset('assets/backend/js/app.min.js') }}"></script>

</body>


</html>