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
        <h1 class="h2">CHỈNH SỬA SẢN PHẨM</h1>
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
    <label for="ten_sanpham" class="form-label" style="margin:10px">Tên sản phẩm</label>
  <input type="text" class="form-control" id="TEN_SANPHAM" value="{{$sanpham->ten_sanpham}}" name="ten_sanpham">
  </div>
  <div class="col-sm-5">
    <label for="GIA" class="form-label" style="margin:10px">Giá</label>
    <input type="number" class="form-control" id="GIA" value="{{$sanpham->gia}}" name="gia">
  </div>
  <div class="col-sm-5">
    <label for="MOTA_SANPHAM" class="form-label" style="margin:10px">Mô tả</label>
    <input type="text" class="form-control" id="MOTA_SANPHAM" value="{{$sanpham->mota_sanpham}}" name="mota_sanpham">
  </div>
  <div class="col-sm-5">
  <!-- <label for="hinh_anh" class="form-label" style="margin:10px">Hình ảnh sản phẩm</label>
  <input type="file"multiple class="form-control"  id="Hinh_anh" name="hinh_anh"> -->
  </div>
  <button type="submit" class="btn btn-primary" style="margin:20px">Lưu</button>
</form>
@endsection