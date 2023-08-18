<?php 
	session_start();
	$price_percent = $_GET['price_percent'];

	if (!isset($_SESSION['price_percent'])) {
		$_SESSION['price_percent'] = $price_percent;
	} else {
		if ($_SESSION['price_percent'] == "") {
			$_SESSION['price_percent'] = $price_percent;
		} else {
			if ($price_percent != $_SESSION['price_percent']) {
				$_SESSION['price_percent'] = $price_percent;
			} else {
				$_SESSION['price_percent'] = "";
			}
			
		}
	}
?>