<?php

namespace App\Http\Controllers;

use App\DichVu;
use DB;
use Dotenv\Result\Result;
use Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $all_servi = DichVu::orderBy('id_dichvu', 'DESC')->get();
        $manager_servi = view('Backend.dichvu.dichvu')->with('all_servi', $all_servi);
        return view('Backend.layoutAdmin')->with('Backend.dichvu.dichvu', $manager_servi);
    }

   
    public function del_servi($id_dichvu)
    {
        DB::table('tbl_dichvu')->where('id_dichvu', $id_dichvu)->delete();
        Session::put('message', 'Đã xóa danh dich vụ thành công');
        return Redirect::to('service');
    }
    public function insert_service(Request $request)
    {
        $data = $request->all();
        $get_image = request('img_service');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/service', $new_image); // bỏ ảnh vào public/uploads/img

            $service = new DichVu();
            $service->tendichvu = $data['tendichvu'];
            $service->mota = $data['mota'];
            $service->img_service = $new_image;

            $service->save();
            Session::put('message', 'Thêm dịch vụ thành công');
            return Redirect::to('service');
        } else {
            $data['img_service'] = '';
            Session::put('message', 'Cập nhật dich vu thành công');
            return Redirect::to('service');
        }
    }
}
