@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Dịch vụ </b></h3>
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
          <button type="submit" style="height: 30px ;width: 80px;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem;"><a href="{{ route('addservice') }}"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px"></i><b>Add</b></a></button>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th style="width: 400px">Tên Dịch vụ</th>
                <th>Giá</th>
                <th>Khuyến mại</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Link Ảnh</th>
                <th>Trạng thái</th>
                <th>Danh mục Lớn</th>
                <th>Danh mục Nhỏ</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($service))
                
              {{--  @foreach ($db as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>  --}}
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
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td> {{ str_limit($item->product_name, 15) }}</td>
                        <td>{{ $item->price }} VNĐ</td>
                        <td style="padding-left: 40px">{{ $item->sale_percent }}%</td>
                        <td>{{ str_limit($item->description, 15) }}</td>
                        <td> 
                          <img style="width: 40px ; height: 40px;" src="{{ $item->link_image }}">
                        </td>
                        <td>{{ str_limit($item->link_image) }}</td>
                        <td>
                          @if ($item->status==1)
                          Hiển thị
                          @else
                          Ẩn  
                          @endif
                        </td>
                        <td>{{ $item->category_large_id }}</td>
                        <td>{{ $item->category_small_id }}</td>
                        <td>
                          <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editservice', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Edit</a></button>
                          <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deleteservice', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
                        </td>
                    </tr>
                    @endif
                    @php
                        $check = 0;
                    @endphp
                @endforeach
                
              @endif
            </tbody>
          </table>
        </div>
        {{--  {{ $service->links() }}  --}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
