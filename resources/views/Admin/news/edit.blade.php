@extends('Admin.layouts.sidebar')

@section('content')
    
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Tin tức <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Tin tức</b></h3>
  </div>
  <form action="{{ route('posteditnews') }}" method="POST" enctype="multipart/form-data" >
    @csrf
  <div class="card-body" >
    <div class="form-group" >
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputTitle">Tiêu đề</label>
      <input name="title" value="{{ $db->title }}" type="text" id="inputTitle" class="form-control" >
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
      <label for="inputfileImage">File Ảnh </label>
      <input name="file_img" value="{{ $db->file_img }}" type="text" id="inputfileImage" class="form-control" >
      <input style="border: none; background: #f4f6f9" name="file_img" value="{{ $db->file_img }}" type="file" id="inputfileImage" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="inputStatus">Trạng thái</label>
      <input name="status" value="{{ $db->status }}" type="text" id="inputStatus" class="form-control" >
      <span style="font-size: 12px"> Note: 1: Hiển thị ; 0 Ẩn</span>
    </div>
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexnews') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection