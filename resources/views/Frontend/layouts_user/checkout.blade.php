@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin ví</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_checkout.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>THANH TOÁN </span>
    </div>
    <div class="step">
        <div class="step-item">
            <i style="color: #42a8bf;" class="fa fa-shopping-cart" aria-hidden="true"></i>
            <br>
            <span style="color: #42a8bf;" class="step-name">GIỎ HÀNG</span>
            <br>
            <div class="step-number1">
                <span class="step-number11">1</span>
            </div>
        </div>
        <div class="next">
            <i style="color: #42a8bf;" class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
        <div class="step-item">
            <i style="color: #42a8bf;" class="fa fa-usd" aria-hidden="true"></i>
            <br>
            <span style="color: #42a8bf;" class="step-name">THANH TOÁN</span>
            <br>
            <div class="step-number2">
                <span class="step-number22">2</span>
            </div>
        </div>
        <div class="next">
            <i style="color: #42a8bf;" class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
        <div class="step-item">
            <i class="fa fa-check" aria-hidden="true"></i>
            <br>
            <span class="step-name">HOÀN TẤT</span>
            <br>
            <div class="step-number">
                <span class="step-number33">3</span>
            </div>
        </div>
    </div>
    <div class="detail-area ">
        <div class="info-customer">
            <div class="title-info">
                <span>1.THÔNG TIN THANH TOÁN VÀ ĐỊA CHỈ</span>
            </div>    
            <form class="form-detail-text" action="{{ route('postcheckout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name">Họ tên</label>
                    <div class="col-sm-8">
                        <input  value="{{ Auth::user()->name }}" type="text" class="form-control" id="inputname3" placeholder="Họ và Tên" name="name" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputnumber">Số ĐT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputnumber" value="{{ Auth::user()->phone }}" name="phone" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputemai">Email</label>
                    <div class="col-sm-8">
                        <input  style="margin-left: 35px  !important" type="text " class="form-control" id="inputemai" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputcmnd">CMND</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputcmnd" placeholder="" value="{{ Auth::user()->cmnd }}" name="cmnd">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputaddress">Địa chỉ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputaddress" placeholder="Địa chỉ" value="{{ Auth::user()->address }}" name="address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputnote">Ghi chú</label>
                    <div class="col-sm-8">
                        <textarea style="margin-left: 23px  !important" type="text" class="form-control" id="inputnote" placeholder="Ghi chú" value="1" name="note"></textarea>
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 30px;">
                    <div class="col-sm-12">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                          <span style=" text-align: center; font-weight: 500; color: #6b6464;">Thông tin của khách hàng được đảm bảo an toàn ! </span>
                    </div>
                </div>
        </div>
        <div class="method-ship">
            <div class="title-shipcheck">
                <span>2.VẬN CHUYỂN VÀ THANH TOÁN</span>
            </div>
            <div class="title-ship">
                <label for="company-ship">Chọn nhà vận chuyển</label>
                <br>
                    <select name="ship" id="company-ship">
                        <option value="1">Viettel Post</option>
                        <option value="2">Giao hàng nhanh</option>
                        <option value="3">Chuyển phát 24/7 </option>
                    </select>
            </div>
            <div class="title-checkout">
                <label style="margin-top: 20px; margin-left: 20px;font-size: 16px; font-weight: 600" for="type">Thanh toán</label>
                    <br><input type="radio" id="cod" name="pay" value="1">
                    <label for="type">Thanh toán khi nhận hàng COD</label><br>
                    <input type="radio" id="bank" name="pay" value="2">
                    <label for="type">Thanh toán qua ngân hàng</label><br>
                    <input type="radio" id="momo" name="pay" value="3">
                    <label for="type">Thanh toán qua MOMO</label>

                    <input style="display: none" type="text" name="total" value="{{ $total }}" id="">
            </div>
            <div class="total-money">
                <span style="font-size: 16px; font-weight: 600; margin-top: 5px">Tiền :</span> 
                <span style="font-size: 20px; font-weight: 600; color: black;margin-left: 60px">{{ number_format($total) }} VNĐ</span>
                <br>
                <span style="font-size: 16px; font-weight: 600; margin-top: 5px">Phí vận chuyển :</span> 
                <span style="font-size: 20px; font-weight: 600; color: black;margin-left: 26px">20.000 VNĐ</span>
                <br>
                <span style="font-size: 16px; font-weight: 600; margin-top: 5px">Tổng thanh toán :</span> 
                <span style="font-size: 20px; font-weight: 600; color: #42a8bf;margin-left: 6px">{{ number_format($total + 20000) }} VNĐ</span>
            </div>
            <div class="action">
                <div class="cart">
                    <a href="{{ route('cart') }}"><p>Về Giỏ hàng</p></a>
                </div>
                <div class="checkout">
                    {{-- <a href="{{ route('finish') }}"><p>Thanh toán</p></a> --}}
                    <button style="background-color: transparent;border: none">Thanh toán</button>
                </div>  
        </form> 
            </div>
        </div>      
    </div>
    
</div>

@endsection