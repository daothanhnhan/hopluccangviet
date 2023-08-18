<?php 
	$sidebar_home_procat = $action->getList('productcat', 'productcat_parent', '0', 'productcat_sort_order', 'asc', '', '', '');
?>
<style>

</style>
<div class="sidebar-home-procat" style="margin-bottom: 20px;">
	<div class="gb-timkiem-sidebar-ruouvang">
		<h3 class="widget-title-sidebar-ruouvang" style="margin-bottom: 0;margin-top: 10px;">DANH MỤC SẢN PHẨM</h3>
	</div>
	
	<ul>
		<?php 
		foreach ($sidebar_home_procat as $item_1) { 
			$procat_2 = $action->getList('productcat', 'productcat_parent', $item_1['productcat_id'], 'productcat_id', 'asc', '', '', '');
		?>
		<li>
			<a href="/<?= $item_1['friendly_url'] ?>" title=""><img src="/images/<?= $item_1['productcat_sub'] ?>" alt="icon"> <?= $item_1['productcat_name'] ?></a>
			<?php if (count($procat_2) != 0) { ?>
			<ul>
				<?php foreach ($procat_2 as $item_2) { ?>
				<li><a href="/<?= $item_2['friendly_url'] ?>" title=""><?= $item_2['productcat_name'] ?></a></li>
				<?php } ?>
			</ul>
			<?php } ?>
		</li>
		<?php } ?>
		
	</ul>
</div>
