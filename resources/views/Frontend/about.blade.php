@extends('Frontend.layouts.master')

@section('title')
<title>Giới thiệu</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_about.css"/> 
@endsection

@section('content')

		<div class="detail">
			<a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Giới thiệu </a>
			{!! html_entity_decode($intros[0]->content) !!}
        </div>
		<div class="brand-banner3">
			<div class="title-3">
				<h3>VÌ SAO CHỌN BEAUTY SPA ?</h3>
			</div>
			<div class="br-bn-3-header">
				<div class="img3">
					<img src="https://leskin.vn/html/destop/img/spa-transform.webp?v10">
						<br>
						<h3> Phác đồ điều trị độc quyền</h3>
				</div>
			</div>
			<div class="br-bn-3">
				<div class="br-bn-3-left">
					<div class="img3">
						<img src="https://leskin.vn/html/destop/img/phone.webp?v10">
						<br>
						<h3> Trải nghiệm dịch vụ dễ dàng, nhanh chóng</h3>
					</div>
					<div class="img3" style="margin-top:100px">
						<img  src="https://leskin.vn/html/destop/img/spa-tham-my-cong-nghe-cao-my-pham.webp?v10">
							<br>
							<h3> Công nghệ vượt trội</h3>
					</div>
				</div>
				<div class="br-bn-3-center">
					<img src="https://leskin.vn/html/destop/img/dermatude-model.png">
				</div>
				<div class="br-bn-3-right">
					<div class="img3">
						<img src="https://leskin.vn/html/destop/img/cangdamat2.webp?v10">
						<br>
						<h3> Hiệu quả rõ rệt</h3>
					</div>
					<div class="img3" style="margin-top:100px">
						<img src="https://leskin.vn/html/destop/img/Untitled-1.webp?v10">
						<br>
						<h3> Thương hiệu uy tín</h3>
					</div>
				</div>
			</div>	
			<div class="br-bn-3-footer">
				<div class="img3">
					<img src="https://leskin.vn/html/destop/img/cac-dich-vu-spa.webp?v10">
					<br>
					<h3> Tuyệt đối an toàn</h3>
				</div>
			</div>		
		</div>
@endsection