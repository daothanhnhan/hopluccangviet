<?php 
	$price_khoang = array(
					'trống',
					'Dưới 1.000.000',
					'1.000.000 - 5.000.000',
					'5.000.000 - 10.000.000',
					'10.000.000 - 50.000.000',
					'50.000.000 - 100.000.000',
					'Trên 100.000.000',
			);
	unset($price_khoang[0]);
?>
<style>
.thuong-hieu ul li {
	padding: 10px;
}
</style>
<div class="sidebar-home-procat thuong-hieu">
	<div class="gb-timkiem-sidebar-ruouvang">
		<h3 class="widget-title-sidebar-ruouvang" style="margin-bottom: 0;margin-top: 10px;">Theo giá</h3>
	</div>
	
	<ul>
		<?php 
		foreach ($price_khoang as $k => $item) { 
			
		?>
		<li>
			<input type="checkbox" name="" onclick="price_khoang(<?= $k ?>)" <?= $k==$_SESSION['price_khoang'] ? 'checked' : '' ?> >&nbsp;&nbsp; <?= $item ?>
		</li>
		<?php } ?>
		
	</ul>
</div>

<script>
	function price_khoang (id) {
		const xhttp = new XMLHttpRequest();
		  xhttp.onload = function() {
		    // document.getElementById("demo").innerHTML = this.responseText;
		    	location.reload();
		    }
		  xhttp.open("GET", "/functions/ajax/price_khoang.php?price_khoang="+id, true);
		  xhttp.send();
	}
</script>