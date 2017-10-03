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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::post('/admin', 'HomeController@store')->name('admin');


Route::get('/admin/catagoriesID={id}', 'ProductController@index');

Route::post('/admin/catagoriesID={id}/upload', 'ProductController@store');
Route::post('/admin/catagoriesID={id}/delete', 'ProductController@delete');

Route::get('/admin/catagoriesID={id}/productId={proID}','ProductDetailController@index');


Route::get('/catagoryID={id}', 'ProductListController@index');
Route::get('/catagoriesID={id}/productId={proID}','ProducDetailUserController@index');