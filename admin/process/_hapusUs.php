<?php
	include "../connect_user.php";
	
	$id=$_GET['id'];
	$query="DELETE FROM users WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if($result){
		header("location: crud_user.php");
		exit;
	}else{
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
?>