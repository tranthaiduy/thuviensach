<?php require_once './mvc/core/libs.php'; require_once './mvc/core/route.php';?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title><?php echo $data['title']?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale-1, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?php public_patch('img/icon.png')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                
            }

            ul {
                list-style: none;
            }

            .top {
                display: flex;
                align-items: center;
                flex-direction: column;
            }
            .logo img{
                width: 100px;
            }


            /* ----------HEADER---------- */

            .header {
                display: flex;
                margin: 0px 15px;
                align-items: center;
                position: relative;
                background: #35ad7b;
                padding: 0px 10px;
                border: 1px solid #1b8156;
                border-radius: 5px;
                z-index: 2;
            }


            .header_logo a{
                display: flex;
                align-items: center;
                text-decoration: none;
            }

            .header_menu {
                margin-left: 100px;
            }

            .dropdown {
                float: left;
                overflow: hidden;
                padding: 10px 10px;
                cursor: pointer;
            }

            .dropdown .dropbtn {
                font-size: 16px;  
                border: none;
                outline: none;
                color: white;
                padding: 16px 16px;
                background-color: #35ad7b;
                margin: 0;
                text-decoration: none;
            }

            .dropdown:hover .dropbtn {
                background-color: #24c562;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #24c562;
                width: 150px;
                top: 100%;
            }


            .dropdown:hover .dropdown-content {
                display: block;
            }

            .column {
                float: left;
                width: 100%;
                padding: 10px;
                height: auto;
            }

            .column a {
                float: none;
                color: #fff;
                padding: 5px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .column a:hover {
                text-decoration: underline;
            }

            .row-1 {
                margin-top: 20px;
            }

            .row-1 label {
                color: #fff;
                padding: 10px;
            }

            .column select {
                width: 100px;
                height: 30px;
                font-size: 15px;
                border: 1px solid #1b8156;
            }

            .column select option {
                font-size: 15px;
            }

            .form__search{
                margin-left: 230px;
            }

            .search input {
                height: 30px;
                border: 1px solid #fff;
                padding: 0px 5px;
                border-radius: 3px;
            }

            .search button {
                height: 30px;
                width: 30px;
                background: #fff;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                transition: 0.2s linear;
            }

            .search button i {
                font-size: 15px;
                color: #1b8156;
            }

            .search button:hover {
                width: 27px;
                height: 27px;
                opacity: 0.8;
            }


            /* ----------CONTAINER---------- */

            /* Container-1 */
            .container {
                margin: 40px 15px;
                padding: 0px 40px;
                width: 100%;
            }

            .hot-title {
                display: flex;
                justify-content: space-between;
                width: 91%;
            }



            .hot-title h2 a {
                font-size: 20px;
                font-weight: normal;
                color: #1b8156;
                border: 1px solid #1b8156;
                border-radius: 3px;
                padding: 10px 20px;
                text-decoration: none;
                transition: 0.2s linear;
            }

            .hot-title h2 a:hover {
                background-color: #24c562;
                border: 1px solid #24c562;
                color: #fff;
            } 


            .hot-list {
                margin-top: 20px;
                width: 100%;
                
                
            }

            .hot-listitem {
                width: 16%;
                float: left;
                margin-left: 25px;
                margin-top: 30px;
                position: relative;
                
            }

            .hot-listitem a {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-decoration: none;
                width: 100%;
                padding: 10px 0px;
                transition: 0.2s linear;
                border-radius: 20px;
                background-color: #ddd;
            }

            .hot-listitem a:hover {
                background-color: rgba(103, 255, 154, 0.7); 
            }

            .hot-listitem a:hover .hot-name h3 {
                color: #24c562;
            }

            .hot-name {
                background-color: rgba(230, 255, 251, 0.7); 
                width: 85%;
                height: auto;
                text-align: center;
                position: absolute;
                bottom: 10px;
                padding: 2px 5px;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
            }

            .hot-name h3 {
                font-weight: 500;
                font-size: 15px;
                color: #333333;
                transition: 0.2s linear;
                
            }
            .hot-img {
                width: 90%;
                height: 220px;
                border-radius: 20px;
            }

            /* Container-2 */

            .container-2 {
                margin: 40px 15px;
                padding: 0px 40px;
                max-width: 1250px;
                background-color: #fff;
            }

            .new-title {
                display: flex;
                justify-content: space-between;
            }

            .new-title h2 a {
                font-size: 20px;
                font-weight: normal;
                color: #1b8156;
                border: 1px solid #1b8156;
                border-radius: 3px;
                padding: 10px 20px;
                text-decoration: none;
                transition: 0.2s linear;
            }

            .new-title h2 a:hover {
                background-color: #24c562;
                border: 1px solid #24c562;
                color: #fff;
            } 

            .new-wrapper {
                margin-top: 30px;
            }

            #new-list {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #new-list td, #new-list th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #new-list tr:nth-child(even){background-color: #f2f2f2;}

            #new-list tr:hover {background-color: #ddd;}

            #new-list th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }

            #new-list td h3 a {
                font-size: 17px;
                color: #000;
                font-weight: normal;
                text-decoration: none;
            }

            #new-list td span a{
                font-size: 17px;
                color: #000;
                font-weight: normal;
                text-decoration: none;
            }


            /* TRUYEN */

            .container-truyen {
                padding: 40px;
                display: flex;
                justify-content: space-between;
            }

            .truyen-img {
                border-radius: 5px;
                padding: 5px;
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                height: 450px;
                width: 30%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .truyen-img img {
                border-radius: 5px;
                height: 100%;
                width: 100%;
            }

            .truyen-right {
                width: 65%;
            }

            .truyen-name h3 {
                text-align: center;
                font-size: 35px;
                color: #1b8156;
            }

            .truyen-info {
                margin-top: 30px;
            }

            .truyen-info .gioi-thieu {
                font-style: italic;
                color: #a5a3a3;
                font-size: 13px;
            }

            .truyen-infoitem {
                margin-top: 50px;
                display: flex;
                justify-content: space-between;
                position: relative;
            }

            .truyen-infoitem1 {
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 5px 20px;
                border-right: 1px solid #ccc;
                border-left: 1px solid #ccc;
                border-radius: 5px;
                position: absolute;
                top: -5px;
            }
            .truyen-infoitem1 p {
                margin-top: 20px;
                font-size: 15px;
            }

            .trangthai {
                color: #24c562;
            }

            .truyen-chuong {
                width: 60%;
                display: flex;
                position: absolute;
                top: 150px;
                left: 0px;
            }

            .chuong-list {
                width: 70%;
                display: flex;
                align-items: center;
                flex-direction: column;
            }

            .chuong-list .dschuong {
                margin-right: 100px;
                font-size: 18px;
                color: #04AA6D;
            }

            .chuong {
                display: flex;
                flex-direction: column;
                justify-content: left;
            }
            .chuong a {
                margin-right: 100px;
                margin-top: 10px;
                text-decoration: none;
                color: #19723b;
            }

            .chuong a:hover {
                text-decoration: underline;
            } 

            .button {
                width: 50%;
                position: absolute;
                top: 30px;
                left: 300px;
                text-align: center;
            }

            .button .button-btn {
                width: 100px;
                height: 50px;
                background-color: #35ad7b;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                color: #fff;
                transition: 0.2s linear;
            }

            .button .button-btn:hover {
                background-color: rgb(207, 58, 38);
            }

            /* DOCTRUYEN */

            .doctruyen {
                padding: 40px;
            }

            .noi-dungtruyen {
                width: 100%;
                text-align: center;
            }

            .ten-truyen {
                font-size: 30px;
                text-transform: uppercase;
                color: #04AA6D;
            }

            .ten-chuong {
                font-size: 18px;
                color: #6b6b6b;
                margin-top: 15px;
            }

            .btn-chuong {
                margin-top: 10px;
            }

            .btn-prev,
            .btn-next {
                width: 100px;
                height: 30px;
                background-color: #35ad7b;
                color: #fff;
                border: none;
                border-radius: 5px;
                transition: 0.3s linear;
                cursor: pointer;
            }

            .btn-home {
                width: 30px;
                height: 30px;
                background-color: #35ad7b;
                color: #fff;
                border: none;
                transition: 0.3s linear;
                border-radius: 5px;
                cursor: pointer;
            }

            .btn-home:hover,
            .btn-prev:hover,
            .btn-next:hover {
                opacity: 0.8;
            }

            .noi-dung {
                width: 100%;
                height: auto;
                margin-top: 30px;
                font-size: 20px;
                text-align: justify;
                line-height: 25px;
            }

            /* THỂ LOẠI */

            .container-theloai {
                margin-top: 40px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .theloai {
                margin-top: 40px;
                height: 100px;
                width: 1000px;
                border: 3px solid #ccc;
                border-radius: 15px;
                position: relative;
            }

            .theloai-img {
                height: 100%;
                width: 90px;
                border-radius: 15px;
                position: absolute;
                top: 0;
                left: 0;
                transition: 0.2s linear;
            }

            .theloai-img:hover {
                opacity: 0.8;
            }

            .theloai-info {
                position: absolute;
                top: 30px;
                left: 100px;
            }

            .theloai-chuong {
                position: absolute;
                top: 30px;
                left: 930px;
            }

            .theloai-truyen a {
                text-decoration: none;
                font-size: 18px;
                color: #333;
                transition: 0.2s linear;
            }

            .theloai-truyen a:hover {
                color: #24c562;
                text-decoration: underline;
            }

            .theloai-info span {
                font-size: 13px;
                color: gray;
            }

            .theloai-btn {
                width: 60px;
                height: 40px;
                border-radius: 5px;
                background-color: #35ad7b;
                border: none;
                color: #fff;
                cursor: pointer;
                transition: 0.2s linear;
            }

            .theloai-btn:hover {
                background-color: rgb(207, 58, 38);
            }

            /* FOOTER */
            .footer {
                margin-top: 300px;
                padding: 40px;
                text-align: center;
            }




        </style>
        
    </head>
    <body>
        <div class="wrapper" >
            <div class="top">
                <a href="" class="logo"></a>
            </div>
            <div class="header">
                <div class="header_logo">
                    <a href="<?php echo APP_URL;?>">
                        <img src="<?php public_patch('img/icon.png')?>" alt="" width="20px" >
                        <span style="margin-left: 5px; color: #fff;">ThuVienSach</span>
                    </a>
                </div>
                <div class="header_menu">
                    <div class="dropdown">
                        <a href="<?php echo APP_URL;?>" class="dropbtn">
                            Trang chủ
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn">Thể loại 
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">  
                            <div class="row">
                                <div class="column">
                                    <?php foreach(getTheLoai_Header() as $val){?>
                                    <a href="<?php echo APP_URL.'home/theloai/'.$val['ten_khongdau']?>" title="Thể loại <?php echo $val['ten']?>"><?php echo $val['ten']?></a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="" class="dropbtn">Liên hệ
                            <i class="fa-solid fa-earth-americas"></i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn">Tài khoản 
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <div class="dropdown-content">  
                            <div class="row">
                                <div class="column">
                                    <a href="<?php echo dangnhap;?>" title="Đăng nhập" target="_blank">Đăng nhập</a>
                                    <a href="<?php echo dangky;?>" title="Đăng ký" target="_blank">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="form__search">
                    <form class="search" method="POST" action="<?php echo APP_URL ?>home/timkiem">
                        <input type="search" name="keyword" id="keyword" placeholder="Tìm kiếm..." required>
                        <button class="btn" type="submit" aria-label="Tìm kiếm" role="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

            </div>
            
            
            
            <?php require_once './mvc/views/home/'.$data['page'].'.php';?>
            <div id="footer" class="footer">
                <div class="container-3">
                    <div class="">
                        <strong>Thuviensach.com</strong>
                        <span>Copyright-2023</span>
                    </div>
                </div>
            </div>
        </div>   
    </body>
    
</html>
