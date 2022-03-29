<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Member_create</title>
	<meta name="description" content="真正100% 來自韓國超高人氣品牌、最新流行商品的eyescream 時尚購物網站。EYESCREAM才能買到當季最受注目的韓系限定商品。">
	<meta name="keywords" content="ntust">
	<meta name="author" content="蔡博彥">
	<meta name="company" content="ntust">
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Right	s Reserved">
	<meta name="Distribution" content="Taiwan">
	<link rel="stylesheet" href="member_edit.css">
	
</head>
<body>
	<header>
		<div id="topnav">
			<li><a href="member_login.php" onmouseover="this.innerHTML='LOGIN';" onmouseout="this.innerHTML=
			'<?php 
				$LOGIN = "會員登入";
				if (isset($_COOKIE['username'])) {
					echo $_COOKIE['username'] . ' 已登入';
				}else{
					echo $LOGIN;
				}
			 ?>
			';">
			<?php 
				$LOGIN = "會員登入";
				if (isset($_COOKIE['username'])) {
					echo $_COOKIE['username'] . ' 已登入' . '<li><a href="member_edit.php">會員資料</a></li>'. '<li><a href="logout.php">登出</a></li>';
				}else{
					echo $LOGIN;
				}
			 ?>
			</a></li> 
			<li><a href="member_create.php" onmouseover="this.innerHTML='JOIN US';" onmouseout="this.innerHTML='會員註冊';">會員註冊</a></li>
			<li><a href="cart.php" onmouseover="this.innerHTML='CART';" onmouseout="this.innerHTML='購物車';">購物車</a></li>
			<li><a href="about_us.php" onmouseover="this.innerHTML='ABOUT US';" onmouseout="this.innerHTML='關於我們';">關於我們</a></li>
		</div>

		<div id="topmenu" class="container">
			<div id="logo"><a href="main.php"><img src="pic/220px-NTUST-Emblem.png"></a></div>
			<div id="menu">
				<li><a href="main.php"><img src="top_pic/1-1.jpg" onmouseover="this.src='top_pic/1-2.jpg';" onmouseout="this.src='top_pic/1-1.jpg';"></a></li>
				<li><img src="top_pic/3-1.jpg" onmouseover="this.src='top_pic/3-2.jpg';" onmouseout="this.src='top_pic/3-1.jpg';"></li>
				<li><img src="top_pic/2-1.jpg" onmouseover="this.src='top_pic/2-2.jpg';" onmouseout="this.src='top_pic/2-1.jpg';"></li>
				<li><img src="top_pic/8-1.jpg" onmouseover="this.src='top_pic/8-2.jpg';" onmouseout="this.src='top_pic/8-1.jpg';"></li>
				<li><img src="top_pic/4-1.jpg" onmouseover="this.src='top_pic/4-2.jpg';" onmouseout="this.src='top_pic/4-1.jpg';"></li>
				<li><img src="top_pic/5-1.jpg" onmouseover="this.src='top_pic/5-2.jpg';" onmouseout="this.src='top_pic/5-1.jpg';"></li>
				<li><img src="top_pic/6-1.jpg" onmouseover="this.src='top_pic/6-2.jpg';" onmouseout="this.src='top_pic/6-1.jpg';"></li>
				<li><img src="top_pic/7-1.jpg" onmouseover="this.src='top_pic/7-2.jpg';" onmouseout="this.src='top_pic/7-1.jpg';"></li>
				<li><img src="top_pic/9-1.jpg" onmouseover="this.src='top_pic/9-2.jpg';" onmouseout="this.src='top_pic/9-1.jpg';"></li>
			</div>
		</div>

		<div id="ad_pic">
			<div><p style="color: white">Event</p></div>
			<div id="ad_img"><img src="top_pic/hot-1.jpg"></div>
			<div id="ad_img"><img src="top_pic/lineQR.jpg"></div>
			<div id="ad_img"><img src="top_pic/mycart.jpg"></div>
			<div id="ad_img"><a href="#top"><img src="top_pic/btnTop.jpg"></a></div>
		</div>

		

		<div id="create">
			<div id="inbox">
				<h3>請輸入要修改之資料</h3>
				<form action="form_edit.php" method="POST">
					<?php	
			$conn = mysqli_connect("localhost","root","jenny258789","shop");
			$sql='select * FROM members WHERE username="'.$_COOKIE['username'].'"';
			$result=mysqli_query($conn,$sql);

			while ($row = mysqli_fetch_array($result)) {
				echo '
					<table class="table_show">
						<tbody>
							<tr>
								<th>帳號:</th>		
								<td>'.$row['username'].'</td>					
							</tr>
							<tr>
								<th>密碼:</th>
								<td><input type="password" required name="password" placeholder="請輸入新密碼"></td>
							</tr>
							<tr>
								<th>確認密碼:</th>
								<td><input type="password" required name="rpassword" placeholder="請確認新密碼"></td>
							</tr>
							<tr>
								<th>忘記密碼提示:</th>
								<td><input type="text" required name="forget_question" value="'.$row['hint'].'"></td>
							</tr>
							<tr>
								<th>忘記密碼答案:</th>
								<td><input type="password" required name="forget_answer" placeholder="請輸入新解答"></td>
							</tr>
							<tr>
								<th>電子郵件:</th>
								<td id="email"><input type="email" required name="email" value="'.$row['email'].'"></td>
							</tr>
							<tr>
								<th>姓名:</th>
								<td><input type="text" required name="name" value="'.$row['name'].'"></td>
							</tr>
							<tr>
								<th>手機:</th>
								<td><input type="cel" required name="cel" value="'.$row['phone'].'"></td>
							</tr>
							<tr>
								<th>地址:</th>
								<td><input type="address" required placeholder="請務必填寫正確"  name="address" value="'.$row['address'].'"></td>
							</tr>
						</tbody>
					</table>
					<div class="btn_submit"><div><input type="submit" value="更改資料" style="width:227px;height:49px;font-size: 20px"></div></div>
						';
					}
				?>
			</form>
			</div>	
		</div>

	</header>
	<footer id ="footer">
		Copyright &copy; 2021 Dropcircle B10809029 蔡博彥
	</footer>
	
</body>
</html>