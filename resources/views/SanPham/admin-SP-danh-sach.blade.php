
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
        <h1 class="h2">DANH SÁCH SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('sanpham.themMoi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsSanPham as $sanpham)
        <tr>
            <td>{{ $sanpham->id }}</td>
            <td>{{ $sanpham->ten_sanpham }}</td>
            <td>{{ $sanpham->loaisanpham->ten_loaisanpham }}</td>
            <td>{{ $sanpham->gia }}</td>
            <td>{{ $sanpham->mota_sanpham }}</td>
            <td>
                <a href="{{route('sanpham.sua',['id'=>$sanpham->id])}}">Sửa</a> | <a href="{{ route('sanpham.xoa',['id'=>$sanpham->id])}}">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Không có sản phẩm nào.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection