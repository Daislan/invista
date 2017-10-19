<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>@yield('title')</title>
   
    <link href="{{ asset('/css/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/colors/blue-dark.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" id="theme" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="img/logo.png" alt="home"/>
                        </b>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                        <li class="active">
                            <a data-toggle="modal" data-target="#myModal" href="#">Oportunidades</a>
                        </li>
                        <li>
                            <a href="#">Empresas</a>
                        </li>
                        <li>
                            <a href="#">Indicadores das Cidades</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <a class="profile-pic" href="#"> <img src="assets/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                        </li>
                    </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="menu-titulo">Navegue por Setores</div>

                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.html" class="waves-effect"><span class="hide-menu">Indústria</span></a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><span class="hide-menu">Meio Ambiente</span></a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><span class="hide-menu">Tecnologia da Informação</span></a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><span class="hide-menu">Comunicação</span></a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><span class="hide-menu">Agronegócio</span></a>
                    </li>
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a href="" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Entre em Contato</a></span>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            
            <div class="container-fluid full">
                <div class="banner-top">
                    <div class="col-lmd-12">
                        <img src="img/banner.png">
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row white-box">
                	@yield('busca')
                </div>
                
                <!--row -->
                <div class="row board">
                    <div class="col-md-12">
                    	@yield('oportunidade')    
					</div>
                </div>
              
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Invista nas Cidades </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('/assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/js/waves.js') }}"></script>
    <!--Counter js -->
    <script src="{{ asset('/assets/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('/assets/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('/assets/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('/assets/bower_components/morrisjs/morris.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/custom.min.js') }}"></script>
    <script src="{{ asset('/js/dashboard1.js') }}"></script>
    <script src="{{ asset('/assets/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>