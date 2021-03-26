@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Sản phẩm <i class="fa fa-angle-right" aria-hidden="true"></i> Thêm Sản phẩm</b></h3>

    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
  </div>
  <form action="{{ route('postaddproduct') }}" method="POST" >
    @csrf
  <div class="card-body">
        <div class="form-group">
            <label for="inputProductName">Tên Sản phẩm</label>
            <input type="text" id="inputProductName" class="form-control" name="product_name">
        </div>
        <div class="form-group">
            <label for="inputPrice">Giá</label>
            <input type="text" id="inputPrice" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="inputSalePercent">Khuyến mại</label>
            <input type="text" id="inputSalePercent" class="form-control" name="sale_percent">
        </div>
        {{--  <div class="form-group">
            <label for="inputDescription">Mô tả</label>
            <input type="text" id="inputDescription" class="form-control" name="description">
        </div>  --}}
        <div class="form-group">
            <label for="inputDescription">Mô tả</label>
            {{--  <input type="text" id="inputContent" class="form-control" name="content">  --}}
            <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-body pad" style="padding: 0px !important; max-height: 300px !important ; overflow: auto ">
                      <div class="mb-3">
                        <textarea type="text" id="inputDescription" class="textarea"  name="description" placeholder="Nhập nội dung tại đây"
                                  style="width: 100%; max-height: 400px !important ; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
        </div>
        <div class="form-group">
            <label for="inputlinkImage">Link Ảnh</label>
            <input type="text" id="inputImage" class="form-control" name="link_image">
        </div>
        <div class="form-group">
            <label for="inputQuantity">Số lượng</label>
            <input type="text" id="inputQuantity" class="form-control" name="quantity">
        </div>
        <div class="form-group">
            <label for="inputSold">Đã bán</label>
            <input type="text" id="inputSold" class="form-control" name="sold">
        </div>
        <div class="form-group">
            <label for="inputStatus">Trạng thái</label>
            <input type="text" id="inputStatus" class="form-control" name="status">
        </div>
        <div class="form-group">
            <label for="inputCategoryLarge">Danh mục Lớn</label>
            <input type="text" id="inputCategoryLarge" class="form-control" name="category_large_id">
        </div>
        <div class="form-group">
            <label for="inputCategorySmall">Danh mục Nhỏ</label>
            <input type="text" id="inputCategorySmall" class="form-control" name="category_small_id">
        </div>
    </div>
        <div>
            <a style="margin-left: 38%" href="{{ route('indexproduct') }}" class="btn btn-secondary">Cancel</a>
            <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
         </div>
   </form>
</div>
   
@endsection
