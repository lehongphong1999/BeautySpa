@extends('Frontend.layouts.master')

@section('title')
<title>Dịch vụ</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_service.css"/> 
@endsection

@section('content')

<div class="list-brand">
    <div class="title">
        <a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ </a>
    </div>
    <div class="list-brand-box">
        @php
            $check = 0;
        @endphp
        @foreach ($service as $item)
            @foreach ($service_category as $temp)
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
                    <h3>{{ substr($item->product_name, 0, 40) }}</h3>
                    <div class="price">
                        <span class="new">{{ number_format($item->price) }} VND</span>
                    </div>
                    <div class="btn-more">
                        <label for="show_service{{ $item->id }}" class="show-btndetail"> Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></label>
                    </div>
                </div>
            @endif
            @php
                $check = 0;
            @endphp
        @endforeach
    </div>
    {{--  <div style="width: 15%;margin: auto;">{{ $service->links() }}</div>  --}}
</div>
@endsection