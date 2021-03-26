@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Phân quyền tài khoản </b></h3>
</div>
<form action="{{ route('posteditrole',$db->id) }}" method="POST" >
    @csrf
    <div class="card-body">
        <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
                <label for="inputname">Role Name</label>
                <input name="name" value="{{ $db->name }}" type="text" id="inputname" class="form-control" >
              </div>
          </div>
        <div class="form-group" style="max-height: 500px;">
            <label>Phân quyền </label>
            <br>
            @foreach ($permissions as $item)
                    @php
                        $check = 0
                    @endphp
                @foreach ($role_permission as $it)
                    @if($item->id==$it->permission_id)
                        @php
                            $check = 1
                        @endphp   
                    @endif
                @endforeach
                <div class="custom-control custom-checkbox" style="float: left; width: 220px; padding-left: 60px">
                    @if($check == 1)
                        <input name="permission[]" class="custom-control-input" type="checkbox" id="customCheckbox{{ $item->id }}" value="{{ $item->id }}" checked>
                        <label for="customCheckbox{{ $item->id }}" class="custom-control-label">{{ $item->name }}</label> 
                    @else
                        <input name="permission[]" class="custom-control-input" type="checkbox" id="customCheckbox{{ $item->id }}" value="{{ $item->id }}" >
                        <label for="customCheckbox{{ $item->id }}" class="custom-control-label">{{ $item->name }}</label> 
                    @endif     
                </div>
                @endforeach
        </div>
    </div>
    <div class="form-group" style="padding-left: 38%">
        <a  href="{{ route('indexrole') }}" class="btn btn-secondary">Cancel</a>
        <input  style="margin-left: 20px" type="submit" value="Save" class="btn btn-success"> 
       
    </div>
</form>
@endsection