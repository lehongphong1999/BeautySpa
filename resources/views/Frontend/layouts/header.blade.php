<div class="header">
    <div class="header_logo">
            <a href="" >
                <img src="front/image/logo.png" >
            </a>
    </div>
    <div class="header_search">
        <form action="{{ route('search') }}" class="search" action="/tim-kiem" method="post">
            @csrf
            <input style="-webkit-appearance: none; outline: none;border: 0;font-family: inherit;padding: 0;font-size: 16px;font-weight: 500;background: none;border-radius: 0;color: #223254;" id="search" name="search" type="text"  placeholder="Bạn tìm kiếm điều gì..." /> <button style="border:none; background:transparent;"><i style=" margin-left: 5px; font-size: 19px; border:none;" class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <div class="header_menu">	
        <ul id="ul_menu">
            <li>
                <a href="{{ route('index') }}" title="">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <br>
                    <p>Trang chủ</p>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" title="">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <br>
                    <p>Giới thiệu</p>
                </a>
            </li>
            <li>
                <a href="{{ route('sale') }}" title="">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                    <br>
                    <p>Ưu đãi</p>
                </a>
            </li>
            <li class="dropdown" style="z-index: 9">
                <a href="{{ route('service') }}" title="">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    <br>
                    <p>Dịch vụ</p>
                    {{--  <div class="dropdown-item">
                        <ul>
                            @foreach ($data_categories as $item)
                                @if ($item->devide == 1)
                                    <li style="text-transform: uppercase"><a href="#"> {{ $item->category_name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>  --}}
                </a>
            </li>
            <li class="dropdown" style="z-index: 9">
                <a href="{{ route('product') }}" title="">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <br>
                    <p>Sản Phẩm</p>
                    {{--  <div class="dropdown-item" >
                        <ul>
                            @foreach ($data_categories as $item)
                                @if ($item->devide == 2 && $item->parent_id == 0)
                                    <li style="text-transform: uppercase"><a href="{{ route('product') }}">{{ $item->category_name }}
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach ($data_categories as $i)
                                            @if ($i->parent_id == $item->id)
                                              @php
                                                  $count++;
                                              @endphp                                                         
                                            @endif
                                        @endforeach  --}}
                                        {{--  <div class="dropdown-item2" >
                                            @if ($count > 0)
                                            <ul>
                                                @foreach ($data_categories as $temp)
                                                    @if ($temp->parent_id == $item->id)
                                                        <li style="text-transform: uppercase"><a href="#">{{ $temp->category_name }}</a></li>	                                                       
                                                    @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>  --}}
                                        {{--  </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>  --}}
                </a>	
            </li>
            <li>
                <a href="{{ route('contact') }}" title="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <br>
                    <p>Liên hệ</p>
                </a>
            </li>
        </ul>
    </div>	
    <div class="header_log">
        @if (Auth::check())
        <div class="user-name" style="margin-left: -80px;">
                <div class="image_avatar" >
                    @if (is_null(Auth::user()->avata))
                    <img style="width: 20px; height: 20px; border-radius: 50%;" src="{{ asset('sources/img/userinfo/avatar.jpg') }}">
                    @else
                    <img style="width: 20px; height: 20px; border-radius: 50%;" src="{{ asset(Auth::user()->avata) }}">
                    @endif
                </div>
                <a href="{{ route('userinfo') }}"><p style="margin-left:4px; color: #d88821">{{ Auth::user()->name }}</p> </a>
           
        </div>
        <div class="dropdown-cart" style="z-index: 9">
            <a href="{{ route('cart') }}" title="">
                <i style="color: black;" class="fa fa-cart-plus" aria-hidden="true"></i>
                {{-- <span style=" color: red; margin-left: 5px;font-size: 19px; font-weight: 600">(2)</span> --}}
                <div class="dropdown-cart-detail" >
                    {{-- <ul>
                        <li>
                            <div class="tt">
                                <span>Có <b>2</b> sản phẩm trong giỏ hàng</span>
                            </div>  
                        </li>
                        <li style="margin-top: 10px">
                            <img style="width: 70px; height: 70px;" src="front">
                            <div style="margin-left: 5px" class="item">
                                <span>Sản phẩm ABC</span> 
                                <br>
                                <span>1  *  300.000 VNĐ</span>
                            </div>
                            <i style="color: red; font-size: 14px" class="fa fa-times" aria-hidden="true"></i>
                        <li>
                            <div style="margin-left: 25px;margin-top: 10px; display: flex; font-weight: 600" class="tong">
                                <span> Tổng tiền : </span>
                                <p style="color: blue; font-size: 16px">300.000 VNĐ </p>
                            </div>
                        </li>
                        <li>
                            <div style="background: #d88821; width: 100px; height: 40px;border-radius: 5px;margin-left: 50px;" class="checkout">
                                <a style="font-weight: 600; text-align: center;padding-top: 10px" href="{{ route('cart') }}"><span style="color: white; margin-left: 9px;">Thanh toán</span></a>
                            </div>
                        </li>
                    </ul> --}}
                </div>
            </a>	
        </div>	
        <div class="icon_logout" style="margin-left: 30px;">
            <a href="{{ route('logout') }}" title="Đăng xuất">
                <i style="color: black" class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        </div>   
        @else
            <div class="icon_log">
                <label for="showlogin" class="show-btn"><i class="fa fa-sign-in" aria-hidden="true"></i></label>
            </div>
            <div  class="icon_log" style="margin-left: 15px;">
                <label for="showsignup" class="show-btn"><i  class="fa fa-user-plus" aria-hidden="true"></i></label>
            </div>
        @endif
    </div>	
</div>	
<div class="centerlogin">
    <input type="checkbox" id="showlogin">
      <div class="containerlogin">
      <label for="showlogin" class="close-btn fa fa-times" title="close"></label>
          <div class="titleLog">Đăng nhập</div>
          <form action="{{ route('postlogin') }}" method="POST">
              @csrf
              <div class="data">
                  <label>Gmail </label>
                  <input name="email" type="text" required>
              </div>
              <div class="data">
                  <label>Mật khẩu</label>
                  <input name="password" type="password" required>
              </div>
              <div class="forgot-pass">
                  <a href="#"><label for="showforgetpass" class="show-btn">Quên mật khẩu</label></a>
              </div>
              <div class="btn">
                  <div class="inner">
                  </div>
                      <button type="submit">Đăng nhập</button>
              </div>
              <div class="signup-link">
                  Bạn chưa có tài khoản ? <a href="#"><label for="showsignup" class="show-btn">Đăng ký ngay</label></a>
              </div>
          </form>
      </div>
  </div>
  <div class="centersignup">
    <input type="checkbox" id="showsignup">
      <div class="containersignup">
      <label for="showsignup" class="close-btn fa fa-times" title="close"></label>
          <div class="titleLog">Đăng ký</div>
          <form action="{{ route('postregister') }}" method="POST">
              @csrf
              <div class="data">
                  <label>Gmail </label>
                  <input name="user" type="text" required>
              </div>
              <div class="data">
                <label>Họ tên</label>
                <input name="name" type="text" required>
            </div>
              <div class="data">
                  <label>Mật khẩu</label>
                  <input name="password" type="password" required>
              </div>
              <div class="data">
                <label>Nhập lại Mật khẩu</label>
                <input name="repassword" type="password" required>
              </div>
              <div class="btn">
                  <div class="inner">
                  </div>
                      <button type="submit">Đăng ký</button>
              </div>
              {{--  <div class="signin-link">
                <a href="#"><label for="showlogin" class="show-btn">Đăng nhập ngay</label></a>
              </div>  --}}
          </form>
      </div>
  </div>
  <div class="centerforgetpass">
    <input type="checkbox" id="showforgetpass">
      <div class="containerforgetpass">
      <label for="showforgetpass" class="close-btn fa fa-times" title="close"></label>
          <div class="titleforgetpass">Quên mật khẩu</div>
          <form action="{{ route('postforgetpass') }}" method="POST">
              @csrf
              <div class="data">
                  <label>Gmail </label>
                  <input name="gmail" type="text" required>
              </div>
              {{--  <div class="data">
                <label>Họ tên</label>
                <input name="name" type="text" required>
              </div>  --}}
              <div class="btn">
                  <div class="inner">
                  </div>
                      <button type="submit">Lấy mật khẩu</button>
              </div>
              <div class="signin-link">
                <a href="#"><label for="showforgetpass" class="show-btn">Đăng nhập ngay</label></a>
              </div>
          </form>
      </div>
  </div>