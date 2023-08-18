<?php 
	session_start();
	$price_khoang = $_GET['price_khoang'];

	if (!isset($_SESSION['price_khoang'])) {
		$_SESSION['price_khoang'] = $price_khoang;
	} else {
		if ($_SESSION['price_khoang'] == "") {
			$_SESSION['price_khoang'] = $price_khoang;
		} else {
			if ($price_khoang != $_SESSION['price_khoang']) {
				$_SESSION['price_khoang'] = $price_khoang;
			} else {
				$_SESSION['price_khoang'] = "";
			}
			
		}
	}
?>