@extends('Admin.layouts.sidebar')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liên hệ</h1>
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
    <div class="col-md-2">
      <a href="{{ route('indexcontact') }}" class="btn btn-primary btn-block mb-3" style="border-radius: 25rem"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Hộp thư</a>

      {{-- <div class="card" style="border-radius: 10px">
        <div class="card-header" >
          <h3 class="card-title"><b>Chức năng</b></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
              <a href="#" class="nav-link">
                <i class="fas fa-inbox"></i> Hộp thư
                <span class="badge bg-primary float-right">12</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-envelope"></i> Gửi đi
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i style="color: #827b69!important;" class="fas fa-star text-warning"></i> Quan trọng
                </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-file-alt"></i> Nháp
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-trash-alt"></i> Thùng rác
              </a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div> --}}
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card card-primary card-outline" style="min-height: 400px">
          <div class="card-header">
            <h3 class="card-title"><b>Nội dung</b></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-read-info">
              <h5><b>{{ $db->subject }}</b></h5>
              <h6>{{ $db->email_sender }}
                    @if($db->status_important==0)
                    <a href="#" ><i style="color: #827b69!important; margin-left:200px!important" class="fas fa-star text-warning"></i></a> 
                    @else
                    <a href="#" ><i style="margin-left: 200px!important" class="fas fa-star text-warning"></i></a>
                    @endif 
                <span class="mailbox-read-time float-right">{{ $db->created_at->format('h:m d-m-Y') }}</span></h6>
            </div>

            <!-- /.mailbox-read-info -->
            <div class="mailbox-read-message">
                {{ $db->content }}
            </div>
            <!-- /.mailbox-read-message -->
          </div>
          <!-- /.card-body -->
          <!-- /.card-footer -->
          <div class="card-footer">
            <div class="float-right">
              <button type="button" class="btn btn-default"><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="fas fa-reply"></i> Trả lời</a></button>
            </div>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>    
</div>  
@endsection