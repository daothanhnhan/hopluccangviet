<?php
$home_procat_phongtam = $action_product->getProductList_byMultiLevel_orderProductId(486, 'desc','', 3,'');
$lis = $action -> getDetail('productcat', 'productcat_id',486);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<div class="gb-producttab-home_mptoto">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="gb-producttab-home_mptoto-title">
                    <!-- <img src="/images/ic_dm3.png" alt="" class="img-responsive" style="width: 100px;"> -->
                    <h2><a href="/san-pham-noi-bat"><?=$lis['productcat_name']?></a></h2>
                    <div class="underline-product_mptoto"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="gb-slideshow_mptoto-slide10 owl-carousel owl-theme wow slideInUp" data-wow-duration="1s">
            <!-- Bồn cầu -->
            <?php foreach ($home_procat_phongtam as $item) { ?>
            <div class="item">
                <div class="gb-product-item_mptoto wow slideInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                    <div class="gb-product-item-img">
                        <div class="gb-product-item-img-main" style="height: auto;">
                            <a href="/<?= $item['friendly_url'] ?>"><img src="/images/<?= $item['product_img'] ?>" alt="<?= $item['product_name'] ?>" class="img-responsive" style="width: 100%;"></a>
                        </div>
                    </div>
                    <div class="gb-product-item-img-text">
                        <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['product_name'] ?></a></h2><p>
                          <?= number_format($item['product_price']) ?> VNĐ
                        </p>
                                            </div>
                </div>
            </div>
            <?php } ?>
        </div></div>
    </div>
</div>
<script src="/plugin/wow/wow.min.js"></script>
<script>
    $(document).ready(function(){
        new WOW().init();
    })
</script>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-slideshow_mptoto-slide10').owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:true,
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
                    nav:true
                }
            }
        });
    });
</script>
