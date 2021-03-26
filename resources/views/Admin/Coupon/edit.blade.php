@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Mã Khuyến mại <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Mã Khuyến mãi</b></h3>

    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
  </div>
  <form action="{{ route('posteditcoupon') }}" method="POST" >
    @csrf
  <div class="card-body">
    <div class="form-group">
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputcode">Mã Khuyến mại</label>
      <input name="code_coupon" value="{{ $db->code_coupon }}" type="text" id="inputcode" class="form-control" >
    </div>
    <div class="form-group">
      <label for="inputPercent">Khuyến mại</label>
      <textarea name="percent" id="inputPercent" class="form-control" rows="4">{{ $db->percent }}</textarea>
    </div>
    <div class="form-group">
      <label for="inputQuantity">Số lượng</label>
      <input name="quantity" value="{{ $db->quantity }}" type="text" id="inputQuantity" class="form-control" >
    </div>
    <div class="form-group">
        <label for="inputUsed">Đã sử dụng</label>
        <input name="used" value="{{ $db->used }}" type="text" id="inputUsed" class="form-control" >
      </div>
    <div class="form-group">
      <label for="inputiStatus">Trạng thái</label>
      <input name="status" value="{{ $db->status }}" type="text" id="inputStatus" class="form-control" >
    </div>
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexcoupon') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection