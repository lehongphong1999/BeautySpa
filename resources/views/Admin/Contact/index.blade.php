@extends('Admin.layouts.sidebar')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý Liên hệ</h1>
        </div>
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Thư</li>
          </ol>
        </div> --}}
      </div>
    </div><!-- /.container-fluid -->
  </section>
<div class="row" style="margin-left: 10px">
    <!-- /.col -->
    <div class="col-md-12" style="padding:0px 20px 0px 0px;">
      <div class="card card-primary card-outline" style="border-radius: 5px;min-height: 308px;">
        <div class="card-header">
          <h3 class="card-title">Quản lý Liên hệ</h3>
          {{--  <div class="card-tools" >
            <div class="input-group input-group-sm" >
              <input type="text" class="form-control" placeholder="Tìm kiếm...">
              <div class="input-group-append">
                <div class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </div>
              </div>
            </div>
          </div>  --}}
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="mailbox-controls">
            <div class="float-right">
              <div class="btn-group">
                {{ $db->links() }}
              </div>
              <!-- /.btn-group -->
            </div>
            <!-- /.float-right -->
          </div>
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
              <tr>
                <td class="mailbox-date"><b>STT</b></td>
                <td class="mailbox-star"><a href="#" style="color: black"><b>Quan trọng</b></a></td>
                <td class="mailbox-name"><a href="#" style="color: black"><b>Người gửi</b></a></td>
                <td class="mailbox-subject" style="width: 400px"><b>Nội dung</b></td>
                <td class="mailbox-date"><b>Thời gian</b></td>
                {{--  <td class="mailbox-attachment"><b>Trạng thái</b></td>  --}}
                <td class="mailbox-attachment" style="width: 200px"><b></b></td>
              </tr>    
                @if (!is_null($db))
                  @foreach ($db as $item)
                  <tr>
                    <td class="mailbox-date">{{ $item->id }}</td>
                    <td class="mailbox-star">
                      @if($item->status_important==0)
                      
                      @else
                      <a href="#"><i class="fas fa-star text-warning"></i></a>
                      @endif
                    </td>
                    <td class="mailbox-name"><a href="{{ route('readcontact', ['id'=>$item->id]) }}">{{ $item->email_sender }}</a></td>
                    <td class="mailbox-subject"><b>{{ $item->subject }}</b> <br> {{ $item->content }}</td>
                    <td class="mailbox-date">{{ $item->created_at->format('h:m d-m-Y') }}</td>
                    {{--  <td class="mailbox-status">
                      @if($item->status_reply==0)
                      Chưa trả lời 
                      @else
                      Đã trả lời 
                      @endif
                    </td>  --}}
                    <td>
                      <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('readcontact', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Read</a></button>
                      <button style="width: 80px;height: 30px;background: rgb(124, 230, 124) ; color:rgb(26, 3, 3) ; border: none;border-radius:25rem"><a href="{{ route('deletecontact', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
                    </td>  
                    </tr>
                  @endforeach
                @endif 
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection