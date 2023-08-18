<?php
    $page = new action_page();
    //echo($_GET['page']);
    $detail_page = $page->getPageLangDetail_byUrl($_GET['page'], $lang);
    //var_dump($detail_page);
?>
<div class="gb-home-introduct_mptoto">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gb-home-introduct_mptoto-left">
                    <h2><?= $detail_page['lang_page_name'] ?></h2>
                    <p>
                        <?= $detail_page['lang_page_content'] ?>
                    </p>
                    <!-- <a href="/<?= $detail_page['friendly_url'] ?>" class="xemtiep_mptoto">Xem tiếp</a> -->
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9 hidden">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0006.php";?>
                <br>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0007.php";?>
                <br>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0003.php";?>
                <br>
                
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MINHHUY_0005.php";?>
            </div>
            <!-- <div class="col-sm-6">
                <div class="gb-home-introduct_mptoto-right">
                    <img src="/images/<?= $detail_page['page_img'] ?>" alt="" class="img-responsive">
                </div>
            </div> -->
        </div>
    </div>
</div>