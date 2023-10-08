<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ticket System</title>
    <!-- Fontfaces CSS-->
    <link href="{{{ URL::asset('css/font-face.css') }}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/wow/animate.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/slick/slick.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/select2/select2.min.css')}}}" rel="stylesheet" media="all">
    <link href="{{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{{ URL::asset('css/theme.css')}}}" rel="stylesheet" media="all">

    <!-- Datatables CSS-JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- Header -->
        @include('partials.header') 
        <!-- Flash  Message -->
        @if (session('status'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if (session('danger'))
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <!-- Content -->
        @yield('content')
    </div>
    <!-- Jquery JS-->
    <script src="{{{ URL::asset('vendor/jquery-3.2.1.min.js')}}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{{ URL::asset('vendor/bootstrap-4.1/popper.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.js')}}}"></script>
    <!-- Vendor JS       -->
    <script src="{{{ URL::asset('vendor/slick/slick.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/wow/wow.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/animsition/animsition.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/counter-up/jquery.waypoints.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/counter-up/jquery.counterup.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/circle-progress/circle-progress.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/chartjs/Chart.bundle.min.js')}}}"></script>
    <script src="{{{ URL::asset('vendor/select2/select2.min.js')}}}"></script>
    <!-- Main JS-->
    <script src="{{{ URL::asset('js/main.js')}}}"></script>
</body>

</html>
<!-- end document-->
