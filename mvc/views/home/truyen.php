<div class="container-truyen">
    <div class="truyen-img">
        <img src="<?php storage_patch($data['truyen']['hinh'])?>" alt="<?php echo $data['truyen']['ten']?>" itemprop="image">
    </div>
    <div class="truyen-right">
        <div class="truyen-name">
            <h3><?php echo $data['truyen']['ten']?></h3>
        </div>
        <div class="truyen-info">
            <p class="gioi-thieu">Giới thiệu: <?php echo $data['truyen']['gioithieu']?></p>
            <div class="truyen-infoitem">
                <div class="truyen-infoitem1">
                    <p>Tác giả: <?php echo $data['truyen']['tacgia']?></p>
                    <p>Thể loại: <?php getTheLoai_HOME($data['truyen']['id'])?></p>
                    <p>Trạng thái: <span class="trangthai"><?php echo $data['truyen']['trangthai']?></span></p>
                </div>
                <div class="truyen-chuong">
                    <div class="chuong-list">
                        <p class="dschuong">Danh sách chương: </p>
                        <div class="chuong">
                            <?php foreach($data['chuong'] as $val) {?>
                            <a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.$val['ten_khongdau']?>" title="<?php echo $val['ten']?>"><i class="fa-solid fa-circle-dot"></i> <?php echo $val['ten']?></a>
                            
                            <?php } ?>
                        </div>
                    </div>
                    <a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-1'?>" class="button"><button class="button-btn">Đọc từ đầu</button></a>
                </div>
            </div>
        </div>
    </div>
</div>