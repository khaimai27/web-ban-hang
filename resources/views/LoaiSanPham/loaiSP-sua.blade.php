@extends('layout')
@section('page-js')
    @if(session('thong_bao'))
        <script>
             swal.fire("{{session('thong_bao')}}");
        </script>
    @endif
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CHỈNH SỬA LOẠI SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            </div>
          </button>
        </div>
</div>
<form method="POST">
@csrf
<div class="col-sm-5">
    <label for="ten_loaisanpham" class="form-label" style="margin:10px">Tên loại sản phẩm</label>
  <input type="text" class="form-control" id="TEN_SANPHAM" value="{{$loaisanpham->ten_loaisanpham}}" name="ten_loaisanpham">
  </div>
  <div class="col-sm-5">
    <label for="mota" class="form-label" style="margin:10px">Mô tả loại sản phẩm</label>
    <input type="text" class="form-control" id="mota" value="{{$loaisanpham->mota_loaisanpham}}" name="mota_loaisanpham">
  </div>
  <button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection