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

// Route::get('/home',function(){
// return view('userhome');
// });

Route::get('/adminhome',function(){
return view('admin.page.home');
});

Route::group(['namespace'=>'user'],function(){
	Route::get('/','HomeController@index')->name('home');
	Route::get('/post','PostController@index')->name('post');
});



Route::resource('/admin/user','Admin\UserController');

Route::resource('/admin/post','Admin\PostController');

Route::resource('/admin/tag','Admin\TagController');

Route::resource('/admin/category','Admin\CategoryController');

// movie 8 end


// Route::get('/post',function(){
// return view('user.post');
// })->name('post');

// Route::get('/admin/post',function(){
// 	return view('admin.page.postcreate');
// });

// Route::get('/admin/tag',function(){
// return view('admin.page.tagcreate');
// });
// Route::get('/admin/category',function(){
// return view('admin.page.catcreate');
// });


// Route::get('/', function () {
//     return view('userhome');
// });

// Route::get('/home',function(){
//   return view('admin.page.home');
// });

// Route::get('/admin/home',function(){
//    return view('admin.adminhome');
// });

// Route::get('/calcu',function (){
//     return view('admin.page.calculator');
// });

//Patriots Day (2016)
