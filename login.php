<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Form Login</title>
</head>
<body>
<?php        
        $kq="";
        include("admin/connect.php");
        if(isset($_POST["login"])){
            $taikhoan=$_POST["id"];
            $matkhau=$_POST["pass"];
                if($taikhoan==''|| $matkhau==''){
                    $kq="Please enter your id and password!";
                }else{
                    $sql="SELECT * FROM `user` WHERE user='$taikhoan' AND pass='$matkhau'";
                    $r=$db->query($sql);
                    $count=$r->rowCount();
                        
                    if($count>0){
                        while($row=$r->fetch()){
                        $_SESSION['currUser']=$row['user'];
                        if($row['role']==1){
                            $_SESSION['currAdmin']=$row['role'];
                            header("location:admin.php");
                        }else{
                            header("location:index.php");
                        }
                    }
                    }else{
                        $kq="ID name or password is wrong";
                    }         
                }
        }           
    ?>
    <form action="#" method="post">
        <div class="login-box">
            <p>Login</p>
            <div class="text-box">
                <i class="fa fa-user"></i>
                <input type="text" name="id" placeholder="username">
            </div>
            <div class="text-box">
                <i class="fa fa-lock"></i>
                <input type="password" name="pass" placeholder="password">
            </div>
            <input class="btn" type="submit" name="login" value="Login">
            <div class="kq"><?php echo $kq;?></div>
        </div>
    </form>


</body>
</html>