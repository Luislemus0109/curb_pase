<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>Curb Administrativo</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
<link href="../../../../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../../../../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="../../../../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<link href="../../../../assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../../../../assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
<link href=".../../../../assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../../../../assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />

<script src="../../../../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../../../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="../../../../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="../../../../assets/plugins/jszip/dist/jszip.min.js"></script>
	<!-- ================== BEGIN core-css ================== -->
	<link href="../../../../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../../../../assets/css/apple/app.min.css" rel="stylesheet" />
	<link href="../../../../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="../../../../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../../../../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="../../../../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
    <a href="index.html" class="navbar-brand">
        <img src="../../../../imagenes/LogoCurb.png" alt="curb" width="50"> 
    </a>
</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="ion-ios-search"></i></button>
						</div>
					</form>
				</div>
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
						<i class="ion-ios-notifications"></i>
						<span class="badge">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICACIONES (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-400"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-400"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-400"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="../../../../imagenes/userimagen.png" alt="" /> 
						<span>
							<span class="d-none d-md-inline">Administrador</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item d-flex align-items-center">
							Inbox
							<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span> 
						</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%" >
				<!-- BEGIN menu -->
				<div class="menu" >
				<div class="menu-profile">
					<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu" style="display: flex; justify-content: center; align-items: center;">
						<img src="../../../../imagenes/LogoCurb.png" alt="" style="width: 130px; height: 100px;">
					</a>
				</div>
					<div id="appSidebarProfileMenu" >

						<div class="menu-divider m-0"></div>
					</div>
					<div class="menu-header">Navegación</div>
					<div class="menu-item has-sub active">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="ion-ios-home"></i>
							</div>
							<div class="menu-text">Dashboard</div>
							<div class="menu-caret"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item has-sub">
								<a href="javascript:;" class="menu-link">
									<div class="menu-text">Home</div>
									<div class="menu-caret"></div>
								</a>
								<div class="menu-submenu">
									<div class="menu-item has-sub">
										<a href="javascript:;" class="menu-link">
											<div class="menu-text">Ordenes</div>
											<div class="menu-caret"></div>
										</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Dashboard <small>¡Bienvenido de nuevo!...</small></h1>
			<!-- END page-header -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>PEDIDOS</h4>
							<p>1</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-money-bill"></i></div>
						<div class="stats-info">
							<h4>VENDIDO</h4>
							<p>$398.00</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>DOMICILIOS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>TIEMPO APERTURA</h4>
							<p>00:00:00</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN row -->
			<div class="row">
			<div class="d-flex align-items-center mb-3">
				<div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Orders</li>
					</ul>
					<h1 class="page-header mb-0">Ordenes</h1>
				</div>
				<div class="ms-auto">
					<a href="#" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Create Orders</a>
				</div>
			</div>
			
			
			<div class="card border-0">
				<ul class="nav nav-tabs nav-tabs-v2 px-3">
					<li class="nav-item me-2"><a href="#allTab" class="nav-link px-2 active" data-bs-toggle="tab">Todos</a></li>
					<li class="nav-item me-2"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Pagados</a></li>
					<li class="nav-item me-2"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">No pagados</a></li>
					<li class="nav-item me-2"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">En cocina</a></li>
					<li class="nav-item me-2"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Entregados</a></li>
				</ul>
				<div class="tab-content p-3">
					<div class="tab-pane fade show active" id="allTab">
						<!-- BEGIN input-group -->
						<div class="input-group mb-3">
							<button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"><span class="d-none d-md-inline">Filter orders</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> <b class="caret"></b></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
							<div class="flex-fill position-relative">
								<div class="input-group">
									<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 start-0" style="z-index: 1;">
										<i class="fa fa-search opacity-5"></i>
									</div>
									<input type="text" class="form-control px-35px bg-light" placeholder="Search orders..." />
								</div>
							</div>
						</div>
						<!-- END input-group -->
					
						<!-- BEGIN table -->
						<div class="table-responsive mb-3">
							<table class="table table-hover table-panel text-nowrap align-middle mb-0">
								<thead>
									<tr>
										<th></th>
										<th>Orden</th>
										<th>Fecha</th>
										<th>Cliente</th>
										<th>Total</th>
										<th>Estado de Pago</th>
										<th>Pedido</th>
										<th>Estado de Pedido</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product1">
												<label class="form-check-label" for="product1"></label>
											</div>
										</td>
										<td><a href="#" class="fw-bold">#1</a></td>
										<td>Thu 26 Nov, 12:23pm</td>
										<td>Amanda Lee</td>
										<td>$398.00</td>
										<td><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pagado</span></td>
										<td><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Realizado</span></td>
										<td><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Entregado</span></td>
									</tr>
							</table>
						</div>
						<!-- END table -->
						<div class="d-md-flex align-items-center">
							<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
								Showing 1 to 10 of 57 entries
							</div>
							<ul class="pagination mb-0 justify-content-center">
								<li class="page-item disabled"><a class="page-link">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div>

		
		<!-- END #content -->
	
		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
		
				
				<div class="theme-panel-divider"></div>
				
				<div class="row mt-10px">
					<div class="col-8 control-label text-dark fw-bold">
						<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
						<div class="lh-14">
							<small class="text-dark opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>
				
				<div class="theme-panel-divider"></div>
				
				<!-- BEGIN theme-switch -->

				
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->


	<!-- ================== BEGIN core-js ================== -->
	<script src="../../../../assets/js/vendor.min.js"></script>
	<script src="../../../../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../../../../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="../../../../assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="../../../../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="../../../../assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../../../../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<script src="../../../../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="../../../../assets/js/demo/dashboard.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>