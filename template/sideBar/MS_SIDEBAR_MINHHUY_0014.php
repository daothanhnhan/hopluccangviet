<?php 
	$video_may = $action->getList('service', '', '', 'service_id', 'asc', '', '', '');
?>
<style>

</style>
<div class="sidebar-page-tin-tuc">
	<h3 class="widget-title-sidebar-ruouvang title-sidebar-video-may-tin-tuc">VIDEOS MÁY</h3>
	<ul>
		<?php 
		foreach ($video_may as $item_1) { 
			
		?>
		<li>
			<a href="/<?= $item_1['friendly_url'] ?>" title=""><?= $item_1['service_name'] ?></a>
			
		</li>
		<?php } ?>
		
	</ul>
</div>
<br>