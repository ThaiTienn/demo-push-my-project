<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge ">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>Trang web bán hàng</title>
	
</head>
<body>
<header>
	    <img src="images/banhmikhongco.jpg"	style="width:500px; height:100px;"/>
</header>
<nav>
	<div class="container">
	<ul>
		<li><a href=""><img src="images/banhmikhongco.jpg" style="width:120px; height:40px;" alt=""></a></li>
		<li id="adress-form"><a href="#">An Giang<i class="fas fa-sort-down"></i></a></li>
		<li><input tyle="text" placeholder="Bạn tìm gì..."> <i class="fas fa-search"></i></li>
		<li><button><a href="giohang.php"><i class="fas fa-shopping-cart">Giỏ hàng</i></a></button></li>
        <li><a href="">Lịch sử <br> đơn hàng</a></li>
		<li><a href="">Hỏi đáp</a></li>
		<li><a href="">Thông tin sản phẩm</a></li>

		<div class="adress-form">
			<div class="adress-form-content">
			  <h2>Chọn địa chỉ nhận hàng<span id="adress-close">X Đóng</span></h2>
			  <form action="">
				 <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
				 <select name="">
					 <option value="#">--Chọn Tỉnh</option>
					 <option value="#">An Giang</option>
				 </select>
				 <select name="">
					 <option value="#">--Chọn Quận/Huyện</option>
					 <option value="#">Châu Phú</option>
				 </select>
				 <select name="">
					 <option value="#">--Chọn Xã/Phường</option>
					 <option value="#">Long Điền A</option>
				 </select>
				 <input type="text"placeholder="Số nhà, tên đường">
				 <button>Xác nhận</button>
			 </form>
			</div>
		 </div>

	</ul>
 </div>
</nav>
<section class="menu-bar">
  <div class="container">
	<div class="menu-bar-content">
	   	<ul>
		   <li><a href="index.html"><i class="fas fa-Trangchu-alt"></i>Trang chủ</a>
			    <div class="submenu"> 
                    <ul>
                        <li><a href="index1.html"> Các loại bánh mì phổ biến</a></li>
						<li><a href="index2.html"> Các loại bánh mì đang giảm giá</a></li>
						<li><a href="index3.html"> Các loại bánh mì đặt biệt</a></li>
						<li><a href="index4.html"> Các loại bánh mì sữa</a></li>
						<li><a href="index5.html"> Các loại bánh mì sandwich</a></li>
					</ul>
				</div>
			</li> 
			<li><a href=""><i class="fas fa-loai"></i>Loại</a>
			<div class="submenu"> 
                    <ul>
						<li><a href=""> Bánh MìLaptop HP</a></li>
						<li><a href=""> Sandwich</a></li>
						
					</ul>
				</div>
			</li>
			<li><a href=""><i class="fas fa-gioithieu-alt"></i>Giới Thiệu</a>
				<div class="submenu"> 
                    <ul>
						<li><a href=""> Thông tin liên hệ</a></li>
						<li><a href=""> Thông tin lịch sử quán</a></li>

						
					</ul>
				</div>
			</li> 
			<li><a href=""><i class="fa-thin fa-gears"></i> Liên Hệ <i style="margin-left: 4px;" class="fas fa-sort-down"></i></a>
			    <div class="submenu"> 
                    <ul>
						<li><a href="index7.html"> Số điện thoại</li>
						<li><a href="index6.html"> Gmail</a></li>
						
						
					</ul>
				</div>
			</li> 
			<li><a href=""><i class="fas fa-cuahang-20"></i>Cửa Hàng</a>
				<div class="submenu"> 
                    <ul>
						<li><a href=""> Địa chỉ</a></li>
						
					</ul>
				</div>
			</li> 
			<li><a href="">Tin tức</a></li> 
			<li><a href="">Ngày Giảm Giá</a></li> 
			<li><a href="">Ngày nghỉ </a></li> 
		</ul>
	  </div>
	</div>	
</section>
<!------------------Slider----------------->
<section class="slider">
   <div class="container">
	   <div class="slider-content">
		   <div class="slider-content-left">
			<div class="slider-content-left-top-container">
				<div class="slider-content-left-top">
					<a href=""><img src="images/banhmikhongco.jpg" alt=""></a>
					<a href=""><img src="images/banhmi.jpg" alt=""></a>
					<a href=""><img src="images/banhmitamgiac.jpg" alt=""></a>
					
				 </div> 
				 <div class="slider-content-left-top-btn">
					 <i class="fas fa-chevron-left"></i>
					 <i class="fas fa-chevron-right"></i>
				</div>
			</div>
			  <div class="slider-content-left-bottom">
                   <li class="active">Bánh mì giảm giá</li>
				   <li>Bánh mì đặt biệt</li>
				   <li>Bánh mì giảm giá</li>
				   <li>Bánh mì sữa</li>
				   <li>Bánh mì sandwich</li>
			  </div>
		    </div>
			<div class="slider-content-right">
                <li><a href=""><img src="images/banhmichacathu.jpg" alt=""></a></li>
				<li><a href=""><img src="images/banhmiCinnamonRollssua.jpg" alt=""></a></li>
				<li><a href=""><img src="images/banhmingotnhansuadua.jpg" alt=""></a></li>
				<li><a href=""><img src="images/banhmitrungopla.jpg" alt=""></a></li>
		    </div>
	   </div>
   </div>
</section>   
<section class="baner-one">
	<div class="container">
	<img src="images/banhmikhongco.jpg" style="height:50px; width: 1200px;" alt=""/>
   </div>
</section>
<!------------------slider product---------------->
<section class="slider-product-one">
  <div class="container">
	<div class="slider-product-one-content">
		<div class="slider-product-one-content-title">
			<h2>Bánh mì giảm giá</h2>
	    </div>

		<div class="slider-product-one-content-container">
			<div class="slider-product-one-content-items-content">
              <div class="slider-product-one-content-items">
			<div class="slider-product-one-content-item">
				<img src="images/banhmitrungopla.jpg" alt="">
				   <div class="slider-product-one-content-item-text">
				   <li><img src="images/icon.png" alt=""> <p>Vui cùng Seagame</p></li>
				   <li>Bánh mì trứng ốp la</li>
				   <li>Online giá rẻ</li>
				   <li><a href="">40.000<sup>đ</sup></a> <span>-25%</span></li>
				   <li>5.599.000<sup>đ</sup></li>
				   
				   <li>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</li>
		    </div>
		 </div>
		 <div class="slider-product-one-content-item">
			<img src="images/banhmitamgiac.jpg" alt="">
			   <div class="slider-product-one-content-item-text">
			   <li><img src="images/icon.png" alt=""> <p>Vui cùng wouldcup</p></li>
			   <li>Bánh mì tam giác</li>
			   <li>Online giá rẻ</li>
			   <li><a href="">40.000<sup>đ</sup></a> <span>-25%</span></li>
			   <li>9.599.000<sup>đ</sup></li>
			   
			   <li>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</li>
		</div>
	 </div>
	 <div class="slider-product-one-content-item">
				<img src="images/banhmithitga.jpg" alt="">
				   <div class="slider-product-one-content-item-text">
				   <li><img src="images/icon.png" alt=""> <p>Vui cùng wouldcup</p></li>
				   <li>Bánh mì thịt gà</li>
				   <li>Online giá rẻ</li>
				   <li><a href="">30.000<sup>đ</sup></a> <span>-25%</span></li>
				   <li>25.000<sup>đ</sup></li>
				   
				   <li>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</li>
		    </div>
		 </div>
		 
		
				</div>	
			</div>
			    

				<div class="slider-product-one-content-btn">
					<i class="fas fa-chevron-left fa-chevron-left-two"></i>
					<i class="fas fa-chevron-right fa-chevron-right-two"></i>
			    </div>

		</div>
   
    </div>
  </div>
</section>


<script src="script.js"></script>
</body>
</html>