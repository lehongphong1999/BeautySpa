@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Đơn hàng</b></h3>
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search ..." style="border-radius: 25rem;">

              <div class="input-group-append">
                <button style="border-radius: 25rem; margin-left: 10px" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div> --}}
        </div>
        
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th>Ngày</th>
                <th>Khách hàng</th>
                <th>Địa chỉ</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @php
                 $total = 0;   
                @endphp
              @if (!is_null($db))
                @foreach ($db as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="mailbox-date">{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{ number_format($item->total_money) }} VNĐ</td>
                    @if($item->pay == 1)
                        <td> Thành công</td>
                    @else($item->pay == 0)
                        <td> Chưa Thành công</td>
                        @endif
                    <td>
                      <button style="width: 90px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('showdetailorder',['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Xem</a></button>
                      <button style="width: 80px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deleteorder') }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Xóa</a></button>
                    </td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        {{--  {{ $db->links() }}  --}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
