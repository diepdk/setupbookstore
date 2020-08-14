<?php 
include_once('views/layouts/partial/header.php');
$themeUrl = 'views/web';
?>
<div class="content-order">
	<div class="crumb-fiter">
		<div class="container">
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="#"><img src="<?= $themeUrl ?>/images/ic-home.png" alt=""></a>

					</li>
					<li>
						<a href="#">success</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="wap-order-success">
			<div class="img">
				<img src="<?= $themeUrl ?>/images/success.png" alt="">
			</div>
			<div class="text-success">
				<h2>Đặt hàng thành công</h2>
				<p>Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi</p>
				<span>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!</span>
			</div>
			<div class="btn-control">
				<div class="go-back">
					<a href="/bookstore/frontend/"> Quay lại trang chủ</a>
				</div>
				<div class="tt-muahang">
					<a href="/bookstore/frontend/">
						Tiếp tục mua sắm
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php
include_once('views/layouts/partial/footer.php'); 
?>