<?php  $themeUrl = 'views/web';?>



<div class="clearfix"></div>
<footer class="wow fadeInUp">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-md-6 col-sm-12">
				<div class="info-contact">
					<div class="title-info-contact">
						<h2>Thông tin liên hệ</h2>
					</div>
					<div class="text-info-contact">
						<p>Tư vấn khách hàng: <a href="#">091 234 5678</a></p>
						<p>Phản hồi khiếu nại: <a href="#">091 234 5678</a></p>
						<p>Email: <a href="#">luckto@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-4 col-md-6 col-sm-12">
				<div class="suport-pay">
					<div class="title-pay">
						<h2>Thông tin liên hệ</h2>
					</div>
					<div class="img-pay">
						<img src="<?= $themeUrl ?>/images/ic-pay.png" alt="">
						<img src="<?= $themeUrl ?>/images/vnpay.png" alt="">
						<img src="<?= $themeUrl ?>/images/visa.png" alt="">
						<img src="<?= $themeUrl ?>/images/atm.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-md-6 col-sm-12">
				<div class="coso">
					<div class="item-coso">
						<h2>Tp. hồ chí minh</h2>
						<p>527 hoàng hà, hoàn kiếm, hà nội </p>
					</div>
					<div class="item-coso">
						<h2>Hà nội</h2>
						<p>527 hoàng hà, hoàn kiếm, hà nội </p>
					</div>
				</div>
			</div>
		</div>
		<div class="botom-footer">
			<div class="menu-footer">
				<ul>
					<li><a href="#">Giới thiệu </a></li>
					<li><a href="#">Hướng dẫn khách hàng</a></li>
					<li><a href="#">Các chính sách</a></li>
				</ul>
				<div class="copyright">
					<p> © luckto 2019. all rights reserved.</p>
					<p> Thiết kế website bởi nanoweb </p>
				</div>
			</div>
			<div class="register-mail">
				<h2>Đăng ký nhận tin</h2>
				<div class="form-mail">
					<form action="">
						<input type="text" placeholder="vui lòng nhập email">
						<div class="btn-register-mail">
							<button>Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
			<div class="btn-dadangky">
				<img src="<?= $themeUrl ?>/images/dadangky.png" alt="">
			</div>
		</div>
	</div>
</footer>
<div class="popup-style-login">
	<div class="content-popup">
		<div class="btn-close">
			<img src="<?= $themeUrl ?>/images/close-btn.png" alt="">
		</div>
		<div class="title-login">
			<div class="login active">
				<span>Đăng nhập</span>
			</div>
			<div class="rigister">
				<span>Tạo tài khoản</span>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-login active"> 
			<form action="?mod=home&act=login" method="POST">
				<div class="input-user">
					<label for=""> e-mail/số điện thoại <span>*</span></label>
					<input type="text" name="user_name" placeholder="vui lòng nhập e-mail">
				</div>
				<div class="input-password">
					<label for=""> Mật khẩu <span>*</span></label>
					<span class="show_password_q">quên mật khẩu </span>
					<input type="password" name="password" placeholder="vui lòng nhập mật khẩu">
				</div>
				<div class="form-button">
					<button  name="login" type="submit">Đăng nhập</button>
				</div>
			</form>
			<div class="login-or">
				<span>hoặc đăng nhập bằng</span>
			</div>
			<div class="login-fb">
				<div class="img"><img src="<?= $themeUrl ?>/images/ic-fb.png" alt=""></div>
				<a href="#"> đăng nhập bằng facebook</a>
			</div>
			<div class="login-ggp">
				<div class="img"><img src="<?= $themeUrl ?>/images/ic-gg.png" alt=""></div>
				<a href="#"> đăng nhập bằng facebook</a>
			</div>
		</div>
		<div class="form-register">
			<form action="?mod=home&act=register" method="POST" id="register">
				<div class="input-user">
					<label for=""> Họ và tên <span>*</span></label>
					<input type="text" name="name" placeholder="Vui lòng nhập họ và tên" required>
				</div>
				<div class="gr-item">
					<div class="input-email">
						<label for="">
							E-mail<span>*</span>
						</label>
						<input type="email" name="email" placeholder="Vui lòng nhập e-mail" required>
					</div>
					<div class="input-phone">
						<label for="">
							Số điện thoại <span>*</span>
						</label>
						<input type="text" required name="phone" placeholder="Vui lòng nhập số điện thoại">
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="input-password">
					<label for=""> Tên đắng nhập <span>*</span></label>
					<input name="user_name" type="text" placeholder="Vui lòng nhập tên đăng nhập" required>
				</div>
				<div class="input-password">
					<label for=""> Mật khẩu <span>*</span></label>
					<input type="password" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" required>
				</div>
				<div class="input-password">
					<label for=""> Nhập lại mật khẩu <span>*</span></label>
					<input type="password" id="password-cf" placeholder=" Vui lòng nhập lại mật khẩu" required>
				</div>
				<div class="form-button">
					<button name="register" type="submit">Đăng ký</button>
				</div>
			</form>
		</div>
	</div>
	<div class="shadow-popup"></div>
</div>
<div class="popup-style-orderss">
	<div class="content-popup">
		<div class="btn-close">
			<img src="<?= $themeUrl ?>/images/close-btn.png" alt="">
		</div>
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
					<a href="#"> Quay lại trang chủ</a>
				</div>
				<div class="tt-muahang">
					<a href="#">
						Tiếp tục mua sắm
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="shadow-popup"></div>
</div>
<div class="popup-style-forgot-pass">
	<div class="content-popup">
		<div class="btn-close">
			<img src="<?= $themeUrl ?>/images/close-btn.png" alt="">
		</div>
		<div class="wap-forgot-pas">
			<h2>Quên mật khẩu?</h2>
			<span>Vui lòng cung cấp email hoặc số điện thoại đăng nhập để lấy lại mật khẩu.</span>
			<form action="">
				<input type="text" placeholder="Nhập e-mail hoặc số điện thoại"><br>
				<button>Gửi</button>
			</form>
		</div>
	</div>
	<div class="shadow-popup"></div>
</div>
<script src="<?php echo $themeUrl ?>/js/jquery.min.js" type="text/javascript" ></script>
<script src="<?= $themeUrl ?>/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="<?= $themeUrl ?>/js/wow.min.js" type="text/javascript"></script>
<script src="<?= $themeUrl ?>/js/slick.min.js" type="text/javascript" ></script>
<script src="<?= $themeUrl ?>/js/magiczoomplus.js"></script>
<script src="<?= $themeUrl ?>/js/main.js" type="text/javascript" ></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
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
<script>
	$(document).ready(function(){
		$('#register').validate({
			rules:{
				name : "required",
				email : {
					required : true,
					email : true,
				}
				phone : "required",
				user_name : "required",
				password : {
					required : true,
					minlength : 6
				}
			}
			messages: {
				name: "Vui lòng nhập đủ",
				email: "Vui lòng nhập đủ",
				phone : "Vui lòng nhập đủ",
				user_name : "required",
				password : {
					required : "Vui lòng nhập đúng định dạng",
					minlength : "Độ dài tối thiểu 6 ký tự"
				}
			}
		})
	});


</script>
</body>

</html>