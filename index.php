<?php include('header.php'); ?>
<div class="main-content">
	<div class="container">
		<div class="slider">
			<div class="row">
				<div class="col-sm-9 home-slider">
					<div id="home-slider" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/slider_1.png" alt="slider1">
							</div>
							<div class="carousel-item">
								<img src="images/slider_2.png" alt="slider1">
							</div>
						</div>
						<div class="carousel-control">
							<a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
								<span class="ion-chevron-left" aria-hidden="true"></span>
							</a>
							<a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
								<span class="ion-chevron-right" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-3 list-event">
					<?php for($i = 1; $i <= 4; $i ++): ?>
						<a href="#" class="event-item">
							<img src="<?= 'images/ads_' . $i . '.png' ?>">
						</a>
					<?php endfor; ?>
				</div>
			</div>

		</div>
		<div class="list-product hot-trader">
			<div class="list-product-title">
				<h2 class="float-left"><i class="bg-icon bg-icon_hot"></i>Đấu Giá Hot</h2>
				<a class="read-more float-right" href="#">Xem thêm
					<i class="ion-ios-arrow-forward"></i><i class="ion-ios-arrow-forward"></i></a>
			</div>
			<div class="row list-product-item">
				<?php for($i = 1; $i <= 12; $i ++): ?>
					<div class="col-md-2 col-sm-3 col-xs-6 product-item">
						<div class="product-item-wrap">
							<div class="product-image position-relative">
								<a href="daugia_details.php">
									<img src="<?= 'images/sp_' . $i . '.png' ?>" alt="san pham">
								</a>
								<div class="time-price">
									<span class="time float-left">1:00:00</span>
									<span class="price float-right">50K</span>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="daugia_details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
							<div class="origin">Xuất xứ: Hàn Quốc</div>
							<a href="daugia_details.php" class="trader-button">
								<i class="bg-icon bg-icon_trader"></i>
								Đấu Giá Ngay
							</a>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="advertising">
			<a href="#">
				<img src="images/ads_large.png" alt="ads">
			</a>
		</div>
		<div class="list-product suggest-trader">
			<div class="list-product-title">
				<h2 class="float-left"><i class="bg-icon bg-icon_suggest"></i>Đề xuất đấu giá</h2>
			</div>
			<div class="slider-list-product position-relative">
				<div class="owl-carousel owl-theme">
					<?php for($i = 1; $i <= 12; $i ++): ?>
						<div class="item product-item">
							<div class="product-item-wrap">
								<div class="product-image position-relative">
									<a href="details.php">
										<img src="<?= 'images/sp_' . $i . '.png' ?>" alt="san pham">
									</a>
									<div class="time-price">
										<span class="suggest-count float-left">số lượt đề xuất</span>
										<span class="price float-right">50</span>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3 class="product-title"><a href="details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
								<div class="origin">Xuất xứ: Hàn Quốc</div>
								<a href="details.php" class="trader-button">
									<i class="ion-android-checkmark-circle"></i>
									Đề Xuất Ngay
								</a>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="list-product product-category">
			<div class="list-product-title">
				<h2 class="float-left">Văn phòng phẩm</h2>
				<a class="read-more float-right" href="category.php">Xem thêm
					<i class="ion-ios-arrow-forward"></i><i class="ion-ios-arrow-forward"></i></a>
			</div>
			<div class="row list-product-item">
				<?php for($i = 1; $i <= 6; $i ++): ?>
					<div class="col-md-2 col-sm-3 col-xs-6 product-item">
						<div class="product-item-wrap">
							<div class="product-image position-relative">
								<a href="details.php">
									<img src="<?= 'images/sp_' . $i . '.png' ?>" alt="san pham">
								</a>
								<div class="time-price">
									<span class="suggest-count float-left">số lượt đề xuất</span>
									<span class="price float-right">50</span>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
							<div class="origin">Xuất xứ: Hàn Quốc</div>
							<div class="product-price">550.000 Đ</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="advertising">
			<a href="#">
				<img src="images/ads_large.png" alt="ads">
			</a>
		</div>
		<div class="list-product product-category">
			<div class="list-product-title">
				<h2 class="float-left">Đồ gia dụng</h2>
				<a class="read-more float-right" href="category.php">Xem thêm
					<i class="ion-ios-arrow-forward"></i><i class="ion-ios-arrow-forward"></i></a>
			</div>
			<div class="row list-product-item">
				<?php for($i = 1; $i <= 6; $i ++): ?>
					<div class="col-md-2 col-sm-3 col-xs-6 product-item">
						<div class="product-item-wrap">
							<div class="product-image position-relative">
								<a href="details.php">
									<img src="<?= 'images/sp_' . $i . '.png' ?>" alt="san pham">
								</a>
								<div class="time-price">
									<span class="suggest-count float-left">số lượt đề xuất</span>
									<span class="price float-right">50</span>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
							<div class="origin">Xuất xứ: Hàn Quốc</div>
							<div class="product-price">550.000 Đ</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="list-product product-category">
			<div class="list-product-title">
				<h2 class="float-left">Đồ trang trí</h2>
				<a class="read-more float-right" href="category.php">Xem thêm
					<i class="ion-ios-arrow-forward"></i><i class="ion-ios-arrow-forward"></i></a>
			</div>
			<div class="row list-product-item">
				<?php for($i = 1; $i <= 6; $i ++): ?>
					<div class="col-md-2 col-sm-3 col-xs-6 product-item">
						<div class="product-item-wrap">
							<div class="product-image position-relative">
								<a href="details.php">
									<img src="<?= 'images/sp_' . $i . '.png' ?>" alt="san pham">
								</a>
								<div class="time-price">
									<span class="suggest-count float-left">số lượt đề xuất</span>
									<span class="price float-right">50</span>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
							<div class="origin">Xuất xứ: Hàn Quốc</div>
							<div class="product-price">550.000 Đ</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
