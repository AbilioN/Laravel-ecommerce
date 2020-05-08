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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/account' , 'UserController@account')->name('account'); 

Route::group(['prefix' => 'admin'] , function(){
    // brands routes
    Route::get('brands' , 'BrandController@manage')->name('brands_management');
    Route::get('brands/create' , 'BrandController@create')->name('brand_create');
    Route::get('brands/{id}/edit' , 'BrandController@edit')->name('brand_edit');
    Route::get('brands/save' , 'BrandController@save')->name('brand_save');
    Route::get('brands/{id}/update' , 'BrandController@update')->name('brand_update');
    // end of brands routes
});