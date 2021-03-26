@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin cá nhân</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_info.css"/> 
@endsection

@section('content')
    <div class="form-info">
        <div class="title3">
            <span>THÔNG TIN CÁ NHÂN</span>
        </div>
        <div class="form-detail">
            <form class="form-detail-text" action="{{ route('postedituserinfo') }}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group row">
                  <label for="inputname3" class="col-sm-2 col-form-label">Họ Tên</label>
                  <div class="col-sm-10">
                    <input  value="{{ Auth::user()->name }}" type="hoten" class="form-control" id="inputname3" placeholder="" name="name" >
                   
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputcmnd3" class="col-sm-2 col-form-label">Số CMND/CCCD</label>
                  <div class="col-sm-10">
                    <input type="cmnd" class="form-control" id="inputcmnd3" placeholder="" value="{{ Auth::user()->cmnd }}" name="cmnd">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                    <div class="col-sm-10" style="display: flex;">
                      @if (Auth::user()->sex ==1)
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="gridRadios1" checked value="1">
                        <label class="form-check-label" for="gridRadios1">
                          Nam
                        </label>
                        <input style="margin-left: 10px" class="form-check-input" type="radio" name="sex" id="gridRadios3" value="2">
                        <label style="margin-left: 30px" class="form-check-label" for="gridRadios3">
                          Nữ
                        </label>
                      </div>
                      @else
                      
                      <div class="form-check disabled" style="margin-left:15px">
                        <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="1">
                        <label class="form-check-label" for="gridRadios1">
                          Nam
                        </label>
                        <input style="margin-left: 10px" class="form-check-input" type="radio" name="sex" id="gridRadios3" checked value="2">
                        <label style="margin-left: 30px" class="form-check-label" for="gridRadios3">
                          Nữ
                        </label>
                      </div>   
                      @endif
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputnumber3" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputnumber3" placeholder="" value="{{ Auth::user()->phone }}" name="phone">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputemail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputemail3" placeholder="" value="{{ Auth::user()->email }}" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputdiachi3" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col-sm-10">
                      <input type="diachi" class="form-control" id="inputcmnd3" placeholder="" value="{{ Auth::user()->address }}" name="address">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-10">
                  <button type="luu" class="btn btn-primary" type="submit" style=" margin-left: 95px; background: rgb(231 154 12) ; border: white; font-size: 14px; font-weight: 600;">LƯU</button>
                </div>
                </div>
                <div class="form-group row" style="margin-top: 30px; margin-left: 80px;">
                    <div class="col-sm-10">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span style=" margin-left: 10px; font-weight: 500; color: #6b6464;">Thông tin của khách hàng được đảm bảo an toàn ! </span>
                    </div>
                  </div>
            </form>
            <form action="{{ route('postavataruserinfo') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="image-profile" >
              @if (is_null(Auth::user()->avata))
                <img src="{{ asset('sources/img/userinfo/avatar.jpg') }}" style="width: 180px; height: 180px; margin-left: 63px; margin-top: 20px; ">
              @else
                <img src="{{ asset(Auth::user()->avata) }}" style="width: 180px; height: 180px; margin-left: 63px; margin-top: 20px; ">
              @endif
                
                <br>
                <input style="border: none; padding-top: 30px; margin-left: 31px;" name="avatar" type="file" id="inputfileImage"  >
                <br>
                <br>
                <span style="margin-top: 35px; margin-left: 50px; font-weight: 500; color: #6b6464;">Dung lượng file tối đa 1MB </span>
                <br> 
                <span style="margin-top: 35px; margin-left: 50px; font-weight: 450; color: #6b6464;">Định dạng : .JPEG; .PNG</span>
                <br>
                <button class="btn btn-primary" type="submit" style=" margin-left: 113px;margin-top: 30px;  background: rgb(231 154 12) ; border: white; font-size: 14px; font-weight: 600; width: 80px; height: 35px;">LƯU</button>
            </div>
        </div>  
    </div>
@endsection