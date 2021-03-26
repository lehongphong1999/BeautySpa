@extends('Admin.layouts.sidebar')

@section('content')
    
<div class="card-header">
    <h3 class="card-title"><b>Banner <i class="fa fa-angle-right" aria-hidden="true"></i> Chỉnh sửa Banner</b></h3>
  </div>
  <form action="{{ route('posteditbanner') }}" method="POST" >
    @csrf
  <div class="card-body">
    <div class="form-group">
      <input style="display: none" type="text" name="id" value="{{ $db->id }}">
      <label for="inputLinkBanner">Link Banner</label>
      <input name="link_image_banner" value="{{ $db->link_image_banner }}" type="text" id="inputLinkBanner" class="form-control" >
    </div>
    <div class="form-group">
        <label for="inputTitle">Tiêu đề</label>
        <input name="title" value="{{ $db->title }}" type="text" id="inputTitle" class="form-control" >
      </div>
      <div class="form-group">
        <label for="inputContent">Nội dung</label>
        <input name="content" value="{{ $db->content }}" type="text" id="inputContent" class="form-control" >
      </div>
    <div class="form-group">
      <label for="inputlinkEvent">Link Event</label>
      <textarea name="link_url_event" id="inputlinkEvent" class="form-control" rows="4">{{ $db->link_url_event }}</textarea>
    </div>
    <div class="col-sm-6">
      <!-- select -->
      <div class="form-group">
      <label for="inputStatus">Trạng thái</label>
        <select class="form-control" name="status" id="inputStatus" value="{{ $db->status }}">
          @if ( $db->status == 1)
            <option selected value="1"  >Hiển thị - 1</option>
            <option value="0"  >Ẩn - 0</option>
          @else
            <option value="1"  >Hiển thị - 1</option>
            <option selected value="0"  >Ẩn - 0</option>
          @endif
        </select>
      </div>
    </div> 
  </div>
  <div>
    <a style="margin-left: 38%" href="{{ route('indexbanner') }}" class="btn btn-secondary">Cancel</a>
    <input  style="margin-left: 20px" type="submit" value="Save Changes" class="btn btn-success"> 
  </div>
</div>
</form>
@endsection