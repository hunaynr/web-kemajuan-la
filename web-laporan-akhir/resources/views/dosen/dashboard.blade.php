@extends('templates.master')

<!-- Section Title -->
@section('title', 'Dosen | Dashboard')

<!-- Custom CSS -->
@push('custom-css')
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

<!-- summernote -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/summernote/summernote-bs4.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/jqvmap/jqvmap.min.css">
@endpush

<!-- Section Sidebar -->
@section('sidebar')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-list nav-icon"></i>
                        <p>Data Judul</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-address-book nav-icon"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-calendar nav-icon"></i>
                        <p>Log</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-plus-square nav-icon"></i>
                        <p>Create Mailbox</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-envelope nav-icon"></i>
                        <p>Data Mailbox</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
@endsection

<!-- Section Breadcrumb -->
@section('breadcrumb-title', 'Dashboard Dosen')

<!-- Section Content -->
@section('content')
<section class="content">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr style="text-align: center;">
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Dosen</th>
                <th>Judul</th>
            </<tr>
        </thead>
        <tbody>
            @foreach($laporan as $laporan)
            <tr>
                <td>{{$laporan->id_laporan}}</td>
                <td>{{$laporan->nama_mahasiswa}}</td>
                <td>{{$laporan->nama_dosen}}</td>
                <td>{{$laporan->judul}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection

<!-- Custom Script-->
@push('custom-script')
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('') }}assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->
<script src="{{ asset('') }}assets/plugins/chart.js/Chart.min.js"></script>

<!-- Sparkline -->
<script src="{{ asset('') }}assets/plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->
<script src="{{ asset('') }}assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('') }}assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('') }}assets/plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- daterangepicker -->
<script src="{{ asset('') }}assets/plugins/moment/moment.min.js"></script>
<script src="{{ asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->
<script src="{{ asset('') }}assets/plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('') }}assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('') }}assets/dist/js/pages/dashboard.js"></script>
@endpush