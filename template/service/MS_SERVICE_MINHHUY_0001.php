<?php include DIR_BREADCRUMBS . "MS_BREADCRUMS_MPTOTO_0002.php"; ?>
<?php 
$action = new action();
$action_service = new action_service();
if (isset($_GET['slug']) && $_GET['slug'] != '') {
    $slug = $_GET['slug'];
    $rowCatLang = $action_service->getServiceCatLangDetail_byUrl($slug, $lang);
    $rowCat = $action_service->getServiceCatDetail_byId($rowCatLang[$nameColIdServiceCat_serviceCatLanguage], $lang);
    if (newsCatPageHasSub) {
        $rows = $action_service->getServiceList_byMultiLevel_orderServiceId($rowCat[$nameColId_serviceCat], 'desc', $trang, 6, $slug);
    } else {
        $rows = $action_service->getServiceCat_byServiceCatIdParentHighest($rowCat[$nameColId_serviceCat], 'asc');
    }
} else $rows = $action->getList($nameTable_service, '', '', $nameColId_service, 'desc', $trang, 6, 'service-cat');
?>
<div class="gb-page-blog_mptoto">
    <div class="container">
        <div class="row">
            <?php if (newsCatPageHasSub) { ?>
                <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang; ?>">
                <input type="hidden" name="url_lang" value="<?php echo $url_lang; ?>" id="url_lang"> 
                <div class="col-md-8">
                    <div class="row">
                        <?php 
                        $d = 0;
                        foreach ($rows['data'] as $item) {
                            $d++;
                            $action_service1 = new action_service();
                            $rowLang1 = $action_service1->getServiceLangDetail_byId($item['service_id'], $lang);
                            $row1 = $action_service1->getServiceDetail_byId($item['service_id'], $lang);
                            ?>
                            <div class="col-sm-6">
                                <div class="gb-news-blog_mptoto-item">
                                    <div class="gb-news-blog_mptoto-item-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['service_img'] ?>" class="img-responsive">
                                        </a>
                                        <div class="caption caption-large">
                                            <time class="the-date"><?= date('d-m-Y', strtotime($row1['service_create_date'])) ?></time>
                                        </div>
                                    </div>
                                    <div class="gb-news-blog_mptoto-item-text">
                                        <div class="gb-news-blog_mptoto-item-title">
                                            <h3>
                                                <a href="/<?= $rowLang1['friendly_url'] ?>">
                                                    <?= $rowLang1['lang_service_name'] ?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="gb-news-blog_mptoto-item-text-des">
                                            <p><?= $rowLang1['lang_service_des'] ?></p>
                                        </div>
                                    </div>
                                    <div class="gb-news-blog_mptoto-item-button">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        if ($d%2==0) {
                            echo '<hr style="width:100%;border:0;" />';
                        }
                    } ?>
                    </div>
                     <?php include DIR_PAGINATION . "MS_PAGINATION_MPTOTO_0001.php"; ?>
                </div>
            <?php 
        } ?>
                <div class="col-md-4">
                    <?php include DIR_SIDEBAR . "MS_SIDEBAR_MINHHUY_0014.php"; ?>
                    <?php include DIR_SIDEBAR . "MS_SIDEBAR_MPTOTO_0001.php"; ?>
                    <?php include DIR_SIDEBAR . "MS_SIDEBAR_MPTOTO_0002.php"; ?>
                    <?php include DIR_SIDEBAR . "MS_SIDEBAR_MPTOTO_0003.php"; ?>
                    <?php //include DIR_SIDEBAR . "MS_SIDEBAR_MPTOTO_0010.php"; ?>
                    <?php //include DIR_SIDEBAR . "MS_SIDEBAR_MPTOTO_0011.php"; ?>
                    <?php //include DIR_SIDEBAR . "MS_SIDEBAR_MINHHUY_0015.php"; ?>
                </div>
        </div>
    </div>
</div>