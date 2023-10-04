<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
class LoaiSPController extends Controller
{
    public function themLoaiSP(){
        return view('LoaiSanPHam.LoaiSP-them');
    }
    public function xulyThemLoaiSP(Request $request){
        $loaisanpham=new LoaiSanPham();
        $loaisanpham->ten_loaisanpham=$request->ten_loaisanpham;
        $loaisanpham->mota_loaisanpham=$request->mota_loaisanpham;
        $loaisanpham->save();

        return redirect()->route('loaisanpham.danhSach')->with(['thong_bao'=>"Thêm loại sản phẩm thành công."]);
    }
    public function danhsachloaiSP(){
        $dsLoaiSanPham=LoaiSanPham::all();
        return view('LoaiSanPham.loaiSP-danh-sach', compact('dsLoaiSanPham'));
    }
    public function xulyXoa(Request $request, $id) {
        $loaisanpham=LoaiSanPham::find($id);
        if (empty($loaisanpham)) {
            return redirect()->route('loaisanpham.danhSach')->with(['thong_bao' => "Xóa loại sản phẩm không thành công."]);
        }
        $loaisanpham->delete();
        return redirect()->route('loaisanpham.danhSach')->with(['thong_bao' => "Xóa loại sản phẩm thành công."]);
    }
    public function sua($id){
        $loaisanpham = loaisanpham::find($id);
        return view('LoaiSanPham.loaiSP-sua',compact('loaisanpham'));
    }
    public function xulySua(Request $request, $id){
        $loaisanpham=LoaiSanPham::find($id);
        if(empty($loaisanpham)){
            return redirect()->route('loaisanpham.sua')->with(['thong_bao' => "Sửa loại sản phẩm không thành công."]);
        }
        $loaisanpham->ten_loaisanpham         = $request->ten_loaisanpham;
        $sanpham->mota_loaisanpham          = $request->mota_loaisanpham;
        $sanpham->save();
        return redirect()->route('loaisanpham.danhSach')->with(['thong_bao' => "Sửa loại sản phẩm thành công."]);
    }
}
