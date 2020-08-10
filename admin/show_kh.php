<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("connect.php");
        if(isset($_GET["xoa"])){
            $id = $_GET["xoa"];
            $sql = "delete from khachhang where maKH = '$id' ";
            $r = $db -> exec($sql);
        }
        $sql = "select * from khachhang";
        $r = $db -> query ($sql); 
    ?>
    <table border ="1">
        <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>

        <?php
            while ($row = $r->fetch())
            {    
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td>
                    <a href="?act=khachhang&xoa=<?php echo $row[0];?>">Xoá</a>
                </td>
                <td>
                    <a href="?act=khachhang&sua=<?php echo $row[0];?>">Sửa</a>           
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="?act=khachhang&them">Thêm</a>           
</body>
</html>