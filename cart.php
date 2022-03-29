<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<meta name="description" content="真正100% 來自韓國超高人氣品牌、最新流行商品的eyescream 時尚購物網站。EYESCREAM才能買到當季最受注目的韓系限定商品。">
	<meta name="keywords" content="ntust">
	<meta name="author" content="蔡博彥">
	<meta name="company" content="ntust">
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Rights Reserved">
	<meta name="Distribution" content="Taiwan">
	
	<link rel="stylesheet" href="cart.css">
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


		<main>
			<div>
			<div id="step_1"><img src="pic/step_1.gif"></div>
			<div id="table_div">
				<table>
					<tbody>
						<tr id="top_table">
							<td>
								<div><p></p></div>
							</td>
							<td>
								<div><p>商品編號</p></div>
							</td>
							<td>
								<div><p>商品名稱</p></div>
							</td>
							<td>
								<div><p>規格</p></div>
							</td>
							<td>
								<div><p>數量</p></div>
							</td>
							<td>
								<div><p>單價</p></div>
							</td>
							<td>
								<div><p>小計</p></div>
							</td>
							<td>
								<div><p></p></div>
							</td>
						</tr>
                        <?php
							global $conn;
							global $querySearch;
                            $conn = mysqli_connect('localhost','root','jenny258789','shop');
                            // if($conn) echo "connected";
                            // else echo "failed";
                            $querySearch = 'select * from cart where username="'.$_COOKIE[username].'"';
                            // echo $querySearch;
							global $rowInGoods;
							global $result;
                            $result = mysqli_query($conn,$querySearch);
                            while($row = mysqli_fetch_array($result)){
                                $queryInGoods = 'select * from goods where id='.$row[itemId];
                                $resultInGoods = mysqli_query($conn,$queryInGoods);
                                $rowInGoods = mysqli_fetch_array($resultInGoods);
                                // echo $row['itemId'].$row['amount'].$row['price'];
                                echo '<tr>';
                                    echo '<td>';
                                        echo '<div><img src="pic/'.$rowInGoods['src'].'"></div>';
                                    echo '</td>';
                                        
                                    echo '<td>';
                                        echo '<div><p>'.$rowInGoods['id'].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div><p>'.$rowInGoods['name'].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div><p>'.$row['color'].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div><p>'.$row['amount'].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div><p>'.$row['price'].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        global $totalPrice;
                                        $totalPrice += $row['price']*$row['amount'];
                                        echo '<div><p>'.$row['price']*$row['amount'].'</p></div>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                        ?>
					</tbody>
				</table>
			</div>
			<div></div>
			
			<div><p>訂單總額</p></div>
			<div><h3><?php echo $totalPrice;?></h3></div>

			<div id="btn">
				<!-- <div><input type="button" value="繼續購物" style="width:130px;height:35px;font-size: 15px;background-color: gray;color: white;"></div> -->
				<div><form method='POST' action='checkOut.php'>
				<input type=text name=creditCard placeholder="請輸入信用卡號" required>
				<input type=text name=address placeholder="請輸入配送地址" required>
				<?php
					
					$result = mysqli_query($conn,$querySearch);
					while ($row = mysqli_fetch_array($result)) {
						$str1 = '<input type="text" name="amount[]" value='.$row['amount'].' hidden >';
						$str2 = '<input type="text" name="id[]" value='.$row['itemId'].' hidden >';
						echo $str1;
						echo $str2;
					}
					$str3 = '<input type="text" name="username" value="'.$_COOKIE[username].'" hidden >';
					echo $str3;
					echo '<input type="submit" value="結帳" style="width:130px;height:35px;font-size: 15px;background-color: gray;color: white;">';
					// echo '<input style="display:none;" type="text" name="amount" value='.$row['amount'].'';
					// echo '<input hidden type="text" name="id" value='.$row['itemId'].'';
					
				?>
				</form></div>
			</div>


			</div>
		</main>
			
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