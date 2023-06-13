<?php 

    include "connect.php";

    if (isset($_GET['detail'])) {
        $product_id = $_GET['detail'];

        $queryShow = "SELECT * FROM products WHERE id = '$product_id';";
        $sqlShow = mysqli_query($conn, $queryShow);

        $resultShow = mysqli_fetch_assoc($sqlShow);

        $category_id = $resultShow['category_id'];
        $product_name = $resultShow['product_name'];
        $product_price = $resultShow['product_price'];
        $product_description = $resultShow['product_description'];
        $product_image_1 = $resultShow['product_image_1'];
        $product_image_2 = $resultShow['product_image_2'];
        $product_image_3 = $resultShow['product_image_3'];
        $product_image_4 = $resultShow['product_image_4'];
        $product_image_5 = $resultShow['product_image_5'];
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

		<!-- Page Content -->
		<div class="page-content page-details">
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
										Product Details
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section class="store-gallery" id="gallery">
				<div class="container">
					<div class="row">
						<div class="col-lg-8" data-aos="zoom-in">
							<transition name="slide-fade" mode="out-in">
								<img
									:key="photos[activePhoto].id"
									:src="photos[activePhoto].url"
									class="w-100 main-image details-zoom"
									alt=""
								/>
							</transition>
						</div>

						<div class="col-lg-2">
							<div class="row">
								<div
									class="col-3 col-lg-12 mt-2 mt-lg-0"
									v-for="(photo, index) in photos"
									:key="photo.id"
									data-aos="zoom-in"
									data-aos-delay="100"
								>
									<a
										href="#"
										@click="changeActive(index)"
										class="detail-thumbnail"
									>
										<img
											:src="photo.url"
											class="w-100 thumbnail-image"
											:class="{ active: index == activePhoto }"
											alt=""
										/>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="store-details-container" data-aos="fade-up">
				<section class="store-heading">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h1>
                                    <?php echo $product_name; ?>
                                </h1>
								<div class="price">
                                    <?php echo rupiah($product_price); ?>
                                </div>
							</div>
							<div class="col-lg-2" data-aos="zoom-in">
								<a
									class="btn btn-primary nav-link px-4 text-white btn-block mb-3"
									href="./cart.php"
									>Add to Cart</a
								>
							</div>
						</div>
					</div>
				</section>

				<section class="store-description">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-8">
								<p>
									<?php echo $product_description; ?>
								</p>
							</div>
						</div>
					</div>
				</section>
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
		<script>
			var gallery = new Vue({
				el: "#gallery",
				mounted() {
					AOS.init();
				},
				data: {
					activePhoto: 3,
					photos: [
                        {
                            id: 1,
                            url: "./assets/images/products/<?php echo $product_image_1; ?>",
                        },
						
						{
							id: 2,
							url: "./assets/images/products/<?php if($product_image_2 != '') { echo "$product_image_2"; } else { echo "$product_image_1"; } ?>",
						},
						{
							id: 3,
							url: "./assets/images/products/<?php if($product_image_3 != '') { echo "$product_image_3"; } else { echo "$product_image_1"; } ?>",
						},
						{
							id: 4,
							url: "./assets/images/products/<?php if($product_image_4 != '') { echo "$product_image_4"; } else { echo "$product_image_1"; } ?>",
						},
                        {
							id: 5,
							url: "./assets/images/products/<?php if($product_image_5 != '') { echo "$product_image_5"; } else { echo "$product_image_1"; } ?>",
						},
					],
				},
				methods: {
					changeActive(id) {
						this.activePhoto = id;
					},
				},
			});
		</script>
		<script src="./scripts/js/navbar-scroll.js"></script>
	</body>
</html>
