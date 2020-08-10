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
            $sql = "delete from sanpham where maSP = '$id' ";
            $r = $db -> exec($sql);
        }
        $sql = "select * from sanpham";
        $r = $db -> query ($sql); 
    ?>
    <table border ="1" width="1200px";>
        <tr>
            <th>Mã loại</th>
            <th>Tên sản phẩm</th>
            <th>Giá cũ</th>
            <th>Giá mới</th>
            <th>Hình đại diên</th>
            <th>Loại sản phẩm</th>
            <th>Mô tả sản phẩm</th>
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
                <td><img src="../Assignment/img/<?php echo $row[4];?>" width="200px" height="200px";></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td>
                    <a href="?act=sanpham&xoa=<?php echo $row[0];?>">Xoá</a>
                </td>
                <td>
                    <a href="?act=sanpham&sua=<?php echo $row[0];?>">Sửa</a>
                </td>
            </tr>
        <?php
            }
        ?>
        <td>
            <a href="?act=sanpham&them">Thêm</a>
        </td>
    </table>
</body>
</html>