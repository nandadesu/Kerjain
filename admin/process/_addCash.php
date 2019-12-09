<?php
	include "../connect_user.php";
	
    $id=$_GET['id'];
    $money=$_GET['money'];
    $money += 250000;
	$query="UPDATE users SET money='$money' WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if($result){
		header("location: crud_user.php");
		exit;
	}else{
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
?>