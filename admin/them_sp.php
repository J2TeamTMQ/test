<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("connect.php");
    if(isset($_POST["btnThem"])){
        $ten = $_POST["txtTen"];
        $id = $_POST["txtMa"];
        $giacu = $_POST["txtOld"];
        $giamoi = $_POST["txtNew"];
        $avt = $_POST["txtAvt"];
        $loaisp = $_POST["txtLoai"];
        $mota = $_POST["txtMota"];
        $sql = "insert into sanpham(maSP, tenSP, giaCu, giaMoi, hinhAnh, loaiSP, motaSP) value('$id', '$ten','$giacu','$giamoi','$avt','$loaisp','$mota' );";
        $r = $db -> exec($sql);
    }

?>
<body>
    <form action="" method="post">
        Mã sản phẩm:<input type="text" name="txtMa" > <br>
        Tên sản phẩm:<input type="text" name="txtTen" > <br>
        Giá cũ:<input type="text" name="txtOld" > <br>       
        Giá mới:<input type="text" name="txtNew" > <br>
        Hình đại diện:<input type="file" name="txtAvt" > <br>
        Loại sản phẩm:<input type="text" name="txtLoai" > <br>
        Mổ tả sản phẩm:<input type="text" name="txtMota" > <br>        
        
        <input type="submit" value = "Thêm" name ="btnThem">
    </form>
</body>
</html>