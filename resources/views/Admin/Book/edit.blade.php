@extends('Admin.layouts.sidebar')

@section('content')
    
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Lịch hẹn <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Lịch hẹn</b></h3>
  </div>
  @foreach($db as $item)
  <form action="{{ route('posteditbook',['id'=>$item->id_book]) }}" method="POST" >
    @csrf
  <div class="card-body">
    {{--  <div class="form-group">
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputName">Tên Khách hàng</label>
      <input name="name" value="{{ $db->name }}" type="text" id="inputname" class="form-control" >
    </div>
    <div class="form-group">
        <label for="inputPhone">Số ĐT</label>
        <input name="phone" value="{{ $db->phone }}" type="text" id="inputPhone" class="form-control" >
      </div>
      <div class="form-group">
        <label for="inputService">Dịch vụ</label>
        <input name="service" value="{{ $db->service }}" type="text" id="inputService" class="form-control" >
      </div>
    <div class="form-group">
      <label for="inputTime">Ngày đặt</label>
      <textarea name="time_book" id="inputTime" class="form-control" rows="4">{{ $db->created_at->format('d-m-Y') }}</textarea>
    </div>  --}}
    <div class="col-sm-6">
      <!-- select -->
      <div class="form-group">
      <label for="inputStatus">Trạng thái</label>
      
        
        <select class="form-control" name="status_reply" id="inputStatus" value="{{ $item->status_reply }}">
          @if ( $item->status_reply == 1)
            <option selected value="1"  >Đã xác nhận</option>
            <option value="0"  >Chưa xác nhận</option>
          @else
            <option value="1"  >Đã xác nhận</option>
            <option selected value="0"  >Chưa xác nhận</option>
          @endif
        </select>
        @endforeach
      </div>
    </div> 
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexbook') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection