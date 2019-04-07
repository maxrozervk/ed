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

/////////////////////////////////
//Admin
/////////////////////////////////
Route::get('/post-dashboard','AdminUser\DashboardController@postDashboard');
Route::get('/admin-dashboard','AdminUser\DashboardController@adminDashboard');

// Route::get('/post-dashboard',function(){
// 	return view('adminUserView.post.postDashboard');
// });
Route::resource('/post','AdminUser\Post\PostController');
Route::resource('/category','AdminUser\Category\CategoryController');
Route::resource('/tag','AdminUser\Tag\TagsController');
/////////////////////////////////
//Web
/////////////////////////////////
Route::get('/', function () {
    return view('webUserView.home');
});
Route::get('/blog/{post_slug}', 'WebUser\Post\PostController@index');
Route::get('/blog','WebUser\Post\PostController@blogList');
//  function () {
//     return view('webUserView.blogList');
// });

















/////////////////////////////////
//Template
/////////////////////////////////



Route::get('blog1', function () {
    return view('webUserView.blog');
});


Route::get('a', function () {
    return view('adminUserView.home');
});

Route::get('/postt', function () {
    return view('adminUserView.post.post');
});
Route::get('/tagss', function () {
    return view('adminUserView.tags');
});
Route::get('/categoriess', function () {
    return view('adminUserView.categories');
});
Route::get('/users', function () {
    return view('adminUserView.users.user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
