<?php 
    $sidebar_chia_se = $action->getList('news', '', '', 'news_id', 'desc', '', '3', '');
?>
<style>

</style>
<div class="gb-timkiem-sidebar-ruouvang widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-ruouvang">CHIA SẺ KINH NGHIỆM</h3>
        <div class="widget-content">
            <?php foreach ($sidebar_chia_se as $item) { ?>
            <div class="row sidebar-tin-tuc">
                <div class="col-xs-5">
                    <a href="/<?= $item['friendly_url'] ?>" title="">
                        <img src="/images/<?= $item['news_img'] ?>" alt="tin tức">
                    </a>
                </div>
                <div class="col-xs-7">
                    <a href="/<?= $item['friendly_url'] ?>" title=""><?= $item['news_name'] ?></a>
                    <p><i class="fa fa-clock-o"></i> <?= date('d/m/Y', strtotime($item['news_created_date'])) ?></p>
                </div>    
            </div>
            <?php } ?>
        </div>
    </aside>
</div>