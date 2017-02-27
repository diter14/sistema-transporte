<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Transporte</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/vendor/icon-sets.css') }}">
	<link rel="stylesheet" href="{{ url('css/main.min.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="{{ url('img/bus-navicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.html">
          <h3 style="color: #fff;"><strong>El Rápido S.A.</strong></h3>    
        </a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
              <a href="index.html" class="active"><i class="lnr lnr-home"></i>
                <span>Dashboard</span>
              </a>
            </li>
						<li>
              <a href="elements.html" class=""><i class="lnr lnr-code"></i>
                <span>Elements</span>
              </a>
            </li>
						<li>
              <a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i>
                <span>Charts</span>
              </a>
            </li>
						<li>
              <a href="panels.html" class=""><i class="lnr lnr-cog"></i>
                <span>Panels</span>
              </a>
            </li>
						<li>
              <a href="notifications.html" class=""><i class="lnr lnr-alarm"></i>
                <span>Notifications</span>
              </a>
            </li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i>
                <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
              </a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
			<a class="footer" href="#" title="Contacto" target="_blank"><i class="fa fa-twitter"></i> <span>Contáctanos</span></a>
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<div class="main">

			<!-- Barra de Navegación -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Warning</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Danger</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Success</a></li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="lnr lnr-question-circle"></i>
                  <span>Ayuda</span>
                  <i class="icon-submenu lnr lnr-chevron-down"></i>
                </a>
								<ul class="dropdown-menu">
									<li><a href="#">Instrucciones</a></li>
									<li><a href="#">Fechas importantes</a></li>
									<li><a href="#">Seguridad</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ url('img/user-normal.png') }}" class="img-circle" alt="Avatar" width="25" height="25">
                  <span>Administrador</span>
                  <i class="icon-submenu lnr lnr-chevron-down"></i>
                </a>
								<ul class="dropdown-menu">
									<li>
                    <a href="#">
                      <i class="lnr lnr-user"></i>
                      <span>Mi perfil</span>
                    </a>
                  </li>
									<li>
                    <a href="#">
                      <i class="lnr lnr-envelope"></i>
                      <span>Mensajes</span>
                    </a>
                  </li>
									<li>
                    <a href="#">
                      <i class="lnr lnr-cog"></i>
                      <span>Configuración</span>
                    </a>
                  </li>
									<li>
                    <a href="#">
                      <i class="lnr lnr-exit"></i>
                      <span>Cerrar Sesión</span>
                    </a>
                  </li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Fin Barra Navegación -->

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Buses recientes</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body no-padding">
                	@yield('content')
                </div>
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                  </div>
                </div>
              </div>
              <!-- END RECENT PURCHASES -->
            </div>
          </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017. Desarrollado por <a href="#">Diesther Terrones</a></p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ url('js/jquery/jquery-2.1.0.min.js') }}"></script>
	<script src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ url('js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ url('js/plugins/chartist/chartist.min.js') }}"></script>
	<script src="{{ url('js/klorofil.min.js') }}"></script>
</body>

</html>
