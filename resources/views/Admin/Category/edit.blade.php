@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Danh mục <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Danh mục</b></h3>

    {{-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div> --}}
  </div>
  <form action="{{ route('posteditcategory') }}" method="POST" >
    @csrf
  <div class="card-body">
    <div class="form-group">
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputName">Tên Danh mục</label>
      <input name="category_name" value="{{ $db->category_name }}" type="text" id="inputName" class="form-control" >
    </div>
    <div class="form-group">
      <label for="inputPrice">Giá</label>
      <textarea name="price" id="inputPrice" class="form-control" rows="4">{{ $db->price }}</textarea>
    </div>
    <div class="form-group">
      <label for="inputSlug">Slug</label>
      <textarea name="slug" id="inputSlug" class="form-control" rows="4">{{ $db->slug }}</textarea>
    </div>
    <div class="form-group">
      <label for="inputContent">Nội dung</label>
      {{--  <input name="content" value="{{ $db->content }}" type="text" id="inputContent" class="form-control" >  --}}
      <div class="row" style="height: 400px">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body pad" style="padding: 0px !important ; max-height: 400px !important ; overflow: auto; "  >
              <div class="mb-3">
                <textarea name="content" type="text" id="inputContent" class="textarea" placeholder="Place some text here"
                          style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;  max-height: 300px !important ;">{{ $db->content }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </div>
    <div class="form-group">
      <label for="inputparentid">Danh mục cha</label>
      <input name="parent_id" value="{{ $db->parent_id }}" type="text" id="inputparentid" class="form-control" >
    </div>
    <div class="form-group">
      <label for="inputisactive">Trạng thái</label>
      <input name="is_active" value="{{ $db->is_active }}" type="text" id="inputisactive" class="form-control" >
    </div>
    <div class="form-group">
      <label for="inputdevide">Phân chia</label>
      <input name="devide" value="{{ $db->devide }}" type="text" id="inputdevide" class="form-control" >
    </div>
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexcategory') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection