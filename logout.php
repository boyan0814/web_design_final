<?php 
	ob_start();
	setcookie("username","",time()+3600);
	setcookie("password","",time()+3600);
	echo "<script> alert('成功登出!');parent.location.href='main.php'; </script>";
 ?>