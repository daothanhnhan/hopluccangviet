<?php 
    $_SESSION['brand'] = "";
    // $_SESSION['material'] = "";
    $_SESSION['price_khoang'] = "";
    $_SESSION['price_percent'] = "";
    $_SESSION['history'] = "";
    // $home_sale = $action->getList('product', 'product_hot', '1', 'product_id', 'desc', '', '8', '');
    $home_procat = $action->getList('productcat', 'productcat_parent', '0', 'productcat_id', 'asc', '', '', '');
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<style>

</style>
<?php 
    foreach ($home_procat as $procat) { 
        $list_product = $action_product->getProductList_byMultiLevel_orderProductId($procat['productcat_id'],'desc','','8','');//var_dump($list_product);
?>
      <div class="gb-producttab-home_mptoto slide11">
        <div class="container1">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_cvp_title">
                        <h3><span><?= $procat['productcat_name'] ?></span></h3>
                    </div>
                </div>
            </div>
            <div class="">
                <div class=" wow slideInUp gb-slideshow_mptoto-slide101-1 owl-carousel owl-theme" data-wow-duration="1s" style="display: flex;flex-wrap: wrap;">
               
                <?php foreach ($list_product as $item) { ?>
                <div class="item col-md-12 col-xs-12 p-5">
                    <div class="gb-product-item_mptoto wow slideInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                        <div class="gb-product-item-img">
                            <div class="gb-product-item-img-main" style="height: auto;">
                                <a href="/<?= $item['friendly_url'] ?>" class="aspect-box-sp">
                                    <img src="/images/<?= $item['product_img'] ?>" alt="<?= $item['product_name'] ?>" class="img-responsive aspect-img-sp" style="width: 100%;height: 100%;">
                                    <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                </a>
                            </div>
                        </div>
                        <div class="gb-product-item-img-text">
                            <?php include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0001.php";?>
                            <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['product_name'] ?></a></h2>
                            
                            <p><a><?= $action->getDetail('trademark', 'id', $item['product_material'])['name'] ?></a></p>
                            <p class="product-price">
                                <?php if (empty($item['product_price']) || true) { ?>
                                    Liên hệ
                                <?php } else { ?>
                                    <?= number_format($item['product_price'] - $item['product_price']*($item['product_price_sale']/100)) ?> VNĐ
                                <?php } ?>
                            </p>
                            <?php //include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0002.php";?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<!-- <script src="/plugin/wow/wow.min.js"></script> -->
<!-- <script>
    $(document).ready(function(){
        new WOW().init();
    })
</script> -->
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-slideshow_mptoto-slide101-1').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            nav:true,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],

            responsive:{
                0:{  items:2,
                    nav:true
                },
                767:{
                    items:6,
                    nav:true
                }
            }
        });
    });
</script>
