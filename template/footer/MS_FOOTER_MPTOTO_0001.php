<?php
$cs1 = $action -> GetDetail('page','page_id',67);
$cs2 = $action -> GetDetail('page','page_id',68);
$cs3 = $action -> GetDetail('page','page_id',69);
$cs4 = $action -> GetDetail('page','page_id',70);

    $tu_khoa = $action->getList('productcat', '', '', 'productcat_id', 'desc', '', '', '');
?>
<style>
footer .info-design {
    background: #f1f1f1;
    padding: 20px;
}
</style>
<footer class="site-footer footer-default">
    <div class="footer-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Thông tin liên hệ</div>
                            <p class="name-web"><?= $rowConfig['web_name'] ?></p>
                            <div class="widget-content">
                                <div class="foote-lienhe-mptoto" style="margin-bottom: 15px">
                                     <ul>
                                        <li><span>Đ/c:</span> <?= $rowConfig['content_home4'] ?></li>
                                        <li><span>Phone:</span> <?= $rowConfig['content_home3'] ?> & <?= $rowConfig['content_home6'] ?></li>
                                        <!-- <li><span>FAX:</span> <?= $rowConfig['content_home3'] ?></li> -->
                                        <li><span>Email:</span> <?= $rowConfig['content_home2'] ?></li>
                                        <li><?= $_SERVER['SERVER_NAME'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Thông tin chung</div>
                            <div class="widget-content">
                                <div class="foote-lienhe-mptoto" style="margin-bottom: 15px">
                                     <ul>
                                        <li><a href="/gioi-thieu" title="">Giới thiệu</a></li>
                                        <li><a href="/san-pham" title="">Sản phẩm</a></li>
                                        <li><a href="/tin-tuc" title="">Tin tức</a></li>
                                        <li><a href="/lien-he" title="">Liên hệ</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Hỗ trợ khách hàng</div>
                            <div class="widget-content">
                                <div class="foote-lienhe-mptoto" style="margin-bottom: 15px">
                                     <ul>
                                        <li><a href="" title="">Cam Kết</a></li>
                                        <li><a href="" title="">Hình Thức Thanh Toán</a></li>
                                        <li><a href="" title="">Chính Sách</a></li>
                                        <li><a href="" title="">Dịch Vụ Và Hô Trợ</a></li>
                                        <li><a href="" title="">Hướng Dẫn Mua Hàng</a></li>
                                        <li><a href="" title="">Trung Tâm Bảo Hành</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Fanpage</div>
                            <div class="widget-content">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/100093577340704/&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-xs-12">
                    <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Theo dõi shop</div>
                            <div class="textwidget">
                                <ul class="list-socials">
                                    <li><a href="https://www.facebook.com/thietbiminhhuy/" target="_blank" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/@minhhuythietbi9050" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.youtube.com/@minhhuythietbi9050" title=""><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>

                    <hr>
                </div>
            </div> -->

            <div class="row tu-khoa">
                <div class="col-xs-12">
                    <!-- <div class="footer-main-content-element">
                        <aside class="widget-footer">
                            <div class="widget-title uni-uppercase">Từ khóa thông dụng</div>
                            <div class="textwidget">
                                <?php foreach ($tu_khoa as $item) { ?>
                                    <a href="/<?= $item['friendly_url'] ?>" title=""><?= $item['productcat_name'] ?></a>
                                <?php } ?>
                            </div>
                        </aside>
                    </div>

                    <hr> -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <p class="copyright-text">© Copyright 2017. All rights reserved. Design by Cafelink</p>
            </div>
        </div>
    </div> -->
    <div class="info-design">
        <p class="text-center">© Copyright 2015. All rights reserved. Design by CAFE LINK VIỆT NAM</p>
    </div>
</footer>
<!-- <style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 30px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/100093577340704" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://Cafelink.org" target="_blank" rel="sponsored">Powered by CFL</a> </div><div id="fb-root"></div></div><a href="https://m.me/100093577340704" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script> -->

<script type="text/javascript">
    function load_url (id, name, price) {
        var name1 = encodeURIComponent(name);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           // window.location.href = "/gio-hang";
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                  window.location = '/gio-hang';
              }else{
                  // location.reload();
              }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name1+"&product_price="+price+"&product_quantity=1&action=add&product_size=");
        // xhttp.send();        
    }
</script>

<style>
.zalo-btn-2 {
    position: fixed;
    right: 10px;
    bottom: 60px;
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
}
.zalo-btn-2 img {
    width: auto;
    height: auto;
    max-width: 23px;
    max-height: 23px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -webkit-transform: translate3d(-50%, -50%, 0);
}
</style>
<!-- <a target="_blank" href="https://zalo.me/<?= preg_replace("/[^0-9]/", "",$rowConfig['content_home3']); ?>" id="devvn_contact_3" class="zalo-btn-2" title="Chat zalo" style="background-color: #008fe5;bottom: 160px;">
    <img width="60" height="60" src="/images/icon-zalo1.png" class="attachment-full size-full" alt=""><br>
</a>

<a target="_blank" href="https://zalo.me/<?= preg_replace("/[^0-9]/", "",$rowConfig['content_home6']); ?>" id="devvn_contact_3" class="zalo-btn-2" title="Chat zalo" style="background-color: #008fe5;bottom: 110px;">
    <img width="60" height="60" src="/images/icon-zalo1.png" class="attachment-full size-full" alt=""><br>
</a> -->




<style>
.aml_dk-wrap {
    font-size: 14px !important;
    position: fixed;
    z-index: 999;
    bottom: 54px;
    overflow: visible !important;
    transition: transform 0.2s ease 0s;
}
.aml_dk-wrap.aml_dk-bottom-right {
    right: 0;
}
div.aml_dk-wrap div {
    overflow: visible !important;
}
.aml_dk-wrap .aml_dk-flex-container {
    flex-direction: column;
    display: flex;
    justify-content: center;
}
.aml_dk-flex-container > a {
    width: 48px!important;
    height: 48px!important;
    margin: 3px!important;
    text-align: center;
    background-repeat: no-repeat;
    background-position: center center;
    cursor: pointer;
    position: relative;
    overflow: visible !important;
    background-size: 100%!important;
    border: 2px solid var(--white)!important;
    border-radius: 50%!important;
}
.aml-tooltip .aml-tooltiptext {
    visibility: hidden;
    font-size: 12px !important;
    line-height: 16px !important;
    text-align: center;
    white-space: nowrap;
    border-radius: 4px;
    padding: 8px;
    position: absolute;
    top: calc(50% - 16px);
    z-index: 1;
    opacity: 0;
    transition: opacity .5s;
}
.aml-tooltip .aml-tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
}
.aml_dk-channel-google-map {
    background-image: url(/images/widget_icon_map.svg);
}
.aml_dk-channel-click_to_call {
    background-image: url(/images/widget_icon_click_to_call.svg);
}
.aml_dk-channel-facebook {
    background-image: url(/images/widget_icon_messenger.svg);
}
.aml_dk-channel-zalo {
    background-image: url(/images/widget_icon_zalo.svg);
}
</style>
<div class="aml_dk-wrap aml_dk-bottom-right">
        <div class="aml_dk-flex-container">
            <a class="aml_dk-flex-item aml_dk-channel-google-map aml-tooltip" data-view="modal-xl" href="/lien-he" target="_blank" title="Địa chỉ mua hàng"><span class="aml-tooltiptext">Địa chỉ mua hàng</span></a>

            <a class="aml_dk-flex-item aml_dk-channel-click_to_call aml-tooltip" data-view="modal-md" href="tel:<?= $rowConfig['content_home3'] ?>" target="_blank" title="Hỗ trợ mua hàng"><span class="aml-tooltiptext">Hỗ trợ</span></a>

            <a class="aml_dk-flex-item aml_dk-channel-facebook aml-tooltip" href="https://m.me/100093577340704" target="_blank" title="Facebook Messenger"><span class="aml-tooltiptext">Facebook Messenger</span></a>

            <a class="aml_dk-flex-item aml_dk-channel-zalo aml-tooltip" href="https://zalo.me/<?= preg_replace("/[^0-9]/", "",$rowConfig['content_home3']); ?>" target="_blank" title="Chat với chúng tôi"><span class="aml-tooltiptext">Chat với chúng tôi qua Zalo</span></a>
        </div>
    </div>



<style>
.scrolltop {
    position: fixed;
    right: 3px;
    bottom: 5px;
    background: #fc5b09;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 1.25rem;
    color: #fff;
    line-height: 40px;
    text-align: center;
    display: none;
    cursor: pointer;
    z-index: 993;
    border: 2px solid #fff!important;
    box-shadow: 0 3px 5px rgb(0 0 0 / 10%);
}
</style>
<div class="scrolltop" style="display: block;"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
<script>
$(".scrolltop").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>


<script>
$( window ).on( "load", function() {

   $('#chuot-menu').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'fade',
        mousePause: true
   });

} );
</script>

<script src="/js/jquery.vticker.js" type="text/javascript" charset="utf-8" async defer></script>