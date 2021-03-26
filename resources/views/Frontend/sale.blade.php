@extends('Frontend.layouts.master')

@section('title')
<title>Ưu đãi</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_sale.css"/> 
@endsection

@section('content')

<div class="banner">
    <img src="front/image/fullbgsale.png">
</div>
<div class="list-sale">
    <div class="title">
        <a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a><i class="fa fa-angle-right" aria-hidden="true"></i> Ưu đãi </a>
    </div>
    <div class="list-sale-box">

        @foreach ($newssale as $item)
        <div class="sale">
            <img src="{{ $item->img }}">
            <br>
            <h3>{{ $item->title }}</h3>
            <div class="due">
                <i style="color:#c07438" class="fa fa-calendar-o" aria-hidden="true"></i>
                <span class="day"> {{ $item->created_at }} - {{ $item->due_at }} </span>
            </div>
            <div class="btn-more">
                <label for="show_detailnewssale{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection