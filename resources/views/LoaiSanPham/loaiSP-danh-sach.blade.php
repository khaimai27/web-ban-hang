
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
        <h1 class="h2">DANH SÁCH LOẠI SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('LoaiSP.themMoi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã loại sản phẩm</th>
            <th scope="col">Tên loại sản phẩm</th>
            <th scope="col">Mô tả loại sản phẩm</th>

        </tr>
    </thead>
    <tbody>
        @forelse($dsLoaiSanPham as $loaisanpham)
        <tr>
            <td>{{ $loaisanpham->id }}</td>
            <td>{{ $loaisanpham->ten_loaisanpham }}</td>
            <td>{{ $loaisanpham->mota_loaisanpham }}</td>
            <td>
                <a href="{{route('loaisanpham.sua',['id'=>$loaisanpham->id])}}">Sửa</a> | <a href="{{route('loaisanpham.xoa',['id'=>$loaisanpham->id])}}">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Không có loại sản phẩm nào.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection