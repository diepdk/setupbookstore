<?php 
include_once('views/layouts/partial/header.php');
$themeUrl = 'views/web';
?>

<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../../common/dbConnection.php');
$db = new dbConnection();
//search 
//check search -> result_search else -> home
if(isset($_GET['search-keyword'])){
	$param = addslashes($_GET['keyword']);
	if(!empty($param)){
		$sql_search = "SELECT * FROM item,img WHERE name_item LIKE '%$param%'  AND img.id_item = item.id";
		$db->query($sql_search);
		$db->setFetchMode();
		$product_search = $db->findAll();
		if(!empty($product_search)){ ?>
			<div class="product-inhome ">
				<div class="container">
					<div class="session-product-inhome  wow fadeInUp" style="margin-top: 20px;"> 
						<div class="content-product-inhome">
							<div class="list-product-inhome">
								<?php foreach ($product_search as $item) { ?>
									<div class="item-product-inhome">
										<div class="img-care">
											<a href="detail_product.php">
												<img src="<?php echo $item['url'] ?>" alt="">
											</a>
											<?php if($item['price_maket'] > $item['price']){ ?>
												<div class="sale-fire">
													<span>-<?= 100-(int)(((int)$item['price']*100)/((int)$item['price_maket']));?>%
													</span>
												</div>
											<?php } ?>
											<div class="btn-detail-product">
												<div class="content-img">
													<div class="icon-cart" onclick="addCartx(<?php echo $item['id']; ?>)">
														<a href="javascript:void(0)" tabindex="0"><img src="<?= $themeUrl ?>/images/icon-shop.png" alt=""></a>
													</div>
													<div class="icon-detail">
														<a href="detail_product.php?id=<?= $item['id'] ?>" tabindex="0"><img src="<?= $themeUrl ?>/images/icon-esey.png" alt=""></a>
													</div>
												</div>
											</div>
										</div>
										<div class="text-product-care">
											<a href="detail_product.php?id=<?= $item['id'] ?>"><?php echo $item['name_item'] ?></a>
											<div class="price">
												<span class="price-text"><?php echo $item['price'] ?> đ</span>

												<?php if ($item['price_maket'] && $item['price_maket'] > 0) { ?>
													<span class="price-market"><?php echo $item['price_maket'] ?>đ</span>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
		}else{
			echo "Không có kết quả";
		}
	}else{
		echo "Bạn phải nhập";
	}
}else{
	?>
	<div class="wapper bg-ed" id="main">
		<div class="clearfix"></div>
		<div class="product-inhome ">
			<div class="container">
				<?php foreach ($productincategory as $key => $products) { ?>
					<div class="session-product-inhome  wow fadeInUp ">
						<div class="title-product-care">
							<span><?php echo $key ?></span>
						</div>
						<div class="content-product-inhome">
							<div class="content-left">
								<div class="img">
									<img src="<?= $themeUrl ?>/images/ing-homebook.jpg" alt="">
								</div>
							</div>
							<div class="list-product-inhome">
								<?php foreach ($products as $item) { ?>
									<div class="item-product-inhome">
										<div class="img-care">
											<a href="detail_product.php">
												<img src="<?php echo $item['url'] ?>" alt="">
											</a>
											<?php if($item['price_maket'] > $item['price']){ ?>
												<div class="sale-fire">
													<span>-<?= 100-(int)(((int)$item['price']*100)/((int)$item['price_maket']));?>%
													</span>
												</div>
											<?php } ?>
											<div class="btn-detail-product">
												<div class="content-img">
													<div class="icon-cart" onclick="addCartx(<?php echo $item['id']; ?>)">
														<a href="javascript:void(0)" tabindex="0"><img src="<?= $themeUrl ?>/images/icon-shop.png" alt=""></a>
													</div>
													<div class="icon-detail">
														<a href="detail_product.php?id=<?= $item['id'] ?>" tabindex="0"><img src="<?= $themeUrl ?>/images/icon-esey.png" alt=""></a>
													</div>
												</div>
											</div>
										</div>
										<div class="text-product-care">
											<a href="detail_product.php?id=<?= $item['id'] ?>"><?php echo $item['name_item'] ?></a>
											<div class="price">
												<span class="price-text"><?php echo $item['price'] ?> đ</span>

												<?php if ($item['price_maket'] && $item['price_maket'] > 0) { ?>
													<span class="price-market"><?php echo $item['price_maket'] ?>đ</span>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="partner wow fadeInUp">
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
						<img src="<?= $themeUrl ?>/images/partner5.png" alt="">
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
<?php } ?>

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
<script>
	function addCartx(id) {
		// body...
		qty = 1;
		$.post('addcart.php', {'id' : id , 'qty' : qty}, function(data){
			$('#showSS').modal();
			$("#total_item").text(data);
		});
	}
</script>
<?php
include_once('views/layouts/partial/footer.php'); 
?>
