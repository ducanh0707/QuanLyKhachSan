<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Dotenv\Result\Result;
use Session;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $slider= DB::table('tbl_slider')->where('slider_status','0')->orderby('slider_id','desc')->get();
        $all_dv= DB::table('tbl_dichvu')->orderby('id_dichvu','desc')->get(); 
        $list_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'asc')->take(2)->get();
        $list1_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'desc')->take(1)->get();

        return view('Frontend.home.main')->with('slide',$slider)->with('all_dv',$all_dv)->with('list_room',$list_room)->with('list1_room',$list1_room);
    }
    public function show_hotel(){
        $all_servi= DB::table('tbl_dichvu')->orderby('id_dichvu','desc')->get();
        return view('Frontend.hotel.layout_hotel')->with('all_dv',$all_servi);
    }
    
    public function show_offer(){
        $list_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'desc')->get();
        return view('Frontend.offer.layout-offer')->with('room',$list_room);
    }
    public function show_location(){
        return view('Frontend.location.layout-location');
    }
    public function show_room_rate(){
        $list_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'desc')->get();
        return view('Frontend.Room-rate.layout-room-rate')->with('room',$list_room);
    }
    
    public function show_book_now(){
        $list_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'desc')->get();
        return view('Frontend.Book.book')->with('room',$list_room);
    }

    //đặt phòng
    public function save_dondat(Request $request)
    {
        // dd($request->bookNowRoom);
        $list_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id', 'desc')->get();
        //insert tbl_customer
        $data_customer= array();
        $data_customer['ten_kh']= $request->bookNowFullName;
        $data_customer['sdt_kh']= $request->bookNowphone;
        $data_customer['email']= $request->bookEmail;
        $data_customer['diachi']= $request->bookNowStreetAdd1;
        $data_customer['id_dondat']="0";
        $id_customner= DB::table('tbl_customer')->insertGetId($data_customer);

        //insert tbl_dondat
        $data_DD= array();
        $data_DD['category_id']=$request->bookNowRoom;
        $data_DD['id_customer']= $id_customner;
        $data_DD['ngaydat']= $request->bookNowArrival;
        $data_DD['trangthai']= '1';
        $data_DD['tthai_ttoan']= 'chưa thanh toán';
        $id_dd= DB::table('tbl_dondat')->insertGetId($data_DD);

        // $data_customer['id_dondat']= $id_dd;
        $id_customner= DB::table('tbl_customer')->update(['id_dondat'=>$id_dd]);


        
        //insert tbl_ctdondat\
        $data_ctdd= array();
        $data_ctdd['id_dondat']= $id_dd;
        $data_ctdd['category_id']= $request->bookNowRoom;
        $data_ctdd['tu_ngay']= $request->bookNowArrival;
        $data_ctdd['den_ngay']= $request->bookNowDeparture;
        $data_ctdd['trang_thai']= $data_DD['trangthai'];
        $data_ctdd['tthai_ttoan']=  $data_DD['tthai_ttoan'];
        $data_ctdd['tong_tien']= $request->giaphong;
       

        $data_ctdd= DB::table('tbl_chitietdondat')->insertGetId($data_ctdd);

        // Mail::send('Backend.sendEmail.sendEmailAuthentication',[
        //     'name'=>$request->bookNowFullName,
        //     'diachi'=>$request->bookNowStreetAdd1,
        //     'email_n'=>$request->bookEmail,
        //     'dienthoai'=>$request->bookNowphone,
        // ],function($email) use ($request)
        // {
        
        //   $email->from('ngocanhhk0707@gmail.com','Công ty ABC'); 
        //   $email->to($request->bookEmail,$request->bookNowFullName);    //$email->to('1 cai email','ten nguoi chuyen'); 
        //   $email->Subject('Hoa Don Mua Hang');   
        // });
        return Redirect()->back();
        //  return view('Frontend.Book.book')->with('room',$list_room);
    }
   
   

    public function search(Request $request)
    {  $customer = DB::table('tbl_customer')->get();
        $sl_customer = DB::table('tbl_customer')->count();
        $sl_dp = DB::table('tbl_dondat')->count();
        $sl_dv = DB::table('tbl_dichvu')->count();
        $sl_room = DB::table('tbl_category_room')->count();

        // $keys = DB::table('tbl_customer')->where('key',$key)->get();
       $keys= $request -> keyw;
       $search = DB::table('tbl_customer')->where('ten_kh','like','%'.$keys.'%')->orwhere('diachi','like','%'.$keys.'%')->get();

        return view('Backend.search',['customer'=>$customer, 'sl_room'=>$sl_room,'sl_dv'=>$sl_dv,'sl_customer'=>$sl_customer,'sl_dp'=>$sl_dp])->with('key',$search);


    }
}
