<?php if(isset($_COOKIE['message'])){ ?>
    <div class="alert alert-warning shadow-sm px-2" role="alert">
        <?php echo $_COOKIE['message']?>
    </div>
<?php } ?>
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">SỬA SÁCH</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo bangdieukhien?>">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active">Sửa sách</li>
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
              <div class="card-body">
                <form action="<?php echo XuLySuaTruyen?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?php echo $data['truyen']['id']?>" hidden>
                    <div class="form-group">
                        <label>Tên Sách (*)</label>
                        <input type="text" class="form-control" name="ten" value="<?php echo $data['truyen']['ten']?>" required autocomplete="off" maxlength="150">
                        <small id="emailHelp" class="form-text text-muted">Tên sách phải là duy nhất.</small>
                    </div>
                    <div class="form-group">
                        <label>Hình Sách</label>
                        <div class="input-group" >
                            <input type="file" class="form-control" id="hinh" name="hinh" aria-describedby="inputGroupFileAddon01">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tác Giả (*)</label>
                        <input type="text" class="form-control" name="tacgia" value="<?php echo $data['truyen']['tacgia']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nguồn (*)</label>
                        <input type="text" class="form-control" name="nguon" value="<?php echo $data['truyen']['nguon']?>" maxlength="225" required>
                    </div>
                    <div class="form-group">
                        <label>Trạng Thái</label>
                        <select class="form-control" name="trangthai">
                            <option value="Đang cập nhật" <?php if( $data['truyen']['gioithieu'] == 'Đang cập nhật') echo 'selected';?>>Đang cập nhật</option>
                            <option value="Tạm ngưng" <?php if( $data['truyen']['gioithieu'] == 'Tạm ngưng') echo 'selected';?>>Tạm ngưng</option>
                            <option value="Hoàn thành" <?php if( $data['truyen']['gioithieu'] == 'Hoàn thành') echo 'selected';?>>Hoàn thành</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Thể Loại (*)</label>
                        <select class="selectpicker" multiple data-live-search="true" dataaria-placeholder="Chọn ít nhất một thể loại" name="theloai[]">
                            <?php foreach ($data['theloai'] as $val) { ?>
                            <option value="<?php echo $val['ten']?>"><?php echo $val['ten'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <textarea class="form-control ckeditor" name="gioithieu" id="gioithieu" rows="3"><?php echo $data['truyen']['gioithieu']?></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Cập Nhật</button></div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
    </div>
</section>


