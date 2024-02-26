<?php  require_once "./mvc/core/libs.php";
	class TruyenTheLoai_Model extends dbCon{
		private $Truyen_TheLoai;

		function __construct(){
			$this->Truyen_TheLoai = new dbCon();
			$this->Truyen_TheLoai = $this->Truyen_TheLoai->connect();
		}

		public function them($truyen_id, $ten){
			try{
				$query = "INSERT INTO truyen_theloai(truyen_id, ten, ten_khongdau) VALUES (:truyen_id, :ten, :ten_khongdau)";
				$cmd = $this->Truyen_TheLoai->prepare($query);
				$cmd->bindValue(":truyen_id", $truyen_id);
				$cmd->bindValue(":ten", $ten);
				$cmd->bindValue(":ten_khongdau", Slug($ten));
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function xoa($truyen_id){
			try{
				$query = "DELETE FROM truyen_theloai WHERE truyen_id = :truyen_id";
				$cmd = $this->Truyen_TheLoai->prepare($query);
				$cmd->bindValue(":truyen_id", $truyen_id);
				$cmd->execute();
				return $cmd->rowCount();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function get($truyen_id){
			try{
				$query = "SELECT ten FROM truyen_theloai WHERE truyen_id = :truyen_id";
				$cmd = $this->Truyen_TheLoai->prepare($query);
				$cmd->bindValue(":truyen_id", $truyen_id);
				$cmd->execute();
				return $cmd->fetchAll();

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}

		
	}
?>