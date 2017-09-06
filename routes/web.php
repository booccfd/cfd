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
Auth::routes();

// front
Route::get('/', 'PageFrontController@index');
//Route::get('/login', 'PageFrontController@login');
















Route::post('submit', function(){

	$image = Input::file('image');
	$move = $image->move('public/uploads', $image->getClientOriginalName());

	return "ok";
});













Route::get('/{menuLink}', 'PageFrontController@category');
Route::get('/sub/{menuLink}/{id}', 'PageFrontController@cate');
Route::get('/detail/{menuLink}/{id}/{detail}', 'PageFrontController@detail');

// admin
Route::get('/admin', 'PagesController@login');
Route::get('/{index}', 'PagesController@home');
// Route::get('/admin/{menuText}', 'PagesController@menu');
Route::get('/admin/{menuText}', 'PagesController@index');

Route::post('/admin/{menuText}/insert', 'PagesController@insert');
Route::get('/admin/{menuText}/insert', 'PagesController@insert');
//Route::post('/admin/{menuText}/insert', 'PagesController@insert');
Route::get('/admin/{menuText}/update', 'PagesController@update');
Route::get('/admin/{menuText}/delete', 'PagesController@delete');

// Route::get('/admin/view_menu', 'PagesController@insert');




// UPLOAD IMAGE
// Route::post('/files/image','UploadController@postUpload');

// Route::get('/files/abc', function () {

// 	$url = \Storage::url('1.jpg');

// 	// dd($url);
// });