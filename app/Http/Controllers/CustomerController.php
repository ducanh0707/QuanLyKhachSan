<?php

namespace App\Http\Controllers;

use App\ChiTietDondat;  
use DB;
use App\Http\Requests;
use Dotenv\Result\Result;
use GuzzleHttp\Psr7\Request;
use Session;
use Illuminate\Support\Facades\Redirect;


class CustomerController extends Controller
{
    public function listcustomer()
  {
    $customer= DB::table('tbl_customer')->get();
    return view('Backend.customer.listcustomer')->with('customer',$customer);
  }
  public function del_cus($id_cus)
  {
      DB::table('tbl_customer')->where('id_customer', $id_cus)->delete();
      Session::put('message', 'Đã xóa danh người dùng thành công');
      // return Redirect::to('manage_slider');
      return Redirect()->back();
  }
}
