<?php include('header.php'); ?>
<div class="main-content">
	<div class="container">
		<div class="image-page">
			<img src="images/banner_category.jpg">
		</div>
		<div class="row">
			<div class="col-sm-2 sidebar">
				<div class="category-menu sidebar-item">
					<h3><i class="ion-navicon"></i> Danh mục sản phảm</h3>
					<ul class="nav">
						<li class="nav-item active"><a href="#">Thiết bị điện tử</a></li>
						<li class="nav-item"><a href="#">Phụ kiện điện tử</a></li>
						<li class="nav-item"><a href="#">Thiết bị gia dụng</a></li>
						<li class="nav-item"><a href="#">Chăm sóc sức khỏe</a></li>
						<li class="nav-item"><a href="#">Làm đẹp</a></li>
						<li class="nav-item"><a href="#">Hàng Mẹ, Bé và Đồ chơi</a></li>
						<li class="nav-item"><a href="#">Siêu thị / Tạp hóa</a></li>
						<li class="nav-item"><a href="#">Hàng Gia dụng và Đời sống</a></li>
						<li class="nav-item"><a href="#">Thời trang nữ</a></li>
						<li class="nav-item"><a href="#">Thời trang Nam</a></li>
						<li class="nav-item"><a href="#">Phụ Kiện Thời Trang</a></li>
						<li class="nav-item"><a href="#">Thể thao, Du lịch</a></li>
						<li class="nav-item"><a href="#">Ôtô, Xe máy Thiết bị định vị</a></li>
					</ul>
				</div>
				<div class="filter-price sidebar-item">
					<h3>Khoảng giá</h3>
					<div class="filter-custom-price">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Từ">
							<div class="input-group-prepend">
								<span class="input-group-text" id="">-</span>
							</div>
							<input type="text" class="form-control" placeholder="Đến">
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active"><a href="#">0.000 Đ - 200.000 Đ</a></li>
						<li class="nav-item"><a href="#">200.000 Đ - 1 Triệu</a></li>
						<li class="nav-item"><a href="#">1 Triệu - 3 Triệu</a></li>
						<li class="nav-item"><a href="#">3 Triệu - 5 Triệu</a></li>
						<li class="nav-item"><a href="#">5 Triệu - 10 Triệu</a></li>
						<li class="nav-item"><a href="#"> > 10 Triệu</a></li>
					</ul>
				</div>
				<div class="sidebar-item sidebar-ads">
					<a href="#">
						<img src="images/ads-sidebar.png" alt="ads">
					</a>
				</div>
			</div>
			<div class="col-sm-10 right-content-page">
				<div class="filter-sort-product">
					<ul class="filter-product float-left">
						<li class="active">
							<a href="#">Mới nhất</a>
						</li>
						<li>
							<a href="#">Bán chạy</a>
						</li>
					</ul>
					<div class="sort-product float-right">
						<select>
							<option>Giá thấp đến cao</option>
							<option>Giá cao đến thấp</option>
						</select>
					</div>
				</div>
				<div class="row product-cat">
					<?php for($i = 1; $i <= 12; $i ++): ?>
						<div class="product-item-cat">
							<div class="product-item-wrap">
								<div class="product-image position-relative">
									<a href="/details.php">
										<img src="<?= './images/sp_' . $i . '.png' ?>">
									</a>
									<div class="time-price">
										<span class="suggest-count float-left">số lượt đề xuất</span>
										<span class="price float-right">50</span>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3 class="product-title"><a href="/details.php">Giày nữ nhập khẩu cao cấp chất liệu da bền, chống nước, chống nhăn</a></h3>
								<div class="origin">Xuất xứ: Hàn Quốc</div>
								<div class="product-price">550.000 Đ</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<div class="list-paging text-center">
					<ul>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
