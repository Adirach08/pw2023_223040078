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
			content="Register - AdiRap Store | Fashion Style"
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
			content="Register - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Register - AdiRap Store | Fashion Style</title>

		<link
			rel="shortcut icon"
			href="./assets/images/favicon/favicon-512.png"
			type="image/x-icon"
		/>

		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link href="scripts/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<!-- Navigation -->
		<nav
			class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
			data-aos="fade-down"
		>
			<div class="container">
				<a class="navbar-brand" href="./">
					<img src="./assets/images/sample/logo.svg" alt="" />
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
							<a class="nav-link" href="./">Home </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./categories.php">Categories</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Rewards</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Page Content -->
		<div class="page-content page-auth mt-5" id="register">
			<div class="section-store-auth" data-aos="fade-up">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<h2>
								Registrasi jual beli <br />
								dengan cara terbaru
							</h2>
							<form class="mt-3">
								<div class="form-group">
									<label>Full Name</label>
									<input
										type="text"
										class="form-control is-valid"
										aria-describedby="nameHelp"
										v-model="name"
										autofocus
									/>
								</div>

								<div class="form-group">
									<label>Email</label>
									<input
										type="email"
										class="form-control is-invalid"
										aria-describedby="emailHelp"
										v-model="email"
									/>
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" />
								</div>

								<button type="submit" class="btn btn-primary btn-block mt-4">
									Daftar Sekarang
								</button>

								<button type="submit" class="btn btn-signup btn-block mt-2">
									Kembali
								</button>
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
		<script src="./scripts/vendor/vue/vue.js"></script>
		<script src="https://unpkg.com/vue-toasted"></script>
		<script>
			Vue.use(Toasted);

			var register = new Vue({
				el: "#register",
				mounted() {
					AOS.init();
					this.$toasted.error(
						"Maaf, tampaknya email sudah terdaftar pada sistem kami.",
						{
							position: "top-center",
							className: "rounded",
							duration: 1000,
						}
					);
				},
				data: {
					name: "Adi Rachmansyah",
					email: "adirap@gmail.com",
					password: "",
				},
			});
		</script>
		<script src="./scripts/js/navbar-scroll.js"></script>
	</body>
</html>
