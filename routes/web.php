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

Route::get('login',['as' => 'getLogin','uses' => 'LoginController@getLogin']);
Route::post('login',['as' => 'postLogin','uses' => 'LoginController@postLogin']);
Route::get('logout',['as' => 'getLogout','uses' => 'LoginController@getLogout']);

Route::group(['middleware' => 'auth'],function(){
	Route::group(['prefix' =>'admin','namespace' => 'Admin'],function(){
		Route::get('/',function(){
			return view('admin.dashboard.main');
		});
		Route::group(['prefix'=>'user'],function(){
			Route::get('add',['as' => 'getUserAdd','uses' => 'UserController@getUserAdd']);
			Route::post('add',['as' => 'postUserAdd','uses' => 'UserController@postUserAdd']);
			Route::get('list',['as' => 'getUserList','uses' => 'UserController@getUserList']);
			Route::get('delete/{id}',['as' => 'getUserDel','uses' => 'UserController@getUserDel']);
			Route::get('edit/{id}',['as' => 'getUserEdit','uses' => 'UserController@getUserEdit']);
			Route::post('edit/{id}',['as' => 'postUserEdit','uses' => 'UserController@postUserEdit']);
		});
		
		Route::group(['prefix'=>'book'],function(){
			Route::get('add',function(){
				return view('admin.books.book_add');
			});
			Route::get('edit',function(){
				return view('admin.books.book_edit');
			});
			Route::get('list',function(){
				return view('admin.books.book_list');
			});
		});
		Route::get('comment',function(){
			return view('admin.comments.comment_list');
		});
	});
});
Route::get('index',function(){
	return view('user.pages.index');
});
Route::get('detail',function(){
	return view('user.pages.detail');
});
Route::get('index/login',function(){
	return view('user.pages.login');
});
Route::get('index/signup',function(){
	return view('user.pages.signup');
});