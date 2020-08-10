<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <title>Assignment1</title>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="logo-top">
                <a href="index.html"><img src="img/logob.png"></a> 
            </div>
            <div class="menu-top">
                <a href="#">ABOUT US</a>
                <a href="#">OUR PRODUCTS</a>
                <a href="#">EVENTS</a>
                <a href="#">CONTACTS</a>
            </div>
            <div class="login-top">
                <i class="fa fa-bicycle" style="font-size: 36px;"></i>
                <a href="login.php">LOGIN</a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="text-top">
                <h1>TRUST ME......</h1>
                <p>
                    Life is like cycling, if you want to keep your balance you have to keep moving.
                </p>
                <a href="#">SHOP NOW</a>
            </div>
        </div>
    </header>

    <div class="content">
        <div class="boxcenter">
            <h1>OUR PRODUCTS</h1>
            <aside>
                <div class="top-menu">
                    <i class="fa fa-motorcycle"></i>Product Category
                </div>
                <div class="main-menu">

                
                <?php //Load danh mục từ database
                    include ("admin/connect.php");
                    $sql = "select * from loai_sp order by maSP desc limit 20";
                    $result = $db-> query($sql);

                ?>
                 <?php
                    while($value = $result -> fetch()){   
                ?>
                   <ul>
                        <li><a href="#"><?php echo $value["loaiSP"];?></a></li>
                   </ul>
                <?php
                    }
                ?>
                </div>
                <div class="bottom-menu"></div>
            </aside>

            <main>
                <div class="search">
                        <input type="text" placeholder="Enter Product Name">
                        <a href="#"><i class="fa fa-search" style="font-size: large;"></i></a>
                        <a href="#"><i class="far fa-clock"></i></a>
                </div>

                <?php //Load sản phẩm từ database
                    include_once("admin/connect.php");
                    $sql="select * from sanpham order by maSP desc limit 20";
                    $result = $db->query ($sql);
                ?>

                <?php
                while($value = $result -> fetch()){   
                ?>

                <div class="column">
                    <div class="sp">
                        <div class="ten">
                            <?php echo $value["tenSP"];?>
                        </div>
                        <img src="<?php echo "img/".$value["hinhAnh"];?>" width=500px; height=300px;>
                        <div class="price">
                            <del>$<?php echo $value["giaCu"];?></del>
                            $<?php echo $value["giaMoi"];?>
                        </div>
                        <div class="mota"><?php echo $value["motaSP"];?></div> <br>
                        <span><a href="#"> ADD TO CART</a></span>
                        <div class="detail">
                            <a href="ctsp.php?id=<?php echo $value[0];?>">Details</a>
                        </div>
                    </div>
                </div>
                <?php
                }?>
            </main>
        </div>
    </div>

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