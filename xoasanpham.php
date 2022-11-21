<?php
    require("dbconnect.php");
    $masp=(int) $_GET['id'];
    $sql="SELECT * FROM `sanpham` WHERE `id` = '$masp'";
    $query = mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($query);

    if (file_exists("./image/".$after['imgURL'])) {
        unlink("./image/".$after['imgURL']);
    }
    $sql="DELETE FROM `sanpham` WHERE `sanpham`.`id` = '$masp'";
    mysqli_query($conn,$sql);
    header("location:trangchu.php")
?>