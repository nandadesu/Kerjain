<?php
	include "../connect_user.php";
	
	$id=$_GET['id'];
	$query="DELETE FROM products WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if($result){
		header("location: crud_product.php");
		exit;
	}else{
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
?>