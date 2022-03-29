<?php 
		$conn = mysqli_connect("localhost","root","jenny258789","shop");
		
		if($_POST['account']!="" && $_POST['password']!=""){

			$account = $_POST['account'];
			$password = md5($_POST['password']);

			$sql = "select username from members where username='$account' and password='$password'";
			$result = mysqli_query($conn,$sql); 
			$num = mysqli_num_rows($result);
			if($num){
				ob_start();
				setcookie("username",$_POST["account"],time()+3600);
				setcookie("password",$_POST["password"],time()+3600);
				echo "<script>alert('成功登入!');parent.location.href='main.php';</script>";
			} else{
				echo "<script>alert('登入失敗，不存在此使用者');parent.location.href='member_login.php';</script>";
			}
		}else{
			echo "<script>alert('帳號密碼不可為空!');parent.location.href='member_login.php';</script>";
		}
?>	
		