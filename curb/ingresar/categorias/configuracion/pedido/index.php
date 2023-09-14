<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>CURB FOOD</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="../../../../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../../../../assets/css/apple/app.min.css" rel="stylesheet" />
	<link href="../../../../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-content-full-height app-without-sidebar app-without-header bg-white">
		<!-- BEGIN #content -->
		<div id="content" class="app-content p-0">
			<!-- BEGIN pos -->
			<div class="pos pos-customer" id="pos-customer">
				<!-- BEGIN pos-menu -->
				<div class="pos-menu" style="background-color: rgb(56, 56, 56)">
					<div class="logo">
						<a href="index_v3.html">
							<div class="logo-img", style="height: 60px;"><img src="../../../../imagenes/LogoCurb.png" /></div>
						</a>
					</div>
					<div class="nav-container">
						<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#" data-filter="all" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-utensils me-1 ms-n2" style="color: white;"></i> Todas las comidas
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="fa-hotdog" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-hotdog" style="color: white;"></i> Perro caliente
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="burger" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-hamburger me-1 ms-n2" style="color: white;"></i> Hamburguesa
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="pizza" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-pizza-slice me-1 ms-n2" style="color: white;"></i> Pizza
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="asados" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-fire me-1 ms-n2" style="color: white;"></i> Asados
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="Salchipapa" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-drumstick-bite" style="color: white;"></i> Salchipapa
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" data-filter="drinks" style="background-color: rgb(56, 56, 56); color: white;">
										<i class="fa fa-fw fa-cocktail me-1 ms-n2" style="color: white;"></i> Bebidas
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END pos-menu -->
				
				<!-- BEGIN pos-content -->
				<div class="pos-content">
					<div class="pos-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true" style="background-color: rgb(24, 24, 24);">
						<div class="product-row">
							<div class="product-container" data-type="meat">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-1.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Grill Chicken Chop&reg;</div>
										<div class="desc">chicken, egg, mushroom, salad</div>
										<div class="price" style="color: white;">$10.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="meat">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-2.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Grill Chicken Chop&reg;</div>
										<div class="desc">chicken, egg, mushroom, salad</div>
										<div class="price" style="color: white;">$10.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="meat">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-3.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Capellini Tomato Sauce&reg;</div>
										<div class="desc">spaghetti, tomato, mushroom </div>
										<div class="price"  style="color: white;">$11.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="meat">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-4.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Vegan Salad Bowl&reg;</div>
										<div class="desc">apple, carrot, tomato </div>
										<div class="price" style="color: white;">$6.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="meat">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-5.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Hawaiian Pizza&reg;</div>
										<div class="desc">pizza, crab meat, pineapple </div>
										<div class="price" style="color: white;">$6.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="burger">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-16.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Perfect Burger</div>
										<div class="desc">Dill pickle, cheddar cheese, tomato, red onion, ground chuck beef</div>
										<div class="price"  style="color: white;">$8.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="drinks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-6.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Avocado Shake</div>
										<div class="desc">avocado, milk, vanilla</div>
										<div class="price" style="color: white;">$3.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="drinks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-12.jpg)"></div>
									<div class="text" style="background-color:rgb(56, 56, 56) ;">
										<div class="title" style="color: white;">Coffee Latte</div>
										<div class="desc">espresso, milk</div>
										<div class="price" style="color: white;">$2.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="drinks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-9.jpg)"></div>
									<div class="text" style="background-color: rgb(56, 56, 56); color: white;">
										<div class="title" style="color: white;" >Vita C Detox Juice</div>
										<div class="desc">apricot, apple, carrot and ginger juice</div>
										<div class="price"  style="color: white;">$2.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="snacks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-9.jpg)"></div>
									<div class="text" style="background-color: rgb(56, 56, 56); color: white;">
										<div class="title"  style="color: white;">Pancake</div>
										<div class="desc">Non dairy, egg, baking soda, sugar, all-purpose flour</div>
										<div class="price"  style="color: white;">$5.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="snacks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-10.jpg)"></div>
									<div class="text" style="background-color: rgb(56, 56, 56); color: white;">
										<div class="title"  style="color: white;">Mushroom Soup</div>
										<div class="desc">Evaporated milk, marsala wine, beef cubes, chicken broth, butter</div>
										<div class="price"  style="color: white;">$3.99</div>
									</div>
								</a>
							</div>
							<div class="product-container" data-type="snacks">
								<a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
									<div class="img" style="background-image: url(../../../../assets/img/pos/product-11.jpg)"></div>
									<div class="text" style="background-color: rgb(56, 56, 56); color: white;">
										<div class="title"  style="color: white;">Baked Chicken Wing</div>
										<div class="desc">Chicken wings, A1 steak sauce, honey, cayenne pepper</div>
										<div class="price"  style="color: white;">$6.99</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END pos-content -->
				
				<!-- BEGIN pos-sidebar -->
				<div class="pos-sidebar" id="pos-sidebar" style="background-color: rgb(56, 56, 56)">
					<div class="pos-sidebar-header" style="background-color: rgb(42, 42, 42);">
						<div class="back-btn">
							<button type="button" data-dismiss-class="pos-mobile-sidebar-toggled" data-target="#pos-customer" class="btn">
								<svg viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
								</svg>
							</button>
						</div>
						<div class="icon"><img src="assets/img/pos/icon-table.svg" /></div>
						<div class="title">Table 01</div>
						<div class="order">Order: <b>#0056</b></div>
					</div>
					<div class="pos-sidebar-nav">
						<ul class="nav nav-tabs nav-fill">
							<li class="nav-item">
								<a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#newOrderTab">New Order (5)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#orderHistoryTab">Order History (0)</a>
							</li>						
						</ul>
					</div>
					<div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%" >
						<div class="tab-pane fade h-100 show active" id="newOrderTab">
							<div class="pos-table">
								<div class="row pos-table-row">
									<div class="col-9">
										<div class="pos-product-thumb">
											<div class="img" style="background-image: url(../../../../assets/img/pos/product-2.jpg)"></div>
											<div class="info">
												<div class="title" style="color: white;">Grill Pork Chop</div>
												<div class="single-price" style="color: white;">$12.99</div>
												<div class="desc" style="color: white;">- size: large</div>
												<div class="input-group qty">
													<div class="input-group-append">
														<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
													</div>
													<input type="text" class="form-control" value="01" />
													<div class="input-group-prepend">
														<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-3 total-price" style="color: white;">$12.99</div>
								</div>
								<div class="row pos-table-row">
									<div class="col-9">
										<div class="pos-product-thumb">
											<div class="img" style="background-image: url(../../../../assets/img/pos/product-8.jpg)"></div>
											<div class="info">
												<div class="title" style="color: white;">Orange Juice</div>
												<div class="single-price" style="color: white;">$5.00</div>
												<div class="desc" style="color: white;">
													- size: large<br />
													- less ice
												</div>
												<div class="input-group qty">
													<div class="input-group-append">
														<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
													</div>
													<input type="text" class="form-control" value="02" />
													<div class="input-group-prepend">
														<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-3 total-price" style="color: white;">$10.00</div>
									<!---<div class="pos-remove-confirmation">
										<svg width="2em" height="2em" viewBox="0 0 16 16" class="me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
										Remove this item? 
										<a href="#" class="btn btn-white ms-auto me-2">No</a>
										<a href="#" class="btn btn-danger">Yes</a>
									</div> --->
								</div> 
								<div class="row pos-table-row">
									<div class="col-9">
										<div class="pos-product-thumb">
											<div class="img" style="background-image: url(../../../../assets/img/pos/product-1.jpg)"></div>
											<div class="info">
												<div class="title" style="color: white;">Grill chicken chop</div>
												<div class="single-price" style="color: white;">$10.99</div>
												<div class="desc" style="color: white;">
													- size: large<br />
													- spicy: medium
												</div>
												<div class="input-group qty">
													<div class="input-group-append">
														<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
													</div>
													<input type="text" class="form-control" value="01" />
													<div class="input-group-prepend">
														<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-3 total-price" style="color: white;">$10.99</div>
								</div>
								<div class="row pos-table-row">
									<div class="col-9">
										<div class="pos-product-thumb">
											<div class="img" style="background-image: url(../../../../assets/img/pos/product-5.jpg)"></div>
											<div class="info">
												<div class="title" style="color: white;">Hawaiian Pizza</div>
												<div class="single-price" style="color: white;">$15.00</div>
												<div class="desc" style="color: white;">
													- size: large<br />
													- more onion
												</div>
												<div class="input-group qty">
													<div class="input-group-append">
														<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
													</div>
													<input type="text" class="form-control" value="01" />
													<div class="input-group-prepend">
														<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-3 total-price" style="color: white;">$15.00</div>
								</div>
								<div class="row pos-table-row">
									<div class="col-9">
										<div class="pos-product-thumb">
											<div class="img" style="background-image: url(../../../../assets/img/pos/product-10.jpg)"></div>
											<div class="info">
												<div class="title" style="color: white;">Mushroom Soup</div>
												<div class="single-price" style="color: white;">$3.99</div>
												<div class="desc" style="color: white;">
													- size: large<br />
													- more cheese
												</div>
												<div class="input-group qty">
													<div class="input-group-append">
														<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
													</div>
													<input type="text" class="form-control" value="01" />
													<div class="input-group-prepend">
														<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-3 total-price" style="color: white;">$3.99</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade h-100" id="orderHistoryTab">
							<div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
								<div>
									<div class="mb-3 mt-n5">
										<svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
											<path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
										</svg>
									</div>
									<h4>No order history found</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="pos-sidebar-footer" style="background-color: rgb(35, 35, 35);">
						<div class="subtotal">
							<div class="text" style="color: white;">Subtotal</div>
							<div class="price" style="color: white;">$30.98</div>
						</div>
						<div class="taxes">
							<div class="text" style="color: white;">Taxes (6%)</div>
							<div class="price" style="color: white;">$2.12</div>
						</div>
						<div class="total">
							<div class="text" style="color: white;">Total</div>
							<div class="price" style="color: white;">$33.10</div>
						</div>
						<div class="btn-row">
							<a href="#" class="btn btn-default" style="color: rgb(44, 44, 44);"><i class="fa fa-bell fa-fw fa-lg"></i> Service</a>
							<a href="#" class="btn btn-default" style="color: rgb(41, 41, 41);"><i class="fa fa-file-invoice-dollar fa-fw fa-lg"></i> Bill</a>
							<a href="#" class="btn btn-success" ><i class="fa fa-check fa-fw fa-lg"></i> Submit Order</a>
						</div>
					</div>
				</div>
				<!-- END pos-sidebar -->
			</div>
			<!-- END pos -->
			
			<!-- BEGIN pos-mobile-sidebar-toggler -->
			<a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled" data-target="#pos-customer">
				<svg viewBox="0 0 16 16" class="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
					<path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
				</svg>
				<span class="badge">5</span>
			</a>
			<!-- END pos-mobile-sidebar-toggler -->
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
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		
		
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	<!-- BEGIN #modalPosItem -->
	<div class="modal modal-pos-item fade" id="modalPosItem">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body p-0">
					<a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
					<div class="pos-product">
						<div class="pos-product-img">
							<div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
						</div>
						<div class="pos-product-info">
							<div class="title">Grill Chicken Chop</div>
							<div class="desc">
								chicken, egg, mushroom, salad
							</div>
							<div class="price">$10.99</div>
							<hr />
							<div class="option-row">
								<div class="qty">
									<div class="input-group">
										<a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
										<input type="text" class="form-control border-0 text-center" name="" value="1" />
										<a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="option-row">
								<div class="option-title">Size</div>
								<div class="option-list">
									<div class="option">
										<input type="radio" id="size3" name="size" class="option-input" checked />
										<label class="option-label" for="size3">
											<span class="option-text">Small</span>
											<span class="option-price">+0.00</span>
										</label>
									</div>
									<div class="option">
										<input type="radio" id="size1" name="size" class="option-input" />
										<label class="option-label" for="size1">
											<span class="option-text">Large</span>
											<span class="option-price">+3.00</span>
										</label>
									</div>
									<div class="option">
										<input type="radio" id="size2" name="size" class="option-input" />
										<label class="option-label" for="size2">
											<span class="option-text">Medium</span>
											<span class="option-price">+1.50</span>
										</label>
									</div>
								</div>
							</div>
							<div class="option-row">
								<div class="option-title">Add On</div>
								<div class="option-list">
									<div class="option">
										<input type="checkbox" name="addon[sos]" value="true" class="option-input" id="addon1" />
										<label class="option-label" for="addon1">
											<span class="option-text">More BBQ sos</span>
											<span class="option-price">+0.00</span>
										</label>
									</div>
									<div class="option">
										<input type="checkbox" name="addon[ff]" value="true" class="option-input" id="addon2" />
										<label class="option-label" for="addon2">
											<span class="option-text">Extra french fries</span>
											<span class="option-price">+1.00</span>
										</label>
									</div>
									<div class="option">
										<input type="checkbox" name="addon[ms]" value="true" class="option-input" id="addon3" />
										<label class="option-label" for="addon3">
											<span class="option-text">Mushroom soup</span>
											<span class="option-price">+3.50</span>
										</label>
									</div>
									<div class="option">
										<input type="checkbox" name="addon[ms]" value="true" class="option-input" id="addon4" />
										<label class="option-label" for="addon4">
											<span class="option-text">Lemon Juice (set)</span>
											<span class="option-price">+2.50</span>
										</label>
									</div>
								</div>
							</div>
							<div class="btn-row">
								<a href="#" class="btn btn-default" data-bs-dismiss="modal">Cancel</a>
								<a href="#" class="btn btn-success">Add to cart <i class="fa fa-plus fa-fw ms-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END #modalPosItem -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../../../../assets/js/vendor.min.js"></script>
	<script src="../../../../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../../../../assets/js/demo/pos-customer-order.demo.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>