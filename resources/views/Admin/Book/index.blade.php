@extends('Admin.layouts.sidebar')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lý Lịch hẹn</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên KH</th>
                <th>Số điện thoại</th>
                <th>Dịch vụ</th>
                <th>Thời gian hẹn</th>
                <th>Lưu ý</th>
                <th>Trạng thái</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($db))
                @foreach ($db as $item)
                <tr>
                    <td>{{ $item->id_book }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->service }}</td>
                    <td>{{ $item->time_book }}</td>
                    <td>{{ $item->note }}</td>
                    <td>
                      @if ($item->status_reply==1)
                      Đã xác nhận
                      @else
                      Chưa xác nhận 
                      @endif
                    </td>
                    <td>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editbook', ['id_book'=>$item->id_book]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Edit</a></button>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deletebook', ['id_book'=>$item->id_book]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
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
