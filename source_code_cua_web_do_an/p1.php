<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pig-Safe</title>
    <link rel="stylesheet" type="text/css" href="p2.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lam_web_buon_ban_thuc_pham";
$huy = mysqli_connect($servername, $username, $password, $dbname);
if ($huy == false) die("Ket Noi That Bai" . mysqli_connect_error());
?>

<body>
    <div class="frame1">
        <div class="header">
            <img class="logo" src="logo.png">
            <form action="p3.php" method="POST">
                <input type="text" placeholder="What are you looking for ?" name="Tim_kiem">
                <input type="submit" value="Tìm kiếm">
            </form>
            <img class="contact-us" src="CONTACT US.png">
            <img class="Social" src="SOCIAL MEDIA.png">
        </div>
        <div class="header2">
            <div class="box1">
                <div>Shop by categories</div>
                <div>About</div>
                <div>Blog</div>
                <div>Contact</div>
            </div>
            <div class="box2">
                <img src="search.png">
                <img src="acc.png">
                <img src="like.png">
                <img src="cart.png">
            </div>
        </div>
        <div class="header3">
            <div class="slogan">
                <div>CHẢ GIÒ</div>
                <div>CHÀ BÔNG</div>
                <div class="adjust">CHẤT LƯỢNG</div>
            </div>
            <img class="shopnow" src="go to shop.png">
            <img class="elispe" src="Ellipse 32.png">
        </div>
    </div>
    <div class="frame2">
        <div class="letter">SPECIAL PRODUCTS FOR MOST PEOPLE</div>
    </div>
    <div class="frame3">
        <div class="box1">
            <div class="child1">ABOUT</div>
            <div class="child2">NHẤT NAM HƯƠNG</div>
            <div class="child3">MORE ABOUT</div>
        </div>
        <div class="box2">
            <div class="child1"> description description description description description description desdesdes here :)</div>
            <div class="child2"> description description descriptionption description description description descriptioscription description diption description description description description description descriptionion description description description desc</div>
        </div>
        <img class="box3" src="vegetable.png">
    </div>
    <div class="frame4">
        <button class="box1">TẤT CẢ SẢN PHẨM</button>
        <div class="container1">
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
        </div>
        <div class="container2">
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
        </div>
        <div class="container3">
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
            <div class="invisible-box">
                <div class="white-box"></div>
                <div class="name-product">Tên Sản Phẩm</div>
                <div class="price-product">00.00 VNĐ</div>
            </div>
        </div>
    </div>
    <img class="frame5" src="Frame 5.png">
    <img class="frame6" src="Frame 6.png">
    <div class="frame7">
        <div class="invisible-box">
            <div class="box1"> GET IN TOUCH</div>
            <div class="box2">we will make sure that you are the first one to get notification about cur new products</div>
            <div class="box3">Member ships,sale off and more.</div>
        </div>
        <div class="invisible-box2">
            <form method="POST">
                Tên : <input type="text" name="Name" /> </br>
                Mật khẩu: <input type="text" name="Pass" /> </br>
                Email : <input type="text" name="Email" /> </br>
                SĐT : <input type="text" name="Phone" /> </br>
                <input type="submit" value="Create Account">
            </form>
            <?php
            if (isset($_POST['Name']) == true && isset($_POST['Email']) == true && isset($_POST['Phone']) == true && isset($_POST['Pass']) == true) {
                $tname = $_POST['Name'];
                $temail = $_POST['Email'];
                $tphone = $_POST['Phone'];
                $tpass = $_POST['Pass'];
                $query = "INSERT INTO customer (Name ,email_address ,phone_number ,password) VALUES ('$tname','$temail','$tphone','$tpass')";
                if (mysqli_query($huy, $query) == true) echo "Them Thanh Cong";
            }
            ?>
        </div>
    </div>
    <img class="frame8" src="Frame 8.png">
    <img class="frame9" src="Frame 9.png">
</body>

</html>