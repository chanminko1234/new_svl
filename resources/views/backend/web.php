<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('get-townships/{id}', function($id) {
	return \App\Townships::where('state_id', $id)->get();
});

Route::get('/', function () {
	//return view('test');
	return view('welcome');
});

//DOOR OF THE ADMIN PANEL
Route::get('backend/login', 'Backend\LoginController@getLogin');
Route::post('backend/login', 'Backend\LoginController@postLogin');
/*
| BACKEND ROUTE GROUP
*/
Route::group(['prefix' =>  'backend', 'namespace' =>'Backend','middleware'=>['sentinelauth', 'roleaccess']], function () {
	
	//Take a break
	Route::get('logout', 'LoginController@logout');
	//ALL ABOUT ROLE.
	Route::resource('role','RoleController', ['except' => ['show', 'create']]);

	Route::get('role/create',[
		'as' => 'backend.role.create', 
		'uses' => 'RoleController@create'
		]);
	Route::get('role/{id}/show',[
		'as' => 'backend.role.show', 
		'uses' => 'RoleController@show'
		]);
	//U CAN'T CONTROL IT ALONE. 	
	Route::resource('user', 'UserController',['except' => ['show', 'create']]);
	Route::get('user/create',[
		'as' => 'backend.user.create', 
		'uses' => 'UserController@create'
		]);
	Route::get('user/{id}/show',[
		'as' => 'backend.user.show', 
		'uses' => 'UserController@show'
		]);
	//LIBRARY
	Route::resource('library','LibraryController', ['except' => ['show', 'create']]);
	Route::get('library/create',[
		'as' => 'backend.library.create', 
		'uses' => 'LibraryController@create'
		]);
	Route::get('library/{id}/show',[
		'as' => 'backend.library.show', 
		'uses' => 'LibraryController@show'
		]);
	//News
	Route::resource('backend/news','Backend\NewsController');
	//Author
	Route::resource('backend/author','Backend\AuthorController');
	//ADMIN PANEL SETTINGS
	Route::get('setting', 'SettingController@index');
	Route::post('setting/save', 'SettingController@save');
	Route::get('setting/user', function(){
		return "Nothing here...!";
	});

//PROFILE
	Route::get('user/{id}/profile', 'UserController@show');
// Rc_items
	Route::resource('rc_items', 'ResourceCenterController');
	Route::resource('rc_itm_cat', 'CatResourceCenterController');
	Route::resource('book_cat', 'CatBookController');

	Route::get('backend/media/create', 'Backend\MediaController@create');
});
Route::group(['namespace' =>'Frontend'], function () {
	Route::get('/', 'HomeController@index');
});