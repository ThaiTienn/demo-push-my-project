<?php
	//echo "<h3>Sinh viên tự xây dựng</h3>";
	include 'cauhinh.php';
	if(isset($_GET['do'])=='nguoidung_sua'){
		$id = $_GET['id'];
		$quyen = $_GET['quyen'];
	$sql_delete = mysqli_query($connect,"UPDATE tbl_nguoidung SET QuyenHan = '$quyen' WHERE MaNguoiDung='$id'") or die(mysqli_error($connect));
	echo 'sua thanh cong';
	}
?>