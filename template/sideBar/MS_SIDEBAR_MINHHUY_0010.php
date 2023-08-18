<?php 
    $sidebar_videos = $action->getList('service', '', '', 'service_id', 'desc', '', '5', '');
?>
<style>

</style>
<div class="gb-timkiem-sidebar-ruouvang widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-ruouvang">VIDEOS sử dụng máy</h3>
        <div class="widget-content">
            <?php foreach ($sidebar_videos as $item) { ?>
            <div class="row sidebar-tin-tuc">
                <div class="col-xs-5">
                    <a href="/<?= $item['friendly_url'] ?>" title="">
                        <img src="/images/<?= $item['service_img'] ?>" alt="tin tức">
                    </a>
                </div>
                <div class="col-xs-7">
                    <a href="/<?= $item['friendly_url'] ?>" title=""><?= $item['service_name'] ?></a>
                    <p><i class="fa fa-clock-o"></i> <?= date('d/m/Y', strtotime($item['service_create_date'])) ?></p>
                </div>    
            </div>
            <?php } ?>
        </div>
    </aside>
</div>