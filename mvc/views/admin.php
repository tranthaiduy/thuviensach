<?php 
  require_once './mvc/core/libs.php'; 
  require_once './mvc/core/route.php';
  
?>
<?php
    //$_SESSION['folder_root'] = 'THU MUC'; // DUONG DAN THU MUC
    $_SESSION['folder_root'] = $_SERVER["REQUEST_URI"];  // ở đây tôi lấy luôn đường dẩn hiện tại
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $data['title']?></title>
  <link rel="shortcut icon" href="<?php public_patch('img/favicon.png')?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/jqvmap/jqvmap.min.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/dist/css/adminlte.min.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php public_patch('admin/plugins/summernote/summernote-bs4.min.css')?>">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
  <script src="<?php public_patch('ckeditor/ckeditor.js')?>"></script>
  
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo APP_URL?>" class="nav-link">Trang admin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Liên hệ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                
              </div>
            </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo DangXuat?>" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php public_patch('img/favicon.png')?>" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ThuVienSach</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php public_patch('img/avatar.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['truyenfull_user']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm truyện" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?php echo bangdieukhien?>" class="nav-link <?php active('admin/bang-dieu-khien', 'active')?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng Điều Khiển
              </p>
            </a>
          </li>
          <li class="nav-header">CHỨC NĂNG</li>
          <li class="nav-item">
            <a href="<?php echo theloaitruyen?>" class="nav-link <?php active('admin/the-loai-truyen', 'active')?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thể loại sách
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?php echo Truyen?>" class="nav-link <?php active('admin/truyen', 'active'); active('admin/sua-truyen', 'active'); active('admin/danh-sach-chuong', 'active')?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Danh sách 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo ThemTruyen?>" class="nav-link <?php active('admin/them-truyen', 'active')?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Đăng sách
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require_once './mvc/views/'.$data['page'].'.php'; ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-<?php echo date('Y')?> <a href="<?php echo APP_URL?>">TruyenHay</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php public_patch('admin/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php public_patch('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/chart.js/Chart.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/sparklines/sparkline.js')?>"></script>
<script src="<?php public_patch('admin/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<script src="<?php public_patch('admin/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/moment/moment.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/daterangepicker/daterangepicker.js')?>"></script>

<script src="<?php public_patch('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/summernote/summernote-bs4.min.js')?>"></script>
<script src="<?php public_patch('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<script src="<?php public_patch('admin/dist/js/adminlte.js')?>"></script>

<script src="<?php public_patch('admin/dist/js/pages/dashboard.js')?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
