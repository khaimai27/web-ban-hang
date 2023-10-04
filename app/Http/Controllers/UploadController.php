<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload-SP');
    }
    public function xulyUpload(Request $rq){
        $file=$rq->hinh_anh;
        $path=$file->store('uploads');
        $message="Upload hình thành công";
        return view('upload-suscess-SP',compact('path','message'));
    }
    // public function xulyUpload(Request $rq){
    //     $files = $rq->file('hinh_anh'); // Lấy mảng các tệp tải lên
    
    //     if (!empty($files)) {
    //         foreach ($files as $file) {
    //             if ($file) {
    //                 $fileName = $file->getClientOriginalName();
    //                 $file->store('uploads', $fileName);
    //             }
    //         }
    
    //         return "Upload ảnh thành công";
    //     } else {
    //         return "Không có tệp nào được tải lên.";
    //     }
    // }
    
}
