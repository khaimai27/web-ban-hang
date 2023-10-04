<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\PhanQuyen;

class TaiKhoanController extends Controller
{
    public function danhSachTaiKhoan(){
        $dsTaiKhoan=TaiKhoan::all();  
        return view('TaiKhoan.TK-danhsach', compact('dsTaiKhoan'));
    }
    public function themMoiTaiKhoan(){
        $dsTaiKhoan=TaiKhoan::all();
        $dsPhanQuyen=PhanQuyen::all();
        return view('TaiKhoan.TK-them',compact('dsTaiKhoan','dsPhanQuyen'));
    }
    public function xulyThemTaiKhoan(Request $request)
    {
        $taikhoan=new TaiKhoan();
        $taikhoan->username         = $request->username;
        $taikhoan->password=$request->password;
        $taikhoan->email     = $request->email;
        $taikhoan->dien_thoai          = $request->dien_thoai;
        $taikhoan->role          = $request->role;
        $taikhoan->save();
        // return"Thêm sản phẩm thành công";
        return redirect()->route('taikhoan.danhSach')->with(['thong_bao'=>"Thêm tài khoản thành công."]);
    }
    public function xulyXoa(Request $request, $id) {
        $taikhoan=TaiKhoan::find($id);
        if (empty($taikhoan)) {
            return redirect()->route('taikhoan.danhSach')->with(['thong_bao' => "Xóa tài khoản không thành công."]);
        }
        $taikhoan->delete();
        return redirect()->route('taikhoan.danhSach')->with(['thong_bao' => "Xóa tài khoản thành công."]);
    }
    public function sua($id){
        $taikhoan = TaiKhoan::find($id);
        return view('TaiKhoan.TK-sua',compact('taikhoan'));
    }
    public function xulySua(Request $request, $id){
        $taikhoan=TaiKhoan::find($id);
        if(empty($taikhoan)){
            return redirect()->route('taikhoan.sua')->with(['thong_bao' => "Sửa tài khoản không thành công."]);
        }
        $taikhoan->username         = $request->username;
        $taikhoan->password=$request->password;
        $taikhoan->email     = $request->email;
        $taikhoan->dien_thoai          = $request->dien_thoai;
        $taikhoan->role        = $request->role;
        $taikhoan->save();
        return redirect()->route('taikhoan.danhSach')->with(['thong_bao' => "Sửa tài khoản thành công."]);
    }
}
