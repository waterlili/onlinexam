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
Route::get('admin', function () {
    return view('admin_template');
});
Route::get('etra_info/add_q','TaskController@add_q');
Route::post('etra_info/add_q','TaskController@store_q');
Route::get('etra_info/{user_info}/edit','TaskController@edit');
Route::patch('etra_info/{user_info}','TaskController@update');

Route::get('etra_info/selection','TaskController@mutiselect');
// Route::get('/', function () {
//     return view('main_page');
// });
Route::get('/','TaskController@questionList');
Route::post('/storeAnsware','TaskController@storeAnsware');
	// $tests = DB::table('tests')->simplePaginate(4);
    // return view('main_page',compact('tests'));
    // return view('welcome');

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('ad_info','');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('test', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
