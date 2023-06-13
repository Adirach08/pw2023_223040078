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
			content="Cart - AdiRap Store | Fashion Style"
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
			content="Cart - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Cart - AdiRap Store | Fashion Style</title>

		<link
			rel="shortcut icon"
			href="./assets/images/favicon/favicon-512.png"
			type="image/x-icon"
		/>

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link href="scripts/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<!-- start : navigation -->
		<nav
			class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
			data-aos="fade-down"
		>
			<div class="container d-flex justify-content-between">
				<a class="navbar-brand" href="./index.php">
					<img
						class="img-brand"
						src="./assets/images/logo/logo.png"
						alt="logo adirap store - fashion store"
					/>
				</a>

				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarResponsive"
					aria-controls="navbarResponsive"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="./index.php">Home </a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="./categories-all.php">Categories</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="./register.php">Sign Up</a>
						</li>

						<li class="nav-item">
							<a
								class="btn btn-primary btn-rounded--pill nav-link px-4 text-white"
								href="./login.php"
								>Sign In</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end : navigation -->

		<!-- start : content -->
		<div class="page-content page-cart">
			<section
				class="store-breadcrumbs"
				data-aos="fade-down"
				data-aos-delay="100"
			>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="./">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Cart
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<section class="store-cart">
				<div class="container">
					<div class="row" data-aos="fade-up" data-aos-delay="100">
						<div class="col-12 table-responsive">
							<table
								class="table table-borderless table-cart"
								aria-describedby="Cart"
							>
								<thead>
									<tr>
										<th scope="col">Image</th>
										<th scope="col">Name &amp; Category</th>
										<th scope="col">Price</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 25%">
											<img
												src="./assets/images/products/prd-shoes-01.jpg"
												alt=""
												class="cart-image"
											/>
										</td>
										<td style="width: 35%">
											<div class="product-title">
												Nike Air Dunk - Soft Color Cream & Blue
											</div>
											<div class="product-subtitle">Shoes</div>
										</td>
										<td style="width: 35%">
											<div class="product-title">Rp 2.750.000</div>
											<div class="product-subtitle">IDR</div>
										</td>
										<td style="width: 20%">
											<a href="#" class="btn btn-remove-cart"> Remove </a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row" data-aos="fade-up" data-aos-delay="150">
						<div class="col-12">
							<hr />
						</div>
						<div class="col-12">
							<h2 class="mb-4">Shipping Details</h2>
						</div>
					</div>
					<div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
						<div class="col-md-6">
							<div class="form-group">
								<label for="addressOne">Address 1</label>
								<input
									type="text"
									class="form-control"
									id="addressOne"
									aria-describedby="emailHelp"
									name="addressOne"
									value="Jalan Kolonel Masturi"
								/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="addressTwo">Address 2</label>
								<input
									type="text"
									class="form-control"
									id="addressTwo"
									aria-describedby="emailHelp"
									name="addressTwo"
									value="No. 88"
								/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="province">Province</label>
								<select name="province" id="province" class="form-control">
									<option value="Jawa Barat">Jawa Barat</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="city">City</label>
								<select name="city" id="city" class="form-control">
									<option value="Cimahi">Cimahi</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="postalCode">Postal Code</label>
								<input
									type="text"
									class="form-control"
									id="postalCode"
									name="postalCode"
									value="40511"
								/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="country">Country</label>
								<input
									type="text"
									class="form-control"
									id="country"
									name="country"
									value="Indonesia"
								/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="mobile">Mobile</label>
								<input
									type="text"
									class="form-control"
									id="mobile"
									name="mobile"
									value="+628 2020 11111"
								/>
							</div>
						</div>
					</div>
					<div class="row" data-aos="fade-up" data-aos-delay="150">
						<div class="col-12">
							<hr />
						</div>
						<div class="col-12">
							<h2>Payment Informations</h2>
						</div>
					</div>

					<div class="row" data-aos="fade-up" data-aos-delay="200">
						<div class="col-4 col-md-3">
							<div class="product-title">Rp 15.000</div>
							<div class="product-subtitle">Product Insurance</div>
						</div>

						<div class="col-4 col-md-2">
							<div class="product-title">Rp 21.000</div>
							<div class="product-subtitle">Ship to Cimahi</div>
						</div>

						<div class="col-4 col-md-2">
							<div class="product-title text-success">Rp 2.750.000</div>
							<div class="product-subtitle">Total</div>
						</div>

						<div class="col-8 col-md-3">
							<a
								href="./success.php"
								class="btn btn-primary mt-4 px-4 btn-block"
							>
								Checkout Now
							</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- end : content -->

		<!-- start : footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<p class="fw-light mb-0 py-4">
							Copyright &copy;2023 AdiRap Fashion Store by
							<a href="https://adirap.com" class="text-danger"
								>Adi Rachmansyah</a
							>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end : footer -->

		<!-- javascripts -->
		<script src="./scripts/vendor/jquery/jquery.slim.min.js"></script>
		<script src="./scripts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script src="./scripts/js/navbar-scroll.js"></script>
		<!-- javascripts -->
	</body>
</html>
