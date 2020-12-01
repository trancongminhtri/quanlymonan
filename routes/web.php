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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/productloaisp', function () {
    return view('productloaisp');
});
Route::get('/productnhanvien', function () {
    return view('productnhanvien');
});
Route::get('/producthoadon', function () {
    return view('producthoadon');
});
Route::get('/productloainv', function () {
    return view('productloainv');
});
Route::get('/producthinhanh', function () {
    return view('producthinhanh');
});
// sản phẩm
Route::get('/product', 'ProductController@index') ->name('product.index');
Route::post('/product', 'ProductController@store') ->name('product.store');
Route::get('/product/create', 'ProductController@create') ->name('product.create');
Route::get('/product/{id}/edit', 'ProductController@edit') ->name('product.edit');
Route::get('/product/{id}/destroy', 'ProductController@destroy') ->name('product.destroy');
Route::patch('/product/{id}', 'ProductController@update') ->name('product.update');
Route::get('/product/{id}', 'ProductController@show') ->name('product.show');

//loại sản phẩm
Route::get('/productloaisp', 'ProductLoaispController@index') ->name('productloaisp.index');
Route::post('/productloaisp', 'ProductLoaispController@store') ->name('productloaisp.store');
Route::get('/productloaisp/create', 'ProductLoaispController@create') ->name('productloaisp.create');
Route::get('/productloaisp/{id}/edit', 'ProductLoaispController@edit') ->name('productloaisp.edit');
Route::get('/productloaisp/{id}/destroy', 'ProductLoaispController@destroy') ->name('productloaisp.destroy');
Route::patch('/productloaisp/{id}', 'ProductLoaispController@update') ->name('productloaisp.update');
Route::get('/productloaisp/{id}', 'ProductLoaispController@show') ->name('productloaisp.show');


//nhân viên
Route::get('/productnhanvien', 'ProductNhanvienController@index') ->name('productnhanvien.index');
Route::post('/productnhanvien', 'ProductNhanvienController@store') ->name('productnhanvien.store');
Route::get('/productnhanvien/create', 'ProductNhanvienController@create') ->name('productnhanvien.create');
Route::get('/productnhanvien/{id}/edit', 'ProductNhanvienController@edit') ->name('productnhanvien.edit');
Route::get('/productnhanvien/{id}/destroy', 'ProductNhanvienController@destroy') ->name('productnhanvien.destroy');
Route::patch('/productnhanvien/{id}', 'ProductNhanvienController@update') ->name('productnhanvien.update');
Route::get('/productnhanvien/{id}', 'ProductNhanvienController@show') ->name('productnhanvien.show');

//hóa đơn
Route::get('/producthoadon', 'ProductHoadonController@index') ->name('producthoadon.index');
Route::post('/producthoadon', 'ProductHoadonController@store') ->name('producthoadon.store');
Route::get('/producthoadon/create', 'ProductHoadonController@create') ->name('producthoadon.create');
Route::get('/producthoadon/{id}/edit', 'ProductHoadonController@edit') ->name('producthoadon.edit');
Route::get('/producthoadon/{id}/destroy', 'ProductHoadonController@destroy') ->name('producthoadon.destroy');
Route::patch('/producthoadon/{id}', 'ProductHoadonController@update') ->name('producthoadon.update');
Route::get('/producthoadon/{id}', 'ProductHoadonController@show') ->name('producthoadon.show');

//loại nhân viên
Route::get('/productloainv', 'ProductLoainvController@index') ->name('productloainv.index');
Route::post('/productloainv', 'ProductLoainvController@store') ->name('productloainv.store');
Route::get('/productloainv/create', 'ProductLoainvController@create') ->name('productloainv.create');
Route::get('/productloainv/{id}/edit', 'ProductLoainvController@edit') ->name('productloainv.edit');
Route::get('/productloainv/{id}/destroy', 'ProductLoainvController@destroy') ->name('productloainv.destroy');
Route::patch('/productloainv/{id}', 'ProductLoainvController@update') ->name('productloainv.update');
Route::get('/productloainv/{id}', 'ProductLoainvController@show') ->name('productloainv.show');

//hình ảnh
// sản phẩm
Route::get('/producthinhanh', 'ProductHinhanhController@index') ->name('producthinhanh.index');
Route::post('/producthinhanh', 'ProductHinhanhController@store') ->name('producthinhanh.store');
Route::get('/producthinhanh/create', 'ProductHinhanhController@create') ->name('producthinhanh.create');
Route::get('/producthinhanh/{id}/edit', 'ProductHinhanhController@edit') ->name('producthinhanh.edit');
Route::get('/producthinhanh/{id}/destroy', 'ProductHinhanhController@destroy') ->name('producthinhanh.destroy');
Route::patch('/producthinhanh/{id}', 'ProductHinhanhController@update') ->name('producthinhanh.update');
Route::get('/producthinhanh/{id}', 'ProductHinhanhController@show') ->name('producthinhanh.show');
