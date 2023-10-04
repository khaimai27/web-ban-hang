
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
        <h1 class="h2">DANH SÁCH ROLE</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class=
            "btn-group me-2">
            <a href="{{ route('role.themMoi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
          </button>
        </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Mã Role</th>
            <th scope="col">Tên Role</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsrole as $phanquyen)
        <tr>
            <td>{{ $phanquyen->id }}</td>
            <td>{{ $phanquyen->ten_role }}</td>
            <td>
                <a href="#">Sửa</a> | <a href="#">Xóa</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">Không có role nào.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection