@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Chi tiết đơn hàng</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_detail_order.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>Chi tiết đơn hàng</span>
    </div>
    <div class="info-order">
        <div class="code">
            <span>Mã Đơn hàng: </span>
            <span class="code1"><b>{{ $order->id }} </b></span>
        </div>
        <div class="date">
            <span><b>Ngày :</b></span>
            <span style="font-style: italic;"> {{$order->created_at->format('d-m-Y')}} </span>
        </div>
        <div class="name">
            <span><b>Khách hàng :</b></span>
            <span>{{$order->name }}</span>
        </div>
        <div class="address ">
            <span><b>Địa chỉ :</b></span>
            <span> {{$order->address}} </span>
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
            @foreach ($detail_order as $item)
                @php
                    $temp++;    
                @endphp                
                <div class="item">
                    <span> {{ $temp }}</span>
                    <span>{{ Str::limit($item->product->product_name,20) }}</span>
                    <span>{{ number_format($item->product->price) }} vnđ </span>
                    <span>{{ $item->quantity }} </span>
                    <span>{{ number_format($item->product->price * $item->quantity) }} </span> 
                </div>
            @endforeach
        </div>
    </div>
    <div class="print-order">
        <a href="#"><i class="fa fa-print" aria-hidden="true"></i> In hóa đơn </a>
    </div>
</div>

@endsection