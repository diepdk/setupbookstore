<?php 
include_once('views/layouts/partial/header.php');
$themeUrl = 'views/web';
?>
<div class="wapper bg-ed" id="main">
	<div class="clearfix"></div>
	<div class="content-order">
		<div class="crumb-fiter">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li>
							<a href="#"><img src="<?= $themeUrl ?>/images/ic-home.png" alt=""></a>

						</li>
						<li>
							<a href="#">Order</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="container">
			<div class="title-order">
				<h2> MUA HÀNG</h2>
			</div>
			<div class="wap-order">
				<form action="?mod=home&act=submit_order" method="POST">
					<div class="form-order">
						<div class="title-form">
							<h2>THÔNG TIN THANH TOÁN</h2>
							<p> Quý khách vui lòng điền thông tin thanh toán hoặc <a href="#"> đăng nhập</a> để tiếp tục đặt hàng </p>
						</div>
						<div class="item-input">
							<label for="">
								Họ và tên <span> *</span>
							</label>
							<input type="text" required name="full_name" placeholder="Vui lòng nhập họ và tên">
						</div>
						<div class="gr-item">
							<div class="input-email">
								<label for="">
									E-mail<span> *</span>
								</label>
								<input type="email" required name="email" placeholder="Vui lòng nhập e-mail">
							</div>
						</div>
						<div class="item-input">
							<label for="">
								Địa chỉ<span> *</span>
							</label>
							<input type="text" required name="address" placeholder="Vui lòng nhập địa chỉ giao hàng">
						</div>
						<div class="item-input">
							<label for="">
								Ghi chú đơn hàng<span> *</span>
							</label>
							<textarea name="status"  rows="" placeholder="Vui lòng nhập ghi chú đơn hàng"></textarea>
						</div>
					</div>
					<div class="dathang">
						<div class="title-dathang">
							<h2>ĐƠN HÀNG CỦA BẠN </h2>
						</div>
						<table>
							<thead>
								<tr>
									<th>
										SẢN PHẨM
									</th>
									<th>
										TỔNG
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if(isset($_SESSION['cart'])){
									$total = 0;
									?>
									<?php foreach ($_SESSION['cart'] as $key => $item) {
										if($item['qty'] > 0){
											?>
											<tr>
												<td>
													<img src="<?php echo  $item['imgUrl'] ?>">
													<span class="name-product">
														<?php echo  $item['name_item'] ?> x <?php echo  $item['qty'] ?>
													</span>
												</td>
												<td>
													<span class="money">
														<?php 
														echo $total_item = $item['qty']*$item['price'] ; 
														?>
													</span>
												</td>
											</tr>
											<?php $total += $total_item ;
										}
									} ?>
								<?php } ?>
								<tr>
									<td>
										Tổng
									</td>
									<td>
										<span class="money">
											<?php echo $total ?>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="btn-submit">
							<button class="submit" name="submit_order">
								Thanh toán
							</button>
						</div>
						<div class="tt-muasp">
							<button class="continue" type="submit">
								<a href="/bookstore/frontend/" class="" name="yt0">Tiếp tục mua sắm</a>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<?php
include_once('views/layouts/partial/footer.php'); 
?>