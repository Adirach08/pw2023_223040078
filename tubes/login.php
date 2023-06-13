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
			content="Login - AdiRap Store | Fashion Style"
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
			content="Login - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Login - AdiRap Store | Fashion Style</title>

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
							<a class="nav-link" href="./categories.php">Categories</a>
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

		<!-- Page Content -->
		<div class="page-content page-auth">
			<div class="section-store-auth" data-aos="fade-up">
				<div class="container">
					<div class="row align-items-center row-login">
						<div class="col-lg-6 text-center">
							<img
								src="./assets/images/sample/login-placeholder.png"
								alt=""
								class="w-50 mb-4 mb-lg-none"
							/>
						</div>
						<div class="col-lg-5">
							<h2>
								Belanja kebutuhan utama, <br />
								menjadi lebih mudah
							</h2>
							<form class="mt-3">
								<div class="form-group">
									<label>Email address</label>
									<input
										type="email"
										class="form-control w-75"
										aria-describedby="emailHelp"
									/>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control w-75" />
								</div>
								<a
									class="btn btn-primary btn-block w-75 mt-4"
									href="./login.php"
								>
									Sign In to My Account
								</a>
								<a class="btn btn-signup w-75 mt-2" href="./register.php">
									Sign Up
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

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

		<!-- Bootstrap core JavaScript -->
		<script src="./scripts/vendor/jquery/jquery.slim.min.js"></script>
		<script src="./scripts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script src="./scripts/js/navbar-scroll.js"></script>
	</body>
</html>
