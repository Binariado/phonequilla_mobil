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

//Route::get('/', 'MainController@index')->name('home');

Route::get('/compra', function () {
    return view('components.order');
});


Route::get('/','ProductController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'shopping'], function () {
    //CARRITO DE COMPRA Y TRANSACCIÓN
    Route::resource('/cart', 'CartController');
   
    Route::post('purchase-end', 'OrderItemController@purchaseEnd');
    Route::post('purchase-address', 'CartController@purchaseAddress');
    Route::post('purchase', 'CartController@purchase');
    Route::post('shipment-details', 'CartController@shipmentDetails');
    Route::post('cities-global','CartController@cities');
});

Route::resource('product', 'ProductController');

Route::get('compro', 'OrderItemController@index');

//Añadir Carrito
Route::post('cart/{id}', 'CartController@add');

//Buscador de productos
Route::get('search/{search}', 'ProductController@search');

Route::group(['prefix' => 'users/profile', 'middleware' => 'auth'], function () {
    Route::resource('/', 'ProfileController');
    Route::post('address-notebook-person', 'ProfileController@update');
    Route::post('new-password','ProfileController@password');
    Route::post('address-notebook','UserAddressController@store');
    Route::post('cities-global','UserAddressController@cities');
});

Route::group(['prefix' => 'filter'], function () {
    Route::post('filter-brands', 'BrandsController@FilterBrand')->name('FilterBrand');
});

Route::get('recover',function(){
    return view('auth.verify');
});

Auth::routes(['verify' => true]);

Auth::routes();
// Route::get('/storage-link', function () {
//     Artisan::call('storage:link');
// });

Route::post('favorite','ProductController@addfavorite');
