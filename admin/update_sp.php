<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php



include("connect.php");
$id = "";
$ten = "";
if(isset($_GET["sua"])){
    $id=$_GET["sua"];
    $sql="select * from sanpham where maSP=$id";
    $r1 = $db->query($sql);
    $r1 = $r1->fetch();
    $ten = $r1["tenSP"];
    $id = $r1["maSP"];
    $giacu = $r1["giaCu"];
    $giamoi = $r1["giaMoi"];
    $loai = $r1["loaisp"];
    $mota = $r1["motaSP"];
}
if(isset($_POST["btnUpdate"])){
    $id = $_POST["txtID"];
    $ten = $_POST["txtTen"];
    $giacu = $_POST["txtOld"];
    $giamoi = $_POST["txtNew"];
    $avt = $_POST["txtAvt"];
    $loai = $_POST["txtLoai"];
    $mota = $_POST["txtMota"];

    $sql = "update sanpham set maSP = '$id',tenSP = '$ten',giaCu = '$giacu', giaMoi = '$giamoi',hinhAnh = '$avt', loaiSP = '$loai',motaSP = '$mota' where masp = '$id' ";
    $r = $db -> exec($sql);
}


?>
<body>
    <form action="" method="post">
        Mã sp: <input type="text" name="txtID" value="<?php echo $id ?>"> <br>
        Tên sp: <input type="text" name = "txtTen" value ="<?php echo $ten ?>"> <br>
        Giá cũ: <input type="text" name = "txtOld" value ="<?php echo $giacu ?>"> <br>
        Giá mới: <input type="text" name = "txtNew" value ="<?php echo $giamoi ?>"> <br>
        Hình đại diện: <input type="file" name = "txtAvt" value ="<?php echo $avt ?>"> <br>
        Loại sp: <input type="text" name = "txtLoai" value ="<?php echo $loai ?>"> <br>
        Mô tả: <input type="text" name = "txtMota" value ="<?php echo $mota ?>"> <br>


        <input type="submit" value =" Update" name ="btnUpdate">
    </form>
</body>
</html>