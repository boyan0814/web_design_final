<?php
	$conn = mysqli_connect("localhost","root","jenny258789","shop");

	if (!$conn) {
		echo "Fail<br>";
	}else{
		echo "Success<br>";
	} 

	$account = $_POST["account"];
	$password = md5($_POST["password"]);
	$rpassword = md5($_POST["rpassword"]);
	$hint = $_POST['forget_question'];
	$hintAns = $_POST['forget_answer'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$cel = $_POST['cel'];
	$address = $_POST['address'];

	$sql = "select username from members where username='$account'";
	$result = mysqli_query($conn,$sql); 
	$num = mysqli_num_rows($result);

	if($num){
		echo "<script>alert('此帳號已被使用!');parent.location.href='member_create.php';</script>";
	}

	if($password!=$rpassword){
		echo "<script>alert('確認密碼輸入錯誤!');parent.location.href='member_create.php';</script>";
	}else{
		$sql = "insert into members(username,password,hint,hintAns,email,name,phone,address) values
		('$account','$password','$hint','$hintAns','$email','$name','$cel','$address')"; //add
		echo $sql;
		mysqli_query($conn,$sql); //設query
		ob_start();
		setcookie("username",$_POST["account"],time()+3600);
		setcookie("password",$_POST["password"],time()+3600);
		echo "<script>alert('成功註冊!');parent.location.href='main.php';</script>";
	}	
?>