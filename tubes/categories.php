<?php 

    include "connect.php";

    if (isset($_GET['detail'])) {
        $category_id = $_GET['detail'];

        $queryShow = "SELECT * FROM categories WHERE id = '$category_id';";
        $sqlShow = mysqli_query($conn, $queryShow);

        $resultShow = mysqli_fetch_assoc($sqlShow);

        $category_name = $resultShow['category_name'];
        $category_image = $resultShow['category_image'];
    }

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
?>

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
			content="Categories - AdiRap Store | Fashion Style"
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
			content="Categories - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Categories - AdiRap Store | Fashion Style</title>

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
						<li class="nav-item">
							<a class="nav-link" href="./index.php">Home </a>
						</li>

						<li class="nav-item active">
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

		<!-- start : content -->
		<div class="page-content page-categories">
			<!-- start : categories -->
			<section class="store-trend-categories">
				<div class="container">
					<!-- categories title -->
					<div class="row">
						<div class="col-12" data-aos="fade-up">
							<h5>Kategori : <span class="text-danger"><?php echo "$category_name"; ?></span></h5>
						</div>
					</div>
					<!-- categories title -->

					<!-- categories items -->
					<div class="row">
						<!-- category -->
						<div
							class="col-6 col-md-3 col-lg-2"
							data-aos="fade-up"
							data-aos-delay="100"
						>
							<div class="component-categories d-block">
								<div class="categories-image">
									<img
										src="./assets/images/categories/<?php echo "$category_image"; ?>"
										alt="icon shirt - adirap fashion store - shirt categories"
										class="w-100"
									/>
								</div>
								<p class="categories-text">
                                    <?php echo "$category_name"; ?>
                                </p>
							</div>
						</div>
						<!-- category -->
					</div>
					<!-- categories items -->
				</div>
			</section>
			<!-- end : categories -->
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
