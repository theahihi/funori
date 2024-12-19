<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="//theme.hstatic.net/200000065946/1001264503/14/styles.css?v=482">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/productdetail03.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/fontawesome-free-6.6.0-web/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/main1.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/about.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/shop4.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/main-moblie.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/giohang01.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/thanhtoan.css' ?>">
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/Css/hoanthanhthanhtoan.css' ?>">
    <title>Funori</title>
</head>
<body>
<div class="header">
    <div class="content">
        <div class="box-menu-mobile">
            <button>
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <nav class="box-menu">
            <ul class="all-list-menu">
                <li>
                    <a href="/funori/trangchu/home" class="hover-a">Home</a>
                </li>
                <li class="padding-list-menu">
                    <a href="/funori/trangchu/shop" class="hover-a">Shop</a>
                </li>
                <li class="padding-list-menu">
                    <a href="/funori/trangchu/aboutus" class="hover-a">About Us</a>
                </li>
            </ul>
        </nav>
        <div class="box-logo" style="display: flex; flex-direction: column;">
            <div class="logo">
                <a href="index.html">
                    <img src="<?php echo WEBROOT . 'public/client/Picture/logo.png'; ?>" alt="">
                </a>
            </div>
            <div class="search-container">
                <form action="/funori/trangchu/xulytimkiem" method="post" class="search-form" style="margin-top: 10px; margin-bottom: 5px;">
                    <input type="text" id="searchInput" name="nd" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <div id="searchResults" style="margin-top:-10px;margin-left:20px; display: none; "></div>
            </div>
        </div>
        <style>
            .tentk:hover{
                color: orange;
            }
        </style>
        <div class="box-icon">
            <?php if (isset($_COOKIE['username'])  )   { ?>
                <?php if( $_COOKIE['role']==0){?>
                <a href="/Funori/taikhoan/thongtincanhan" style="font-size:15px" class="tentk"><?php echo $_COOKIE['name'] ?></a>
                <a href="<?php echo WEBROOT . 'taikhoan/dangxuat' ?>">
                    <i class="fa-solid fa-right-from-bracket heart"></i>
                </a>
                <?php } else{?>
                    <a href="<?php echo WEBROOT . 'taikhoan/login' ?>" class="box-user">
                    <i class="fa-regular fa-user user"></i>
                </a>
                    <?php }?>
            <?php } ?>
            <?php if (!isset($_COOKIE['username'])) { ?>
                <a href="<?php echo WEBROOT . 'taikhoan/login' ?>" class="box-user">
                    <i class="fa-regular fa-user user"></i>
                </a>
            <?php } ?>
            <a href="<?php echo WEBROOT . 'muahang/giohang' ?>" class="box-cart">
                <i class="fa-solid fa-cart-shopping cart"></i>
            </a>

        </div>
    </div>
</div>

<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        const query = this.value.trim();
        const searchResults = document.getElementById("searchResults");

        if (query.length > 0) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "/funori/trangchu/goiytimkiem", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    searchResults.innerHTML = xhr.responseText;
                    searchResults.style.display = "block"; // Hiển thị kết quả gợi ý
                }
            };

            xhr.send("nd=" + encodeURIComponent(query));
        } else {
            searchResults.innerHTML = ""; // Xóa kết quả cũ
            searchResults.style.display = "none"; // Ẩn gợi ý khi ô tìm kiếm rỗng
        }
    });

    document.getElementById("searchResults").addEventListener("click", function (event) {
        const target = event.target;
        if (target.tagName === "DIV") {
            document.getElementById("searchInput").value = target.innerText; // Gán tên sản phẩm vào input
            this.innerHTML = "";
            this.style.display = "none"; // Ẩn gợi ý sau khi chọn
        }
    });
</script>

</body>
</html>
