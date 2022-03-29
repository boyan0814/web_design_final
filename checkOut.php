<?php
    // print_r($_POST['id']);
    // print_r($_POST['amount']);
    $conn = mysqli_connect('localhost','root','jenny258789','shop');
    $num=count($_POST['id']);
    echo $num;
    $i=0;
    while ($i < $num) {
        $querySearch ='select stock from goods where id='.$_POST['id'][$i];
        $result =mysqli_query($conn,$querySearch);
        $row =mysqli_fetch_array($result);
        $stockCur =$row['stock'];

        $stockRemain = $stockCur - $_POST['amount'][$i];
        $queryUpdate='update goods set stock='.$stockRemain.' where id='.$_POST['id'][$i];
        $queryInsertOrder = "insert into orders(name,itemId,amount,creditCard,address) values
        ('".$_COOKIE['username']."'".",'".$_POST['id'][$i]."',"."'".$_POST['amount'][$i]."','".md5($_POST['creditCard'])."','".md5($_POST['address'])."')";
        $queryDelete = "delete from cart where username='".$_COOKIE[username]."' and itemId=".$_POST['id'][$i];
        echo $queryUpdate;
        echo $queryInsertOrder;
        echo $queryDelete;
        mysqli_autocommit($conn,false);
        $res = mysqli_query($conn,$queryInsertOrder);
        $res1 = mysqli_query($conn,$queryUpdate);
        $res2 = mysqli_query($conn,$queryDelete);
        if($res&&$res1&&$res2&&$stockCur>=0){
            mysqli_commit($conn);
            // echo 'commit';
            echo "<script>alert('結帳成功!');parent.location.href='main.php?id=".$itemId."';</script>";
        }else{
            mysqli_rollback($conn);
            echo 'rollback';
            echo "<script>alert('結帳失敗!');parent.location.href='main.php?id=".$itemId."';</script>";
        }

        $i++;
    }
    // $delete="delete from cart where username='".$_COOKIE[username]."' ";
    // mysqli_query($conn,$delete);
    // header("Location: main.php");
    // echo "<script>alert('結帳成功!');parent.location.href='item_1.php';</script>";
?>