<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session as SessionSession;
use DB;
use App\Http\Requests;
use Session;

class SliderController extends Controller
{
    //
    public function manage_slider()
    {
        $all_slide = Slider::orderBy('slider_id','DESC')->get();
        return view('Backend.slider.list_slider')->with(compact('all_slide'));
    }
    public function add_slider()
    {
        return view('Backend.slider.add-slider');
    }
    public function insert_slider(Request $request)
    {
        $data= $request->all();
        $get_image = request('slider_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider', $new_image); // bỏ ảnh vào public/uploads/img

            $slider = new Slider();
            $slider -> slider_name= $data['slider_name'] ;
            $slider -> slider_image= $new_image;
            $slider -> slider_status= $data['slider_status'];
            $slider -> slider_desc= $data['slider_desc'];
            $slider->save();
            Session::put('message', 'Thêm slider thành công');
            return Redirect()->back();
        }
        else{
            Session::put('message', 'Chưa chọn hình ảnh');
            return Redirect()->back();
        }
    }
    
    public function del_slider($id_slider)
    {
        DB::table('tbl_slider')->where('slider_id', $id_slider)->delete();
        Session::put('message', 'Đã xóa danh slider thành công');
        // return Redirect::to('manage_slider');
        return Redirect()->back();
    }
}
