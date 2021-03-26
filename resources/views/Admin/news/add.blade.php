@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Quản lý Tin tức <i class="fa fa-angle-right" aria-hidden="true"></i> Thêm Tin tức</b></h3>
  </div>
  <form enctype="multipart/form-data" action="{{ route('postaddnews') }}" method="POST" >
    @csrf
  <div class="card-body">
        <div class="form-group">
            <label for="inputTitle">Tiêu đề</label>
            <input type="text" id="inputTitle" class="form-control" name="title">
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
        <div class="form-group">
            <label for="inputfileImage">File Ảnh</label>
            <input type="text" id="inputfileImage" class="form-control" name="file_img">
            <input style="border: none; background: #f4f6f9" type="file" id="inputfileImage" class="form-control" name="file_img">
        </div>
        <div class="form-group">
            <label for="inputStatus">Trạng thái</label>
            <input type="text" id="inputStatus" class="form-control" name="status">
        </div>
    </div>
        <div>
            <a style="margin-left: 38%" href="{{ route('indexnews') }}" class="btn btn-secondary">Cancel</a>
            <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
         </div>
   </form>
</div>
   
@endsection
