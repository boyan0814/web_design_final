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
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Rights Reserved">
	<meta name="Distribution" content="Taiwan">
	
	<link rel="stylesheet" href="member_create.css">
	
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
					echo $_COOKIE['username'] . ' 已登入' . '<li><a href="logout.php">登出</a></li>';
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

		<div id="create">
			
			<div id="inbox">
				<h3>只有第一次使用才需要註冊哦</h3>
				<form action="form.php" method="POST">
					<table class="table_show">
						<tbody>
							<tr>
								<th>帳號:</th>
								<td><input type="text" required name="account"></td>
							</tr>
							<tr>
								<th>密碼:</th>
								<td><input type="password" required name="password"></td>
							</tr>
							<tr>
								<th>確認密碼:</th>
								<td><input type="password" required name="rpassword"></td>
							</tr>
							<tr>
								<th>忘記密碼提示:</th>
								<td><input type="text" required name="forget_question"></td>
							</tr>
							<tr>
								<th>忘記密碼答案:</th>
								<td><input type="password" required name="forget_answer"></td>
							</tr>
							<tr>
								<th>電子郵件:</th>
								<td id="email"><input type="email" required name="email"></td>
							</tr>
							<tr>
								<th>姓名:</th>
								<td><input type="text" required name="name"></td>
							</tr>
							<tr>
								<th>生日:</th>
								<td><input type="date" required name="birth"></td>
							</tr>
							<tr>
								<th>電話:</th>
								<td>
									<input id="plc_tel" type="tel" required placeholder="區碼"  name="plc_tel"> -
									<input type="tel" required placeholder="市內電話"  name="phone">
								</td>
							</tr>
							<tr>
								<th>手機:</th>
								<td><input type="cel" required name="cel"></td>
							</tr>
							<tr>
								<th>地址:</th>
								<td><input type="address" required placeholder="請務必填寫正確"  name="address"></td>
							</tr>
						</tbody>
					</table>
					<div class="btn_submit"><div><input type="submit" value="註冊會員" style="width:227px;height:49px;font-size: 20px"></div></div>
				</form>
			</div>	
		</div>
	</header>

	<footer id ="footer">
		Copyright &copy; 2021 Dropcircle B10809029 蔡博彥
	</footer>
</body>
</html>