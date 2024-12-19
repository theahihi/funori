<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="../Public/client/Css/login.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="all-container">
        <div class="box-picture">
            <div class="box-text">
                <h1>Welcome !</h1>
                <div class="content">
                    <div class="content-1">Lấy lại mật khẩu tại đây</div>
                </div>
                
            </div>
        </div>
        <form action="/funori/taikhoan/guimailquenmatkhau" method="post" style="margin-top: -600px; "  onsubmit="return validateForm()">
            <div class="box-login"  style="heigh: 300px " >
                <h2>Lấy lại mật khẩu</h2>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-envelope"></i>
                        <input class="user" type="text" placeholder="Email"  name="email" id="email" style="font-size: 15px;" required >
                    </div>
                    
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="/funori/taikhoan/login">Đăng nhập</a>
                    </div>
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="/funori/taikhoan/signup">Đăng ký tài khoản</a>
                    </div>
                </div>
                <div class="button-login">
                    
                        <button type="submit" name="btn">Gửi</button>
                   
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>




?>
<script>
function validatePassword() {
    let newPassword = document.getElementById('newpass9').value;
    let confirmPassword = document.getElementById('newpass8').value;
    if (newPassword !== confirmPassword) {
        alert("Mật khẩu không khớp. Vui lòng nhập lại.");
        return false;  
    }
        return true;
}
</script>