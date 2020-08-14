<?php 
$themeUrl = 'views/web'?>
<!doctype html>
<html lang="en">
<head>
	<title>trang chủ</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="<?= $themeUrl ?>/css/vensdor/plugin.css">
	<link rel="stylesheet" href="<?= $themeUrl ?>/css/vensdor/slick.css">
	<link rel="stylesheet" href="<?= $themeUrl ?>/css/style.css">
	<link rel="stylesheet" href="<?= $themeUrl ?>/css/fix.css">
</head>
<body>
	<?php if(isset($_SESSION['cart'])){
		$total_item = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$total_item += $value['qty'];
		}
	}else{
		$total_item = 0;
	}
	?>
	<div class="menu-bar-mobile" tabindex="-1">
		<div class="logo-menu">
			<a href=""><img class="transition" src="images/logo.png"></a>
		</div>
		<div class="box-login-logout">
			<div class="left">
				<a href=""><i class="fa fa-lock" aria-hidden="true"></i>đăng nhập</a>
			</div>
			<div class="left">
				<a href=""><i class="fa fa-key" aria-hidden="true"></i>đăng ký</a>
			</div>
			<span class="boder-rotate"></span>
		</div>
		<div class="menu-bar-lv-1">
			<a class="a-lv-1" href="">chọn giao diện</a>
			<div class="menu-bar-lv-2">
				<a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>bảng giá</a>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>bảng giá</a>
				</div>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>dịch vụ</a>
				</div>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>blog</a>
				</div>
				<span class="span-lv-2 fa fa-angle-down"></span>
			</div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>bảng giá</a></div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>dịch vụ</a></div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>blog</a></div>
			<span class="span-lv-1 fa fa-angle-down"></span>
		</div>
		<div class="menu-bar-lv-1"><a href="">bảng giá</a></div>
		<div class="menu-bar-lv-1"><a href="">dịch vụ</a></div>
		<div class="menu-bar-lv-1">
			<a class="a-lv-1" href="">tin tức</a>
			<div class="menu-bar-lv-2">
				<a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>bảng giá</a>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>bảng giá</a>
				</div>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>dịch vụ</a>
				</div>
				<div class="menu-bar-lv-3">
					<a class="a-lv-3" href=""><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>tin tức</a>
				</div>
				<span class="span-lv-2 fa fa-angle-down"></span>
			</div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>bảng giá</a></div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>dịch vụ</a></div>
			<div class="menu-bar-lv-2"><a class="a-lv-2" href=""><i class="fa fa-angle-right"></i>blog</a></div>
			<span class="span-lv-1 fa fa-angle-down"></span>
		</div>
		<div class="menu-bar-lv-1"><a href="">về chúng tôi</a></div>
		<div class="menu-bar-lv-1"><a href="">hỗ trợ</a></div>
	</div>
	<div class="shadow-open-menu"></div>
	<div class="header">
		<div class="box-search-show">
			<form method="get" action="/tim-kiem.html?t=1" class="searchform" role="search">
				<div class="close">x</div>
				<input type="text" class="form-control" name="q" placeholder="tìm kiếm tin bài..." autocomplete="off" value="">
				<button><i class="fa fa-search"></i></button>
			</form>
		</div>
		<div class="top-header">
			<div class="container">
				<div class="content-top-header container">
					<div class="title-top-header">
						<h1>Hệ thống phân phối độc quyền sách, cung cấp đầy đủ các đầu sách </h1>
						<span>chuyên cung cấp các sản phẩm chất lượng đến cộng đồng</span>
					</div>
					<div class="sales-consultant">
						<a href="#">Tư vấn bán hàng: 0373 256 298</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container">
				<div class="logo">
					<div class="img">
						<a href="/bookstore/frontend"><img src="<?= $themeUrl ?>/images/logo.png" alt=""></a>
					</div>
				</div>
				<div class="search-box">
					<form action="" method="get">
						<input type="text" name="keyword" placeholder="Tìm kiếm hàng nghìn sản phẩm, thương hiệu ...">
						<button class="btn-submit" name="search-keyword" value="Tìm kiếm"></button>
					</form>
				</div>
				<div class="btn-show-search search-icon">
					<i class="fa fa-search"></i>
					<span>Tìm kiếm</span>
				</div>
				<div class="right-main-header">
					<div class="shoping-cart-index">
						<div class="img">
							<a href="/bookstore/frontend/?mod=home&act=cart"><img src="<?= $themeUrl ?>/images/ic-cart.png" alt=""></a>

							<span id="total_item"><?php echo $total_item ?></span>

						</div>
					</div>
					<div class="login">
						<div class="icon-user">
							<img src="<?= $themeUrl ?>/images/icon-user.png" alt="">
						</div>
						<div class="text-login">
							<?php if(isset($_SESSION['user'])){ ?>
								<span><?php echo $_SESSION['user'] ?></span>
								<?php } else {?>
							<span>Đăng nhập/đăng ký</span>
						<?php } ?>
						</div>
						<?php if(!isset($_SESSION['user'])){ ?>
						<div class="box-login ">
							<div class="log-res">
								<div class="btn-login">
									<a href="javascript:void(0)">Đăng nhập</a>
								</div>
								<div class="btn-register">
									<a href="javascript:void(0)">Tạo tài khoản</a>
								</div>
							</div>
							<div class="login-or">
								<span>hoặc đăng nhập bằng</span>
							</div>
							<div class="public">
								<div class="login-fb">
									<div class="img"><img src="<?= $themeUrl ?>/images/icon-fb.png" alt=""></div>
									<a href="#"> Đăng nhập bằng facebook</a>
								</div>
								<div class="login-ggp">
									<div class="img"><img src="<?= $themeUrl ?>/images/icon-gmail.png" alt=""></div>
									<a href="#"> Đăng nhập bằng facebook</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="language">
						<a href="#"><img src="<?= $themeUrl ?>/images/vn.png" alt=""></a>
						<a href="#"><img src="<?= $themeUrl ?>/images/us.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="category ">
		<div class="container">
			<div class="icon-category">
				<span>Danh mục sản phẩm</span>
				<img src="<?= $themeUrl ?>/icon-category.png" alt="">
				<div class="menu-item">
					<ul>
						<?php foreach ($categorys as $cat) { ?>
							<li>
							<a href="#"><?php echo $cat['name_cat']; ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="category-right">
				<div class="shop"><span>shop </span></div>
				<div class="blog"><span>blog</span></div>
			</div>
		</div>
	</div>