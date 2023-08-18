<?php 
    $loai_sp = $action->getList('productcat', 'productcat_parent', '0', 'productcat_id', 'asc', '', '', '');
?>
<style>
.sidebar-list-productcat a {
    color: #000;
    font-size: 14px;
    margin-bottom: 10px;
    display: block;
}
</style>
<div class="gb-timkiem-sidebar-ruouvang widget-sidebar sidebar-list-productcat">
    <aside class="widget">
        <h3 class="widget-title-sidebar-ruouvang">Danh mục sản phẩm</h3>
        <div class="widget-content">
            <?php foreach ($loai_sp as $item) { ?>
            <div class="row">
                <div class="col-xs-12">
                    <a href="/<?= $item['friendly_url'] ?>"><?= $item['productcat_name'] ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </aside>
</div>