<?php
require("dbconnect.php");
    $masp=(int) $_GET['id'];
    $sql="SELECT * FROM `sanpham` WHERE `id` = '$masp'";
    $query=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($query);
    $img =$row['imgURL'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
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

<body>
    <a href="trangchu.php">QUAY VỀ</a>
        <h1>CẬP NHẬT SẢN PHẨM</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="ten">TÊN SẢN PHẨM</label>
                <input type="text" id='ten' name="ten" value="<?= $row["ten"]?>">
            </div>
            <div>
                <img style="width:200px;height:200px" src='./images/<?= $row["imgURL"]?>' alt="">
            </div>
            <div>
                <label for="file">HÌNH ẢNH</label>
                <input type="file" id="file" name ="hinhanh" value="Choose File">
            </div>
            <div>
                <label for="dactinh">ĐẶC TÍNH CỦA GẠO</label>
                <input type="text" id="dactinh" name="dactinh" value="<?= $row["dactinh"]?>">
            </div>
            <div>   
                <label for="gia">GIÁ SẢN PHẨM</label>
                <input type="text" id='gia' name="gia" value="<?= $row["gia"]?>">
            </div>
            <button type="submit" name="submit">
                CẬP NHẬT SẢN PHẨM
            </button>
        </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
        $gia=$_POST['gia'];
        $tensp=$_POST['ten'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $dactinh=$_POST['dactinh'];
        $target_dir="./images/";
        if($hinhanh){
            if (file_exists("./images/".$img)){
                unlink("./images/".$img );
            }
            $target_file=$target_dir.$hinhanh;
        }else{
            $target_file=$target_dir.$img;
            $hinhanh=$img;
        }
        if(isset($tensp) && isset($hinhanh) && isset($dactinh) && isset($gia) ){
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
            $sql="UPDATE `sanpham` SET `ten`='$tensp',`imgURL`='$hinhanh',`dactinh`='$dactinh' ,`gia`='$gia'
            WHERE `id`='$masp';";
            mysqli_query($conn,$sql);
            header("Location:trangchu.php");
        }
    }    
?>
