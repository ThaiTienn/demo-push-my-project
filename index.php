<?php
	session_start();
	
	include_once "cauhinh.php";
	
	include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trang Web Bán Bánh Mì</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="scripts/ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<div id="TrangWeb">
			<div id="PhanDau">	
			
				<?php
					if(isset($_SESSION['MaND']) && isset($_SESSION['HoTen']))
					{
					echo "<br><br><br><br><br>Xin chào ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
						echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;";
					}
				?>				
			</div>
			<div id="PhanGiua">
				<div id="BenTrai">
					<?php
					//hiện menu quản lý
					if(!isset($_SESSION['MaND']))
					{
						echo '<h3>Quản lý</h3>';
							echo '<ul>';
								echo '<li><a href="index.php?do=dangnhap">Đăng nhập</a></li>';
								echo '<li><a href="index.php?do=dangky">Đăng ký</a></li>';
							echo '</ul>';
					}
					else
					{
						echo '<h3>Quản lý</h3>';
						echo '<ul>';						
						        echo '<li><a href="index.php?do=baiviet_them">Đăng bài viết</a></li>';
							    echo '<li><a href="index.php?do=index1">Các loại bánh mì phổ biến</a></li>';
								echo '<li><a href="index.php?do=index2">Các loại bánh mì đang giảm giá</a></li>';
								echo '<li><a href="index.php?do=index3">Các loại bánh mì đặt biệt</a></li>';
								echo '<li><a href="index.php?do=index4">Các loại bánh mì sữa</a></li>';
								echo '<li><a href="index.php?do=index5">Các loại bánh mì sandwich</a></li>';
								
							if($_SESSION['QuyenHan'] == 1)
							{	
								echo '<li><a href="index.php?do=indextrangchu">Trang chủ</a></li>';
								echo '<li><a href="index.php?do=chude">Danh sách chủ đề</a></li>';
								echo '<li><a href="index.php?do=baiviet">Danh sách bài viết</a></li>';
								echo '<li><a href="index.php?do=nguoidung">Các tài khoản người dùng</a></li>';
							}
						echo '</ul>';
					}	
					
						//hiện menu hồ sơ cá nhân					
						if(isset($_SESSION['MaND']))
						{
							echo '<h3>Hồ sơ cá nhân</h3>';
							echo '<ul>';						
								echo '<li><a href="index.php?do=hosocanhan">Hồ sơ cá nhân</a></li>';
								echo '<li><a href="index.php?do=doimatkhau">Đổi mật khẩu</a></li>';
							echo '</ul>';
						}								
						?>

					
					
		
					
				</div>
				<div style="width: 80%" id="BenPhai">
					<?php
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
						
						include $do . ".php";
					?>
				</div>
			</div>
			<div id="PhanCuoi">
				<div class="lienhe">© 2023 Electro Store. All rights reserved | Design by hthnhu@gmail.com </div>
				
			</div>
		</div>
	</body>
</html>