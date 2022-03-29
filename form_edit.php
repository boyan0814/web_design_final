<?php
	$conn = mysqli_connect("localhost","root","jenny258789","shop");

	if (!$conn) {
		echo "Fail<br>";
	}else{
		echo "Success<br>";
	} 

	$account = $_COOKIE["username"];
	$password = md5($_POST["password"]);
	$rpassword = md5($_POST["rpassword"]);
	$hint = $_POST['forget_question'];
	$hintAns = $_POST['forget_answer'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$cel = $_POST['cel'];
	$address = $_POST['address'];

	if($password!=$rpassword){
		echo "<script>alert('確認密碼輸入錯誤!');parent.location.href='member_create.php';</script>";
	}else{
		$sql = "update members set password='$password', hint='$hint', hintAns='$hintAns', email='$email', name='$name',phone='$cel',address='$address' where username='$account'"; //add
		echo $sql;
		mysqli_query($conn,$sql); //設query
		echo "<script>alert('成功修改!');parent.location.href='main.php';</script>";
	}	
?>