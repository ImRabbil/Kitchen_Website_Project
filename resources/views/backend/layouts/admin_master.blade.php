<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kitchen Website Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.include.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('backend.include.header')
           
            <!-- partial -->
            <div class="main-panel">

                @yield('content')

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('backend.include.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('backend') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('backend') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('backend') }}/assets/js/misc.js"></script>
    <script src="{{ asset('backend') }}/assets/js/settings.js"></script>
    <script src="{{ asset('backend') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('backend') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->



    <!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
{{-- summernote 1 --}}
<script type="text/javascript">
    $('#summernote').summernote({
        height: 150
    });
</script>
{{-- summernote2 --}}
<script type="text/javascript">
    $('#summernote1').summernote({
        height: 150
    });
</script>

















</body>

</html>
