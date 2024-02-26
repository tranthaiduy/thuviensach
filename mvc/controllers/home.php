<?php 
    class home extends core{
        function index(){
            $this->view('trangchu', [
                'title' => 'Thư viện sách',
                'page'  => 'index',
                'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT(),
                'truyenCapNhat' => $this->model("Truyen_Model")->getTruyenMoiCapNhat(),

            ]);
        }

        function truyen($ten_khongdau){
            $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
            
            $this->view("trangchu", [
                'title' => $truyen['ten'],
                'page' => 'truyen',
                'truyen' => $truyen,
                'chuong' => $this->model("Chuong_Model")->get($truyen['id'])
            ]);
        }

        function doctruyen($ten_khongdau, $chuong){
            $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
            $chuong = $this->model("Chuong_Model")->getHome($truyen['id'], $chuong);
            
            $this->view("trangchu", [
                'title' => $truyen['ten'],
                'page' => 'doctruyen',
                'truyen' => $truyen,
                'chuong' => $chuong
            ]);
        }

        function theloai($ten_khongdau){
            $truyen = $this->model("Truyen_Model")->getTruyenByTheLoai($ten_khongdau);
            
            $this->view('trangchu', [
                'title' => 'Tìm theo thể loại',
                'page'  => 'theloai',
                'truyen'=> $truyen,
            ]);
        }

        function timkiem() {
            if (isset($_POST['keyword'])) {
                $keyword = $_POST['keyword'];
                $truyen = $this->model("Truyen_Model")->searchTruyenByName($keyword);
    
                $this->view('trangchu', [
                    'title' => 'Kết quả tìm kiếm',
                    'page'  => 'timkiem',
                    'truyen' => $truyen,
                ]);
            } else {
                // Xử lý khi không có keyword được gửi
            }
        }

    }
?>