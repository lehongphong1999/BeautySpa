@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Người dùng <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa User</b></h3>
    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
</div>
<form action="{{ route('postedituserrole') }}" method="POST" >
    @csrf
    <div class="card-body">
        <div class="form-group">
            <input style="display: none" type="text" name="id" value="{{ $db->id }}">
            <label for="inputName">Name</label>
            <input name="name" value="{{ $db->name }}" type="text" id="inputName" class="form-control" >
        </div>
        <div class="form-group">
            <label for="inputUser">Email</label>
            <textarea name="email" id="inputUser" class="form-control" rows="4">{{ $db->email }}</textarea>
        </div>
        <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input name="phone" value="{{ $db->phone }}" type="text" id="inputPhone" class="form-control" >
        </div>
        <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
            <label for="inputDescript">Description</label>
              <select class="form-control" name="description" id="inputDescript">
                @if($db->description == 'Khách hàng')  
                    <option selected="Khách hàng" value="Khách Hàng" >Khách hàng - 3</option>
                    <option value="Nhân Viên" >Nhân viên - 2</option>
                    <option value="Admin" >Quản trị viên - 1</option>
                @elseif($db->description == 'Nhân viên')    
                    <option value="Khách Hàng" >Khách hàng - 3</option>
                    <option selected="Nhân Viên" value="Nhân Viên" >Nhân viên - 2</option>
                    <option value="Admin" >Quản trị viên - 1</option>
                @elseif($db->description == 'Quản trị viên') 
                    <option value="Khách Hàng" >Khách hàng - 3</option>
                    <option value="Nhân Viên" >Nhân viên - 2</option>
                    <option selected="Admin" value="Admin" >Quản trị viên - 1</option>
                @endif    
              </select>
            </div>
          </div>
        </div>
    </div>
    <div class="form-group" style="padding-left: 38%">
        <a href="{{ route('indexuser') }}" class="btn btn-secondary">Cancel</a>
        <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
    </div>
</form>
@endsection