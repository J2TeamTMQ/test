<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_sp</title>
</head>
<body>
<?php
    include("connect.php");
    if(isset($_POST['btnadd'])){
        $ten = $_POST['ten'];
        $sql = "insert into loai_sp(maSP, loaiSP) value (null,'$ten');";
        $r = $db->exec($sql);
    }

?>
    <form action="" method="post">
        Tên loại: <input type="text" name="ten">
        <input type="submit" value="add" name="btnadd"> <br>
        <a href="index.php">Trở lại giỏ hàng </a>
    </form>
</body>
</html>