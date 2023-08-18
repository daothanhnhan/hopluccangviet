<?php 
	$price_percent = $action->getList('price_percent', '', '', 'id', 'asc', '', '', '');
?>
<style>
.thuong-hieu ul li {
	padding: 10px;
}
</style>
<div class="sidebar-home-procat thuong-hieu">
	<div class="gb-timkiem-sidebar-ruouvang">
		<h3 class="widget-title-sidebar-ruouvang" style="margin-bottom: 0;margin-top: 10px;">Giảm giá</h3>
	</div>
	
	<ul>
		<?php 
		foreach ($price_percent as $item) { 
			
		?>
		<li>
			<input type="checkbox" name=""onclick="price_percent(<?= $item['name'] ?>)" <?= $item['name']==$_SESSION['price_percent'] ? 'checked' : '' ?> >&nbsp;&nbsp; <?= $item['name'] ?>%
		</li>
		<?php } ?>
		
	</ul>
</div>

<script>
	function price_percent (id) {
		const xhttp = new XMLHttpRequest();
		  xhttp.onload = function() {
		    // document.getElementById("demo").innerHTML = this.responseText;
		    	location.reload();
		    }
		  xhttp.open("GET", "/functions/ajax/price_percent.php?price_percent="+id, true);
		  xhttp.send();
	}
</script>