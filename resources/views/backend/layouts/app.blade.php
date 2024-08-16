<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/logo/favicon.ico') }}">

    <!-- Core css -->
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendors/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/custom.css') }}" rel="stylesheet">
    @livewireStyles
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

    @yield('page-scripts')
    <script src="{{ asset('assets/backend/vendors/toastr/toastr.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <!-- Core JS -->
    <script data-navigate-once="true" src="{{ asset('assets/backend/js/app.min.js') }}"></script>
    <script data-navigate-once="true" src="{{ asset('assets/backend/js/custom.js') }}"></script>

    @if(Session::has('success'))
    <script>
        toastr['success']('{{ Session::get("success") }}');
    </script>
    @endif

    @if(Session::has('error'))
    <script>
        toastr['error']('{{ Session::get("success") }}');
    </script>
    @endif

    @livewireScripts

</body>


</html>