<!DOCTYPE html>
<!--
	Be by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>N and V Sport Life</title>

	<!-- =============== Bootstrap Core CSS =============== -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<!-- =============== fonts awesome =============== -->
	<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
	<!-- =============== Plugin CSS =============== -->
	<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
	<!-- =============== Custom CSS =============== -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<!-- =============== Owl Carousel Assets =============== -->
	<link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/isotope-docs.css" media="screen">
	<link rel="stylesheet" href="assets/css/baguetteBox.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>;
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- =============== Preloader =============== -->
	<div id="preloader">
		<div id="loading">
			<img width="256" height="32" src="assets/img/loading-cylon-red.svg">
		</div>
	</div>
	<!-- =============== nav =============== -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<a class="navbar-brand" href="index.php"><img src="assets/img/Sport Life.png" alt="Logo" class="navbar-img">
						</a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right navbar-pulltop">
								<li>
									<a class="page-scroll" href="#home">Home</a>
								</li>
								<li>
									<a class="page-scroll" href="./pages/product.php">Sản phẩm</a>
								</li>
								<?php session_start();
								if (!isset($_SESSION['username'])) {
									echo "
										<li>
										" . "<a class='page-scroll' href='pages/login.php'>Login</a>" . "
									</li>
									<li>
										" . "<a class='page-scroll' href='pages/register.php'>Register</a>" . "
									</li>
										";
								}
								?>

							</ul>
						</div>
					</div>
					<?php
					if (isset($_SESSION['username'])) {
						echo "
						" . "<div class= 'col-lg-2 col-md-2 col-sm-2 col-xs-2 '>" . "
						<div class=" . "login" . ">
							<a class=" . "page-scroll" . " href=" . "pages/register.php" . ">Xin chào " . $_SESSION['username'] . "</a>
							<a class=" . "page-scroll" . " href=" . "pages/handleLogout.php" . ">Đăng xuất" . "</a>
							<a href='pages/profile.php'" . "><img src=" . "./assets/img/avatar.jpg" . "" . " class='avatar'." . "></a>
						</div>
						<div class=" . 'cart' . ">
							" . "<button class='btn btn-danger btn-add'><span>Giỏ hàng </span>" . "<i class= 'fa fa-shopping-cart' aria-hidden= true ></i>" . "</button>" . "
						</div>
					</div>
						";
					}
					?>
				</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- =============== navbar-collapse =============== -->
			</div>
		</div>
		<!-- =============== container-fluid =============== -->
	</nav>
	<!-- =============== header =============== -->
	<header id="home" class="header">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="header-content row">


				<div id="owl-demo" class="owl-carousel header1">
					<div>
						<div class="col-xs-12 col-sm-6 col-md-6 header-text">
							<h2 class="wow bounceIn animated" data-wow-delay=".40s">SPORT LIFE </h2>
							<h3 class="wow bounceIn animated" data-wow-delay=".50s">ĐỒ THỂ THAO NAM</h3>
							<p>
							<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <a href="#about">Xem ngay</a></i>
							</div>
							</p>
						</div>
					</div>
					<div>
						<div class="col-xs-12 col-sm-6 col-md-6 header-text">
							<h2 class="wow bounceIn animated" data-wow-delay=".40s">SPORT LIFE</h2>
							<h3 class="wow bounceIn animated" data-wow-delay=".50s">ĐỒ THỂ THAO NỮ</h3>
							<p>
							<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Xem ngay</span></i>
							</div>
							</p>
						</div>
					</div>
				</div>
			</div>



		</div>
		<!-- =============== container end =============== -->
	</header>
	<!-- =============== About =============== -->
	<section id="about" class="">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Giá sốc cuối tuần</h2>
				</div>
				<?php
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "dbshop";
				$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

				if ($conn->connect_error) {
					die("ket noi that bai:" . $conn->connect_error);
				}

				$getSQL = "SELECT mahh, tenhh, mausac, gia, kichthuoc, loai, ao, quan, hinhanh FROM hanghoa";
				$result = $conn->query($getSQL);


				if ($result->num_rows > 0) {
					echo "<div class='list-pruduct'>";
					while ($rows = $result->fetch_assoc()) {
						echo "<div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>";
						echo "<div class='t-box'>";
						echo "<div class=" . 'timg' . "><img src=" . $rows["hinhanh"] . "></div>";
						echo "<h5 class='pruduct-name'>" . $rows["tenhh"] . "</h5>";
						echo "Giá:<span class='price'>" . $rows["gia"] . " VNĐ</span><br>";
						echo "Màu: <span>" . $rows["mausac"] . "</span><br>";
						echo "Kích thước: <span>" . $rows["kichthuoc"] . "</span>";
						echo "<ul class='social-links'>";
						echo "<li><button class='btn btn-success '>Thêm vào giỏ hàng</button></li>";

						echo "<form action='pages/cart.php' method='post'>";
						echo "<input type='text' name='hinhanh' hidden value=".$rows['hinhanh'].">";
						echo "<input type='text' name='tenhh' hidden value=".$rows['tenhh'].">";
						echo "<input type='text' name='gia' hidden value=".$rows['gia'].">";
						echo "<input type='text' name='mausac' hidden value=".$rows['mausac'].">";
						echo "<input type='text' name='kichthuoc' hidden value=".$rows['kichthuoc'].">";
						echo "<li><button type='submit' class='btn btn-info ' data-wow-delay='.1s' class='wow fadeInUp animated' >Đặt mua</button></li>";
						echo "</form>";

						echo "</ul>";
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
			</div>
		</div>
		<!-- =============== container end =============== -->
	</section>
	<section id="about" class="">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Sản phẩm HOT</h2>
				</div>
				<?php
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "dbshop";
				$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

				if ($conn->connect_error) {
					die("ket noi that bai:" . $conn->connect_error);
				}

				$getSQL = "SELECT mahh, tenhh, mausac, gia, kichthuoc, loai, ao, quan, hinhanh FROM hanghoa";
				$result = $conn->query($getSQL);


				if ($result->num_rows > 0) {
					echo "<div class='list-pruduct'>";
					while ($rows = $result->fetch_assoc()) {
						echo "<div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>";
						echo "<div class='t-box'>";
						echo "<div class=" . 'timg' . "><img src=" . $rows["hinhanh"] . "></div>";
						echo "<h5 class='pruduct-name'>" . $rows["tenhh"] . "</h5>";
						echo "Giá:<span class='price'>" . $rows["gia"] . " VNĐ</span><br>";
						echo "Màu: <span>" . $rows["mausac"] . "</span><br>";
						echo "Kích thước: <span>" . $rows["kichthuoc"] . "</span>";
						echo "<ul class='social-links'>";
						echo "<li><button class='btn btn-success' href='index.php#'>Thêm vào giỏ hàng</button></li>";
						echo "<li><button class='btn btn-info' data-wow-delay='.1s' class='wow fadeInUp animated' href='index.php#'>Đặt mua</button></li>";
						echo "</ul>";
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
			</div>
		</div>
		<!-- =============== container end =============== -->
	</section>
	<!-- =============== Services =============== -->
	<section id="about" class="">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Đồ thể thao nam</h2>
				</div>
				<?php
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "dbshop";
				$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

				if ($conn->connect_error) {
					die("ket noi that bai:" . $conn->connect_error);
				}

				$getSQL = "SELECT mahh, tenhh, mausac, gia, kichthuoc, loai, ao, quan, hinhanh FROM hanghoa";
				$result = $conn->query($getSQL);


				if ($result->num_rows > 0) {
					echo "<div class='list-pruduct'>";
					while ($rows = $result->fetch_assoc()) {
						echo "<div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>";
						echo "<div class='t-box'>";
						echo "<div class=" . 'timg' . "><img src=" . $rows["hinhanh"] . "></div>";
						echo "<h5 class='pruduct-name'>" . $rows["tenhh"] . "</h5>";
						echo "Giá:<span class='price'>" . $rows["gia"] . " VNĐ</span><br>";
						echo "Màu: <span>" . $rows["mausac"] . "</span><br>";
						echo "Kích thước: <span>" . $rows["kichthuoc"] . "</span>";
						echo "<ul class='social-links'>";
						echo "<li><button class='btn btn-success' href='index.php#'>Thêm vào giỏ hàng</button></li>";
						echo "<li><button class='btn btn-info' data-wow-delay='.1s' class='wow fadeInUp animated' href='index.php#'>Đặt mua</button></li>";
						echo "</ul>";
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
			</div>
		</div>
		<!-- =============== container end =============== -->
	</section>
	<!-- =============== for box =============== -->
	<section id="about" class="">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Đồ thể thao nữ</h2>
				</div>
				<?php
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "dbshop";
				$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

				if ($conn->connect_error) {
					die("ket noi that bai:" . $conn->connect_error);
				}

				$getSQL = "SELECT mahh, tenhh, mausac, gia, kichthuoc, loai, ao, quan, hinhanh FROM hanghoa";
				$result = $conn->query($getSQL);


				if ($result->num_rows > 0) {
					echo "<div class='list-pruduct'>";
					while ($rows = $result->fetch_assoc()) {
						echo "<div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>";
						echo "<div class='t-box'>";
						echo "<div class=" . 'timg' . "><img src=" . $rows["hinhanh"] . "></div>";
						echo "<h5 class='pruduct-name'>" . $rows["tenhh"] . "</h5>";
						echo "Giá:<span class='price'>" . $rows["gia"] . " VNĐ</span><br>";
						echo "Màu: <span>" . $rows["mausac"] . "</span><br>";
						echo "Kích thước: <span>" . $rows["kichthuoc"] . "</span>";
						echo "<ul class='social-links'>";
						echo "<li><button class='btn btn-success' href='index.php#'>Thêm vào giỏ hàng</button></li>";
						echo "<li><button class='btn btn-info' data-wow-delay='.1s' class='wow fadeInUp animated' href='index.php#'>Đặt mua</button></li>";
						echo "</ul>";
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
			</div>
		</div>
		<!-- =============== container end =============== -->
	</section>
	<!-- =============== Counter =============== -->
	<section id="about" class="">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Sản phẩm mới</h2>
				</div>
				<?php
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbname = "dbshop";
				$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

				if ($conn->connect_error) {
					die("ket noi that bai:" . $conn->connect_error);
				}

				$getSQL = "SELECT mahh, tenhh, mausac, gia, kichthuoc, loai, ao, quan, hinhanh FROM hanghoa";
				$result = $conn->query($getSQL);
				if ($result->num_rows > 0) {
					echo "<div class='list-pruduct'>";
					while ($rows = $result->fetch_assoc()) {
						echo "<div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>";
						echo "<div class='t-box'>";
						echo "<div class=" . 'timg' . "><img src=" . $rows["hinhanh"] . "></div>";
						echo "<h5 class='pruduct-name'>" . $rows["tenhh"] . "</h5>";
						echo "Giá:<span class='price'>" . $rows["gia"] . " VNĐ</span><br>";
						echo "Màu: <span>" . $rows["mausac"] . "</span><br>";
						echo "Kích thước: <span>" . $rows["kichthuoc"] . "</span>";
						echo "<ul class='social-links'>";
						echo "<li><button class='btn btn-success btn-add' >Thêm vào giỏ hàng</button></li>";
						echo "<li><button class='btn btn-info' data-wow-delay='.1s' class='wow fadeInUp animated' href='index.php#'>Đặt mua</button></li>";
						echo "</ul>";
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
			</div>
		</div>
		<!-- =============== container end =============== -->
	</section>

	<!-- =============== Gallery =============== -->
	<section id="contact">
		<!-- =============== container =============== -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<img src="./assets/img/banner_2_image.jpg" class="img-footer">
				</div>
			</div><!-- =============== container end =============== -->
	</section>
	<!-- Footer -->
	<?php include "./layout/footer.php" ?>
	<!-- =============== jQuery =============== -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/isotope-docs.min.js"></script>
	<!-- =============== Bootstrap Core JavaScript =============== -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- =============== Plugin JavaScript =============== -->
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/jquery.fittext.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<!-- =============== owl carousel =============== -->
	<script src="assets/owl-carousel/owl.carousel.js"></script>
	<!-- Isotope does NOT require jQuery. But it does make things easier -->

	<script src="assets/js/baguetteBox.js" async></script>
	<script src="assets/js/plugins.js" async></script>

	<!-- =============== Custom Theme JavaScript =============== -->
	<script src="assets/js/creative.js"> </script>
	<script src="assets/js/jquery.nicescroll.min.js"></script>

	<script>
		$(document).ready(function() {

			var nice = $("html").niceScroll(); // The document page (body)

			$("#div1").php($("#div1").php() + ' ' + nice.version);

			$("#boxscroll").niceScroll({
				cursorborder: "",
				cursorcolor: "#00F",
				boxzoom: true
			}); // First scrollable DIV

			$("#boxscroll2").niceScroll("#contentscroll2", {
				cursorcolor: "#F00",
				cursoropacitymax: 0.7,
				boxzoom: true,
				touchbehavior: true
			}); // Second scrollable DIV
			$("#boxframe").niceScroll("#boxscroll3", {
				cursorcolor: "#0F0",
				cursoropacitymax: 0.7,
				boxzoom: true,
				touchbehavior: true
			}); // This is an IFrame (iPad compatible)

			$("#boxscroll4").niceScroll("#boxscroll4 .wrapper", {
				boxzoom: true
			}); // hw acceleration enabled when using wrapper

		});
	</script>
	<script>
		window.onload = function() {
			if (typeof oldIE === 'undefined' && Object.keys)
				hljs.initHighlighting();

			baguetteBox.run('.baguetteBoxOne');
			baguetteBox.run('.baguetteBoxTwo');
			baguetteBox.run('.baguetteBoxThree', {
				animation: 'fadeIn'
			});
			baguetteBox.run('.baguetteBoxFour', {
				buttons: false
			});
			baguetteBox.run('.baguetteBoxFive', {
				captions: function(element) {
					return element.getElementsByTagName('img')[0].alt;
				}
			
			});
		};
		$('.btn-add').click(function() {
			window.location.href = 'pages/handleaddcart.php';
			return false;
		});

		$('.btn-buy').click(function() {
			window.location.href = 'pages/cart.php';
			return false;
		});
	</script>
</body>

</html>