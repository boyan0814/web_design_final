<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MainPage</title>
	<meta name="description" content="真正100% 來自韓國超高人氣品牌、最新流行商品的eyescream 時尚購物網站。EYESCREAM才能買到當季最受注目的韓系限定商品。">
	<meta name="keywords" content="ntust">
	<meta name="author" content="蔡博彥">
	<meta name="company" content="ntust">
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Rights Reserved">
	<meta name="Distribution" content="Taiwan">

	<link rel="stylesheet" href="main.css">

	<style type="text/css">
		#menu{
			padding: 0px;
		}
		.searchBar{
			text-align: right;
		}
		#button{
			background-image: url(top_pic/search-2.jpg);
			width: 31px;
			height: 27px;
			border: solid 0px #000000;
			cursor: pointer;
		}
		.form{
			flex-wrap: wrap;
		}
	</style>
</head>
<body>
	<header>
		<div id="topnav">
			<li><a href="#" onmouseover="this.innerHTML='LOGIN';" onmouseout="this.innerHTML='會員登入';">會員登入</a></li>
			<li><a href="member_create.php" onmouseover="this.innerHTML='JOIN US';" onmouseout="this.innerHTML='會員註冊';">會員註冊</a></li>
			<li><a href="cart.php" onmouseover="this.innerHTML='CART';" onmouseout="this.innerHTML='購物車';">購物車</a></li>
			<li><a href="about_us.php" onmouseover="this.innerHTML='ABOUT US';" onmouseout="this.innerHTML='關於我們';">關於我們</a></li>
		</div>
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

		<div id="ad_pic">
			<div><p style="color: white">Event</p></div>
			<div id="ad_img"><img src="top_pic/hot-1.jpg"></div>
			<div id="ad_img"><img src="top_pic/lineQR.jpg"></div>
			<div id="ad_img"><img src="top_pic/mycart.jpg"></div>
			<div id="ad_img"><a href="#top"><img src="top_pic/btnTop.jpg"></a></div>
		</a>
		</div>

		<div id="store" class="container">
			<!-- <aside >
				<div><img src="pic/allgoods.jpg"></div>
				<div><img src="pic/models.jpg"></div>
			</aside> -->
			<article>
				<!-- <div><img style="visibility: hidden;" src="pic/top1.jpg"></div> -->
				<div><img style="visibility: hidden;" src="pic/pro-title.jpg"></div>
				<div class="form">
					<?php 
						$conn = mysqli_connect("localhost","root","jenny258789","shop");
						$search=$_GET[search];
						$order=$_GET[order];
						$orderby="";
						if ($order != "") {
							$orderby="order by price $order";
						}
						$sql="select * FROM goods WHERE name LIKE '%$search%' $orderby";
						$result=mysqli_query($conn,$sql);

						while ($row = mysqli_fetch_array($result)) {
							echo "<div class='block'>";
							echo "<a href='item_1.php?id=".$row['id']."'>";
							echo "<div class='Bjpg'><img src='pic/$row[src]'></div>";
							echo "<p class='Bname'>$row[name]<p>";
							echo "<p class='pricetxt'>NT.$row[price]</p>";
							echo "</a>";
							echo "</div>";
						}
					 ?>
				</div>
			</article>
		</div>	
			
	</header>
	<div class="btnTop">
		<a href="#top">
			<img src="pic/top.jpg">
		</a>
	</div>
	<footer id ="footer">
		Copyright &copy; 2021 Dropcircle B10809029 蔡博彥
	</footer>
</body>
</html>