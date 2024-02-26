<div class="container-theloai">
    <div class="theloai-title">
        <h3 style="text-decoration:underline; color: gray;">Sách Theo Thể Loại</h3>
    </div>

    <?php foreach($data['truyen'] as $val) {?>
    <div class="theloai">
        <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau']?>"><img src="<?php storage_patch($val['hinh'])?>" alt="<?php echo $val['hinh']?>" class="theloai-img"></a>
        <div class="theloai-info">
            <h4 class="theloai-truyen"><a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau']?>"><?php echo $val['ten']?></a></h4>
            <span class="theloai-tacgia"><i class="fa-solid fa-pen"></i> <?php echo $val['tacgia']?></span>
        </div>
        <div class="theloai-chuong">
            <a href="<?php echo APP_URL.'home/doctruyen/'.$val['ten_khongdau'].'/chuong-'.$val['chuong']?>"><button class="theloai-btn">Chương <?php echo $val['chuong']?></button></a>
        </div>
    </div>
    <?php } ?>
</div>   


