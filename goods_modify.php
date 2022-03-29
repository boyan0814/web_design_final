<?php 
	echo $_POST['modify'];
	echo $_POST['id'];
	echo $_POST['name'];
	echo $_POST['price'];
	echo $_POST['stock'];
	$conn = mysqli_connect('localhost','root','jenny258789','shop');
	$modify=$_POST['modify'];
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$src="";
	if ($_FILES['file']['error'] === UPLOAD_ERR_OK){
  		echo '檔案名稱: ' . $_FILES['file']['name'] . '<br/>';
  		$src=$_FILES['file']['name'];

  		# 檢查檔案是否已經存在
  		if (file_exists('upload/' . $_FILES['file']['name'])){
    		echo '檔案已存在。<br/>';
  		} else {
    		$file = $_FILES['file']['tmp_name'];
   	 		$dest = 'pic/' . $_FILES['file']['name'];

   		 	# 將檔案移至指定位置
    		move_uploaded_file($file, $dest);
  		}
	} else {
  		echo '錯誤代碼：' . $_FILES['file']['error'] . '<br/>';
	}
	$src1="";
	if ($src != "") {
		$src1="src='$src' ,";
	}
	if ($modify=="update") {
		$update="update goods set name='$name' , price='$price' , $src1 stock='$stock' where id='$id'";
		mysqli_query($conn,$update);
		echo $update;
	}
	if ($modify=="add") {
		$add="insert into goods(id, name, price, src, stock) values ('$id','$name','$price','$src','$stock')";
		mysqli_query($conn,$add);
		echo $add;
	}
	header("Location: goods.php");
 ?>