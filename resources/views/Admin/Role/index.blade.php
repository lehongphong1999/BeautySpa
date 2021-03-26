@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Phân quyền tài khoản </b></h3>
          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search ..." style="border-radius: 25rem;">

              <div class="input-group-append">
                <button style="border-radius: 25rem; margin-left: 10px" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div> --}}
        </div>
        {{--  <div class="card-header">
          <button type="submit" style="height: 30px ;width: 80px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem;"><a href="{{ route('addrole') }}"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px"></i><b>Add</b></a></button>
        </div>  --}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Role Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($db))
                @foreach ($db as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                      <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editrole', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Edit</a></button>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deleterole', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
                    </td>
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
