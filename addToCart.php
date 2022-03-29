<?php
    if($_COOKIE['username']==""){
        echo "<script>alert('請先登入帳號');parent.location.href='item_1.php?id=".$itemId."';</script>";
    }
    $conn = mysqli_connect("localhost","root","jenny258789","shop");
    $itemId=$_POST['itemId'];
    if($conn){
        echo "connected";
    }
    else{
        echo "failed";
    }
    if($_POST['itemName']){
        // echo $_POST['itemName'];
    }
    if($_POST['color']!='[請選擇]'){
        // echo $_POST['color'];
        
    }else echo "<script>alert('請選擇顏色');parent.location.href='item_1.php?id=".$itemId."';</script>";
    if($_POST['amount']!='[請選擇]'){
        
        // echo $_POST['amount'];
    }else echo "<script>alert('請選擇數量');parent.location.href='item_1.php?id=".$itemId."';</script>";
    
    $query = "select stock from goods where id= $itemId ";
    echo $query;
    $result = mysqli_query($conn, $query);
    echo "<br>";
    if($result){
        $row = mysqli_fetch_array($result);
        // echo $row['stock'];
    }else echo "query is null";
    if($row['stock'] >= $_POST['amount']){
        $querySearch ='select count(*) from cart where username="'.$_COOKIE['username'].'" and itemId='.$_POST['itemId'];
        $queryUpdate = 'update cart set itemId='.$_POST['itemId'].', amount='.$_POST["amount"].
        ', price='.$_POST['itemPrice'].', color="'.$_POST['color'].'" where username='.$_COOKIE['username'];

        $queryInsert = 'insert into cart(itemId,amount,price,color,username) 
        values('.$_POST["itemId"].','.$_POST["amount"].','.$_POST["itemPrice"].',"'.$_POST["color"].'","'.$_COOKIE['username'].'")';
        echo $querySearch."<br>".$queryInsert.'<br>'.$queryUpdate;
        $result1 = mysqli_query($conn,$querySearch);
        $row1 =mysqli_fetch_row($result1);
        echo $row1[0];
        if($row1[0]==0){
            echo 'insert';
            mysqli_query($conn,$queryInsert);
        }else{
            echo 'update';
            mysqli_query($conn,$queryUpdate);
        }
        echo "<script>alert('成功加入購物車');parent.location.href='item_1.php?id=".$itemId."';</script>";
    }else echo "<script>alert('商品數量不足');parent.location.href='item_1.php?id=".$itemId."';</script>";

?>