<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />

		<meta
			data-rh="true"
			name="title"
			content="Dashboard - AdiRap Store | Fashion Style"
		/>
		<meta
			data-rh="true"
			name="description"
			content="Toko Fashion serba ada dengan jaminan harga termurah dan bahan berkualitas"
		/>

		<meta
			data-rh="true"
			property="og:description"
			content="Toko Fashion serba ada dengan jaminan harga termurah dan bahan berkualitas"
		/>

		<meta
			data-rh="true"
			property="og:image"
			content="./assets/images/banner/banner-tag.jpg"
		/>
		<meta
			data-rh="true"
			property="og:image:secure_url"
			content="./assets/images/banner/banner-tag.jpg"
		/>
		<meta data-rh="true" property="og:image:type" content="image/jpg" />
		<meta data-rh="true" property="og:image:width" content="1200" />
		<meta data-rh="true" property="og:image:height" content="628" />
		<meta
			data-rh="true"
			property="og:title"
			content="Dashboard - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Dashboard - AdiRap Store | Fashion Style</title>

		<link
			rel="shortcut icon"
			href="./assets/images/favicon/favicon-512.png"
			type="image/x-icon"
		/>

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link href="scripts/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<div class="page-dashboard">
			<div class="d-flex" id="wrapper" data-aos="fade-right">
				<!-- Sidebar -->
				<div class="border-right" id="sidebar-wrapper">
					<div class="sidebar-heading text-center">
						<img
							src="./assets/images/favicon/favicon-512.png"
							alt="logo adirap store"
							class="my-2"
							style="max-width: 100px"
						/>
						<h4 class="text-center">User Account</h4>
					</div>

					<div class="list-group list-group-flush">
						<a
							href="./dashboard.php"
							class="list-group-item list-group-item-action"
							>Dashboard</a
						>
						<a
							href="./dashboard-category.php"
							class="list-group-item list-group-item-action"
							>Categories List</a
						>
						<a
							href="./dashboard-products.php"
							class="list-group-item list-group-item-action active"
							>Products List</a
						>
						<a
							href="./dashboard-transactions.php"
							class="list-group-item list-group-item-action"
							>Transactions</a
						>
					</div>
				</div>
				<!-- /#sidebar-wrapper -->

				<!-- Page Content -->
				<div id="page-content-wrapper">
					<nav
						class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
						data-aos="fade-down"
					>
						<button
							class="btn btn-secondary d-md-none mr-auto mr-2"
							id="menu-toggle"
						>
							&laquo; Menu
						</button>

						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto d-none d-lg-flex">
								<li class="nav-item dropdown">
									<a
										class="nav-link"
										href="#"
										id="navbarDropdown"
										role="button"
										data-toggle="dropdown"
										aria-haspopup="true"
										aria-expanded="false"
									>
										<img
											src="./assets/images/sample/icon-user.png"
											alt=""
											class="rounded-circle mr-2 profile-picture"
										/>
										Hi, AdiRap
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="./index.php">Back to Store</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="./">Logout</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link d-inline-block mt-2" href="#">
										<img
											src="./assets/images/sample/images/sample/icon-cart-empty.svg"
											alt=""
										/>
									</a>
								</li>
							</ul>
							<!-- Mobile Menu -->
							<ul class="navbar-nav d-block d-lg-none mt-3">
								<li class="nav-item">
									<a class="nav-link" href="#"> Hi, AdiRap </a>
								</li>
								<li class="nav-item">
									<a class="nav-link d-inline-block" href="#"> Cart </a>
								</li>
							</ul>
						</div>
					</nav>

					<div
						class="section-content section-dashboard-home"
						data-aos="fade-up"
					>
						<div class="container-fluid">
							<div class="dashboard-heading">
								<h2 class="dashboard-title">Products List</h2>
								<p class="dashboard-subtitle">Manage it well and get money</p>
							</div>

							<div class="dashboard-content">
								<div class="row">
									<div class="col-12">
										<a
											href="./dashboard-products-create.php"
											class="btn btn-primary"
											>Add New Product</a
										>
									</div>
								</div>

								<div class="row mt-4">
									<!-- product #1 -->
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<a
											class="card card-dashboard-product d-block"
											href="./dashboard-products-details.php"
										>
											<div class="card-body">
												<img
													src="./assets/images/products/prd-bag-01.jpg"
													alt=""
													class="w-100 mb-2"
												/>
												<div class="product-title">
													Coca Cola Bag Special Edition
												</div>
												<div class="product-category">Bag</div>
											</div>
										</a>
									</div>
									<!-- product #1 -->

									<!-- product #2 -->
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<a
											class="card card-dashboard-product d-block"
											href="./dashboard-products-details.php"
										>
											<div class="card-body">
												<img
													src="./assets/images/products/prd-jacket-01.jpg"
													alt=""
													class="w-100 mb-2"
												/>
												<div class="product-title">Pull & Bear Jacket</div>
												<div class="product-category">Jacket</div>
											</div>
										</a>
									</div>
									<!-- product #2 -->

									<!-- product #3 -->
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<a
											class="card card-dashboard-product d-block"
											href="./dashboard-products-details.php"
										>
											<div class="card-body">
												<img
													src="./assets/images/products/prd-pants-01.jpg"
													alt=""
													class="w-100 mb-2"
												/>
												<div class="product-title">
													Jimmy Martin Jeans - Dark Blue
												</div>
												<div class="product-category">Pants</div>
											</div>
										</a>
									</div>
									<!-- product #3 -->

									<!-- product #4 -->
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<a
											class="card card-dashboard-product d-block"
											href="./dashboard-products-details.php"
										>
											<div class="card-body">
												<img
													src="./assets/images/products/prd-shirt-01.jpg"
													alt=""
													class="w-100 mb-2"
												/>
												<div class="product-title">
													Kaos Kerah Basic - Printing High Quality
												</div>
												<div class="product-category">Shirt</div>
											</div>
										</a>
									</div>
									<!-- product #4 -->

									<!-- product #5 -->
									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<a
											class="card card-dashboard-product d-block"
											href="./dashboard-products-details.php"
										>
											<div class="card-body">
												<img
													src="./assets/images/products/prd-tshirt-01.jpg"
													alt=""
													class="w-100 mb-2"
												/>
												<div class="product-title">
													Kaos Santai, Basic. Deep Orange
												</div>
												<div class="product-category">Tshirt</div>
											</div>
										</a>
									</div>
									<!-- product #5 -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /#page-content-wrapper -->
			</div>
		</div>
		<!-- Bootstrap core JavaScript -->
		<script src="./scripts/vendor/jquery/jquery.slim.min.js"></script>
		<script src="./scripts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>
</html>
