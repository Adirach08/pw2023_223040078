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
							class="list-group-item list-group-item-action"
							>Products List</a
						>
						<a
							href="./dashboard-transactions.php"
							class="list-group-item list-group-item-action active"
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
								<h2 class="dashboard-title">#STORE0839</h2>
								<p class="dashboard-subtitle">Transaction Details</p>
							</div>
							<div class="dashboard-content" id="transactionDetails">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-12 col-md-4">
														<img
															src="./assets/images/products/prd-jacket-01.jpg"
															alt=""
															class="w-100 mb-3 dashboard-product-detail"
														/>
													</div>
													<div class="col-12 col-md-8">
														<div class="row">
															<div class="col-12 col-md-6">
																<div class="product-title">Customer Name</div>
																<div class="product-subtitle">Rizky Billar</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Product Name</div>
																<div class="product-subtitle">
																	Pull & Bear Jacket Suede
																</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">
																	Date of Transaction
																</div>
																<div class="product-subtitle">
																	12 Juni, 2023
																</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Status</div>
																<div class="product-subtitle text-danger">
																	{{ status }}
																</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Total Amount</div>
																<div class="product-subtitle">Rp 649.000</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Mobile</div>
																<div class="product-subtitle">
																	+628 2020 11111
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12 mt-4">
														<h5>Shipping Informations</h5>
														<div class="row">
															<div class="col-12 col-md-6">
																<div class="product-title">Address 1</div>
																<div class="product-subtitle">
																	Jl. Kolonel Masturi
																</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Address 2</div>
																<div class="product-subtitle">
																	Blok B2 No. 88
																</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Province</div>
																<div class="product-subtitle">West Java</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">City</div>
																<div class="product-subtitle">Cimahi</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Postal Code</div>
																<div class="product-subtitle">40511</div>
															</div>
															<div class="col-12 col-md-6">
																<div class="product-title">Country</div>
																<div class="product-subtitle">Indonesia</div>
															</div>
															<div class="col-12">
																<div class="row">
																	<div class="col-md-3">
																		<div class="product-title">Status</div>
																		<select
																			name="status"
																			id="status"
																			class="form-control"
																			v-model="status"
																		>
																			<option value="UNPAID">Unpaid</option>
																			<option value="PENDING">Pending</option>
																			<option value="SHIPPING">Shipping</option>
																			<option value="SUCCESS">Success</option>
																		</select>
																	</div>
																	<template v-if="status == 'SHIPPING'">
																		<div class="col-md-3">
																			<div class="product-title">
																				Input Resi
																			</div>
																			<input
																				class="form-control"
																				type="text"
																				name="resi"
																				id="openStoreTrue"
																				v-model="resi"
																			/>
																		</div>
																		<div class="col-md-2">
																			<button
																				type="submit"
																				class="btn btn-primary btn-block mt-4"
																			>
																				Update Resi
																			</button>
																		</div>
																	</template>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
		<script src="./scripts/vendor/vue/vue.js"></script>
		<script>
			var transactionDetails = new Vue({
				el: "#transactionDetails",
				data: {
					status: "SHIPPING",
					resi: "BDO12308012132",
				},
			});
		</script>
	</body>
</html>
