<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('head')

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('assets/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: rgb(197, 12, 12)">
            <div class="navbar-header">

                <a class="navbar-brand" style="color: white" href="">{{ Auth::user()->khach_hang->ten ?? ''}}</a>

            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <div>
                        <li class="sideba-image">
                            <img src="../image/vinmart.jpg" width="250px" height="150px" alt=""> <br>
                        </li>

                        </div>

                        <li>
                            <a href="{{ route('thekhachhang.index') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> Trang ch???</a>
                        </li>
                        <li>
                            <a href="{{ route('thekhachhang.taikhoan') }}" style="color: red"><i class="fa fa-dashboard fa-fw" ></i> Th??ng tin c?? nh??n</a>
                        </li>
                        <li>
                            <a href="{{ route('thekhachang.voucher') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> Voucher</a>
                        </li>
                        <li>
                            <a href="{{ route('thekhachhang.phanhoi') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> Ph???n h???i</a>
                        </li>
                        <li>
                            <a href="{{ route('thekhachhang.matkhau') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> ?????i m???t kh???u</a>
                        </li>
                        <li>
                            <a href="{{ route('thekhachhang.dangxuat') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i>????ng xu???t</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('assets/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    @yield('js')
</body>

</html>
