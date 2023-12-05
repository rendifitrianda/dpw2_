<div>
    <!DOCTYPE html>
    <!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My|App</title>



        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">

        <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
            href="{{ url('public') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

        @stack('style')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <x-layout.header />
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <x-layout.sidebar />
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">

                            </div><!-- /.col -->
                            <!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        {{ $slot }}

                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <x-layout.footer />
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('public/dist/js/adminlte.min.js') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="{{ url('public') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('public') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ url('public') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ url('public') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ url('public') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('public') }}/plugins/jszip/jszip.min.js"></script>


        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>

        @stack('script')
    </body>

    </html>

</div>
