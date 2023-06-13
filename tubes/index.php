<?php 
    include 'connect.php';

    $products = "SELECT * FROM products;";
    $product = mysqli_query($conn, $products);

    $categories = "SELECT * FROM categories;";
    $category = mysqli_query($conn, $categories);

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }

    $delay = 100;
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
			content="Beranda - AdiRap Store | Fashion Style"
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
			content="Beranda - AdiRap Store | Fashion Style"
		/>
		<meta data-rh="true" property="og:type" content="website" />
		<meta data-rh="true" property="og:url" content="https://adirap.com" />

		<title>Beranda - AdiRap Store | Fashion Style</title>

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
		<div class="page-content page-home">
			<!-- start : banner -->
			<section class="store-carousel">
				<div class="container">
					<div class="row">
						<div class="col-lg-12" data-aos="zoom-in">
							<div
								id="storeCarousel"
								class="carousel slide"
								data-ride="carousel"
							>
								<!-- carousel-indicators -->
								<ol class="carousel-indicators">
									<li
										data-target="#storeCarousel"
										data-slide-to="0"
										class="active"
									></li>
									<li data-target="#storeCarousel" data-slide-to="1"></li>
									<li data-target="#storeCarousel" data-slide-to="2"></li>
								</ol>
								<!-- carousel-indicators -->

								<!-- carousel-inner -->
								<div class="carousel-inner">
									<!-- carousel-item #1 -->
									<div class="carousel-item active">
										<img
											src="./assets/images/banner/banner-01.jpg"
											class="d-block w-100"
											alt="Carousel Image"
										/>
									</div>
									<!-- carousel-item #1 -->

									<!-- carousel-item #2 -->
									<div class="carousel-item">
										<img
											src="./assets/images/banner/banner-02.jpg"
											class="d-block w-100"
											alt="Carousel Image"
										/>
									</div>
									<!-- carousel-item #2 -->

									<!-- carousel-item #3 -->
									<div class="carousel-item">
										<img
											src="./assets/images/banner/banner-03.jpg"
											class="d-block w-100"
											alt="Carousel Image"
										/>
									</div>
									<!-- carousel-item #3 -->
								</div>
								<!-- carousel-inner -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end : banner -->

			<!-- start : categories -->
			<section class="store-trend-categories">
				<div class="container">
					<!-- categories title -->
					<div class="row">
						<div class="col-12" data-aos="fade-up">
							<h5>Kategori Unggulan</h5>
						</div>
					</div>
					<!-- categories title -->

					<!-- categories items -->
					<div class="row">
                        <?php 
                            while ($category_item = mysqli_fetch_assoc($category)) {
                        ?>
                        
						<!-- category -->
						<div
							class="col-6 col-md-3 col-lg-2"
							data-aos="fade-up"
							data-aos-delay="100"
						>
							<a class="component-categories d-block" href="categories.php?detail=<?php echo $category_item['id'] ?>">
								<div class="categories-image">
									<img
										src="./assets/images/categories/<?php echo $category_item['category_image'] ?>"
										alt="icon shirt - adirap fashion store - shirt categories"
										class="w-100"
									/>
								</div>
								<p class="categories-text">
                                    <?php echo $category_item['category_name'] ?>
                                </p>
							</a>
						</div>
						<!-- category -->

                        <?php } ?>
					</div>
					<!-- categories items -->
				</div>
			</section>
			<!-- end : categories -->

			<!-- start : product -->
			<section class="store-new-products">
				<div class="container">
					<!-- product title -->
					<div class="row">
						<div class="col-12" data-aos="fade-up">
							<h5>Produk Terbaru 🔥</h5>
						</div>
					</div>
					<!-- product title -->

					<!-- product content -->
					<div class="row">
                        <?php 
                            while ($product_item = mysqli_fetch_assoc($product)) {
                        ?>

						<!-- product-item -->
						<div
							class="col-6 col-md-4 col-lg-3 mb-4"
							data-aos="fade-up"
							data-aos-delay="100"
						>
							<a class="component-products d-block" href="details.php?detail=<?php echo $product_item['id'] ?>">
								<div class="products-thumbnail">
									<div
										class="products-image"
										style="
											background-image: url('./assets/images/products/<?php echo $product_item['product_image_1'] ?>');
										"
									></div>
								</div>
								<div class="products-text">
                                    <?php echo $product_item['product_name'] ?>
                                </div>
								<div class="products-price"><?php echo rupiah($product_item['product_price']) ?></div>
							</a>
						</div>
						<!-- product-item -->

                        <?php } ?>
					</div>
					<!-- product content -->
				</div>
			</section>
			<!-- end : product -->
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
