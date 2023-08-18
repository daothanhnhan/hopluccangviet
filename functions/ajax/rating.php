<?php 
	include_once dirname(__FILE__)."/../database.php";
	$star = $_GET['star'];
	$id = $_GET['id'];
	$ip = $_GET['ip'];

	$sql = "SELECT * FROM rating WHERE address_ip = '$ip' AND product_id = $id";
	$result = mysqli_query($conn_vn, $sql) or die('loi');
	$num = mysqli_num_rows($result);
	if ($num == 0) {
		if ($star == 'star_1') {
			$sql = "INSERT INTO rating (product_id, address_ip, star_1, star_2, star_3, star_4, star_5) VALUES ($id, '$ip', 1, 0, 0, 0, 0)";
		}
		if ($star == 'star_2') {
			$sql = "INSERT INTO rating (product_id, address_ip, star_1, star_2, star_3, star_4, star_5) VALUES ($id, '$ip', 0, 1, 0, 0, 0)";
		}
		if ($star == 'star_3') {
			$sql = "INSERT INTO rating (product_id, address_ip, star_1, star_2, star_3, star_4, star_5) VALUES ($id, '$ip', 0, 0, 1, 0, 0)";
		}
		if ($star == 'star_4') {
			$sql = "INSERT INTO rating (product_id, address_ip, star_1, star_2, star_3, star_4, star_5) VALUES ($id, '$ip', 0, 0, 0, 1, 0)";
		}
		if ($star == 'star_5') {
			$sql = "INSERT INTO rating (product_id, address_ip, star_1, star_2, star_3, star_4, star_5) VALUES ($id, '$ip', 0, 0, 0, 0, 1)";
		}
		
	} else {
		if ($star == 'star_1') {
			$sql = "UPDATE rating SET star_1 = 1, star_2 = 0, star_3 = 0, star_4 = 0, star_5 = 0 WHERE address_ip = '$ip' AND product_id = $id";
		}
		if ($star == 'star_2') {
			$sql = "UPDATE rating SET star_1 = 0, star_2 = 1, star_3 = 0, star_4 = 0, star_5 = 0 WHERE address_ip = '$ip' AND product_id = $id";
		}
		if ($star == 'star_3') {
			$sql = "UPDATE rating SET star_1 = 0, star_2 = 0, star_3 = 1, star_4 = 0, star_5 = 0 WHERE address_ip = '$ip' AND product_id = $id";
		}
		if ($star == 'star_4') {
			$sql = "UPDATE rating SET star_1 = 0, star_2 = 0, star_3 = 0, star_4 = 1, star_5 = 0 WHERE address_ip = '$ip' AND product_id = $id";
		}
		if ($star == 'star_5') {
			$sql = "UPDATE rating SET star_1 = 0, star_2 = 0, star_3 = 0, star_4 = 0, star_5 = 1 WHERE address_ip = '$ip' AND product_id = $id";
		}
	}
	$result = mysqli_query($conn_vn, $sql);
	echo $star;
?>