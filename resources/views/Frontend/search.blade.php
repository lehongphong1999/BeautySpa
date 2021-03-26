@extends('Frontend.layouts.master')

@section('title')
<title>Sản phẩm</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_product.css"/> 
@endsection

@section('content')

<div class="list-brand">
    <div class="title">
        <a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Tìm kiếm </a>
    </div>
    <div class="list-brand-box">
        @foreach ($product as $item)
                <div class="brand">
                    <img src="{{ $item->link_image }}">
                    <br>
                    <h3>{{ $item->product_name }}</h3>
                    <div class="price">
                        <span class="new">{{ number_format($item->price) }} VND</span>
                    </div>
                    <div class="btn-more">
                        <label for="show_detail{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
                    </div>
                </div>
        @endforeach       
    </div>
</div>

@endsection