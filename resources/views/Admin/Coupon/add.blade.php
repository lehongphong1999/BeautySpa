@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Mã Khuyến mại <i class="fa fa-angle-right" aria-hidden="true"></i> Thêm mã Khuyến mại</b></h3>

    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
  </div>
  <form action="{{ route('postaddcoupon') }}" method="POST" >
    @csrf
  <div class="card-body">
        <div class="form-group">
            <label for="inputcode">Mã Khuyến mại</label>
            <input type="text" id="inputcode" class="form-control" name="code_coupon">
        </div>
        <div class="form-group">
            <label for="inputPercent">Khuyến mại</label>
            <input type="text" id="inputPercent" class="form-control" name="percent">
        </div>
        <div class="form-group">
            <label for="inputQuantity">Số lượng</label>
            <input type="text" id="inputQuantity" class="form-control" name="quantity">
        </div>
        <div class="form-group">
            <label for="inputUsed">Đã sử dụng</label>
            <input type="text" id="inputUsed" class="form-control" name="used">
        </div>
        <div class="form-group">
            <label for="inputStatus">Trạng thái</label>
              <select class="form-control" name="status" id="inputStatus">
                <option value="1" >Hiển thị - 1</option>
                <option value="0" >Ẩn - 0</option>
              </select>
        </div>
    </div>
        <div>
            <a style="margin-left: 38%" href="{{ route('indexcoupon') }}" class="btn btn-secondary">Cancel</a>
            <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
         </div>
   </form>
</div>
   
@endsection
