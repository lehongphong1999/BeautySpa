@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Doanh thu</b></h3>
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
          <button type="submit" style="height: 30px ;width: 200px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem; margin-left: 300px"><a href="{{ route('indexrevenue') }}"><b>Thống kê theo ngày</b></a></button>
          <button type="submit" style="height: 30px ;width: 200px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem;"><a href="{{ route('index2revenue') }}"><b>Thống kê theo tháng</b></a></button>
          {{--  <button type="submit" style="height: 30px ;width: 200px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem;"><a href="#"><b>Thống kê theo nhân viên</b></a></button>  --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th style="padding-left: 100px;width: 250px;">STT</th>
                <th>Tháng</th>
                <th>Doanh thu</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @php
                 $total = 0;   
                 $totalmonth = 0;  
                @endphp
              @if (!is_null($db))
                @foreach ($db as $key => $item)
                @php
                    $total = $total + $item->total_money;
                @endphp
                <tr>
                    <td style="padding-left: 100px;">{{ $key + 1 }}</td>
                    <td class="mailbox-date">{{ $item->created_at->format('m-Y') }}</td>
                    <td>{{ number_format($item->total_money) }} VNĐ</td>
                    <td>
                      {{--  <button style="width: 90px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="#"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Xem</a></button>
                      <button style="width: 80px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="#"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Xóa</a></button>
                      <button style="width: 80px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="#"><i class="fa fa-print" aria-hidden="true" style="margin-right: 4px"></i>In</a></button>  --}}
                    </td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        {{--  {{ $db->links() }}  --}}
        <table class="table table-bordered  table-hover">
            <tr class="bg-danger text-white">
                <th> Tổng doanh thu : {{number_format($total)}} VNĐ</th>
            </tr>
        </table>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
