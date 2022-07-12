<?php

use Illuminate\Support\Facades\Route;

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
//email

//frontend

Route::get('/','Controller@index');
Route::get('/hotel','Controller@show_hotel');
Route::get('/Room-rate','Controller@show_room_rate');
Route::get('/Special-Offers','Controller@show_offer');
Route::get('/Location','Controller@show_location');
Route::get('/Book-Now','Controller@show_book_now');
// đặt phòng
Route::post('/save-dondat','Controller@save_dondat');
// Route::post('/save-dondat','Controller@send_mail');



//admin

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@Show_dashboard');
Route::get('/backend-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

Route::get('/search/{key}','AdminController@search');


//backend

//CategoryRoom
Route::get('/add-category-room','CategoryRoom@add_category_room');
Route::post('/save-category-room','CategoryRoom@save_category_room');
Route::get('/all-category-room','CategoryRoom@all_category_room');
Route::get('/showroom/{category_id}','CategoryRoom@showroom');
Route::get('/hideroom/{category_id}','CategoryRoom@hideroom');
Route::get('/delete/{category_id}','CategoryRoom@del_category_room');
Route::get('/edit/{category_id}','CategoryRoom@edit_category_room');
Route::get('/update-category-room/{category_id}','CategoryRoom@update_category_room');
Route::get('/room-detail/{category_id}','CategoryRoom@details_room');

Route::get('/search-room/{key}','CategoryRoom@search');




//slider
Route::get('/manage-slider','SliderController@manage_slider');
Route::get('/add-slider','SliderController@add_slider');
Route::post('/insert-slider','SliderController@insert_slider');
Route::get('/delete-slide/{slider_id}','SliderController@del_slider');

// Thống kê
Route::get('/thong-ke','Thongke@thongke');

Route::get('/huytk/{id_dondat}','Thongke@huytk');

Route::get('/duyettk/{id_dondat }','Thongke@duyettk');
// Route::get('/duyettk/{id_dondat}',function(){
//     return 'ấvvsdgsd';
// });

Route::get('/status/{id_dondat}/{value}','Thongke@status');

Route::get('/delete-don-dat/{id_dondat}','Thongke@del_tk');



// dịch vụ

Route::get('/service','ServiceController@service');
Route::get('/delete-service/{id_dichvu}','ServiceController@del_servi');
Route::post('/insert-service','ServiceController@insert_service');
// Route::get('/delete-service/{id_dichvu}',function(){
//     return 'fsdaf';
// });


//customer 
Route::get('/list-customer','CustomerController@listcustomer');
Route::get('/delete-cus/{cus_id}','CustomerController@del_cus');




;
