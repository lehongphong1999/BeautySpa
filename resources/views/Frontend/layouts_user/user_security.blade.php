@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin bảo mật</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_security.css"/> 
@endsection

@section('content')
    <div class="form-info">
        <div class="title3">
            <span>THÔNG TIN BẢO MẬT</span>
        </div>
        <div class="form-detail">
            <form {{ route('postusersecurity') }} method="POST" class="form-detail-text">
              @csrf
                <div class="form-group row">
                  <label for="inputpassold3" class="col-sm-2 col-form-label">Mật khẩu hiện tại</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputpassold3" placeholder="" name="passold" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputpassnew3" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputpassnew3" placeholder="" name="passnew" required>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputpassnew23" class="col-sm-2 col-form-label">Xác nhận mật khẩu</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputpassnew23" placeholder="" name="repassnew" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button onclick="check_repass()" type="submit" class="btn btn-primary" style=" margin-left: 100px; background: rgb(231 154 12); border: white; font-size: 14px; font-weight: 600;">CẬP NHẬT</button>
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 30px; margin-left: 84px;">
                    <div class="col-sm-10">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span style=" margin-left: 10px; font-weight: 500; color: #6b6464;">Thông tin của khách hàng được đảm bảo an toàn ! </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection