@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>QR Code</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_qrcode.css"/> 
@endsection

@section('content')

<div class="center-detail">
    <div class="content">
        <span style="font-size: 40px;font-weight: 600; padding-left: 200px; padding-top: 10px;">QR Code của bạn !</span>
    </div>
    <div class="centercontent">
        <div class="contentqr"> 
            <p>0383493067</p>
        </div>
        <div class="divbtcopy">
            <button class="btcopy" type="button" title="Copy">Sao chép</button>
        </div>
    </div>
    <div class="imgqr">
        <img src="front/image/qrphone.png">
    </div>
    <div class="form-group row" style="margin-top: 110px; margin-left: 160px;">
        <div class="col-sm-10">
            <i class="fa fa-share-alt" aria-hidden="true"></i>
            <span style=" margin-left: 10px; font-weight: 500; color: #6b6464;">Chia sẻ mã QR của bạn để thanh toán, nhận tiền ! </span>
        </div>
    </div>
</div>

@endsection