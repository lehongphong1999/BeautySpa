@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Doanh thu<i class="fa fa-angle-right" aria-hidden="true"></i> Xem chi tiết doanh thu</b></h3>
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
            <h3 class="card-title"><b>Ngày : {{ $db->created_at->format('d-m-Y') }}</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th>Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số lượng </th>
                <th>Tổng</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($detail_order))
                @foreach ($detail_order as $key => $item)
                @php
                    $totalproduc = 0;  
                    $totalproduc = $item -> product-> quantity * $item->product-> price;
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $item->product->product_name }}</td>
                    <td>{{ $item->product->link_image }}</td>
                    <td>{{ $item->product->price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{number_format($totalproduc)}}</td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
