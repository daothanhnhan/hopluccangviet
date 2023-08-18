<?php 
    // $home_sale = $action->getList('product', 'product_sale', '1', 'product_id', 'desc', '', '8', '');
    $home_procat = $action->getList('productcat', '', '', 'productcat_id', 'asc', '', '', '');
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<style>

</style>
      <div class="gb-producttab-home_mptoto slide11">
        <div class="container1">
            <div class="row">
                <!-- <div class="col-sm-8 col-sm-offset-2">
                    <div class="gb-producttab-home_mptoto-title" style="margin-top: 15px;">
                       
                        <h2 class="foeve"><b class="cecesss"></b><span>Sản phẩm khuyến mại</span><b class="cecesss"></b></h2>
                        <div class="underline-product_mptoto"></div>
                    </div>
                </div> -->
                <div class="col-xs-12">
                    <div class="section_cvp_title">
                        <h3><span>Danh mục nổi bật</span></h3>
                    </div>
                </div>
                
            </div>
            <div class="row m-5">
                <div class=" wow slideInUp gb-slideshow_mptoto-slide101 owl-carousel owl-theme" data-wow-duration="1s" style="display: flex;flex-wrap: wrap;">
               
                <?php foreach ($home_procat as $item) { ?>
                <div class="item col-md-12 col-xs-12 p-5">
                    <div class="gb-product-item_mptoto wow slideInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                        <div class="gb-product-item-img">
                            <div class="gb-product-item-img-main" style="height: auto;">
                                <a href="/<?= $item['friendly_url'] ?>" class="aspect-box-sp"><img src="/images/<?= $item['productcat_img'] ?>" alt="<?= $item['product_name'] ?>" class="img-responsive aspect-img-sp" style="width: 100%;height: 100%;"></a>
                            </div>
                        </div>
                        <div class="gb-product-item-img-text">
                            <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['productcat_name'] ?></a></h2>
                            
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
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
                    items:3,
                    nav:true
                }
            }
        });
    });
</script>
