<?php 
	function nhan_khuyen_mai () {
		global $conn_vn;
		$action = new action();
		if (isset($_POST['nhan_khuyen_mai'])) {
			$name = mysqli_real_escape_string($conn_vn, $_POST['name']);
			$phone = mysqli_real_escape_string($conn_vn, $_POST['phone']);
			$email = mysqli_real_escape_string($conn_vn, $_POST['email']);

			$ngay = date('Y-m-d H:i:s');

			$sql = "INSERT INTO nhan_khuyen_mai (name, phone, email, ngay) VALUES ('$name', '$phone', '$email', '$ngay')";
			// echo $sql;
			$result = mysqli_query($conn_vn, $sql);

			if ($result) { 
				echo '<script>alert("Bạn đăng ký nhận tin khuyến mãi thành công.");</script>';
			} else {
				echo '<script>alert("Có lỗi xảy ra.");</script>';
				echo mysqli_error($conn_vn);
			}
		}
	}
	nhan_khuyen_mai();
?>

<style>

</style>
<section class="cms-static-subscribe">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-3a col-md-3 col-12 subscribe-item">
					<div class="box-social">
						<a href="https://www.facebook.com/100093577340704" rel="nofollow" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" rel="nofollow" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
						<a href="#" rel="nofollow" target="_blank" title="Youtube 2"><i class="fa fa-youtube"></i></a>
						<a href="#" rel="nofollow" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" rel="nofollow" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
				<div class="col-xl-9a col-md-9 col-12 subscribe-item">
					<form accept-charset="UTF-8" action="" autocomplete="off" class="contact-form" id="formNewLestter" method="post" name="formNewLestter">
						<div class="title mb-2">
							Bạn muốn là người sớm nhất nhận khuyến mãi đặc biệt? Đăng ký ngay.
						</div>
						<div class="form-row">
							<div class="col-md-4 col-xs-12 p-2">
								<input autocomplete="off" class="validate[required] form-control newsletter__input placeholder" id="newsletter_name" name="name" placeholder="Nhập Họ tên" type="text" value="" required="">
							</div>
							<div class="col-md-3 col-xs-12 p-2">
								<input autocomplete="off" class="validate[required] form-control newsletter__input placeholder" id="newsletter_phone" name="phone" placeholder="Nhập số điện thoại" type="text" value="" required="">
							</div>
							<div class="col-md-3 col-xs-12 p-2">
								<input autocomplete="off" class="validate[required,custom[email]] form-control newsletter__input placeholder" id="emailadd" name="email" placeholder="Nhập địa chỉ e-mail" type="email" value="">
							</div>
							<div class="col-md-2 col-xs-12 p-2">
								<button aria-label="Đăng ký" class="btn btn-primary btn-block" id="btnNewsletter" name="nhan_khuyen_mai" type="submit">Đăng ký</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>