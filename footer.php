<div class="recent-view-product">
	<div class="container">
		<div class="list-product product-category recent-view-product text-center">
			<div class="list-product-title">
				<h2>Sản phẩm xem gần đây</h2>
			</div>
			<div class="row list-product-item">
				<?php for($i = 1; $i <= 9; $i ++): ?>
					<div class="product-item">
						<div class="product-item-wrap">
							<div class="product-image position-relative">
								<a href="#">
									<img src="<?= './images/sp_' . $i . '.png' ?>">
								</a>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row subscribe-social">
			<div class="col-sm-8 footer-subscribe">
				<form class="subscribe-form">
					<div class="row">
						<label class="col-sm-3">Nhận bản tin</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nhập email nhận bản tin khuyến mại...">
						</div>
						<div class="col-sm-3">
							<button class="btn">Đăng Ký</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-4 social-footer">
				<div class="float-right">
					<span>Kết nối với chúng tôi</span>
					<a href="#" target="_blank" class="social-footer-item facebook">
						<i class="ion-social-facebook"></i>
					</a>
					<a href="#" target="_blank"  class="social-footer-item google-plus">
						<i class="ion-social-googleplus"></i>
					</a>
					<a href="#" target="_blank"  class="social-footer-item youtube">
						<i class="ion-social-youtube"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="row menu-footer">
			<div class="col-sm-2 footer-item">
				<h4 class="footer-title">COMPANY</h4>
				<ul class="nav">
					<li class="nav-item">
						<a href="#">Về chúng tôi</a>
					</li>
					<li class="nav-item">
						<a href="#">Địa chỉ Company</a>
					</li>
					<li class="nav-item">
						<a href="#">Tuyến dụng</a>
					</li>
					<li class="nav-item">
						<a href="#">Thẻ thành viên</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-3 footer-item">
				<h4 class="footer-title">Chính Sách & Quy Định</h4>
				<ul class="nav">
					<li class="nav-item">
						<a href="#">Chính sách bảo mật</a>
					</li>
					<li class="nav-item">
						<a href="#">Chính sách vận chuyển</a>
					</li>
					<li class="nav-item">
						<a href="#">Chính sách bảo hành</a>
					</li>
					<li class="nav-item">
						<a href="#">Chính sách đổi, trả hàng</a>
					</li>
					<li class="nav-item">
						<a href="#">Quy định thanh toán</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-3 footer-item">
				<h4 class="footer-title">Hướng Dẫn Sử Dụng</h4>
				<ul class="nav">
					<li class="nav-item">
						<a href="#">Hướng dẫn mua hàng</a>
					</li>
					<li class="nav-item">
						<a href="#">Hướng dẫn thanh toán</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-4 footer-item">
				<h4 class="footer-title">Thông Tin Liên Hệ</h4>
				<div class="footer-item-content">
					<p><i class="ion-ios-telephone"></i>Tổng đài bán hàng (8:15 - 18:00): 1900.6619, hoặc: 0904.881169</p>
					<p><i class="ion-ios-email"></i>online@ngonbore.vn</p>
					<p><i class="ion-ios-telephone"></i>Tổng đài CSKH (8:15 - 21:30) 1900.6699</p>
					<p><i class="ion-ios-email"></i>chamsockhachhang@ngonbore.vn</p>
				</div>
			</div>
		</div>
		<div class="row copyright-register position-relative">
			<div class="col-sm-8 copyright">
				<p>© Công ty Cổ phần NavaTech. Văn phòng: Hoàng Quốc Việt, Cầu Giấy, Hà Nội.</p>
				<p>GPĐKKD số 0123456789 sở KHĐT Tp. Hà Nội cấp ngày 25/08/2006. Đăng ký thay đổi lần thứ: 24, ngày 17/06/2016</p>
			</div>
			<div class="col-sm-4 register text-right">
				<a href="#" target="_blank">
					<i class="bg-icon bg-icon_register"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<div id="fb-root"></div>
<script src="./js/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<!--<script src="./js/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="./js/jquery.fancybox-1.3.4.pack.js"></script>-->
<script src="./js/jquery.colorbox-min.js"></script>
<script src="./js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="./js/jquery.barrating.min.js"></script>
<script src="./js/custom.js"></script>
</body>
</html>
