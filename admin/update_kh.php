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
$sdt = "";
$dc = "";
$email = "";

if(isset($_GET["sua"])){
    $id=$_GET["sua"];
    $sql= "select * from khachhang where maKH = $id";
    $r1 = $db->query($sql);
    $r1 = $r1->fetch();
    $ten = $r1["tenKH"];
    $id = $r1["maKH"];
    $dc = $r1["diaChi"];
    $sdt = $r1["soDienThoai"];
    $email = $r1["Email"];
}
if(isset($_POST["btnUpdate"])){
    $id = $_POST["txtID"];
    $ten = $_POST["txtTen"];
    $dc = $_POST["txtDc"];
    $email = $_POST["txtEmail"];
    $sdt = $_POST["txtSdt"];

    $sql= "update khachhang set maKH = '$id',tenKH = '$ten',soDienThoai = '$sdt',Diachi = '$dc',Email = '$email' where maKH = '$id' ";
    
    $r = $db -> exec($sql);
}


?>
<body>
    <form action="" method="post">
        Mã khách hàng: <input type="text" name="txtID" value="<?php echo $id ?>"> <br>
        Tên khách hàng: <input type="text" name = "txtTen" value ="<?php echo $ten ?>"> <br>
        Số điện thoại khách hàng: <input type="text" name = "txtSdt" value ="<?php echo $sdt ?>"> <br>
        Địa chỉ khách hàng: <input type="text" name = "txtDc" value ="<?php echo $dc ?>"> <br>
        Email khách hàng: <input type="text" name = "txtEmail" value ="<?php echo $email ?>"> <br>

        <input type="submit" value =" Update" name ="btnUpdate">
    </form>
</body>
</html>