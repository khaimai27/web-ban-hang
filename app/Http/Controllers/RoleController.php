<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhanQuyen;

class RoleController extends Controller
{
    public function themRole(){
        return view('Role.role-them');
    }
    public function xulyThemRole(Request $request){
        $role=new PhanQuyen();
        $role->ten_role=$request->ten_role;
        $role->save();

        return redirect()->route('role.danhSach')->with(['thong_bao'=>"Thêm loại tài khoản thành công."]);
    }
    public function danhsachRole(){
        $dsrole=PhanQuyen::all();
        return view('Role.role-danh-sach', compact('dsrole'));
    }
}
