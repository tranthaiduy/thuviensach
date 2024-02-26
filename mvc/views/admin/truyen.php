<?php if(isset($_COOKIE['message'])){ ?>
            <div class="alert alert-warning shadow-sm px-2" role="alert">
                <?php echo $_COOKIE['message']?>
            </div>
<?php } ?>
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">DANH SÁCH</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo bangdieukhien?>">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        </div>
    </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>HÌNH</th>
                      <th>TÊN SÁCH</th>
                      <th>TÁC GIẢ</th>
                      <th>TRẠNG THÁI</th>
                      <th>SỐ CHƯƠNG</th>
                      <th>THỂ LOẠI</th>
                      <th>CẬP NHẬT</th>
                      <th>HÀNH ĐỘNG</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- start loop -->
                    <?php $stt=1; foreach ($data['truyen'] as $val) { ?>
                    <tr>
                      <td><?php echo $stt?></td>
                      <td><img src="<?php storage_patch($val['hinh'])?>" alt="" srcset="" style="width: 40px; height: 60px;"></td>
                      <td><?php echo $val['ten']?></td>
                      <td><?php echo $val['tacgia']?></td>
                      <td><?php echo $val['trangthai']?></td>
                      <td><?php echo $val['chuong']?></td>
                      <td><?php getTheLoai($val['id'])?></td>
                      <td><span class="tag tag-success"><?php echo DateToTime($val['capnhat']) ?></span></td>
                      <td>
                        <a href="<?php echo DanhSachChuong.'/'.$val['ten_khongdau']?>"><button type="button" class="btn btn-success"><i class="fas fa-list"></i></button></a>
                        <a href="<?php echo SuaTruyen.'/'.$val['ten_khongdau']?>"><button class="btn btn-warning" onclick=""><i class="fas fa-edit"></i></button></a>
                        <a href="<?php echo XuLyXoaTruyen.'/'.$val['id']?>"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa ')"><i class="fas fa-trash-alt"></i></button></a>
                        
                      </td>
                    </tr>
                    <?php $stt++; }?>
                    <!-- end loop -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>
    </div>
</section>


