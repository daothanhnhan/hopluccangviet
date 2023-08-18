<?php 
    $action_product = new action_product(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);
    $row1 = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);
    $_SESSION['productcat_id_relate'] = $row1[$nameColIdProductCat_product];
    $_SESSION['sidebar'] = 'productDetail';
    $arr_id = $row1['productcat_ar'];
    $arr_id = explode(',', $arr_id);
    $productcat_id = (int)$arr_id[0];
    $product_breadcrumb = $action_product->getProductCatLangDetail_byId($productcat_id, $lang);
    $breadcrumb_url = $product_breadcrumb['friendly_url'];
    $breadcrumb_name = $product_breadcrumb['lang_productcat_name'];
    $use_breadcrumb = true;

    $img_sub = json_decode($row1['product_sub_img']);

    preg_match('/src="([^"]+)"/', $row['product_des2'], $match);
    $url1 = $match[1];//echo $url;
    // var_dump($url1);
    $url2 = $url1 . '?autoplay=1&mute=1&enablejsapi=1';
    // var_dump($url2);
    $video_youtube = str_replace($url1, $url2, $row['product_des2']);
    // var_dump($video_youtube);
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productDetail($slug, $lang);
?>
<style>
.gb-chitiet_sanpham_mptoto-body .slider-for iframe {
  max-width: 100%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(data){  
      $('.btn_addCart').click(function(){  
           var product_id = $('#product_id').val();
           var product_name = $('#product_name').val();  
           var product_price = $('#product_price').val();  
           var product_quantity = $('.number_cart').val();  
           var action = "add";
           if(product_quantity > 0)  
           {                  
                 $.ajax({  
                     url:"/functions/ajax.php?action=add_cart",  
                     method:"POST",
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                              window.location = '/gio-hang';
                          }else{
                              location.reload();
                          }  
                     },
                     error: function () {
                        alert('loi');
                     }  
                });  

           }  
           else  
           {  
                alert("Mời bạn nhập số lượng sản phẩm");
           }  
      });
   });
 </script>
<link rel="stylesheet" href="/plugin/slickNav/slicknav.css"/>
<link rel="stylesheet" href="/plugin/slick/slick.css"/>
<link rel="stylesheet" href="/plugin/slick/slick-theme.css"/>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_MPTOTO_0003.php";?>
<div class="gb-chitiet_sanpham_mptoto">
    <div class="gb-chitiet_sanpham_mptoto-body">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="gb-chitiet_sanpham_mptoto-left">

                <!--chi titest sản phẩm-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="gb-chitiet_sanpham_MPTOTO_left-img">
                            <div class="uni-single-car-gallery-images">
                                <div class="slider slider-for">
                                        <?php if (!empty($row['product_des2'])) { ?>
                                        <div class="slide-item">
                                            <?= $video_youtube ?>
                                        </div>
                                        <?php } ?>
                                      <div class="slide-item">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/<?= $image['image'] ?>">
                                        </div>
                                        
                                    <?php 
                                        $d = 0;
                                        foreach ($img_sub as $item) {
                                            $d++;
                                            $image = json_decode($item, true);
                                    ?>

                                        <div class="slide-item">
                                            <img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/<?= $image['image'] ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="slider slider-nav">
                                        <?php if (!empty($row['product_des2'])) { ?>
                                        <div class="slide-item">
                                            <?php if (empty($row['product_img_video'])) { ?>
                                              <img src="/images/youtube.png" alt="" class="img-responsive img1" data-zoom-image="/images/youtube.png">
                                            <?php } else { ?>
                                              <img src="/images/<?= $row['product_img_video'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/youtube.png">
                                            <?php } ?>
                                            
                                        </div>
                                        <?php } ?>
                                  <div class="slide-item">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/<?= $image['image'] ?>">
                                        </div>
                                        
                                    <?php 
                                        $d = 0;
                                        foreach ($img_sub as $item) {
                                            $d++;
                                            $image = json_decode($item, true);
                                    ?>
                                        <div class="slide-item">
                                            <img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/<?= $image['image'] ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gb-chitiet_sanpham_MPTOTO_left-info">
                            <h1 class="product_title entry-title"><?= $rowLang['lang_product_name'] ?></h1>
                            <!-- .description -->
                            <div class="description">
                                <?= $rowLang['lang_product_des'] ?>
                            </div>
                            <!--ENTRY PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0002_1.php";?>
                            <div style="margin-top: 15px;">
                              <?php //include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0018.php";?>
                            </div>
                            <div class="gb-divider"></div>
                            <!--CART-->
                            <?php include DIR_CART."MS_CART_MPTOTO_0003.php";?>
                            <div class="gb-divider"></div>
                            <!--SHARE-->
                            <?php //include DIR_CHARACTERISTICS."MS_CHARACTERISTICS_MPTOTO_0001.php";?>

                        </div>
                    </div>
                </div>

                

            </div>
            </div>
            <div class="col-md-3">
              <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0011.php";?>
              <!-- <br> -->
              <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0012.php";?>
              <?php //include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0013.php";?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              
              <!--THÔNG SỐ VÀ MÔ TẢ-->
                <div class="gb-thongso-mota">
                    <div class="uni-shortcode-tabs-default">
                        <div class="uni-shortcode-tab-3">
                            <div class="tabbable-panel">
                                <div class="tabbable-line">
                                    <ul class="nav nav-tabs ">
                                        <li  class="alid active">
                                            <a  data-toggle="tab" onclick="a()" >Mô tả sản phẩm</a> <!-- href="#tab_default_32" -->
                                        </li>
                                        <!-- <li  class="alid ">
                                            <a data-toggle="tab" onclick="b()">Đánh giá</a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_default_32">
                                            <?= $rowLang['lang_product_content'] ?>
                                        </div>
                                        <div class="tab-pane" id="tab_default_33">
                                          <?php //include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0017.php";?>
                                        </div>
                                    </div>
                                   <!--  <div class="tab-content">
                                        
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--bình luận-->
                <?php include DIR_EMAIL."MS_EMAIL_MPTOTO_0002.php";?>
                
            </div>
            <div class="col-md-3">
              <?php include DIR_SIDEBAR."MS_SIDEBAR_HOPLUC_0004.php";?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <!--realte product-->
                <?php include DIR_PRODUCT."MS_PRODUCT_MPTOTO_0009.php";?>
            </div>
          </div>

            
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {
      $(".tabbable-line li").click(function () {
          $("alid").removeClass("active");
          $("alid").addClass("active");        
});
});
  function a(){
    $(".tab-pane").removeClass("active");
    $("#tab_default_32").addClass("active");
  }
  function b(){
    $(".tab-pane").removeClass("active");
    $("#tab_default_33").addClass("active");
  }
</script>
<script src="/plugin/slick/scripts.js"></script>
<script src="/plugin/slick/slick.js"></script>
<script src="/plugin/slickNav/jquery.slicknav.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            slide: 'div'
        });
    });
</script>