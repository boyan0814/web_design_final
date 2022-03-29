<?php 
	// echo $_GET['delete'];
	$conn = mysqli_connect('localhost','root','jenny258789','shop');
	$id=$_GET['delete'];
	$delete="delete from goods where id='$id'";
	echo $delete;
	mysqli_query($conn,$delete);
	header("Location: goods.php");
 ?>