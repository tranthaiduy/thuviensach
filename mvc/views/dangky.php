<?php 
    require_once "./mvc/core/libs.php"; 
    require_once "./mvc/core/route.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="<?php public_patch('img/favicon.png')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica, sans-serif;
                box-sizing: border-box;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                min-height: 80vh;
            }

            .container {
                padding: 40px;
                background-color: #f1f4f5;
                border: 1px solid #333;
                border-radius: 25px;
            }



            .container .form h2 {
                font-weight: 500;
                color: #333;
                font-size: 30px;
            }

            .container .form .inputBox {
                width: 300px;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .container .form .inputBox input {
                margin-top: 25px;
                width: 100%;
                background-color: #f1f4f5;
                border: 1px solid #333;
                height: 50px;
                border-radius: 25px;
                padding: 12px 10px 12px 49.5px;
                font-size: 20px;
                font-weight: 550;
            }

            .container .form .inputBox i {
                position: absolute;
                top: 37px;
                left: 16px;
                padding-right: 7.5px;
                border-right: 1px solid;
                font-size: 20px;
                font-weight: 600;
                color: #333;
            }

            .container .form .inputBox span {
                position: absolute;
                top: 36px;
                left: 50px;
                font-size: 20px;
                font-weight: 600;
                color: #333;
                pointer-events: none;
                transition: 0.5s;
            }

            .container .form .inputBox input:valid ~ span,
            .container .form .inputBox input:focus ~ span {
                font-size: 15px;
                border: 1px solid #333;
                color: #333;
                font-weight: 500;
                border-radius: 20px;
                padding: 0px 8px 2px 8px;
                transform: translateY(-34px);
            }

            .container .form .inputBox a input {
                font-weight: 600;
                color: #333;
                padding: 0 10px;
                transition: 0.4s ease;
                cursor: pointer;
            }

            .container .form .inputBox a input:hover {
                opacity: 0.5;
            }

            .container .form p {
                margin-top: 20px;
                color: #333;
                font-size: 15px;
            }

            .container .form p a {
                font-weight: 600;
                color: #333;
                text-decoration: none;
            }

            .container .form p a:hover {
                text-decoration: underline;
            }


        </style>
    </head>
    <body>
        <form action="<?php echo xulydangky;?>" method="POST" class="container">
            <div class="form">
                <h2>Đăng ký</h2>
                <div class="inputBox">
                    <input name="tendangnhap" type="text" required="required">
                    <i class="fa-regular fa-user"></i>
                    <span>tên tài khoản</span>
                </div>
                <div class="inputBox">
                    <input id="matkhau" name="matkhau" type="password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>mật khẩu</span>
                </div>
                <div class="inputBox">
                    <input id="nhaplaimatkhau" name="nhaplaimatkhau" type="password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>nhập lại mật khẩu</span>
                </div>
                <div class="inputBox">
                    <a href=""><input type="submit" value="Đăng ký"></a>
                </div>
                <div class="thongbao" id="thongbao" style="color: red; font-size: 18px; margin-top: 10px;"></div>
                <p>Bạn đã có tài khoản? <a href="<?php echo dangnhap;?>">Đăng nhập</a></p>
                <p>Về lại <a href="<?php echo APP_URL?>">Trang chủ</a></p>
            </div>
        </form>
        <script>
            const passwordInput = document.getElementById("matkhau");
            const retypePasswordInput = document.getElementById("nhaplaimatkhau");
            const thongbao = document.getElementById("thongbao");

            retypePasswordInput.addEventListener("input", function () {
                const password = passwordInput.value;
                const retypePassword = retypePasswordInput.value;

                if (password !== retypePassword) {
                    thongbao.textContent = "Mật khẩu nhập lại không trùng khớp!";
                } else {
                    thongbao.textContent = "";
                }
            });
        </script>
    </body>
</html>