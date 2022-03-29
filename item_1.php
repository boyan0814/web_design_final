<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Item_1</title>
	<meta name="description" content="真正100% 來自韓國超高人氣品牌、最新流行商品的eyescream 時尚購物網站。EYESCREAM才能買到當季最受注目的韓系限定商品。">
	<meta name="keywords" content="ntust">
	<meta name="author" content="蔡博彥">
	<meta name="company" content="ntust">
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Rights Reserved">
	<meta name="Distribution" content="Taiwan">
	
	<link rel="stylesheet" href="item_1.css">

	<style type="text/css">
		#menu{
			padding: 0px;
		}
		.searchBar{
			text-align: center;
		}
		#button{
			background-image: url(top_pic/search-2.jpg);
			width: 31px;
			height: 27px;
			border: solid 0px #000000;
			cursor: pointer;
		}
		#a_pic{
			display: block;
			position: fixed;
			top: 10%;
			right: 0px;
			padding: 10px 20px;
			-moz-border-radius: 10px;
		    -webkit-border-radius: 10px;
		    background-color: white;
		}

		#a_img{
			display: flex;
			justify-content: center;
		}
		#a_pic p{
			background-color: black;
			text-align: center;
		}
	</style>
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
				<div class="searchBar">
					<form id="formSc" method="get" action="search.php" name="formSc">
						<ul class="search">
							<li><img alt="" src="top_pic/search-1.jpg"></li>
							<li class="box-text"><input type="text" name="search" value=<?php echo $_GET[search]; ?>></li>
							<select name="order">
								<?php 
									$op1="";
									$op2="";
									$op3="";
									if ($_GET[order]== "") {
										$op1="selected";
									}elseif ($_GET[order]== "DESC") {
										$op2="selected";
									}elseif ($_GET[order]== "ASC") {
										$op3="selected";
									}
								 ?>
								<option value="" <?php echo $op1; ?> >依價格排序</option>
								<option value="DESC" <?php echo $op2; ?> >由高到低</option>
								<option value="ASC" <?php echo $op3; ?> >由低到高</option>
							</select>
							<li><input type="submit" name="" id="button" value=""></li>
						</ul>
					</form>
				</div>
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

		<div id="a_pic">
			<div><p style="color: white">Event</p></div>
			<div id="a_img"><img src="top_pic/hot-1.jpg"></div>
			<div id="a_img"><img src="top_pic/lineQR.jpg"></div>
			<div id="a_img"><img src="top_pic/mycart.jpg"></div>
			<div id="a_img"><a href="#top"><img src="top_pic/btnTop.jpg"></a></div>
		</div>
		
	</header>
	<main>
		<div class="container">
		<aside>
			<div><img src="pic/newin.jpg"></div>
			<div>
				<ul>
					<li>全部商品</li>
					<li>本週新品/new arrival</li>
					<li>新品限時搶購</li>
					<li>上身/top</li>
					<li>上衣</li>
					<li>襯衫</li>
					<li>佯裝</li>
					<li>下身/bottom</li>
					<li>裙款</li>
					<li>短褲</li>
					<li>長褲</li>
				</ul>
			</div>
			<div><img src="pic/aside_1.jpg"></div>
			<div><img src="pic/aside_2.gif"></div>
		</aside>
		<div>
			<article>
				<?php 
					$conn = mysqli_connect("localhost","root","jenny258789","shop");
					$id=$_GET['id'];
					$sql="select * FROM goods WHERE id='$id'";
					$result=mysqli_query($conn,$sql);
					$name;
					$price;
					$src;
					$stock;
					while ($row = mysqli_fetch_array($result)) {
						$name=$row['name'];
						$price=$row['price'];
						$src=$row['src'];
						$stock=$row['stock'];
					}
				 ?>
				<div id="item_1_pic"><img src=<?php echo "pic/$src"; ?>></div>
				<div>
					<h1><?php echo $name; ?></h1>
					<h2>消費滿800元免運<br><br>預購品約10-20個工作天出貨</h2>
					<img src="pic/payicon.jpg">
					<h2><?php echo "商品編號: ".$id; ?><br><br>優惠價：<?php echo $price; ?> 元</h2>

						<form action = "addToCart.php" method="POST">
							<input type ="text" value = '<?php echo $price; ?>' name=itemPrice hidden>
							<input type = "text" value = '<?php echo $id; ?>' name=itemId hidden>
							<input type="text" value='<?php echo $name; ?>' name='itemName' hidden>
							<p>商品規格: 
								<select name='color'>
									<option>[請選擇]</option>
									<option>米白</option>
									<option>黑</option>
								</select></p>
							<p>商品數量:
								<select name='amount'>
								<option>[請選擇]</option>
								<?php
									$query = "select stock from goods where id='$id'";
									$result = mysqli_query($conn,$query);
									$row = mysqli_fetch_array($result);
									for($i=0; $i<$row['stock']; $i++){
										echo '<option>'. ($i+1). '</option>';
									}
								?>
<!-- 								
									
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option> -->
								</select></p>
							<input type="submit" value="加入購物車"
							style="background-color: gray;width:227px;height:49px;font-size: 20px">
						</form>
			</article>
			<!-- <img src="pic/sample_1.jpg"> -->
		</div>
		</div>
	</main>
	
	<footer id ="footer">
		Copyright &copy; 2021 Dropcircle B10809029 蔡博彥
	</footer>
</body>
</html>