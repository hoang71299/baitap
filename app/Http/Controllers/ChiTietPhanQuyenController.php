<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemPhanQuyen;
use App\Models\ChiTietPhanQuyen;
use Illuminate\Http\Request;

class ChiTietPhanQuyenController extends Controller
{
    public function store(ThemPhanQuyen $request){
        $check = ChiTietPhanQuyen::where('id_quyen',$request->id_quyen)
                                    ->where('id_chuc_nang',$request->id_chuc_nang)
                                    ->first();
        if($check){
            return response()->json([
                'status' => false,
                'message' => "Quyền này đã phân rồi"
            ]);
        }
        ChiTietPhanQuyen::create([
            'id_quyen'=>$request->id_quyen,
            'id_chuc_nang'=>$request->id_chuc_nang
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã phân quyền thành công!"
        ]);
    }

}
