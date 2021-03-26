@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Lịch sử giao dịch</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_history.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>LỊCH SỬ </span>
    </div>
    <div class="history-detail">
        <div class="history-detail-menu">
            <span>STT </span>
            <span>Ngày </span>
            <span>Tổng tiền </span>
            <span>Phương thức </span>
            <span>Số ĐT</span>
            <span>Địa chỉ</span>
            <span>Trạng thái </span>
            <span> </span>
        </div>
        <div class="history-detail-item">
            @if (!is_null($history))
                @php
                    $temp = 0;
                    $total = 0;
                @endphp
                @foreach ($history as $item)
                @php
                    $temp++;
                @endphp
                <div class="history-detail-item1">
                    <span>{{ $temp }} </span>
                    <span>{{ $item->created_at->format('d-m-Y') }}</span>
                    <span>{{ number_format($item->total_money) }} VNĐ</span>
                    @if($item->method_ship == 1)
                        <span>Thanh toán COD</span>
                    @elseif($item->method_ship == 2)
                        <span>Thanh toán thẻ ngân hàng</span>
                    @elseif($item->method_ship == 3)
                        <span>Thanh toán momo</span>
                    @endif
                    <span>{{ ($item->phone) }}</span>
                    <span>{{ ($item->address) }}</span>  
                    <span>Thành công</span>
                    <a href="{{ route('detailorder', ['id'=>$item->id]) }}"<i class="fa fa-eye" aria-hidden="true"></i></a> 
                </div>
                @endforeach
            @endif    
        </div>
    </div>
</div>

@endsection