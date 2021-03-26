@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin ví</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_cart.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>GIỎ HÀNG</span>
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
            <i class="fa fa-usd" aria-hidden="true"></i>
            <br>
            <span class="step-name">THANH TOÁN</span>
            <br>
            <div class="step-number">
                <span class="step-number22">2</span>
            </div>
        </div>
        <div class="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
        <div class="step-item">
            <i class="fa fa-check" aria-hidden="true"></i>
            <br>
            <span class="step-name">HOÀN TẤT</span>
            <br>
            <div class="step-number">
                <span class="step-number33">3</span>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="product-menu">
            <span>STT </span>
            <span>Sản phẩm </span>
            <span>Hình ảnh </span>
            <span>Giá </span>
            <span>Số lượng </span>
            <span>Thành tiền </span>
        </div>
        <div class="product-item">
            @if (!is_null($allcart))
                @php
                    $temp = 0;
                    $total = 0;
                @endphp
                @foreach ($allcart as $item)
                @php
                    $temp++;
                @endphp
                <div class="product-item1">
                    <span>{{ $temp }} </span>
                    <span>{{ Str::limit($item->product->product_name,40) }}</span>
                    <img src="{{ $item->product->link_image }}">
                    <span>{{ number_format($item->product->price) }} VNĐ</span>
                    <span>{{ $item->quantity }}</span> 
                    <span>{{ number_format($item->product->price * $item->quantity) }} VNĐ</span>
                    <span style="width: 20px; margin-left: 15px"><a href="{{ route('deleteitemcart', ['id'=>$item->id_product]) }}"><i style="color: red; font-size: 14px" class="fa fa-times" aria-hidden="true"></i></a></span> 
                </div>
                @php
                    $total = $total + ($item->product->price * $item->quantity);
                @endphp
                @endforeach
            @endif
        </div>
    </div>
    <div class="total-money">
        <span style="font-size: 16px; font-weight: 500; margin-top: 5px">Tổng thanh toán :</span> 
        <span style="font-size: 20px; font-weight: 600; color: #42a8bf">{{ number_format($total) }} VNĐ</span>
    </div>
    <div class="action">
        <div class="tieptuc">
            <a href="{{ route('index') }}"><p>Tiếp tục mua hàng</p></a>
        </div>    
        <div class="checkout">
            <a href="{{ route('checkout') }}"><p>Thanh toán</p></a>
        </div>  
        
    </div>
</div>

@endsection