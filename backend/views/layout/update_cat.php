<?php 
session_start();
include_once('../../models/Category.php');
$category = new Category();
$categorys = $category->list_category();
// var_dump($categorys);


include_once('../../models/Product.php');
$product = new Category();
$id = $_GET['id'];
$item = $product->get_item($id);
if(isset($_POST['update_cat']) && isset($_SESSION['id_admin']) ){
	$product->update_category($id);
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
	<!-- value_product --$product-- -->
	<?php if(isset($_SESSION['id_admin'])){ ?>
		<div class="navbar navbar-default" id="navbar">
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="bookstore/backend/?mod=index&act=home" class="navbar-brand">
						<small>
							Bảng quản trị (953)                
						</small>
					</a>
					<!-- /.brand -->
					<div class="pull-left">
					</div>
				</div>
				<!-- /.navbar-header -->
				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="green">
							<a href="http://localhost/bookstore/frontend" target="_blank">
								<i class="icon-globe"></i>
								<span>
									Xem website                        
								</span>
							</a>
						</li>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="user-info">
									admin                        
								</span>
								<i class="icon-caret-down"></i>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/quantri/useradmin/useradmin/changepass">
										<i class="icon-key"></i> Đổi mật khẩu 
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="http://localhost/bookstore/backend/?mod=index&act=logout">
										<i class="icon-off"></i> Đăng xuất 
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- /.ace-nav -->
				</div>
				<!-- /.navbar-header -->
			</div>
			<!-- /.container -->
		</div>
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
							<form class="form-horizontal" enctype="multipart/form-data" id="product-form" action="" method="post">
								<div class="widget-header">
									<h4>Cập nhật Danh muc</h4>
									<div class="widget-toolbar no-border">
										<input class="pull-right btn btn-sm btn-primary" type="submit" name="update_cat" value="Lưu">
									</div>
								</div>
								<div class="widget-body no-padding">
									<div class="widget-main">
										<div class="row">
											<div class="col-xs-12 no-padding">
												<div class="tabbable">
													<ul class="nav nav-tabs" id="myTab">
														<li class="active">
															<a data-toggle="tab" href="#basicinfo">
																Thông tin cơ bản                        
															</a>
														</li>
													</ul>
													<div class="tab-content">
														<?php foreach ($item as $product) { ?>
															<div id="basicinfo" class="tab-pane active">
																<div class="form-group no-margin-left">
																	<label class="col-sm-2 control-label no-padding-left required" for="Product_name">Tên Danh muc
																		<span class="required">*</span>
																	</label>
																	<div class="controls col-sm-10 error">
																		<input class="span12 col-sm-12" name="name_cat"  type="text" maxlength="400" value="<?= $product['name_cat'] ?>">
																		<div class="errorMessage" id="Product_name_em_" style="">Tên sản phẩm không được phép rỗng.</div>
																	</div>
																</div>
															</div>
														<?php  } ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } else{?>
		<span>ERR- Trang không tồn tại</span>
	<?php } ?>
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
