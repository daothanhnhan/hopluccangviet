<?php
	if($row1['product_price'] != 0 && $row1['product_price_sale'] != 0 && false){
?>
<div class="gb-product-item-prices_mptoto">
    <p class="gb-prices-news"><?= number_format($row1['product_price'] - $row1['product_price']*($row1['product_price_sale']/100))  ?>₫ &nbsp;&nbsp;</p>
    <p class="gb-prices-old"> <?= number_format($row1['product_price'])  ?>₫</p>
    <span class="ins-discount" content="19"><?= $row1['product_price_sale'] ?>%</span>
</div>
<?php }else if($row1['product_price'] != 0 && $row1['product_price_sale'] == 0 && false){ ?>
<div class="gb-product-item-prices_mptoto">
	<p class="gb-prices-news" style="color: red;"><?= number_format($row1['product_price']) ?> VNĐ</p>
</div>
<?php }else{?>
	<div class="gb-product-item-lienhe_mptoto">
	    <a href="tel:<?= $rowConfig['content_home3'] ?>" title="">Liên hệ</a>
	</div>
<?php } ?>


<style type="text/css" media="screen">

</style>