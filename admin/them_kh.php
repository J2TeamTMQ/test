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
        $sdt = $_POST["txtSdt"];
        $id = $_POST["txtMa"];
        $email = $_POST["txtEmail"];
        $dc = $_POST["txtDc"];
      
        $sql = "insert into khachhang(maKH, tenKH, diaChi, soDienThoai, Email) value('$id', '$ten', '$dc', '$sdt', '$email');";
        $r = $db -> exec($sql);
    }

?>
<body>
    <form action="" method="post">
        Mã khách hàng:<input type="text" name="txtMa" > <br>
        Tên khách hàng:<input type="text" name="txtTen" > <br>
        Số điện thoại khách hàng:<input type="text" name="txtSdt" > <br>
        Địa chỉ khách hàng:<input type="text" name="txtDc" > <br>
        Email khách hàng:<input type="text" name="txtEmail" > <br>
        <input type="submit" value = "Thêm" name ="btnThem">
    </form>
</body>
</html>