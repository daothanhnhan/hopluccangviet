<style>

</style>
<script src="/js/jquery.vticker.js" type="text/javascript" charset="utf-8" async defer></script>
<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_MPTOTO_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header_mptoto">
        <div class="gb-topheader-mptoto hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <div class="gb-header-top_mptoto-left">
                            
                            <ul>
                                <!-- <li> <?= $rowConfig['web_des'] ?></li> -->
                                <!-- <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $rowConfig['content_home1'] ?></li> -->
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <?= $rowConfig['content_home2'] ?></li>
                                <li><i class="fa fa-phone-square" aria-hidden="true"></i> <?= $rowConfig['content_home3'] ?></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="gb-topheader-mptoto-right">
                            <ul>
                                <li><?php include DIR_CART."MS_CART_MPTOTO_0004.php";?></li>
                                <!-- <li>
                                    <a href="/lien-he">
                                        <div class="nhapnhay">
                                           Đăng ký ngay
                                       </div>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header_mptoto-sticky hidden-xs sticky-menu">
        	<div class="gb-header_mptoto-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-mptoto">
                            <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gb-header_mptoto-search">
                            <?php include DIR_SEARCH."MS_SEARCH_MPTOTO_0001.php";?>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="gb-header-between-hotline">
                            <p>Hotline:  <?= $rowConfig['content_home3'] ?></p>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="gb-header-between-hotline header-main-nav">
                            <div id="minicart" class="header-cart"><a class="name" href="/gio-hang" title="Giỏ hàng" rel="nofollow"><span class="header_icon"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 61" id="Layer_61"><path class="cls-1" d="M10,20a1,1,0,0,1-1-.8L6.66,7.41A3,3,0,0,0,3.72,5H2A1,1,0,0,1,2,3H3.72a5,5,0,0,1,4.9,4L11,18.8A1,1,0,0,1,10.2,20Z"></path><path class="cls-1" d="M11,27H9.14a4.14,4.14,0,0,1-.38-8.26l18.41-1.67L28.78,9H8A1,1,0,0,1,8,7H30a1,1,0,0,1,.77.37A1,1,0,0,1,31,8.2l-2,10a1,1,0,0,1-.89.8L8.94,20.74A2.13,2.13,0,0,0,9.14,25H11a1,1,0,0,1,0,2Z"></path><path class="cls-1" d="M26,30a4,4,0,1,1,4-4A4,4,0,0,1,26,30Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,26,24Z"></path><path class="cls-1" d="M14,30a4,4,0,1,1,4-4A4,4,0,0,1,14,30Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,14,24Z"></path><path class="cls-1" d="M23,27H17a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"></path></g></svg></span><span class="text">Giỏ hàng</span><span id="CartCount">0</span></a></div>

                            <div class="dropdown user-account medium--hide small--hide header-cart" rel="nofollow" id="accountmanager"><a href="/dang-nhap" title="Đăng nhập" rel="nofollow"><span class="header_icon"><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polyline fill="none" points="   649,137.999 675,137.999 675,155.999 661,155.999  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polyline><polyline fill="none" points="   653,155.999 649,155.999 649,141.999  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polyline><polyline fill="none" points="   661,156 653,162 653,156  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polyline></g><path d="M21.947,16.332C23.219,14.915,24,13.049,24,11c0-4.411-3.589-8-8-8s-8,3.589-8,8s3.589,8,8,8  c1.555,0,3.003-0.453,4.233-1.224c4.35,1.639,7.345,5.62,7.726,10.224H4.042c0.259-3.099,1.713-5.989,4.078-8.051  c0.417-0.363,0.46-0.994,0.097-1.411c-0.362-0.416-0.994-0.46-1.411-0.097C3.751,21.103,2,24.951,2,29c0,0.553,0.448,1,1,1h26  c0.553,0,1-0.447,1-1C30,23.514,26.82,18.615,21.947,16.332z M10,11c0-3.309,2.691-6,6-6s6,2.691,6,6s-2.691,6-6,6S10,14.309,10,11z "></path></svg></span><span class="text">Đăng nhập</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header_mptoto-bottom">
            <div class="container">
                <div class="gb-header_mptoto-menu">
                    <?php include DIR_MENU."MS_MENU_MPTOTO_0001.php";?>
                </div>
            </div>
        </div>
        </div>

        <div class="hidden-sm hidden-md hidden-lg header-mobile">
            <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive" width="100"></a>
            <?php include DIR_SEARCH."MS_SEARCH_MPTOTO_0001.php";?>
            <div id="minicart" class="header-cart"><a class="name" href="/gio-hang" title="Giỏ hàng" rel="nofollow"><span class="header_icon"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 61" id="Layer_61"><path class="cls-1" d="M10,20a1,1,0,0,1-1-.8L6.66,7.41A3,3,0,0,0,3.72,5H2A1,1,0,0,1,2,3H3.72a5,5,0,0,1,4.9,4L11,18.8A1,1,0,0,1,10.2,20Z"></path><path class="cls-1" d="M11,27H9.14a4.14,4.14,0,0,1-.38-8.26l18.41-1.67L28.78,9H8A1,1,0,0,1,8,7H30a1,1,0,0,1,.77.37A1,1,0,0,1,31,8.2l-2,10a1,1,0,0,1-.89.8L8.94,20.74A2.13,2.13,0,0,0,9.14,25H11a1,1,0,0,1,0,2Z"></path><path class="cls-1" d="M26,30a4,4,0,1,1,4-4A4,4,0,0,1,26,30Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,26,24Z"></path><path class="cls-1" d="M14,30a4,4,0,1,1,4-4A4,4,0,0,1,14,30Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,14,24Z"></path><path class="cls-1" d="M23,27H17a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"></path></g></svg></span><span class="text"></span><span id="CartCount">0</span></a></div>
            <div style="width: 50px">
                
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>