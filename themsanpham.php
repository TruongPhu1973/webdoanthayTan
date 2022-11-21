<?php
    include'dbconnect.php';
    if(isset($_POST['submit'])){
        $tensp=$_POST['ten'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $dactinh=$_POST['dactinh'];
        $gia=$_POST['gia'];
        $target_dir="./images/";
        $target_file=$target_dir.$hinhanh;

        if(isset($tensp) && isset($gia) && isset($hinhanh) && isset($dactinh)){ 
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);   
            $sql= "INSERT INTO `sanpham`(`id`, `ten`,`imgURL`,`dactinh` ,`gia` ) 
            VALUES (NULL,'$tensp','$hinhanh','$dactinh','$gia')";
            $result=mysqli_query($conn, $sql);
            if($result == true){
                echo "<script> alert('bạn đã thêm thành công') </script>";
                header ("Location:trangchu.php");
            }else {
                echo "Thêm sản phẩm thất bại".$sql;
            }
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Trang thêm sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/icon/favicon.ico" sizes="64x64">
</head>
<header>
    <div class="logo">
        <img src="icon/logo.png" style="max-width:250px; padding-top: 20px;">
    </div>
    <div class="menu">
        <li><a href="">Trang chủ</a></li>
        <li><a href="">Sản phẩm</a>
            <ul class="sub-menu">
                <li><a href="">CÁC LOẠI GẠO NỞ , XỐP</a></li>
                <li><a href="">CÁC LOẠI GẠO ĐẶC SẢN , THƠM , DẺO</a></li>
                <li><a href="">CÁC LOẠI GẠO THƠM , DẺO</a></li>
            </ul>
        </li>
        <li><a href="">Dịch vụ</a></li>
        <li><a href=""> Quà tặng</a>
            <ul class="sub-gift">
                <li><a href="">QUÀ TẶNG LOẠI 1</a></li>
                <li><a href="">QUÀ TẶNG LOẠI 2</a></li>
                <li><a href="">QUÀ TẶNG HÀNG NĂM</a></li>
            </ul>
        </li>
        <li><a href="">Liên hệ</a></li>
    </div>
    <div class="other">
        <form action="" class="search" method="post">
            <input type="text" class="searchTerm" placeholder="Nhập từ khoá cần tìm">
            <button type="submit" class="searchButton">
              Tìm kiếm
           </button>          
         </form>
    </div>
</header>
<div>
<body id='v2'>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label><br>
        <input type="text" name="ten"> <br>
        <label for="">Hình ảnh</label><br>
        <input type="file" name="hinhanh"> <br>
        <label for="">Đặc tính của gạo</label> <br>
        <input type="text" name="dactinh"> <br>
        <label for="">Giá sản phẩm</label><br>
        <input  type="text" name="gia"> <br>
        
        <input type="submit" value="Thêm sản phẩm" name="submit">
        

    </form>
    <script>
            function themsanpham() {
                var conf= confirm('them san pham thanh cong');
                return conf
            }
        </script>
</body>

<style>
    #v2 {
        background: url(./icon/Background-01.png);
        
    }
    h1 {
        margin: 20px 0 0 320px;
    }

    label {
        margin: 20px 0 0 190px;
    }
    input {
        margin: 0 0 0 230px;
    }

   
</style>
</html>