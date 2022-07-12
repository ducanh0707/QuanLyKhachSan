<?php

namespace App\Http\Controllers;
use App\ChiTietDondat;  
use DB;
use App\Http\Requests;
use Dotenv\Result\Result;
use GuzzleHttp\Psr7\Request;
use Session;
use Illuminate\Support\Facades\Redirect;


class Thongke extends Controller
{
    public function thongke()
    {
        $thongkehd= DB::table('tbl_chitietdondat')
        ->join('tbl_category_room','tbl_category_room.category_id','=','tbl_chitietdondat.category_id')
        ->join('tbl_dondat','tbl_dondat.id_dondat','=','tbl_chitietdondat.id_dondat')
        ->join('tbl_customer','tbl_customer.id_customer','=','tbl_dondat.id_customer')->get();
        return view('Backend.Thongke.thongke')->with(compact('thongkehd',$thongkehd));
    }

    public function status($id_dondat,$val)
    { 
     

         DB::table('tbl_chitietdondat')->where('tbl_chitietdondat.id_dondat', $id_dondat)->update(['tbl_chitietdondat.trang_thai' => $val]);

        DB::table('tbl_dondat')->where('tbl_dondat.id_dondat', $id_dondat)->update(['tbl_dondat.trangthai' => $val]);
        // dd($request->trangthai);
        Session::put('message', 'Đã duyệt đơn đặt phòng ');
        return Redirect::to('thong-ke');
    }


    public function duyettk($id_dondat)
    { 
        // dd($id_dondat);
        DB::table('tbl_chitietdondat')->where('tbl_chitietdondat.id_ctdondat', $id_dondat)->update(['tbl_chitietdondat.trang_thai' => 0]);
        DB::table('tbl_dondat')->where('tbl_dondat.id_dondat', $id_dondat)->update(['tbl_dondat.trangthai' => 0]);
        // dd($request->trangthai);
        Session::put('message', 'Đã duyệt đơn đặt phòng ');
        return Redirect::to('thong-ke');
    }
    public function huytk($id_dondat){
        DB::table('tbl_chitietdondat')->where('id_ctdondat', $id_dondat)->update(['tbl_chitietdondat.trang_thai'=>1]);
        DB::table('tbl_dondat')->where('id_dondat', $id_dondat)->update(['trangthai' => 1]);
        Session::put('message', 'Đã hủy đơn đặt phòng');
        return Redirect::to('thong-ke');
    }
    public function del_tk($id_dondat)
    {
        DB::table('tbl_dondat')->where('id_dondat', $id_dondat)->delete();
        DB::table('tbl_chitietdondat')->where('id_dondat', $id_dondat)->delete();
        DB::table('tbl_customer')->where('id_dondat', $id_dondat)->delete();
        // DB::table('tbl_customer')->where('id_dondat', $id_dondat)->delete();
        Session::put('message', 'Đã xóa đơn đặt thành công');
        return Redirect::to('thong-ke');
    }
}
