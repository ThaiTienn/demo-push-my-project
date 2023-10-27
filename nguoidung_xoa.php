<?php
include 'cauhinh.php';
	//echo "<h3>Sinh viên tự xây dựng</h3>";
	if(isset($_GET['do'])=='nguoidung_xoa'){
		$id = $_GET['id'];
	$sql_delete = mysqli_query($connect,"DELETE FROM tbl_nguoidung WHERE MaNguoiDung='$id'") or die(mysqli_error($connect));
	echo 'xoa thanh cong';
	}
?>
