<!DOCTYPE html>
<html>
<head>
<title>波波视频网</title>
<link href = "{{ asset('homes/orders/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src = "{{ asset('homes/orders/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href = "{{ asset('homes/orders/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href = "{{ asset('homes/orders/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src = "{{ asset('homes/orders/js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src = "{{ asset('homes/orders/js/simpleCart.min.js')}}"> </script>
<!-- slide -->
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-md-4 world">
					<ul >
						
						
					</ul>
				</div>
				<div class="col-md-4 logo">
					<a href="{{url('/home')}}"><img src = "{{ asset('homes/orders/images/logo2.png')}}" alt=""></a>	
				</div>
		
			<div class="col-md-4 header-left">		
					<p class="log"><a href="{{url('/login')}}"  >登录</a>
						<span>or</span><a  href="{{url('/register')}}"  >注册</a></p>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src = "{{ asset('homes/orders/images/cart.png')}}" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">购物车</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-md-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>1111 1111 11</span>
				</div>
	<div class="col-md-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="{{url('/home')}}">首页</a></li>	
				      
				    
				
				<li><a class="color6" href="contact.html">联系我们</a></li>
			  </ul> 
			</div>
				<div class="col-md-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src = "{{ asset('homes/orders/js/modernizr.custom.min.js')}}"></script>    
					<link href = "{{ asset('homes/orders/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
					<script src = "{{ asset('homes/orders/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<!---->
<div class="container">
	<div class="check-out">
		<h1>VIP购买</h1>
    	    <table >
		  <tr>
			<th>商品</th>
			<th>数量</th>		
			<th>金额</th>
			
		  </tr>
		  <tr>
			<td class="ring-in"><a href="single.html" class="at-in"><img src = "{{ asset('homes/orders/images/ce.jpg')}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h2>一个月会员</h2>
				
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="0" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>10.00元</td>
			
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src = "{{ asset('homes/orders/images/ce1.jpg')}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h2>三个月会员</h2>
				
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="0" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>20.00元</td>
			
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src = "{{ asset('homes/orders/images/ce2.jpg')}}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>一年会员</h5>
				
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="0" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>70.00元</td>
			
		  </tr>
	</table>
	<a href="#" class=" to-buy">总价

	</a>
	<div class="clearfix"> </div>
    </div>
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li><a href="#">Dignissim neque</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Feature Projects</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
	</div>
</div>

<!--//footer-->
</body>
</html>