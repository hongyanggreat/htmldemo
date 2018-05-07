<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Ngon Bổ Rẻ</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/ionicons.min.css">
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/jquery.bxslider.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
<div class="header">
	<div class="container">
		<div class="top-header clearfix">
			<div class="float-left social-header">
				Kết nối với chúng tôi
				<a href="#" target="_blank">
					<i class="ion-social-facebook"></i>
				</a>
				<a href="#" target="_blank">
					<i class="ion-social-youtube"></i>
				</a>
			</div>
			<div class="float-right">
				<a href="#">
					<i class="ion-ios-bell"></i>
					<span>Thông báo</span>
				</a>
				<a href="#">
					<i class="ion-help-buoy"></i>
					<span>Trợ giúp</span>
				</a>
				<a href="javascript:void(0)" data-toggle="modal" data-target="#login">
					<i class="ion-log-in"></i>
					<span>Đăng nhập</span>
				</a>
			</div>
		</div>
		<div class="row header-content">
			<div class="col-sm-3 logo">
				<a href="index.php">
					<img src="./images/logo.png" class="img-fluid" alt="logo">
				</a>
			</div>
			<div class="col-sm-9 top-search">
				<form class="float-left">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Tìm sản phẩm, thương hiệu..." aria-label="" aria-describedby="basic-addon1">
						<div class="input-group-prepend">
							<button class="btn btn-outline-secondary" type="button">
								<i class="ion-ios-search-strong"></i></button>
						</div>
					</div>
					<div class="example-search">
						<span>quần áo</span><span>giày nữ</span><span>túi xách</span><span>son dưỡng</span><span>mỹ phẩm</span><span>đồ gia dụng </span><span>văn phòng phẩm </span><span>ví nam </span><span>giày da</span><span>đồ trang trí</span><span>đồ chơi trẻ em</span>
					</div>
				</form>
				<div class="list-cart float-right">
					<a href="javascript:void()" class="position-relative">
						<i class="ion-ios-cart"></i>
						<span class="badge badge-default">7</span>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="main-menu">
	<div class="container">
		<ul class="nav navbar">
			<li class="nav-item active">
				<a href="index.php">Trang chủ</a>
			</li>
			<li class="nav-item">
				<a href="category.php">Sản phẩm</a>
			</li>
			<li class="nav-item">
				<a href="#">TOP Đấu giá</a>
			</li>
			<li class="nav-item">
				<a href="#">TOP Đề xuất </a>
			</li>
			<li class="nav-item">
				<a href="#">Khuyến mãi</a>
			</li>
			<li class="nav-item">
				<a href="#">Liên hệ</a>
			</li>
		</ul>
	</div>
</div>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login title" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header position-relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<ul class="nav nav-tabs" role="tablist">
					<li><a href="#login-form" role="tab" data-toggle="tab" class="active font-consider">Đăng nhập</a></li>
					<li class="text-right"><a href="#register-form" role="tab" data-toggle="tab" class="font-consider">Đăng ký</a></li>
				</ul>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div class="active tab-pane fade in active show" id="login-form">
						<form class="login-form">
							<div class="form-group">
								<label>Tên đăng nhập</label>
								<input class="form-control" placeholder="Tên đăng nhập">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" class="form-control" placeholder="Mật khẩu">
							</div>
							<div class="form-group">
								<label>Vui lòng nhập số</label>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Vui lòng nhập số">
									<div class="input-group-append">
										<img class="input-group-text" src="images/capcha.png">
									</div>
								</div>
							</div>
							<button type="submit" class="btn font-consider form-control">Đăng nhập</button>
							<button class="form-control btn font-consider login-facebook">Tiếp tục với Facebook</button>
						</form>
					</div>
					<div class="tab-pane fade" id="register-form">
						<form class="login-form">
							<div class="form-group">
								<label>Tên đăng nhập</label>
								<input class="form-control" placeholder="Tên đăng nhập">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" class="form-control" placeholder="Mật khẩu">
							</div>
							<div class="form-group">
								<label>Xác nhận mật khẩu</label>
								<input type="password" class="form-control" placeholder="Xác nhận mật khẩu">
							</div>
							<div class="form-group">
								<label>Vui lòng nhập số</label>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Vui lòng nhập số">
									<div class="input-group-append">
										<img class="input-group-text" src="images/capcha.png">
									</div>
								</div>
							</div>
							<button type="submit" class="btn font-consider form-control">Đăng nhập</button>
							<div class="policy text-center">
								<p>Bằng việc đăng kí, bạn đã đồng ý với chúng tôi về </p>
								<a href="#">Điều khoản dịch vụ & Chính sách bảo mật</a>
							</div>
							<button class="form-control btn font-consider login-facebook">Tiếp tục với Facebook</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

