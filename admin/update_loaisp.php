<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_sp</title>
</head>
<body>
<?php
include("connect.php");
$id="";
$ten="";
if(isset($_GET['sua']))
{
    $id = $_GET['sua'];
    $sql1 = "select * from loai_sp where maSP=$id";
    $r1 = $db->query($sql1);
    $r1 = $r1->fetch();
    $ten = $r1["loaiSP"];
}


if(isset($_POST['btnedit'])){
    $id = $_POST['ID'];
    $ten = $_POST['name'];
    $sql = "update loai_sp set loaiSP='$ten' where maSP=$id";
    $r = $db->exec($sql);
}

?>
    <form action="" method="post">
        Mã Loại: <input type="text" name="ID" value="<?php echo $id;?>"> <br>
        Tẹn loại: <input type="text" name="name" value="<?php echo $ten;?>"> <br>
        <input type="submit" value="edit" name="btnedit" id="edit">
    </form>
</body>
</html>