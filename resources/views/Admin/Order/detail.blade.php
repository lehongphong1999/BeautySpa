@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Đơn hàng <i class="fa fa-angle-right" aria-hidden="true"></i> Xem chi tiết đơn hàng</b></h3>
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search ..." style="border-radius: 25rem;">

              <div class="input-group-append">
                <button style="border-radius: 25rem; margin-left: 10px" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="card-header">
            <h3 class="card-title"><b>Ngày : {{ $order->created_at->format('d-m-Y') }} <br> <br>  Khách hàng: {{ $order->name }}</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số lượng </th>
                <th>Tổng</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($detail_order))
              @php
                    $total = 0;  
            @endphp
                @foreach ($detail_order as $key => $item)
                @php
                    $totalproduc = 0;  
                    $totalproduc = $item -> quantity * $item->product-> price;
                    $total = $total + $totalproduc;
                @endphp
                
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->product->product_name }}</td>
                    
                    <td><img style="width: 40px ; height: 40px;" src="{{ $item->product->link_image }}"></td>
                    <td>{{ number_format($item->product->price) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{number_format($totalproduc)}} VNĐ</td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
          <table class="table table-bordered  table-hover">
            <tr class="bg-danger text-white">
                <th> Tổng doanh thu : {{number_format($total)}} VNĐ</th>
            </tr>
        </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
