<?php 
    $home_sale = $action->getList('product', 'product_hot', '1', 'product_id', 'desc', '', '8', '');
?>
<style>
.home-text-info p {
    margin-bottom: 10px;
}
</style>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">

      <div class="gb-producttab-home_mptoto slide11">
        <div class="container1">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_cvp_title">
                        <h3><span>MÁY VÀ THIẾT BỊ MINH HUY - TRAO CHẤT LƯỢNG, NHẬN NIỀM TIN</span></h3>
                    </div>
                </div>
            </div>
            <div class="row1 home-text-info">
                <p>Với uy tín nhiều năm phân phối các thiết bị máy thực phẩm, máy đóng gói, máy xay nghiền các loại hạt, nồi nấu công nghiệp,…MÁY VÀ THIẾT BỊ MINH HUY luôn mang đến cho người dùng toàn quốc những sản phẩm chính hãng, chất lượng đảm bảo và giá thành tốt nhất. Đến với MÁY VÀ THIẾT BỊ MINH HUY, quý khách có thể lựa chọn cho mình rất nhiều sản phẩm công nghệ phù hợp với nhu cầu sử dụng của mình. Ngoài ra quý khách sẽ được tư vấn về sản phẩm một cách tôt nhất, chuyên nghiệp nhất giúp cho quý khách hàng mua được đúng sản phẩm theo yêu cầu và phù hợp với mục đích sử dụng của mình.</p>
                <p style="color: blue;">HÃY GỌI NGAY CHO CHÚNG TÔI ĐỂ NHẬN ĐƯỢC TƯ VẤN MIỄN PHÍ VÀ NHIỀU ƯU ĐÃI HẤP DẪN!</p>
                <p style="color: blue;">SỐ 119A, KTT Viện Khoa Học Nông Nghiệp, Xã Vĩnh Quỳnh , Huyện Thanh Trì, HN, TP.Hà Nội</p>
        </div>
    </div>
</div>



<!-- <script src="/plugin/wow/wow.min.js"></script> -->
<!-- <script>
    $(document).ready(function(){
        new WOW().init();
    })
</script> -->
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-slideshow_mptoto-slide101').owlCarousel({
            loop:true,
            margin:10,
            navSpeed:500,
            nav:false,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],

            responsive:{
                0:{  items:1,
                    nav:false
                },
                767:{
                    items:4,
                    nav:false
                }
            }
        });
    });
</script>
