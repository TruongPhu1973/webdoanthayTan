<?php
    require("dbconnect.php");
    $sql="SELECT * FROM `sanpham`";
    $query =mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Gạo Làng Ta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/icon/favicon.ico" sizes="64x64">
</head>
<body>
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

<section class="all">
    <section class="Doc" style="border-radius:20px;">
        <h3 style="color:#512301; padding: 20px 0 50px 0;margin-left:20px ;">
        DANH MỤC SẢN PHẨM :
        </h3>
        <table>
        <tr>
            <td><p>01</p><a href="">CÁC LOẠI GẠO NỞ XỐP</a></td>
        </tr>
        <tr>
            <td><p>02</p><a href="">CÁC LOẠI GẠO ĐẶC SẢN, THƠM, DẺO</a></li></td>
        </tr>
        <tr>
            <td><p>03</p><a href="">CÁC LOẠI GẠO THƠM, DẺO</a></li></td>
        </tr>
        </table>      
    </section>
    <section class="slide" style="margin-top:51px; margin-left: 100px; margin-right: 100px;">
        <div class="aspect-111">
            <input type="radio" name="inputslider" id="img1">
            <input type="radio" name="inputslider" id="img2">
            <input type="radio" name="inputslider" id="img3">
            <input type="radio" name="inputslider" id="img4">

            <img src="./slide/1.jpg" alt="img1" class="imgslider1" style="width: 750px;height: 444px">    
            <img src="./slide/2.jpg" alt="img2" class="imgslider2" style="width: 750px;height: 444px">     
            <img src="./slide/3.jpg" alt="img3" class="imgslider3" style="width: 750px;height: 444px">     
            <img src="./slide/4.jpg" alt="img4" class="imgslider4" style="width: 750px;height: 444px">      
        </div> 
        <div class="labelslider">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>

        </div>
    </section>
</section>
</div>



<style>
    .Doc{
        width: 287px; height: 441px;background-color: #ECE28C;
        margin: 50px;
    }
    .Doc a {
        border: none;
        background-color: #FBF8D2;
        margin-left:20px;
    }
    .about{
        margin-top: 200px;
    }
    .all{
        display: flex;
        background-image: url(./icon/Background-01.png);
       
      
    }
    .img-B{
        background-image: url(./icon/g1.png);
        background-image:  url(./icon/bg1.jpg);
        background-repeat: no-repeat;
        color : white;
        background-size: 100%;
    }
</style>
<section id="about">
<div class="img-B">
    <div class="about">
    <h3 style="font-size:20px;margin-left: 830px;padding-top:10px;color:green; ">VỀ CHÚNG TÔI
    <p>Gạo làng ta chuyên cung cấp sỉ & lẻ các loại gạo: GẠO, NẾP,</p><br><p> TẤM ĐẶC SẢN và đặc biệt cung cấp GẠO ĐÀI THƠM</p> 
</h3>

    <ul>
        <li style="font-size: 12px;margin-left:10px;padding:15px"><p>01</p> UY TÍN CHẤT LƯỢNG</li>
        <li style="font-size: 16px;margin-left:60px;padding:15px"><p>02</p>GIÁ CẢ CẠNH TRANH </li>
        <li style="font-size: 22px;margin-left:110px;padding:15px"><p>03</p> NGUỒN GỐC RÕ RÀNG </li>
        <li style="font-size: 26px;margin-left:160px;padding:15px"><p>04</p>VẬN CHUYỂN NHANH CHÓNG</li>
    </ul>
</div>
</div>
</section>
<H1 style="padding:30px">QUẢN LÝ DANH SÁCH SẢN PHẨM</H1>
    <div>
    <button>
        <a href="themsanpham.php" style="color: red;">THÊM SẢN PHẨM </a> 
    </button>
    <TAble id='productList'>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phâm</th>
            <th>Hình ảnh</th>
            <th>Đặc tính của gạo</th>
            <th>Giá sản phẩm</th>
            <th>Hành động</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?=$row["id"] ?></td>
            <td><?=$row["ten"] ?></td>
            <td><img style="width:200px;height:200px"src='./images/<?=$row["imgURL"]?>' alt=""></td>
            <td><?=$row['dactinh'] ?></td>
            <td><?=$row["gia"] ?>&nbsp; VND</td>
         
            <td>
            <a href="capnhatsanpham.php?id=<?= $row['id']?>">Sửa</a>
            <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['id']?>">Xóa</a>
            </td>    
        </tr>
        <?php }?>
    </TAble>
    </div><script>
            function xoasanpham() {
                var conf= confirm('bạn có chắn chắn muốn xóa?');
                return conf
            }
        </script>
    <style>
        #productList {
            font-family: Arial,Helvetica,sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        
        #productList td,#productList th{
            border:1px solid #ddd;
            padding:8px;
        }
        #productList tr:nth-child(even) {background-color: #f2f2f2;}
        #productList tr:hover  {background-color: #ddd;}
        #productList th  {
            padding-top:12px;
            padding-bottom:12px;
            text-align:left;
            background-color: #04AA6D;
            color:white;
        }
        button{
            background-color: #2F54EB;
            padding:8px 16px;
        } button a{
            color:white;
        }
        a{
            text-decoration :none;
        }

    </style>

    <style>
        .wrapper{
            max-width: 100%;
            background-color:#ECE28C;
            display: flex;
            justify-content: space-between;
            align-items:center;
            padding: 12px 150px;
        }
        .dkdichvu {
            padding: 40px;
        }
        .dkthongtin{
            padding: 40px;
            font-size: 20px;
        }
        #guingay:hover {
            background-color: #04AA6D;
        }
    </style>
    <div class="wrapper">
        <div class="dkdichvu">
            <img src="./icon/g2.png" alt="">
            <p>ĐĂNG KÝ SỬ DỤNG DỊCH VỤ</p>
            <P>"Chúng tôi sẽ mang đến cho bạn những trải nghiệm tốt nhất"</P>
        </div>
        <div class="dkthongtin">
           <table>
                <tr>
                    <td><input type="text" placeholder="Họ Tên"></td>
                    <td> <input type="text" placeholder="Số điện thoại"> </td>                  
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tỉnh"></td>
                    <td><input type="text" placeholder="Quận"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Phường"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Địa chỉ"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Gửi ngay" id="guingay">
                </tr>
           </table>

        </div>
    </div>
      <section class="container" style="background-color:green;color:floralwhite;">
  <div>
  <p>
    <strong>GẠO LÀNG TA</strong>
  </p>
  <p>Địa chỉ: 2B Lê Hoàng Phái, phường 17, Gò Vấp, Hồ Chí Minh ( Đối diện số 33 Lê Hoàng Phái)</p>
  <p>Email: contact@gaolangta.vn</p>
  <p>Hotline: 0369004925</p>
  <p>Website: gaolangta.vn</p>
  </div>
  <section>
    </th>
  </tr>
  <tr>
    <th>
  <div class="img">
  <a  style="text-decoration: none;background:none;border:none;" href="https://www.facebook.com/phongphu.truong.984" target="_blank" rel="nooperner">
    <img src="./image/fb-4130.png" width="20px">
  </a>
  <a  style="text-decoration: none;background:none;border:none;" href="https://twitter.com/home" target="_blank" rel="nooperner">
    <img src="./image/tw-9830.png" width="20px">
  </a>  
  <a  style="text-decoration: none;background:none;border:none;" href="https://www.google.com.vn/" target="_blank" rel="nooperner">
    <img src="./image/gg-4446.png" width="20px">
  </a>
  <a  style="text-decoration: none;background:none;border:none;" href="https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F" target="_blank" rel="nooperner">
    <img src="./image/zalo-5072.png" width="20px">
  </a>  
  </div>
  </section>
  </th>
  </tr>
  </table>
  <style>
    .container {
        padding : 20px  ;
        background: none;
    }
  </style>
  </section>
    
</body>
