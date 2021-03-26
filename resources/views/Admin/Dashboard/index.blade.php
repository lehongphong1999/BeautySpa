@extends('Admin.layouts.sidebar')
@section('content')
    
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          @php
            $totalorder = 0;   
          @endphp
          @if (!is_null($db))
            @foreach ($db as $key => $item)
              @php
              $key = $key + 1;
              @endphp
            @endforeach
          @endif
          <h3>{{ $key }}</h3>

          <p>Đơn hàng</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Thông tin thêm <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          @php
            $totalcus = 0;   
          @endphp
          @if (!is_null($dbuser))
            @foreach ($dbuser as $keycus => $item )
              @php
              $keycus = $keycus + 1;
              @endphp
            @endforeach
          @endif
          <h3>{{ $keycus }}</h3>
          <p>Khách hàng </p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ route('indexuser') }}" class="small-box-footer">Thông tin thêm <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          @php
            $total = 0;   
          @endphp
          @if (!is_null($db))
            @foreach ($db as $item)
              @php
                $total = $total + $item->total_money;
              @endphp
            @endforeach
          @endif
          <h3>{{ number_format($total) }} VNĐ</h3>

          <p>Tổng doanh thu</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('indexrevenue') }}" class="small-box-footer">Thông tin thêm<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          @php
            $totalcontact = 0;   
          @endphp
          @if (!is_null($dbcontact))
            @foreach ($dbcontact as $item)
              @php
              $totalcontact = $totalcontact + 1;
              @endphp
            @endforeach
          @endif
          <h3>{{ number_format($totalcontact) }}</h3>

          <p>Liên hệ</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href=" {{ route('indexcontact')}}" class="small-box-footer">Thông tin thêm <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="content" style="text-align: center">
      <div class="title m-b-md" style="font-size: 74px; margin-left: 125px;margin-top: 40px">
        Quản lý Website của bạn !!!
      </div>
    </div>
  </div>
@endsection
