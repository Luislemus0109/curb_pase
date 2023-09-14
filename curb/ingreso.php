<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>CURB WEB</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/apple/app.min.css" rel="stylesheet" />
	<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>	
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-with-news-feed">
			<!-- BEGIN news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(imagenes/burger.png)"></div>
				<div class="news-image" style="background-image: url(imagenes/delivery.png)"></div>
				<div class="news-image" style="background-image: url(imagenes/pizzaimg.png)"></div>
			  </div>
			<!-- END news-feed -->
			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header mb-20px">
					<div class="brand d-flex justify-content-center align-items-center">
					  <div class="mt-auto">
						<img src="imagenes/LogoCurb.png" alt="Logo" class="logo-image" height="100px">
						<small>¡Ingresa a nuestro aplicativo web!</small>
					  </div>
					</div>
				  </div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
				<div class="login-content">
					<form action="index.html" method="GET" class="fs-13px">
						<div class="form-floating mb-15px">
							<input type="text" class="form-control h-45px fs-13px" placeholder="Email Address" id="emailAddress" />
							<label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email Address</label>
						</div>
						<div class="form-floating mb-15px">
							<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" />
							<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
						</div>
						<div class="form-check mb-30px">
							<input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
							<label class="form-check-label" for="rememberMe">
								Remember Me
							</label>
						</div>
						<div class="mb-15px">
							<a href="index.php" class="btn btn-danger d-block h-45px w-100 btn-lg fs-14px">Sign me in</a></div>
						  <div class="mb-40px pb-40px text-center text-dark">
							¿No tienes una cuenta? Haz click <a href="index.php" class="text-primary" style="color: red; text-decoration: underline;">Aquí</a> para registrarte.
						  </div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center  mb-0">
							&copy; CURB Reserved 2023
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
				
				<!-- BEGIN theme-list -->
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
				
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

<!---AQUI ESTA TODOS LOS ESTILOS-->
	<style>
		.news-feed {
				display: flex;
				overflow: hidden;
				width: 880px; 
				height: 900px; 
				}

				.news-image {
				flex: 0 0 100%;
				background-size: cover;
				background-repeat: no-repeat;
				opacity: 0; 
				animation: imageFade 10s linear infinite; }

				.news-image:nth-child(1) {
				animation-delay: 0s;
				}

				.news-image:nth-child(2) {
				animation-delay: 5s; /* La segunda imagen aparece después de 5 segundos */
				}

				.news-image:nth-child(3) {
				animation-delay: 10s; /* La tercera imagen aparece después de 10 segundos */
				}

				@keyframes imageFade {
				0% {
					opacity: 0;
				}
				20% {
					opacity: 1;
				}
				80% {
					opacity: 1;
				}
				100% {
					opacity: 0;
				}
				}

				.brand {
					display: flex;
					justify-content: center;
					align-items: center;
					height: 100%; /* Asegura que el contenedor ocupe toda la altura disponible */
					}

					.brand > div {
					text-align: center; /* Centra horizontalmente el contenido interno */
					}

					.logo-image {
					display: block;
					margin: 0 auto; /* Centra horizontalmente la imagen dentro de su contenedor */
		}

</style>
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>