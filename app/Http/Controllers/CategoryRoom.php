<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session as SessionSession;
use DB;
use App\Http\Requests;
use Session;

session_start();
//
class CategoryRoom extends Controller
{
    //them danh muc phong
    public function add_category_room()
    {
        // $this->AuthLogin();
        return view('Backend.CategoryRoom.categoryroom');
    }
    //luu danh muc phong
    public function save_category_room(Request $request)
    {
        $data= array();
        $data['ten_loai'] = $request->category_room_name;
        $data['so_giuong'] = $request->sogiuong;
        $data['so_nguoi'] = $request->tisuat;
        $data['dien_tich'] = $request->dientich;
        $data['gia_phong'] = $request->category_room_price;
        $data['room_desc'] = html_entity_decode($request-> room_desc);
        $data['thong_tin'] = html_entity_decode($request-> room_infor);
        $data['category_status'] = $request->room_status;
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/img', $new_image); // bỏ ảnh vào public/uploads/img

            $data['image'] = $new_image;
            DB::table('tbl_category_room')->insert($data);;
            Session::put('message', 'Thêm danh mục phòng thành công');
            return Redirect::to('all-category-room');
        }
        $data['image'] = '';
        DB::table('tbl_category_room')->insert($data);
        Session::put('message', 'Thêm danh mục phòng thành công');
        // dd($data);
        return Redirect::to('all-category-room');
    }

    //all-room
    public function all_category_room()
    {
        $all_room =DB::table('tbl_category_room')->get();
        $manager_room = view('Backend.CategoryRoom.all-room')->with('all_room', $all_room);
        return view('Backend.layoutAdmin')->with('Backend.CategoryRoom.all-room',$manager_room);
    }
    public function showroom($category_id)
    {
        DB::table('tbl_category_room')->where('category_id', $category_id)->update(['category_status' => 0]);
        Session::put('message', 'Kích hoạt danh mục phòng thành công');
        return Redirect::to('all-category-room');
    }
    public function hideroom($category_id)
    {
        DB::table('tbl_category_room')->where('category_id', $category_id)->update(['category_status' => 1]);
        Session::put('message', 'Đã ẩn danh mục phòng thành công');
        return Redirect::to('all-category-room');
    }
    public function del_category_room($category_id)
    {
        DB::table('tbl_category_room')->where('category_id', $category_id)->delete();
        Session::put('message', 'Đã xóa danh mục phòng thành công');
        return Redirect::to('all-category-room');
    }
    public function edit_category_room($category_id) 
    {
        $edit_room =DB::table('tbl_category_room')->where('category_id',$category_id)->get();
        $manager_room = view('Backend.CategoryRoom.edit-room')->with('edit_room', $edit_room);
        return view('Backend.layoutAdmin')->with('Backend.CategoryRoom.edit-room',$manager_room);
    }
    
    public function update_category_room(Request $request,$category_id )
    {
        $data= array();
        $data['ten_loai'] = $request->category_room_name;
        $data['so_giuong'] = $request->sogiuong;
        $data['so_nguoi'] = $request->tisuat;
        $data['dien_tich'] = $request->dientich;
        $data['gia_phong'] = $request->category_room_price;
        // $data['room_desc'] = $request->room_desc;
        $data['room_desc'] = html_entity_decode($request-> room_desc);
        $data['thong_tin'] = html_entity_decode($request-> room_infor);
        $data['category_status'] = $request->room_status;

        $get_image = $request->file('image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/img', $new_image); // bỏ ảnh vào public/uploads/img

            $data['image'] = $new_image;
            DB::table('tbl_category_room')->where('category_id',$category_id)->update($data);
            Session::put('message', 'Cập nhật mục phòng thành công');
            return Redirect::to('all-category-room');
        }
        else{
           
        $data['image'] ='';
        DB::table('tbl_category_room')->where('category_id',$category_id)->update($data);
        Session::put('message', 'Cập nhật mục phòng thành công');
        // dd($data);
        return Redirect::to('all-category-room');
        }
     
    }
    //chi tiết phòng
    public function details_room($category_id)
    {
        $detail_room = DB::table('tbl_category_room')->where('category_id',$category_id)->get();
        return view('Frontend.Rooms.rooms-detail')->with('detail_room',$detail_room);
    }
    public function search(Request $request)
    {  

        // $keys = DB::table('tbl_customer')->where('key',$key)->get();
       $keys= $request -> keysword;
       $search = DB::table('tbl_category_room')->where('ten_loai','like','%'.$keys.'%')->orwhere('room_desc','like','%'.$keys.'%')->orwhere('thong_tin','like','%'.$keys.'%')->get();

        return view('Backend.CategoryRoom.searchroom')->with('key',$search);


    }
}
