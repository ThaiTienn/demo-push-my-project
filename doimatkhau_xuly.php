<?php
    
	if(isset($_POST['doimatkhau'])){
		$MatKhau_cu = md5($_POST['MatKhauCu']);
		$MatKhau_moi = md5($_POST['MatKhauMoi']);
		$MatKhau_xnmk = md5($_POST['XacNhanMatKhauMoi']);
		$ID = $_POST['MaNguoiDung'];
		//$sql = "SELECT * FROM tbl_nguoidung WHERE TenDangNhap= '$ID' and MatKhau ='$MatKhau_cu' LIMIT 1;";
		$sql = "SELECT * FROM tbl_nguoidung WHERE MaNguoiDung= '$ID'";
		$row = mysqli_query($connect,$sql);
		//$count= mysqli_num_rows($row);
		$result = mysqli_fetch_array($row);
		$pw = $result['MatKhau'];
		//if($count>0){
		if ($pw == $MatKhau_cu){
			//$sql_update = mysqli_query($mysqli,"UPDATE tbl_nguoidung SET MatKhau='$MatKhau_moi' WHERE TenDangNhap= '$ID' and MatKhau ='$MatKhau_cu'" );
			$sql_update = mysqli_query($connect,"UPDATE tbl_nguoidung SET MatKhau='$MatKhau_moi' WHERE MaNguoiDung= '$ID'");
			echo'<p> "Mật khẩu đã được thay đổi." </p>';
			
		}else{
			echo'<p> "Mật khẩu cũ không đúng, vui lòng nhập lại!" </p>';
		}
		
	}
	
	
	
	
?>