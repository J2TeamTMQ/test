<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_sp</title>
</head>
<body>

<?php
    include("connect.php");
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql = "delete from loai_sp where maSP=$id";
        $r = $db->exec($sql);
    }
    $sql = "select * from loai_sp";
    $r = $db->query($sql); //thực thi câu truy vấn
?>

<table border ="1">
    <tr>
        <th>Mã Loại</th>
        <th>Tên Loại</th>
    </tr>
<?php
    while($row = $r->fetch()) //lấy từng dòng dữ liệu
{
?>
    <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td>
            <a href="?act=loai&xoa=<?php echo $row[0];?>">Xoá</a>
        </td>
        <td>
            <a href="?act=loai&sua=<?php echo $row[0];?>">Edit</a>
        </td>
    </tr>
<?php
}
?>
    <td>
        <a href="?act=loai&them">Thêm</a>
    </td>
</table>

</body>
</html>