<?php 
// include_once('views/layouts/partial/header.php');
$themeUrl = 'views/web';
session_start();
?>
<?php $themeUrl = 'views/web'?>
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
					<form action="">
						<input type="text" placeholder="tìm kiếm hàng nghìn sản phẩm, thương hiệu ...">
						<button class="btn-submit"></button>
					</form>
				</div>
				<div class="btn-show-search search-icon">
					<i class="fa fa-search"></i>
					<span>tìm kiếm</span>
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
<?php 
include_once('models/Product.php');
$product = new Product();
$id = $_GET['id'];
$item = $product->get_item($id);
// var_dump($item);
?>
<div class="wapper bg-ed" id="main">
	<div class="clearfix"></div>
	<div class="crumb-fiter">
		<div class="container">
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="#"><img src="<?= $themeUrl ?>/images/ic-home.png" alt=""></a>

					</li>
					<li>
						<a href="#">Chi tiết sản phẩm</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php foreach ($item as $product) { ?>
		<div class="product-page">
			<div class="detail-product-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="img-detail-product">
								<div class="app-figure" id="zoom-fig">
									<div class="big-img">
										<a id="Zoom-1" class="MagicZoom" data-options="selectorTrigger: hover; transitionEffect: false;zoomDistance: 20;zoomWidth:520px; zoomHeight:500px;variableZoom: true" title="Show your product in stunning detail with Magic Zoom Plus." href="images/bigimg.jpg" >
											<img src="<?php echo $product['url'] ?>" alt=""/>
										</a>
									</div>
									<div class="thumb-img">
										<div id="owl-detail" class="selectors">
											<a data-zoom-id="Zoom-1" href="<?php echo $product['url'] ?>" data-image="<?php echo $product['url'] ?>" >
												<img src="<?php echo $product['url'] ?>"/>
											</a>
											<a data-zoom-id="Zoom-1" href="<?php echo $product['url'] ?>" data-image="images/sm-product.jpg" >
												<img src="<?php echo $product['url'] ?>"/>
											</a>
											<a data-zoom-id="Zoom-1" href="<?php echo $product['url'] ?>" data-image="<?php echo $product['url'] ?>" >
												<img src="<?php echo $product['url'] ?>"/>
											</a>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<div class="title-detail-product">
								<div class="name-product">
									<h2><?php echo $product['name_item'] ?></h2>
									<div class="desc-name">
										<div class="code-product">
											<span>Mã sản phẩm: <a href="javascript:void(0)"><?php echo $product['id'] ?></a></span>
										</div>
										<div class="madein">
											<span>Hãng sản xuất:   <a href="#"><?php echo $product['manufacturer'] ?></a></span>
										</div>
									</div>
								</div>
								<div class="info-product">
									<div class="info-product-left">
										<div class="attr-product">
											<div class="star-status">
												<div class="star">
													<span>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</span>
													<br>
													<span class="total-star">(100 đánh giá)</span>
												</div>
												<span class="status"> Tình trạng: <a href="#"> Còn hàng</a> </span>
											</div>
											<div class="price-all">
												<span class="price">Giá:<b><?php echo $product['price'] ?></b></span>
												<span class="price-market"><?php echo $product['price_maket'] ?></span>
												<span class="tietkiem">Tiết kiệm: <b>-<?= 100-(int)(((int)$product['price']*100)/((int)$product['price_maket']));?>%</b> ( <?= (int)$product['price_maket'] - (int)$product['price']?> )</span>
											</div>
											<div class="gr-icon-product">
												<span>Số Lượng</span>
												<span class="gr-icon">
													<span class="plus">+</span>
													<input type="text" value="1" id="qty" name="qty">
													<span class="minus">-</span>
												</span>
											</div>
										</div>
										<div class="all-attr">
											<div class="com-x">
												<div class="buy-now">
													<a href="javascript:void(0)" onclick="addCart(<?php echo $product['id']; ?>)" >MUA NGAY</a>
												</div>
												<div class="add-cart">
													<img src="<?= $themeUrl ?>/images/ic-cart-white.png" alt="">
													<a href="javascript:void(0)" onclick="addCart(<?php echo $product['id']; ?>)" >THÊM VÀO GIỎ</a>
												</div>
											</div>
										</div>
										<div class="uu-dai">
											<p>DỊCH VỤ & KHUYẾN MÃI LIÊN QUAN</p>
											<span>Thời gian và phí giao hàng sẽ được ước tính khi đặt hàng. Xem chính sách giao hàng <a href="#">tại đây</a>.</span>
										</div>
									</div>
									<div class="info-product-right">
										<div class="box-contact">
											<div class="item-contact">
												<div class="img">
													<img src="<?= $themeUrl ?>/images/ic-phone.png" alt="">
												</div>
												<div class="text-item-contact">
													<p>Liên hệ </p>
													<span>Hotline 0968.222.565 </span>
												</div>
											</div>
											<div class="item-contact">
												<div class="img">
													<img src="<?= $themeUrl ?>/images/ic-mail.png" alt="">
												</div>
												<div class="text-item-contact">
													<p> E-mail  </p>
													<span>ngocdang2712@gmail.com</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="infomation-detail">
						<div class="title-infomation-detail">
							<h2>Mô tả sản phẩm</h2>
						</div>
						<div class="infomation-detail-content">
							<?= $product['item_desc']; ?>
						</div>
					</div>
					<div class="reviw-customer">
						<div class="title-reviw-custome">
							<span>Đánh giá</span>
							<small>(2 đánh giá)</small>

						</div>
						<div class="btn-review">
							<a href="javascript:void(0)">Viết đánh giá</a>
						</div>

						<div class="form-review">
							<form action="">
								<h2>Viết đánh giá mới</h2>
								<div class="input-review">
									<label for="">Tên</label>
									<input type="text" placeholder="Tên của bạn">
								</div>
								<div class="input-review">
									<label for="">Email</label>
									<input type="email" placeholder="johnsmith@example.com">
								</div>
								<div class="danhgia">
									<label for="">Đánh giá</label>
									<span>
										<i class="active fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</div>
								<div class="input-review">
									<label for="">Tiêu đề</label>
									<input type="text" placeholder="Hãy nhập một tiêu đề">
								</div>
								<div class="input-review">
									<label for="">Nội dung</label>
									<textarea placeholder="Viết nội dung đánh giá tại đây"></textarea>
								</div>
								<div class="btn-submit-review">
									<a href="#">Gửi</a>
								</div>
							</form>
						</div>
						<div class="total-comment">
							<div class="item-user-comment">
								<div class="danhgia">
									<span>
										<i class="active fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</div>
								<div class="user">
									<span><b>Tốt </b>- Việt Lê - 23/11/2017 14:12:51 </span>
									<p>Mình bị quầng thâm ở mắt, miệng rất nhanh hôi, lợi hay bị viêm. Mình có đặt mua 3 lọ detoxic, nhưng uống không đều. Sau 1 lọ đầu thấy mắt bớt nhức mỏi hơn, quầng thâm ở mắt chưa mất nhưng đỡ thâm hơn trước. Hiệu quả nhất là không bị hôi miệng và viêm lợi. sp tốt</p>
								</div>
							</div>
							<div class="item-user-comment">
								<div class="danhgia">
									<span>
										<i class="active fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</div>
								<div class="user">
									<span><b>Tốt </b>- Việt Lê - 23/11/2017 14:12:51 </span>
									<p>Mình bị quầng thâm ở mắt, miệng rất nhanh hôi, lợi hay bị viêm. Mình có đặt mua 3 lọ detoxic, nhưng uống không đều. Sau 1 lọ đầu thấy mắt bớt nhức mỏi hơn, quầng thâm ở mắt chưa mất nhưng đỡ thâm hơn trước. Hiệu quả nhất là không bị hôi miệng và viêm lợi. sp tốt</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="partner">
		<div class="container">
			<div class="list-partner">
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner1.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner2.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner3.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner4.png" alt="">
				</div>
				<div class="item-partner">
					<img src="images/partner5.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner1.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner1.png" alt="">
				</div>
				<div class="item-partner">
					<img src="<?= $themeUrl ?>/images/partner1.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="modal" tabindex="-1" role="dialog" id="showSS">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông báo thành công</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sản phẩm đã được thêm  vào giỏ hàng </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
include_once('views/layouts/partial/footer.php'); 
?>
