<div class="doctruyen">
    <div class="noi-dungtruyen">
        <div class="ten-truyen">
            <h4><?php echo $data['truyen']['ten']?></h4>
        </div>
        <div class="ten-chuong">
            <span><?php echo $data['chuong']['ten']?></span>
        </div>
        <div class="btn-chuong">
            <a href="
            <?php 
                $truyen_id = $data['truyen']['id'];
                $soChuong = tachSoChuong($data['chuong']['ten_khongdau'])-1;
                if(checkChuong($truyen_id, $soChuong) == true){
                    echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                }else{
                    echo "#";
                } 
            ?>
            "><button class="btn-prev">Chương trước</button></a>
            <a href="<?php echo APP_URL.'home/truyen/'.$data['truyen']['ten_khongdau'];?>"><button class="btn-home"><i class="fa-solid fa-house"></i></button></a>
            <a href="
            <?php 
                $truyen_id = $data['truyen']['id'];
                $soChuong = tachSoChuong($data['chuong']['ten_khongdau'])+1;
                if(checkChuong($truyen_id, $soChuong) == true){
                    echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                }else{
                    echo "#";
                }   
            ?>
            "><button class="btn-next">Chương tiếp</button></a>
        </div>
        <div class="noi-dung">
            <p><?php echo $data['chuong']['noidung']?></p>
        </div>
        <div class="btn-chuong">
            <a href="
            <?php 
                $truyen_id = $data['truyen']['id'];
                $soChuong = tachSoChuong($data['chuong']['ten_khongdau'])-1;
                if(checkChuong($truyen_id, $soChuong) == true){
                    echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                }else{
                    echo "#";
                } 
            ?>
            "><button class="btn-prev">Chương trước</button></a>
            <a href="<?php echo APP_URL.'home/truyen/'.$data['truyen']['ten_khongdau'];?>"><button class="btn-home"><i class="fa-solid fa-house"></i></button></a>
            <a href="
            <?php 
                $truyen_id = $data['truyen']['id'];
                $soChuong = tachSoChuong($data['chuong']['ten_khongdau'])+1;
                if(checkChuong($truyen_id, $soChuong) == true){
                    echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                }else{
                    echo "#";
                }   
            ?>
            "><button class="btn-next">Chương tiếp</button></a>
        </div>
    </div>
</div>