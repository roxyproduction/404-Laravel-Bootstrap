<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about', function () {
//     return 'xàm dễ sợ';
// });
Route::get('about/direction', function () {
    return 'About direction';
});
Route::get('about/classes/{theart}/{theprice}',function($theArt,$thePrice){
    return "Laravel $theArt không $thePrice";
});

Route::Get('profile',function(){
    return view('profile');
});
Route::view('/contact', 'contact');
Route::get('/','contactController@showIndex');
Route::get('contact','contactController@showContact');//gọi trang contact
Route::get('welcome','contactController@showIndex');//gọi trang chủ
Route::get('about','contactController@showAbout');
Route::get('profile','contactController@showProfile');