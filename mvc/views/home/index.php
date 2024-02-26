    <div class="container">
        <div class="hot-title">
            <h2><a href="#" title="Truyện hot">Nổi Bật</a></h2>
        </div>
        <div class="hot-list">
            <?php $stt=1; foreach($data['truyenHOT'] as $val){ ?>
            <div class="hot-listitem" itemscope>
                <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau']?>" itemprop="url">
                    <img src="<?php storage_patch($val['hinh'])?>" alt="<?php echo $val['ten']?>" lazysrc="<?php storage_patch($val['hinh'])?>" class="hot-img" itemprop="image">
                    <div class="hot-name">
                        <h3 itemprop="name"><?php echo $val['ten']?></h3>
                    </div>
                </a>
            </div>
            <?php $stt++; } ?>
        </div>
        <div class="clear" style="clear: left;"></div>
    </div>
    
    <div class="container-2">
        <div class="new-title">
            <h2><a href="#" title="Truyện mới">Danh Sách</a></h2>
            
        </div>
        <div class="new-wrapper">
            <table id="new-list">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Thể Loại</th>
                        <th>Chương</th>
                        <th>Cập Nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $STT = 1; foreach($data['truyenCapNhat'] as $val) {?>
                    <tr>
                        <td><?php echo $STT?></td>
                        <td><h3><a href="" title=""><a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau']?>" title="<?php echo $val['ten']?>"><?php echo $val['ten']?></a></h3></td>
                        <td><span><?php getTheLoai_HOME($val['id'])?></span></td>
                        <td><span><a href="">Chương <?php echo $val['chuong']?></a></span></td>
                        <td><?php echo DateToTime($val['capnhat'])?></td>
                    </tr>
                    <?php $STT++;}  ?>
                    
                </tbody>
            </table>
        </div>
    </div>