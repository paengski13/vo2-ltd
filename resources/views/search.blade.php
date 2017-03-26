<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rafael Torres</title>
    <!-- Favicon -->
    <link rel="icon" href="https://vo2.nz/assets/Uploads/favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ URL::to('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::to('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::to('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Vo2</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Vo2</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ URL::to('bower_components/AdminLTE/dist/img/profile.png') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Rafael Torres</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ URL::to('bower_components/AdminLTE/dist/img/profile.png') }}" class="img-circle" alt="User Image">

                                <p>
                                    Rafael Torres - PHP Artisan
                                    <small>March 27, 2017</small>
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::to('bower_components/AdminLTE/dist/img/profile.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Rafael Torres</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Staff Directory
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-6">
                    <form method="GET" action="{{ route('staffController.index') }}" accept-charset="UTF-8">
                        <div class="input-group input-group-sm">
                            <input name="search_name" type="text" value="{{ !empty($data['input']['search_name']) ? $data['input']['search_name'] : "" }}" placeholder="first name, last name or fullname" class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i> Search</button>
                            </span>
                            <select name="search_department" class="form-control">
                                <option value="">-- Departments --</option>
                                @foreach ($data['departments'] as $department)
                                    @if (!empty($data['input']['search_department']) && $data['input']['search_department'] == $department['id'])
                                        <option value="{{ $department['id'] }}" selected>{{ $department['name'] }}</option>
                                    @else
                                        <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="clear">&nbsp;<br/>&nbsp;</div>
                <div class="col-xs-12">
                    <div class="nav-tabs-custom">
                        @if (count($data['employees']))
                            @foreach($data['employees'] as $employee)
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block" style="padding-left: 5px !important; padding-top: 5px !important; padding-right: 5px !important;">
                                    <img class="img-circle img-bordered-m" src="{{ URL::to('bower_components/AdminLTE/dist/img/avatar' . rand(1,5). '.png') }}" alt="user image">
                                        <span class="username">
                                          <a href="#">{{ $employee['first_name'] . ' ' . $employee['last_name'] }}</a>
                                        </span>
                                    <span class="description">{{ $employee['department'] }}</span>
                                </div>
                                <!-- /.user-block -->
                                <p style="padding-left: 5px !important; padding-right: 5px !important;">
                                    {{ $employee['profile'] }}
                                </p>
                            </div>
                            <!-- /.post -->
                            @endforeach
                        @else
                            <div class="alert alert-info alert-dismissible">
                                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                                No staff record found.
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Vo2</strong>
    </footer>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ URL::to('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::to('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ URL::to('bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::to('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::to('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('bower_components/AdminLTE/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('bower_components/AdminLTE/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
