<?php 
	$thuong_hieu = $action->getList('trademark', '', '', 'id', 'asc', '', '', '');
?>
<style>
.thuong-hieu ul li {
	padding: 10px;
}
</style>
<div class="sidebar-home-procat thuong-hieu">
	<div class="gb-timkiem-sidebar-ruouvang">
		<h3 class="widget-title-sidebar-ruouvang" style="margin-bottom: 0;margin-top: 10px;">Thương hiệu</h3>
	</div>
	
	<ul>
		<?php 
		foreach ($thuong_hieu as $item) { 
			
		?>
		<li>
			<input type="checkbox" name="" onclick="brand(<?= $item['id'] ?>)" <?= $item['id']==$_SESSION['brand'] ? 'checked' : '' ?> >&nbsp;&nbsp; <?= $item['name'] ?>
		</li>
		<?php } ?>
		
	</ul>
</div>

<script>
	function brand (id) {
		const xhttp = new XMLHttpRequest();
		  xhttp.onload = function() {
		    // document.getElementById("demo").innerHTML = this.responseText;
		    	location.reload();
		    }
		  xhttp.open("GET", "/functions/ajax/brand.php?brand="+id, true);
		  xhttp.send();
	}
</script>
