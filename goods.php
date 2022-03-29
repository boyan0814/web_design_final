<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Goods</title>
	<meta name="description" content="真正100% 來自韓國超高人氣品牌、最新流行商品的eyescream 時尚購物網站。EYESCREAM才能買到當季最受注目的韓系限定商品。">
	<meta name="keywords" content="ntust">
	<meta name="author" content="蔡博彥">
	<meta name="company" content="ntust">
	<meta name="copyright" content="本網頁著作權屬蔡博彥, All Rights Reserved">
	<meta name="Distribution" content="Taiwan">
	
	<link rel="stylesheet" href="goods.css">

	<style type="text/css">
		#topnav h1{
			color: white;
		}
		tbody img{
			height: 134px;
			width: auto;
		}
		a{
			cursor: pointer;
			color: #0037ff;
			text-decoration: none;
		}
	</style>
	<script type="text/javascript">
		var edit=false;
		function update(id) {
			if (edit==false) {
				document.getElementById("input_modify").value="update";

				var img=document.getElementById("img_"+id);
				img.innerHTML="<input type='file' name='file'>";
				var name=document.getElementById("name_"+id);
				// var name1=name.getElementsByTagName("p")[0].innerText;
				// name.innerHTML="<input type='text' name='name' value='"+name1+"'>";
				name.getElementsByTagName("p")[0].contentEditable=true;

				var price=document.getElementById("price_"+id);
				// price.innerHTML="<input type='text' name='price' value='"+price.getElementsByTagName("p")[0].innerText+"'>";
				price.getElementsByTagName("p")[0].contentEditable=true;

				var stock=document.getElementById("stock_"+id);
				// stock.innerHTML="<input type='text' name='stock' value='"+stock.getElementsByTagName("p")[0].innerText+"'>";
				stock.getElementsByTagName("p")[0].contentEditable=true;

				var update=document.getElementById("update_"+id);
				update.innerHTML="<input type='submit' onclick='submit1("+id+")'>&nbsp&nbsp&nbsp&nbsp<a href=''>取消</a>";
				edit=true;
			}
		}
		function add(id) {
			if (edit==false) {
				document.getElementById("input_modify").value="add";

				var img=document.getElementById("img_"+id);
				img.innerHTML="<input type='file' name='file'>";

				var pid=document.getElementById("id_"+id);
				pid.innerHTML=id;

				var name=document.getElementById("name_"+id);
				name.getElementsByTagName("p")[0].innerText="商品名稱";
				name.getElementsByTagName("p")[0].contentEditable=true;

				var price=document.getElementById("price_"+id);
				price.getElementsByTagName("p")[0].innerText="100";
				price.getElementsByTagName("p")[0].contentEditable=true;

				var stock=document.getElementById("stock_"+id);
				stock.getElementsByTagName("p")[0].innerText="10";
				stock.getElementsByTagName("p")[0].contentEditable=true;

				var update=document.getElementById("add_"+id);
				update.innerHTML="<input type='submit' onclick='submit1("+id+")'>&nbsp&nbsp&nbsp&nbsp<a href=''>取消</a>";
				edit=true;
			}
		}
		function submit1(id) {
			document.getElementById("input_id").value=id;

			var name=document.getElementById("name_"+id);
			var name1=name.getElementsByTagName("p")[0].innerText;
			document.getElementById("input_name").value=name1;

			var price=document.getElementById("price_"+id);
			var price1=price.getElementsByTagName("p")[0].innerText;
			document.getElementById("input_price").value=price1;

			var stock=document.getElementById("stock_"+id);
			var stock1=stock.getElementsByTagName("p")[0].innerText;
			document.getElementById("input_stock").value=stock1;
			// alert(name1);
			// alert(price1);
			// alert(stock1);
		}
	</script>
</head>
<body>
	<header>
		<div id="topnav">
			<h1>商品管理</h1>
		</div>
		<main>
			<div id="table_div">
				<form action='goods_modify.php' method='post' enctype='multipart/form-data'>
					<input type="text" id="input_modify" name="modify" hidden>
					<input type="text" id="input_id" name="id" hidden>
					<input type="text" id="input_name" name="name" hidden>
					<input type="text" id="input_price" name="price" hidden>
					<input type="text" id="input_stock" name="stock" hidden>
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
								<div><p>價格</p></div>
							</td>
							<td>
								<div><p>數量</p></div>
							</td>
							<td style="width: 150px;">
								<div><p></p></div>
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
                            $querySearch = 'select * from goods ';
                            // echo $querySearch;
							global $result;
							$maxid=1;
                            $result = mysqli_query($conn,$querySearch);
                            while($row = mysqli_fetch_array($result)){
                            	if ($row['id']>$maxid) {
                            		$maxid=$row['id'];
                            	}
                                echo '<tr>';
                                    echo '<td>';
                                        echo '<div id='."img_$row[id]".'><img src=pic/'.$row[src].'></div>';
                                    echo '</td>';
                                        
                                    echo '<td>';
                                        echo '<div><p>'.$row[id].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."name_$row[id]".'><p>'.$row[name].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."price_$row[id]".'><p>'.$row[price].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."stock_$row[id]".'><p>'.$row[stock].'</p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."update_$row[id]".'><a onclick=update('.$row[id].')>修改</a></div>';
                                    echo '</td>';
                                    echo '<td>';
                                        echo '<div id='."delete_$row[id]".'><a href=goods_delete.php?delete='.$row[id].'>刪除</a></div>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                            $maxid=$maxid+1;
                            echo '<tr>';
                                    echo '<td>';
                                        echo '<div id='."img_$maxid".'></div>';
                                    echo '</td>';
                                        
                                    echo '<td>';
                                        echo '<div><p id='."id_$maxid".'></p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."name_$maxid".'><p></p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."price_$maxid".'><p></p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."stock_$maxid".'><p></p></div>';
                                    echo '</td>';

                                    echo '<td>';
                                        echo '<div id='."add_$maxid".'><a onclick=add('.$maxid.')>新增</a></div>';
                                    echo '</td>';
                                    echo '<td>';
                                        // echo '<div><a href=goods_delete.php?delete='.$maxid.'>刪除</a></div>';
                                    echo '</td>';
                            echo '</tr>';
                        ?>
					</tbody>
				</table>
				<?php 
					// echo "<div>$maxid</div>";
				 ?>
				</form>
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