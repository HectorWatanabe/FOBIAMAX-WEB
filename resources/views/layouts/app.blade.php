<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fobiamax</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('sb-admin2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('sb-admin2/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('sb-admin2/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('sb-admin2/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('sb-admin2/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">FOBIAMAX</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="{{ route('perfil') }}">
                        <i class="fa fa-user fa-fw"></i> Perfil de Usuario
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out fa-fw"></i> Salir
                    </a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            @include('layouts.partials.nav-bar')

        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{url('sb-admin2/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('sb-admin2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('sb-admin2/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{url('sb-admin2/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('sb-admin2/vendor/morrisjs/morris.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('sb-admin2/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
