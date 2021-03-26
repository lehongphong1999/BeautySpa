@extends('Admin.layouts.sidebar')

@section('content')
<div class="card-header">
    <h3 class="card-title"><b>Banner <i class="fa fa-angle-right" aria-hidden="true"></i> Thêm Banner</b></h3>
  </div>
  <form action="{{ route('postaddbanner') }}" method="POST" >
    @csrf
  <div class="card-body">
        <div class="form-group">
            <label for="inputImage">Link Banner</label>
            <input type="text" id="inputImage" class="form-control" name="link_image_banner">
        </div>
        <div class="form-group">
            <label for="inputTitle">Tiêu đề</label>
            <input type="text" id="inputTitle" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="inputContent">Nội dung</label>
            <textarea name="content" id="inputContent" class="form-control" rows="4"></textarea>
        </div> 
        <div class="form-group">
            <label for="inputlinkevent">Link Event</label>
            <input type="text" id="inputlinkevent" class="form-control" name="link_url_event">
        </div> 
        <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
            <label for="inputStatus">Trạng thái</label>
              <select class="form-control" name="status" id="inputStatus">
                <option value="1"  >Hiển thị - 1</option>
                <option value="0"  >Ẩn - 0</option>
              </select>
            </div>
          </div> 
    </div>
        <div>
            <a style="margin-left: 38%" href="{{ route('indexbanner') }}" class="btn btn-secondary">Cancel</a>
            <input  style="margin-left: 20px" type="submit" value="Add" class="btn btn-success"> 
         </div>
   </form>
</div>
   
@endsection
