<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
class SanPhamController extends Controller
{
     public function layout()
     {
        return view('layout');
     }
     public function danhSach(){
        $dsSanPham=SanPham::all();  
        return view('SanPham.admin-SP-danh-sach', compact('dsSanPham'));
    }
    public function themMoi(){
        $dsSanPham=SanPham::all();
        $dsLoaiSanPham=LoaiSanPham::all();
        return view('SanPham.admin-SP-them-moi',compact('dsSanPham','dsLoaiSanPham'));
    }
    public function xulyThem(Request $request)
    {
        $sanpham=new SanPham();
        $sanpham->ten_sanpham         = $request->ten_sanpham;
        $sanpham->loaisanpham_id=$request->loaisanpham_id;
        $sanpham->gia     = $request->gia;
        $sanpham->mota_sanpham          = $request->mota_sanpham;
        $sanpham->save();
        // return"Thêm sản phẩm thành công";
        return redirect()->route('sanpham.danhSach')->with(['thong_bao'=>"Thêm sản phẩm thành công."]);
    }
    public function xulyXoa(Request $request, $id) {
        $sanpham=SanPham::find($id);
        if (empty($sanpham)) {
            return redirect()->route('sanpham.danhSach')->with(['thong_bao' => "Xóa sản phẩm không thành công."]);
        }
        $sanpham->delete();
        return redirect()->route('sanpham.danhSach')->with(['thong_bao' => "Xóa sản phẩm thành công."]);
    }
    public function sua($id){
        $sanpham = SanPham::find($id);
        return view('SanPham.admin-SP-sua',compact('sanpham'));
    }
    public function xulySua(Request $request, $id){
        $sanpham=SanPham::find($id);
        if(empty($sanpham)){
            return redirect()->route('sanpham.sua')->with(['thong_bao' => "Sửa sản phẩm không thành công."]);
        }
        $sanpham->ten_sanpham         = $request->ten_sanpham;
        $sanpham->gia     = $request->gia;
        $sanpham->mota_sanpham          = $request->mota_sanpham;
        $sanpham->save();
        return redirect()->route('sanpham.danhSach')->with(['thong_bao' => "Sửa sản phẩm thành công."]);
    }
    
}