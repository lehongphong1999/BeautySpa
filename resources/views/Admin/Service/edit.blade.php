@extends('Admin.layouts.sidebar')

@section('content')
    
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Dịch vụ <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Dịch vụ</b></h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div>
  </div>
  <form action="{{ route('posteditservice') }}" method="POST" >
    @csrf
  <div class="card-body">
    <div class="form-group">
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputProductName">Tên Dịch vụ</label>
      <input name="product_name" value="{{ $db->product_name }}" type="text" id="inputProductName" class="form-control" >
    </div>
    <div class="form-group">
        <label for="inputPrice">Giá</label>
        <input name="price" value="{{ $db->price }}" type="text" id="inputPrice" class="form-control" >
      </div>
      <div class="form-group">
        <label for="inputSale">Khuyến mại</label>
        <input name="sale_percent" value="{{ $db->sale_percent }}" type="text" id="inputSale" class="form-control" >
      </div>
    <div class="form-group">
      <label for="inputDescription">Mô tả</label>
      {{--  <input name="content" value="{{ $db->content }}" type="text" id="inputContent" class="form-control" >  --}}
      <div class="row" style="height: 200px">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body pad" style="padding: 0px !important ; max-height: 200px !important ;overflow: auto; "  >
              <div class="mb-3">
                <textarea name="description" type="text" id="inputDescription" class="textarea" placeholder="Nhập nội dung tại đây."
                          style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;  max-height: 200px !important ;">{{ $db->description }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </div>
    <div class="form-group">
      <label for="inputImage">Link Ảnh</label>
      <input name="link_image" value="{{ $db->link_image }}" type="text" id="inputImage" class="form-control" >
    </div>
    <div class="form-group">
      <label for="inputStatus">Trạng thái</label>
      <input name="status" value="{{ $db->status }}" type="text" id="inputStatus" class="form-control" >
      <span style="font-size: 12px"> Note: 1: Hiển thị ; 0 Ẩn</span>
    </div>
    <div class="form-group">
      <label for="inputCategoryLarge">Danh mục Lớn</label>
      <input name="category_large_id" value="{{ $db->category_large_id }}" type="text" id="inputCategoryLarge" class="form-control" >
    </div>
    <div class="form-group">
        <label for="inputCategorySmall">Danh mục Nhỏ</label>
        <input name="category_small_id" value="{{ $db->category_small_id }}" type="text" id="inputCategorySmall" class="form-control" >
      </div>
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexservice') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection