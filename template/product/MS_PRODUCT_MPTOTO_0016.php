<?php
    $list_procat_arr = array(512, 516, 507, 527, 519);
    // $allcat= $action_product->getListProductCat_byOrderASC();
    $allcat = $action->getList('productcat', 'productcat_parent', '0', 'productcat_id', 'asc', '', '', '');
    $lis = $action -> getDetail('productcat', 'productcat_id',485);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<?php 
    foreach ($list_procat_arr as $num) { 
        $home_procat_phongtam = $action_product->getProductList_byMultiLevel_orderProductId($num, 'desc','', 8,'');
        $home_procat = $action->getDetail('productcat', 'productcat_id', $num);
        ?>
      <div class="gb-producttab-home_mptoto slide11">
        <div class="container1">
            <div class="row">
                
                <div class="col-xs-12">
                    <div class="section_cvp_title">
                        <h3><span><?=$home_procat['productcat_name']?></span></h3>
                    </div>
                </div>
            </div>
            <div class="row1">
                <div class="gb-slideshow_mptoto-slide101 owl-carousel owl-theme wow slideInUp" data-wow-duration="1s">
               
                <?php foreach ($home_procat_phongtam as $item) { ?>
                <div class="item">
                    <div class="gb-product-item_mptoto wow slideInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                        <div class="gb-product-item-img">
                            <div class="gb-product-item-img-main" style="height: auto;">
                                <a href="/<?= $item['friendly_url'] ?>" class="aspect-box-sp"><img src="/images/<?= $item['product_img'] ?>" alt="<?= $item['product_name'] ?>" class="img-responsive aspect-img-sp" style="width: 100%;"></a>
                            </div>
                        </div>
                        <div class="gb-product-item-img-text">
                            <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['product_name'] ?></a></h2>
                            <?php include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0001.php";?>
                            <p>
                                <?php if (empty($item['product_price'])) { ?>
                                    Liên hệ
                                <?php } else { ?>
                                    <?= number_format($item['product_price']) ?> VNĐ
                                <?php } ?>
                            </p>
                            <?php include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0002.php";?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php    }

 ?>


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
