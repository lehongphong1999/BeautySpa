<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		@yield('title')
		@yield('css')
		<link rel="stylesheet" type="text/css" href="front/css/style.css"/> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script type="text/javascript" src="front/javascript/javascript.js"></script>
	</head>
	<body>
        @include('Frontend.layouts.header')
        <div class="container_content">
			<div class="title">
				<a href="#" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Tài Khoản </a>
			</div>
			<div class="center">
				<div class="box-menu">
					<div class="title2">
						<div class="image_avatar" >
							@if (is_null(Auth::user()->avata))
							<img style="width: 80px; height: 80px; border-radius: 50%; margin-left: 12px; margin-top: 4px" src="{{ asset('sources/img/userinfo/avatar.jpg') }}">
							@else
							<img style="width: 80px; height: 80px;  border-radius: 50%; margin-left: 12px; margin-top: 4px" src="{{ asset(Auth::user()->avata) }}">
							@endif
						</div>
						<div class="title4">
							<span>{{ Auth::user()->phone }}</span>
							<br>
							<p style="font-size: 14px; font-weight: 600;">{{ Auth::user()->name }}</p>
							<p style="font-size: 14px; font-weight: 550;">{{ Auth::user()->email }}</p>
						</div>		
					</div>	
					<div>
						<ul>
							<li><a href="{{ route('userinfo') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-user-circle-o" aria-hidden="true"></i>Thông tin cá nhân </a></li> 
							<li><a href="{{ route('usersecurity') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-key" aria-hidden="true"></i>Thông tin bảo mật </a></li> 
							<li><a href="{{ route('cart') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-shopping-cart" aria-hidden="true"></i>Giỏ hàng </a></li> 
							<li><a href="{{ route('userhistory') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-history" aria-hidden="true"></i>Lịch sử  </a></li>   
							{{--  <li><a href="{{ route('userqrcode') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-qrcode" aria-hidden="true"></i>QR Code  </a></li>   --}}
							<li><a href="{{ route('logout') }}"><i style="font-size: 25px; margin-top: 10px; margin-right: 10px;" class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất </a></li> 
						  </ul>
					</div>    	
				</div>
				@yield('content') 
			</div>
		</div>
		@include('Frontend.layouts.footer')
	</body>
</html>
