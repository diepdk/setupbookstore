<?php 
session_start();
include_once('../../models/Product.php');
$product = new Product();
$id = $_GET['id'];
$item = $product->get_item($id);
if(isset($_POST['delete']) && isset($_SESSION['id_admin']) ){
	$product->deleteitem($id);
}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Trang chủ</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="../../views/web/css/vensdor/plugin.css">
	<link rel="stylesheet" href="../../views/web/css/vensdor/slick.css">
	<link rel="stylesheet" href="../../views/web/css/style.css">
	<link rel="stylesheet" href="../../views/web/css/defaul.min.css">
	<link rel="stylesheet" href="../../views/web/css/fix.css">
</head>
<body>
	<?php if(isset($_SESSION['id_admin'])){ ?>
		<div id="main-container" class="main-container">
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<div id="sidebar" class="sidebar">
					<!-- #sidebar-shortcuts -->
					<ul class="nav nav-list">
						<li class="active">
							<a class="dropdown-toggle" href="/quantri/economy/product">
								<i class="icon-file-powerpoint-o"></i>
								<span class="menu-text">Sản phẩm</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">

								<li class="active">
									<a class="" href="/bookstore/backend/?mod=index&act=home">
										<i class=""></i>
										<span class="menu-text">Quản lý sản phẩm</span>
									</a>
								</li>
								<li class="">
									<a class="" href="/bookstore/backend/?mod=index&act=category">
										<i class=""></i>
										<span class="menu-text">Danh mục sản phẩm</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="">
							<a class="" href="">
								<i class="icon-folder-open"></i>
								<span class="menu-text">Danh mục bài viết</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-list -->
					<div id="sidebar-collapse" class="sidebar-collapse">
						<i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>
					</div>
				</div>
				<div class="main-content">
					<div class="page-content">
						<div class="widget widget-box">
							<div class="widget-header">
								<h4>Confirm</h4>
							</div>
							<div class="widget-body no-padding">
								<div class="widget-main">
									<div class="widget-main">
										<div class="row">
											<div class="col-sm-12 col-xs-12 no-padding">
												<?php foreach ($item as $i) {
													?>
													<form class="form-horizontal" id="news-form" action="" method="post">
														<div class="tabbable">
															<ul class="nav nav-tabs" id="myTab">
																<li class="active">
																	<a data-toggle="tab" href="#basicinfo">
																		Thông tin cơ bản                           
																	</a>
																</li>
															</ul>
															<div class="tab-content">
																<div id="basicinfo" class="tab-pane active">
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left required" for="News_news_title">Tên sản phẩm<span class="required">*</span></label>
																		<div class="controls col-sm-10">
																			<?php echo $i['name_item'] ?>
																		</div>
																	</div>
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left" for="News_alias">Giá Bán</label>
																		<div class="controls col-sm-10">
																			<?php echo $i['price'] ?>
																		</div>
																	</div>
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left" for="News_alias">Giá Thi truòng</label>
																		<div class="controls col-sm-10">
																			<?php echo $i['price_maket'] ?>
																		</div>
																	</div>
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left" for="News_alias">Số lượng</label>
																		<div class="controls col-sm-10">
																			<?php echo $i['quantity'] ?>
																		</div>
																	</div>
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left required" for="News_news_category_id">Danh mục sản phẩm <span class="required">*</span></label>
																		<div class="controls col-sm-10">
																			<div class="input-group">
																				dggdsgdf
																			</div>
																			<div class="errorMessage" id="News_news_category_id_em_" style="display:none"></div>
																		</div>
																	</div>
																	<div class="control-group form-group">
																		<label class="col-sm-2 control-label no-padding-left" for="News_news_sortdesc">Mô tả vắn tắt</label>
																		<div class="controls col-sm-10">
																			<?php echo $i['item_sortdesc'] ?>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="control-group form-group">
															<label class="col-sm-2 control-label no-padding-left" for="News_news_source">Tác giả</label>
															<div class="controls col-sm-10">
																<?php echo $i['author'] ?>
															</div>
														</div>
														<div class="control-group form-group">
															<label class="col-sm-2 control-label no-padding-left" for="News_poster">Noi Dung</label>
															<div class="controls col-sm-10">
																<?php echo $i['item_desc'] ?>
															</div>
														</div>
														<div class="control-group form-group">
															<label class="col-sm-2 control-label no-padding-left" for="News_completed_time">Xuất xứ</label>
															<div class="controls col-sm-10">
																<?php echo $i['manufacturer'] ?>
															</div>
														</div>
														<div class="control-group form-group buttons">
															<input class="btn btn-info" id="savenews" type="submit" name="delete" value="Xóa">
														</div>
													</form>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	<?php } else{?>
		<span>ERR- Trang không tồn tại</span>
	<?php } ?>
</div>
<script src="../../views/web/js/jquery.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/wow.min.js" type="text/javascript"></script>
<script src="../../views/web/js/slick.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/magiczoomplus.js"></script>
<script src="../../views/web/js/main.js" type="text/javascript" ></script>
<script>
	$(document).ready(function(e){
		wow = new WOW(
		{
			animateClass: 'animated',
			offset:       0,
			callback:     function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
		);
		wow.init();
	});
</script>
</body>
</html>