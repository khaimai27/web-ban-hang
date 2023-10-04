<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\UploadController;
use App\http\Controllers\LoaiSPController;
use App\http\Controllers\RoleController;
use App\http\Controllers\TaiKhoanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout',[SanPhamController::class,('layout')]);
Route::get("san-pham",[SanPhamController::class,('danhSach')])->name('sanpham.danhSach');
Route::get("san-pham/them-moi",[SanPhamController::class,("themMoi")])->name('sanpham.themMoi');
Route::post("san-pham/them-moi",[SanPhamController::class,("xulyThem")])->name('sanpham.xulyThem');
Route::get('/upload',[UploadController::class,('upload')]);
Route::post('do-upload',[UploadController::class,('xulyUpload')])->name('doUpload');
Route::get("san-pham/xoa/{id}",[SanPhamController::class,('xulyXoa')])->name('sanpham.xoa');
Route::get("san-pham/sua/{id}",[SanPhamController::class,('sua')])->name('sanpham.sua');
Route::post("san-pham/sua/{id}",[SanPhamController::class,('xuLySua')])->name('sanpham.xuLySua');
// Loai SP
Route::get("loai-SP",[LoaiSPController::class,('danhsachloaiSP')])->name('loaisanpham.danhSach');
Route::get("loai-SP/them-moi",[LoaiSPController::class,("themLoaiSP")])->name('LoaiSP.themMoi');
Route::post("loai-SP/them-moi",[LoaiSPController::class,("xulyThemLoaiSP")])->name('LoaiSP.xulyThemLoaiSP');
Route::get("loai-SP/xoa/{id}",[LoaiSPController::class,('xulyXoa')])->name('loaisanpham.xoa');
Route::get("loai-SP/sua/{id}",[LoaiSPController::class,('sua')])->name('loaisanpham.sua');
Route::post("loai-SP/sua/{id}",[LoaiSPController::class,('xuLySua')])->name('loaisanpham.xuLySua');
// Role
Route::get("phan-quyen",[RoleController::class,('danhsachRole')])->name('role.danhSach');
Route::get("phan-quyen/them-moi",[RoleController::class,("themRole")])->name('role.themMoi');
Route::post("phan-quyen/them-moi",[RoleController::class,("xulyThemRole")])->name('Role.xulyThemRole');
// Tai Khoan
Route::get("tai-khoan",[TaiKhoanController::class,('danhSachTaiKhoan')])->name('taikhoan.danhSach');
Route::get("tai-khoan/them-moi",[TaiKhoanController::class,("themMoiTaiKhoan")])->name('taikhoan.themMoi');
Route::post("tai-khoan/them-moi",[TaiKhoanController::class,("xulyThemTaiKhoan")])->name('taikhoan.xulyThemTaiKhoan');
Route::get("tai-khoan/xoa/{id}",[TaiKhoanController::class,('xulyXoa')])->name('taikhoan.xoa');
Route::get("tai-khoan/sua/{id}",[TaiKhoanController::class,('sua')])->name('taikhoan.sua');
Route::post("tai-khoan/sua/{id}",[TaiKhoanController::class,('xuLySua')])->name('taikhoan.xuLySua');

