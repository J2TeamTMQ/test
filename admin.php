<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banhang_xedap</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header>
        <h1>Quản lý bán hàng xe đạp</h1>
    </header>
    <nav>
        <ul>
            <li><a href="?act=loai">Loại sản phẩm</a></li>
            <li><a href="?act=sanpham">Quản lý sản phẩm</a></li>
            <li><a href="?act=khachhang">Quản lý khách hàng</a></li>
        </ul>
    </nav>
    <article>
        <?php    
            include("admin/connect.php");
            if(isset($_POST["dangnhap"])){
                $taikhoan=$_POST["taikhoan"];
                $matkhau=$_POST["matkhau"];

            if($taikhoan==''|| $matkhau==''){
                echo " nhập đầy đủ tài khoản & mật khẩu";
            }else{
                $sql="SELECT * FROM `login` WHERE user='$taikhoan' AND pass='$matkhau'";
                $r=$db->query($sql);
                $count=$r->rowCount();
                
                    if($count>0){
                        while($row=$r->fetch()){
                            $_SESSION['currUser']=$row['user'];
                                if($row['roles']==1){
                                    $_SESSION['currAdmin']=$row['roles'];
                                    header("location:index.php");
                                }else{
                                    header("location:user.php");
                                }
                                }
                }else{
                    echo " tên đăng nhập hoặc mật khẩu không chính xác";
                }     
                }
            }
        ?>

            <?php
                if(isset($_GET['act'])){
                    $act = $_GET['act'];
                }else{
                    $act = "";
                }
                switch($act){
                    case 'loai';
                        if(isset($_GET['sua'])){
                            include("admin/update_loaisp.php");
                        }if(isset($_GET['them'])){
                            include("admin/themloaisp.php");
                        }
                    include("admin/showloaisp.php");
                    break;

                    case 'sanpham';
                        if(isset($_GET['sua'])){
                            include("admin/update_sp.php");
                        }if(isset($_GET['them'])){
                            include("admin/them_sp.php");
                        }
                    include("admin/show_sp.php");
                    break;

                    case 'khachhang';
                    if(isset($_GET['sua'])){
                        include("admin/update_kh.php");
                    }if(isset($_GET['them'])){
                        include("admin/them_kh.php");
                    }
                    include("admin/show_kh.php");
                    break;
                }
        ?>
    </article>
    
    <div class="brand">
        <div class="box-logo">
            <img src="img/logo1.jpg">
        </div>
        <div class="box-logo">
            <img src="img/logo2.jpg">
        </div>
        <div class="box-logo">
            <img src="img/logo3.jpg">
        </div>
        <div class="box-logo">
            <img src="img/logo4.jpg">
        </div>
        <div class="box-logo">
            <img src="img/logo5.jpg">
        </div>
    </div>

    <footer>
        <div class="box-footer">
            <div class="left">
                <p>
                    Tan Phu district, HCM city <br>
                    Ruby department, CELADON city <br>
                    bi.nguyen4793@gmail.com <br>
                    0903647093
                </p>
            </div>
        </div>
        <div class="box-footer">
            <div class="center">
                <a href="#"><i class="fa fa-facebook-square" style="font-size: 36px; color: blue;"></i></a>
                <a href="#"><i class="fa fa-youtube" style="font-size: 36px;color: red"></i></a>
                <a href="#"><i class="fa fa-twitter-square" style="font-size: 36px;color:blue" ></i></a>
            </div>
        </div>
        <div class="box-footer">
            <div class="right">
                <p>Subscribe to Updates</p>
                <input id="Email" type="Email" placeholder="Enter your email here*" >
                <input id="submit" type="submit" value="Subcribe Now">
            </div>
        </div>
    </footer>
</body>
</html>