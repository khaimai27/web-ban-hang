@extends('layout')
@section('content')

<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÊM MỚI TÀI KHOẢN</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>

<form method="POST"action="" enctype="multipart/form-data">
@csrf
  <div class="col-sm-5">
    <label for="username" class="form-label" style="margin:10px">Tên đăng nhập</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="col-sm-5">
    <label for="password" class="form-label" style="margin:10px">Mật khẩu</label>
    <input type="text" class="form-control" id="GIA" name="password">
  </div>
  <div class="col-sm-5">
    <label for="email" class="form-label" style="margin:10px">email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-sm-5">
    <label for="dien_thoai" class="form-label" style="margin:10px">Điện thoại</label>
    <input type="dien_thoai" class="form-control" id="dien_thoai" name="dien_thoai">
  </div>
  
  <div class="col-sm-5">
    <!-- <label for="LOAISANPHAM_ID" class="form-label" style="margin:10px">Loại sản phẩm</label>
    <input type="text" class="form-control" id="LOAISANPHAM_ID" name="loaisanpham_id"> -->
    <select name="ten_role">
      @foreach($dsPhanQuyen as $tenrole){
        <option value='{{$tenrole->id}}'>
          {{$tenrole->ten_role}}
        </option>
      }
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection