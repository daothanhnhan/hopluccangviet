
<style>

</style>
<hr>
<div class="row1 product-detail-service gb-home-product-service-slide owl-carousel owl-theme">
	<div class="item box">
		<!-- <img src="/images/service_1.jpg" alt="service"> -->
		<i class="fa fa-comments"></i>
		<div class="info">
			<p class="text_1">Hỗ trợ khách hàng</p>
			<p class="text_2">Tư vấn hỗ trợ chuyên nghiệp</p>
		</div>
	</div>
	<div class="item box">
		<!-- <img src="/images/service_2.jpg" alt="service"> -->
		<i class="fa fa-certificate"></i>
		<div class="info">
			<p class="text_1">Mua bán uy tín</p>
			<p class="text_2">Xem hàng ưng thì lấy</p>
		</div>
	</div>
	<div class="item box">
		<!-- <img src="/images/service_3.jpg" alt="service"> -->
		<i class="fa fa-dollar"></i>
		<div class="info">
			<p class="text_1">Hàng rẻ giá chuẩn</p>
			<p class="text_2">Công khai giá tất cả sản phẩm</p>
		</div>
	</div>
	<div class="item box">
		<!-- <img src="/images/service_3.jpg" alt="service"> -->
		<i class="fa fa-ambulance"></i>
		<div class="info">
			<p class="text_1">Giao hàng toàn quốc </p>
			<p class="text_2"></p>
		</div>
	</div>
	<div class="item box">
		<!-- <img src="/images/service_3.jpg" alt="service"> -->
		<i class="fa fa-credit-card"></i>
		<div class="info">
			<p class="text_1">Thanh toán linh hoạt</p>
			<p class="text_2">Nhận thanh toán nhiều hình thức</p>
		</div>
	</div>
</div>
<hr>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        var owl = $('.gb-home-product-service-slide');
        owl.owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:false,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            items:4,
            responsive : {
            	0 : {
			        items: 1
			    },
			    768 : {
			        items: 4
			    }
            }
        });
    });
</script>