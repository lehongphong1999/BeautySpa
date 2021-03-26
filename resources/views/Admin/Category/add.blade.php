@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Danh mục <i class="fa fa-angle-right" aria-hidden="true"></i> Thêm Danh mục</b></h3>

    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
  </div>
  <form action="{{ route('postaddcategory') }}" method="POST" >
    @csrf
  <div class="card-body">
        <div class="form-group">
            <label for="inputName">Tên Danh mục</label>
            <input type="text" id="inputName" class="form-control" name="category_name">
        </div>
        <div class="form-group">
          <label for="inputPrice">Giá</label>
          <input type="text" id="inputPrice" class="form-control" name="price">
      </div>
        <div class="form-group">
            <label for="inputSlug">Slug</label>
            <input type="text" id="inputslug" class="form-control" name="slug">
        </div>
        <div class="form-group">
          <label for="inputContent">Nội dung</label>
          {{--  <input type="text" id="inputContent" class="form-control" name="content">  --}}
          <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-body pad" style="padding: 0px !important">
                    <div class="mb-3">
                      <textarea type="text" id="inputContent" class="textarea"  name="content" placeholder="Nhập nội dung tại đây"
                                style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
      </div>
        <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
            <label for="inputParent_id">Danh mục Cha</label>
            {{--  <input type="text" id="inputParent_id" class="form-control" name="parent_id">  --}}
            <select name="parent_id" type="text" id="inputParent_id">
                @foreach ($db as $item)
                    <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->category_name }}</option>
                @endforeach
            </select>
            </div>
        </div> 
        <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
            <label for="inputisActive">Trạng thái</label>
              <select class="form-control" name="is_active" id="inputisActive">
                <option value="1" >Hiển thị - 1</option>
                <option value="0" >Ẩn - 0</option>
              </select>
            </div>
          </div>  
        <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
            <label for="inputDevide">Phân chia</label>
              <select class="form-control" name="devide" id="inputDevide">
                <option value="1" >Dịch vụ - 1</option>
                <option value="2" >Sản phẩm -2</option>
              </select>
            </div>
          </div>  
    </div>
        <div>
            <a style="margin-left: 38%" href="{{ route('indexcategory') }}" class="btn btn-secondary">Cancel</a>
            <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
         </div>
   </form>
</div>
   
@endsection
