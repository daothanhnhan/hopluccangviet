<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM lien_he WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=lien-he');
?>