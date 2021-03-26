@extends('Admin.layouts.sidebar')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Banner</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <button type="submit" style="height: 30px ;width: 80px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem; margin-right: 10px"><a href="{{ route('addbanner') }}"><i class="fa fa-plus" aria-hidden="true" ></i><b>  Add</b></a></button>
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search" style="border-radius: 25rem;">
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
                <th>Link Banner</th>
                <th>Banner</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Link Event</th>
                <th>Trạng thái</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($db))
                @foreach ($db as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->link_image_banner }}</td>
                    <td> 
                      <img style="width: 40px ; height: 40px;" src="{{ $item->link_image_banner }}">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->link_url_event }}</td>
                    <td>
                      @if ($item->status==1)
                      Hiển thị
                      @else
                      Ẩn  
                      @endif
                    </td>
                    <td>
                      <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editbanner', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Edit</a></button>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deletebanner', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
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
