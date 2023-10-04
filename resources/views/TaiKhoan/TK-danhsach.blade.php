
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
        <h1 class="h2">DANH SÁCH TÀI KHOẢN</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('taikhoan.themMoi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã tài khoản</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Phân quyền</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse($dsTaiKhoan as $taikhoan)
        <tr>
            <td>{{ $taikhoan->id }}</td>
            <td>{{ $taikhoan->username }}</td>
            <td>{{ $taikhoan->password }}</td>
            <td>{{ $taikhoan->email }}</td>
            <td>{{ $taikhoan->dien_thoai }}</td>
            <td>{{ $taikhoan->loaitaikhoan->ten_role }}</td>
            <td>
                <a href="#">Sửa</a> | <a href="#">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Không có tài khoản nào.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection