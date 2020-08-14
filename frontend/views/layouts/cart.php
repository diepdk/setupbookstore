<?php 
include_once('views/layouts/partial/header.php');
$themeUrl = 'views/web';
?>
<div class="wapper bg-ed" id="main">
	<div class="content-order">
		<div class="crumb-fiter">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li>
							<a href="/bookstore/frontend/"><img src="<?= $themeUrl ?>/images/ic-home.png" alt=""></a>

						</li>
						<li>
							<a href="#">Giỏ hàng</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="container">
			<div class="wap-cart" >
				<div class="title-cart">
					<span>GIỎ HÀNG</span>
				</div>
				<?php if(isset($_SESSION['cart'])){
					$total = 0;
					?>
					<div id="listCart">
						<div class="table-cart" id="detailCart" >
							<table cellpadding="0" >
								<thead>
									<tr>
										<th colspan="2">
											Sản phẩm
										</th>
										<th>
											Giá
										</th>
										<th>
											Số lượng
										</th>
										<th>
											Tổng
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($_SESSION['cart'] as $key => $item) {
										if($item['qty'] > 0){
											?>
											<tr class="item-cart" id="item-cart_<?php echo $key; ?>" style="border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
												<td class="img-product">
													<a href="javascript:void(0)"  onclick="deleteItemCart(<?php echo $key; ?>)">
														<img src="<?= $themeUrl ?>/images/ic-close.png" alt="">
													</a>
													<a href="#">
														<img src="<?php echo  $item['imgUrl'] ?>">
													</a>
												</td>
												<td class="name-product">
													<?php echo  $item['name_item'] ?>
												</td>
												<td class="price">
													<?php echo  $item['price'] ?>
												</td>
												<td class="amount">
													<div class="count clearfix">
														<form action="">
															<input onchange="updateCart(<?php echo $key; ?>)" id="quantity_<?php echo $key; ?>" type="number" class="form-control sc-quantity" max-lenght="3" value="<?php echo $item['qty'] ?>" name="quantity_<?php echo $key; ?>" min="1" step="1">
														</form>
													</div>
												</td>
												<td class="total-item-price">
													<?php 
													echo $total_item = $item['qty']*$item['price'] ; 
													?>
												</td>
											</tr>
											<?php $total += $total_item ;
										}
									} ?>
								</tbody>
							</table>
							<div class="total-cart">
								<table>
									<tbody>
										<tr>
											<td class="key">
												Tổng:
											</td>
											<td class="price_total">
												<?php echo $total ?>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="ct-dathang">
									<button class="pay" type="submit">
										<a href="?mod=home&act=order" class="" name="yt0">TIẾN HÀNH ĐẶT HÀNG</a>
									</button>
								</div>
								<div class="tt-muasp">
									<button class="continue" type="submit">
										<a href="/bookstore/frontend/" class="" name="yt0">Tiếp tục mua sắm</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php }else{ ?>
					<span>Chưa có sản phẩm trong giỏ hàng</span>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<script>
	function updateCart(id){
		qty = $("#quantity_" + id).val();
		$.post('updateCart.php', {'id' : id , 'qty' : qty}, function(data){
			$('#listCart').load("http://localhost/bookstore/frontend/?mod=home&act=cart #detailCart");
			$("#total_item").text(data);
		});
	}

	function deleteItemCart(id){
		$.post('updateCart.php', {'id' : id , 'qty' : 0}, function(data){
			$('#listCart').load("http://localhost/bookstore/frontend/?mod=home&act=cart #detailCart");
			$("#total_item").text(data);

		});
	}
</script>
<?php
include_once('views/layouts/partial/footer.php'); 
?>

