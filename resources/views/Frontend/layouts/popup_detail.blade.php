<style>
    @foreach ($data_categories as $item)
        .center_popup_detail #show_detailcategory{{ $item->id }}:checked ~ .container_popup_detail{
            display: flex;
            z-index: 999;
        }
    @endforeach

    @foreach ($data_products as $item)
        .center_popup_detail #show_detail{{ $item->id }}:checked ~ .container_popup_detail{
            display: flex;
            z-index: 999;
        }
    @endforeach

    @foreach ($data_products as $item)
        .center_popup_detail #show_service{{ $item->id }}:checked ~ .container_popup_detail{
            display: flex;
            z-index: 999;
        }
    @endforeach

    @foreach ($datanews as $item)
        .center_popup_detail #show_detailnews{{ $item->id }}:checked ~ .container_popup_detail{
            display: flex;
            z-index: 999;
        }
    @endforeach

    @foreach ($data_newssale as $item)
        .center_popup_detail #show_detailnewssale{{ $item->id }}:checked ~ .container_popup_detail{
            display: flex;
            z-index: 999;
        }
    @endforeach
</style>
@foreach ($data_products as $item)
        <div class="center_popup_detail">
            <input type="checkbox" id="show_detail{{ $item->id }}">
            <div class="container_popup_detail">
                <label for="show_detail{{ $item->id }}" class="close-btn fa fa-times" title="close"></label>
                <div class="img">
                    <img  style="width: 400px ; height: 400px;" src="{{ $item->link_image }}">
                </div>
                <div class="content">
                    <div class="title">
                        <span>{{ $item->product_name }}</span>
                    </div>
                    <div class="price">
                        <span>{{ number_format($item->price) }} VND</span>
                    </div>
                    <div class="detail_content" style="overflow: auto; height: 350px;">
                        {!! html_entity_decode($item->description) !!}
                    </div>
                    <form method="POST" action="{{ route('addcart') }}">
                    @csrf
                        <div class="option">
                            <div class="quantity">
                                <span> Số lượng :</span>
                                <div class="value_buy">
                                    <input type="text" name="id" style="display: none; outline: none" value="{{ $item->id }}">
                                    <input type="number" name="quantity" title="" value="1">
                                </div>
                            </div>
                            <div class="buy_now">
                                <a href="#"> Mua ngay <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="add_cart">
                                <button style="background-color: transparent;border: none"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
@endforeach

@foreach ($data_products as $item)
        <div class="center_popup_detail">
            <input type="checkbox" id="show_service{{ $item->id }}">
            <div class="container_popup_detail">
                <label for="show_service{{ $item->id }}" class="close-btn fa fa-times" title="close"></label>
                <div class="img">
                    <img  style="width: 400px ; height: 400px;" src="{{ $item->link_image }}">
                </div>
                <div class="content">
                    <div class="title">
                        <span>{{ $item->product_name }}</span>
                    </div>
                    <div class="price">
                        <span>{{ number_format($item->price) }} VND</span>
                    </div>
                    <div class="detail_content" style="overflow: auto; height: 350px;">
                        {!! html_entity_decode($item->description) !!}
                    </div>
                    <div class="option" >
                        <div class="buy_now" style="margin-left: 300px">
                            <a href="{{ route('bookk', ['id'=>$item->id]) }}"> Đặt lịch ngay <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="add_cart">
                            <a href="#"><i style="color: white" class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
@endforeach

@foreach ($datanews as $item)
<div class="center_popup_detail" >
    <input type="checkbox" id="show_detailnews{{ $item->id }}">
    <div class="container_popup_detail" style="margin-left: 40px !important">
        <label for="show_detailnews{{ $item->id }}" class="close-btn fa fa-times" title="close"></label>
        <div style="width: 100%;" class="content" >
            <div class="title">
                <span>{{ $item->title }}</span>
            </div>
            <div  class="detail_content" style="overflow: auto; height: 460px;">
                <img style="width: 80%; height: 400px;" src="{{ $item->file_img }}" alt="">
                {!! html_entity_decode($item->content) !!}
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($data_newssale as $item)
<div class="center_popup_detail" >
    <input type="checkbox" id="show_detailnewssale{{ $item->id }}">
    <div class="container_popup_detail" style="margin-left: 40px !important">
        <label for="show_detailnewssale{{ $item->id }}" class="close-btn fa fa-times" title="close"></label>
        <div style="width: 100%;" class="content" >
            <div class="title">
                <span>{{ $item->title }}</span>
            </div>
            <div  class="detail_content" style="overflow: auto; height: 460px;">
                <img style="width: 80%; height: 400px;" src="{{ $item->img }}" alt="">
                <br>
                {!! html_entity_decode($item->content) !!}
            </div> 
            <div class="option" style="margin-left: 120px">
                <div class="quantity">
                    <span> Mã Khuyến Mại :</span>
                    <div class="note">
                        <input type="text" title="" placeholder="{{ $item->code_coupon }}">
                    </div>
                </div>
                <div class="buy_now">
                    <a href="#"> Sao chép </a>
                </div>
                
            </div> 
        </div>
        
    </div>
</div>
@endforeach

@foreach ($data_categories as $item)
<div class="center_popup_detail" >
    <input type="checkbox" id="show_detailcategory{{ $item->id }}">
    <div class="container_popup_detail" style="margin-left: 40px !important ; top: 0%">
        <label for="show_detailcategory{{ $item->id }}" class="close-btn fa fa-times" title="close"></label>
        <div style="width: 100%;" class="content" >
            <div class="title">
                <span>{{ $item->category_name }}</span> <br> <span style="font-size: 20px;font-weight: 700; color: #dd8f22;  margin-top: 10px;">{{ number_format($item->price) }} VND</span>
            </div>
            <div  class="detail_content" style="overflow: auto; height: 460px;">
                <img style="width: 100%; height: 400px;" src="{{ $item->category_img }}" alt="">
                {!! html_entity_decode($item->content) !!}
            </div> 
            <div class="option" >
                <div class="buy_now" style="margin-left: 700px">
                    <a href="{{ route('book', ['id'=>$item->id]) }}"> Đặt lịch ngay <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="add_cart">
                    <a href="#"><i style="color: white" class="fa fa-star" aria-hidden="true"></i></a>
                </div>
            </div> 
        </div>
    </div>
</div>
@endforeach