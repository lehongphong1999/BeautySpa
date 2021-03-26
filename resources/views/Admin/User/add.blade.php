@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Người dùng <i class="fa fa-angle-right" aria-hidden="true"></i> Tạo mới User</b></h3>
</div>
<form action="{{ route('postadduser') }}" method="POST" >
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="inputName">Tên </label>
            <input type="text" id="inputName" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="inputMail">Mail</label>
            <input type="text" id="inputMail" class="form-control" name="mail">
        </div>
        <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="text" id="inputPhone" class="form-control" name="phone">
        </div>
        <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
            <label for="inputDescript">Description</label>
              <select class="form-control" name="description" id="inputDescript">
                <option value="Khách Hàng" >Khách hàng - 3</option>
                <option value="Nhân Viên" >Nhân viên - 2</option>
                <option value="Admin" >Quản trị viên - 1</option>
              </select>
            </div>
          </div>
        {{--  <div class="form-group" style="max-height: 500px;">
            <label>Phân quyền cho User</label>
            <br>
            @foreach ($permissions as $item)
                <div class="custom-control custom-checkbox" style="float: left; width: 220px; padding-left: 60px">
                    <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $item->id }}" value="{{ $item->id }}" >
                    <label for="customCheckbox{{ $item->id }}" class="custom-control-label">{{ $item->name }}</label>   
                </div>
            @endforeach 
        </div>  --}}
    </div>
    <div class="form-group" style="padding-left: 38%">
        <a href="{{ route('indexuser') }}" class="btn btn-secondary">Cancel</a>
        <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
    </div>
</form>
@endsection