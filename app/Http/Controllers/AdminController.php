<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// thêm thư viện dưới
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail; // kế thừa mail
use Illuminate\Auth\Events\Validated;
use App\User;
use Dotenv\Validator;
use Session;
use Illuminate\Support\Facades\View;

session_start();

use Illuminate\Support\Facades\Redirect;
//

class AdminController extends Controller
{
  public function AuthLogin()
  {
    $admin_id = Session::get('admin_id');
    if ($admin_id) {
      return redirect::to('Backend.dashboard');
    } else {
      return redirect::to('/admin')->send();
    }
  }
  public function index()
  {
    return view("Backend.AdminLogin");
  }

  public function dashboard(Request $request)
  {
    $this->AuthLogin();
    $admin_email = $request->admin_email;
    $admin_password = md5($request->admin_password);

    $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

    if ($result) {
      Session::put('admin_name', $result->admin_name);
      Session::put('admin_id', $result->admin_id);

      return Redirect::to('/dashboard');
    } else {
      Session::put('message', 'Thông tin tài khoản không đúng');

      return Redirect::to('/admin');
    }
  }
  // // đăng xuất
  public function logout()
  {
    $this->AuthLogin();
    Session::put('admin_name', null);
    Session::put('admin_id', null);
    return Redirect::to('/admin');
  }



  // dashboard
  public function Show_dashboard()
  {
    $this->AuthLogin();
    $customer = DB::table('tbl_customer')->get();
    $sl_customer = DB::table('tbl_customer')->count();
    $sl_dp = DB::table('tbl_dondat')->count();
    $sl_dv = DB::table('tbl_dichvu')->count();
    $sl_room = DB::table('tbl_category_room')->count();

    return view('Backend.dashboard',['customer'=>$customer, 'sl_room'=>$sl_room,'sl_dv'=>$sl_dv,'sl_customer'=>$sl_customer,'sl_dp'=>$sl_dp]);
  }
 
}
