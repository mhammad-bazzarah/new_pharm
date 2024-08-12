<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name='viewport'>
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/plugins/select2.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/invoice.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
</head>

<body>
    <div id='app'>
        <div class="main-wrapper">
            @include('admin.layouts.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                &copy; Copyright <div class="bullet"></div>. All Rights Reserved
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>


    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <script src="{{ asset('admin/assets/js/plugins/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/select2.full.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/features-post-create.js') }}"></script>
    @stack('scripts')
</body>

</html>
