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

Route::get('/','HomeController@index');
Route::get('custom_cases','HomeController@custom_cases');
Route::get('about_us','HomeController@about_us');
Route::get('contact_us','HomeController@contact_us');
Route::get('categories','HomeController@categories');
Route::get('products/categories/{id}','HomeController@category');
Route::get('products/{product}','HomeController@product_detail');


Route::get('news_and_tech','HomeController@news_and_tech');
Route::get('news','HomeController@news');
Route::get('tech','HomeController@tech');
Route::get('articles/{page}','HomeController@new_detail');

Route::post('contact_submit','HomeController@submit');
Route::get('submit_ok','HomeController@submit_ok');
//admin
Auth::routes();

Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/categories', 'CategoriesController');

//summer note pages images upload and delete
Route::post('admin/pages/images/{id}','PagesController@image_upload');
Route::delete('admin/pages/images','PagesController@image_delete');
Route::resource('/admin/pages','PagesController');

Route::get('home','ProductsController@index');

//summer note products images upload and delete
Route::post('admin/images/{id}','ProductsController@image_upload');
Route::delete('admin/images','ProductsController@image_delete');

