<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<style>

</style>
<div class="gb-home-product gb-home-product-relate">
    <div class="titleCategoryProduct_mptoto">SẢN PHẨM LIÊN QUAN</div>
    <div class="gb-home-product-relate-slide owl-carousel owl-theme">
        <?php
            $action_relative = new action_product();
            $list_pro_relative = $action_relative->getListProductRelate_byIdCat_hasLimit($productcat_id, 8);
            foreach ($list_pro_relative as $item) {
                $rowLang1 = $action_relative->getProductLangDetail_byId($item['product_id'],$lang);
                $row1 = $action_relative->getProductDetail_byId($item['product_id'],$lang); 
        ?>
            <div class="item">
                <div class="gb-product-item_mptoto">
                    <div class="gb-product-item-img">
                        <div class="gb-product-item-img-main">
                                <a href="/<?= $rowLang1['friendly_url'] ?>" class="aspect-box-sp">
                                    <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive aspect-img-sp">
                                    <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                </a>
                            </div>
                            <div class="gb-product-item-img-replate">
                                <?php if (empty($row1['product_img_2'])) { ?>
                                <a href="/<?= $rowLang1['friendly_url'] ?>" class="aspect-box-sp">
                                    <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive aspect-img-sp">
                                    <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                </a>
                                <?php } else { ?>
                                <a href="/<?= $rowLang1['friendly_url'] ?>" class="aspect-box-sp">
                                    <img src="/images/<?= $row1['product_img_2'] ?>" alt="" class="img-responsive aspect-img-sp">
                                    <span class="percent">- <?= $item['product_price_sale'] ?>%</span>
                                </a>
                                <?php } ?>
                            </div>
                    </div>
                    <div class="gb-product-item-img-text">
                        <?php include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0001.php";?>
                        <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                        <p><a><?= $action->getDetail('trademark', 'id', $item['product_material'])['name'] ?></a></p>
                    </div>
                    <div class="gb-product-item-prices_mptoto text-center" style="margin-bottom: 10px;">
                        
                        <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0002.php";?>
                        <?php //include DIR_PRODUCT."MS_PRODUCT_MINHHUY_0002.php";?>
                        <!-- <p class="gb-prices-news"><?= number_format($row1['product_price']) ?> VNĐ</p> -->
                        <!-- <p class="gb-prices-old"><?= number_format($row1['product_price']) ?> VNĐ</p> -->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        var owl = $('.gb-home-product-relate-slide');
        owl.owlCarousel({
            loop:true,
            margin:10,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:2
                },
                767:{
                    items: 2
                },
                992:{
                    items:4
                }
            }
        });
    });
</script>