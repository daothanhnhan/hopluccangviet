<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM regMember WHERE regMember_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: index.php?page=dang-ky');
?>