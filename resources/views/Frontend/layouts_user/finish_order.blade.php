@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin Ví</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_detail_order.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>HOÀN TẤT</span>
    </div>
    <div class="step">
        <div class="step-item">
            <i style="color: #42a8bf;" class="fa fa-shopping-cart" aria-hidden="true"></i>
            <br>
            <span style="color: #42a8bf;" class="step-name">GIỎ HÀNG</span>
            <br>
            <div class="step-number1">
                <span class="step-number11">1</span>
            </div>
        </div>
        <div class="next">
            <i style="color: #42a8bf;" class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
        <div class="step-item">
            <i style="color: #42a8bf;" class="fa fa-usd" aria-hidden="true"></i>
            <br>
            <span style="color: #42a8bf;" class="step-name">THANH TOÁN</span>
            <br>
            <div class="step-number2">
                <span class="step-number22">2</span>
            </div>
        </div>
        <div class="next">
            <i style="color: #42a8bf;" class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
        <div class="step-item">
            <i style="color: #42a8bf;" class="fa fa-check" aria-hidden="true"></i>
            <br>
            <span style="color: #42a8bf;" class="step-name">HOÀN TẤT</span>
            <br>
            <div class="step-number3">
                <span class="step-number33">3</span>
            </div>
        </div>
    </div>
    <div class="info-order">
        <div class="code">
            <span>Mã Đơn hàng: </span>
            <span class="code1"><b>{{ $madon }} </b></span>
        </div>
        <div class="date">
            <span><b>Ngày :</b></span>
            <span style="font-style: italic;"> 20/10/2020 </span>
        </div>
        <div class="name">
            <span><b>Khách hàng :</b></span>
            <span> {{ $name }} </span>
        </div>
        <div class="address ">
            <span><b>Địa chỉ :</b></span>
            <span> {{ $address }} </span>
        </div>
        <div class="method-ship">
            <span><b>Phương thức thanh toán :</b></span>
            <span style="font-style: italic;"> Thanh toán khi nhận hàng (COD) </span>
        </div>
        <div class="status">
            <span><b>Trạng thái :</b></span>
            <span style="font-style: italic;"> Thành công </span>
        </div>
    </div>
    <div class="detail-order">
        <div class="title5">
            <span><b>Thông tin Đơn hàng</b></span>
        </div>
        <div class="detail-menu">
            <span>STT </span>
            <span>Sản phẩm </span>
            <span>Giá </span>
            <span>Số lượng </span>
            <span>Tổng tiền </span>
        </div>
        <div class="detail-item">
            @php
                $temp = 0;
            @endphp
            @foreach ($allcart as $item)
            @php
                $temp++;
            @endphp
            <div class="item">
                <span>{{ $temp }}</span>
                <span>{{ Str::limit($item->product->product_name,25) }}</span>
                <span>{{ number_format($item->product->price) }} VNĐ</span>
                <span>{{ $item->quantity }}</span> 
                <span>{{ number_format($item->product->price * $item->quantity) }} VNĐ</span> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="action">
        <div class="shopping">
            <a href="{{ route('index') }}"><p>TIẾP TỤC MUA HÀNG</p></a>
        </div>
        <div class="print">
            <a href="#"><i class="fa fa-print" aria-hidden="true"></i> In </a>
        </div>  
    </div>
</div>

@endsection