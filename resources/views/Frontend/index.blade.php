@extends('Frontend.layouts.master')

@section('title')
<title>Trang chủ</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_index.css"/> 
@endsection

@section('content')
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="z-index: 1">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="front/image/banner.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://leskin.vn/Uploads/images/banner.webp?v10" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://leskin.vn/Uploads/Slider/slide4.webp?v10" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="banner_icon">
    <div id="icon" >
        <img src="https://leskin.vn/Uploads/images/home-icon-1-Copy-1.webp?v10">
        <p>	Giảm 10% 
            <br>
            Tăng điểm tích lũy
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-2.webp?v10">
        <p>	50+ ưu đãi
            <br>
            mỗi tháng
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-3.webp?v10">
        <p>	đặt dịch vụ 
            <br>
            nhanh chóng
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-4.webp?v10">
        <p>	hơn 22
            <br>
            thương hiệu
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-5.webp?v10">
        <p>	hơn 300+ 
            <br>
            spa làm đẹp
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-6.webp?v10">
        <p>	hơn 250+ 
            <br>
            đối tác
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-7.webp?v10">
        <p>	hơn 1250+
            <br>
            khách hàng
        </p>
    </div>
    <div id="icon" >
        <img src="https://leskin.vn/uploads/images/home-icon-8.webp?v10">
        <p>	hơn 25
            <br>
            Thành phố
        </p>
    </div>
</div>
<div class="list-brand">
    <div class="title">
        <h2>
            Dịch vụ
        </h2>
    </div>
    <div class="list-brand-box">
        @foreach ($services as $item)
            <div class="brand">
                <img src="{{ $item->category_img }}">
                <br>
                <h3 style="text-transform: uppercase ;" >{{ $item->category_name }}</h3>
                <div class="btn-more">
                    {{--  <span for="show_detail" class="show-btndetail">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></span>  --}}
                    <label for="show_detailcategory{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="list-brand">
    <div class="title">
        <h2>
            Sản Phẩm
        </h2>
    </div>
    <div class="list-brand-box">
        @php
            $count = 0;
            $check = 0;
        @endphp
        @foreach ($product as $item)
            @foreach ($product_category as $temp)
                @if ($temp->id == $item->category_large_id)
                    @php
                        $check = 1;
                    @endphp
                @endif
            @endforeach
            @if ($check == 1)
            <div class="brand">
                <img src="{{ $item->link_image }}">
                <br>
                <h3>{{ $item->product_name }}</h3>
                <div class="btn-more">
                    <label for="show_detail{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
                </div>
            </div>
                @php
                    $count++;
                @endphp
            @endif
            @php
                $check = 0;
            @endphp
            @if ($count == 4)
                @break
            @endif
        @endforeach
    </div>
    <div class="btn-more-all">
        <a href="{{ route('product') }}" title=""><p>Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></p></a>
    </div>
</div>
<div class="list-brand">
    <div class="title">
        <h2>
            Tin tức
        </h2>
    </div>
    <div class="list-brand-box">
        @foreach ($news as $item)
        <div class="brand">
            <img src="{{$item->file_img }}">
            <br>
            <h3>{{$item->title }}</h3>
            <div class="btn-more">
                <label for="show_detailnews{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
            </div>
        </div>
        @endforeach
    </div>
    <div class="btn-more-all">
        <a href="{{ route('news') }}" title=""><p>Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></p></a>
    </div>
</div>
<div class="brand-banner">
    <div>
        <img src="https://leskin.vn/Uploads/images/Leskin-app.webp?v10">
    </div>
    <div class="text">
        <h2>Làm đẹp mọi lúc mọi nơi</h2>
           <p><i class="fa fa-check"></i>Rẻ hơn, nhiều ưu đãi hơn</p>
        <p><i class="fa fa-check"></i>Hệ thống SPA toàn quốc</p>
        <p><i class="fa fa-check"></i>Tặng dịch vụ cho người khác</p>
        <p><i class="fa fa-check"></i>Mua mỹ phẩm chính hãng</p>
    </div>
</div>
<div class="brand-banner2">
    <div class="title-step">
        <h2>5 BƯỚC ĐỂ TRẢI NGHIỆM DỊCH VỤ TẠI BEAUTY SPA</h2>
    </div>
    <div class="fivestep">
    <div class="step">
        <p class="number">01</p>
        <br>
        <p class="text2">Cài app Beauty Spa hoặc truy cập Website Beauty Spa</p>
    </div>
    <div class="step">
        <p class="number">02</p>
        <br>
        <p class="text2">Đăng ký thông tin</p>
    </div>
    <div class="step">
        <p class="number">03</p>
        <br>
        <p class="text2">Được tư vấn và giải đáp từ chuyên gia </p>
    </div>
    <div class="step">
        <p class="number">04</p>
        <br>
        <p class="text2">Đặt chỗ tại Spa thuộc hệ thống Beauty Spa</p>
    </div>
    <div class="step">
        <p class="number">05</p>
        <br>
        <p class="text2">Trải nghiệm quy trình điều trị</p>
    </div>
    </div>
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