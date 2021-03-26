@extends('Admin.layouts.sidebar')
@section('content')


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Quản lý Danh mục</b></h3>
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search" style="border-radius: 25rem;">

              <div class="input-group-append">
                <button style="border-radius: 25rem; margin-left: 10px" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="card-header">
          <button type="submit" style="height: 30px ;width: 80px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem;"><a href="{{ route('addcategory') }}"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px"></i><b>Add</b></a></button>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Slug</th>
                <th>Nội dung</th>
                <th>Danh mục Cha</th>
                <th>Trạng thái</th>
                <th>Phân chia</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($db))
                @foreach ($db as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ str_limit($item->content,30) }}</td>
                    <td>{{ $item->parent_id }}</td>
                    <td>
                      @if ($item->is_active==1)
                      Hiển thị
                      @else
                      Ẩn  
                      @endif
                    </td>
                    <td>{{ $item->devide }}</td>
                    <td>
                      <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editcategory', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Edit</a></button>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:rgb(26, 3, 3) ; border: none;border-radius:25rem"><a href="{{ route('deletecategory', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
                    </td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        {{ $db->links() }}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
