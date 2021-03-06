
<?php
include_once('views/layout/partial/header.php');
?>
<!-- value_product --$product-- -->
<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="/quantri/" class="navbar-brand">
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
							<a href="?mod=index&act=logout">
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
						<li >
							<a class="" href="?mod=index&act=home">
								<i class=""></i>
								<span class="menu-text">Quản lý sản phẩm</span>
							</a>
						</li>
						<li class="">
							<a class="" href="?mod=index&act=category">	
								<i class=""></i>
								<span class="menu-text">Danh mục sản phẩm</span>
							</a>
						</li>
						<li class="active">
							<a class="" href="?mod=index&act=order">	
								<i class=""></i>
								<span class="menu-text">Quản lý đơn hàng</span>
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
				<div class="widget-box">
					<div class="widget-header">
						<h4>
							Quản lý đơn hàng    
						</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<!-- search-form -->
							<div id="product-grid" class="grid-view">
								<table class="table table-bordered table-hover vertical-center">
									<thead>
										<tr>
											<th id="product-grid_c1">Tên khách hàng</th>
											<th id="product-grid_c3">Tổng sản phẩm</th>
											<th id="product-grid_cprice">Tổng tiền </th>
											<th id="product-grid_cprice_market">Email</th>
											<th id="product-grid_cproduct_category_id">Địa chỉ</th>
										</tr>
									</thead>
									<tbody>
										<?php if(isset($orders)){ ?>
											<?php foreach ($orders as $order){ 
												?>
												<tr class="odd">
													<td>
														<?php echo $order['full_name'] ?>
													</td>
													<td><?php echo $order['total_product'] ?></td>
													<td><?php echo $order['total_money'] ?></td>
													<td><?php echo $order['email'] ?></td>
													<td><?php echo $order['address'] ?></td>
												</tr>
											<?php } ?>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include_once('views/layout/partial/footer.php'); 
?>
