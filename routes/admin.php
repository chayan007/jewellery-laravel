<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('home');

Route::post('/addProduct', 'ProductController@addProduct');
Route::post('/addCategory', 'CategoryController@addCategory');
Route::post('/updateProduct/{id}', 'ProductController@editProduct');
Route::post('/updateCategory/{id}', 'CategoryController@updateCategory');
Route::get('/user', 'AdminController@getUsers');
Route::get('/addProduct', 'AdminController@addProduct');
Route::get('/addCategory', 'AdminController@addCategory');
Route::get('/product', 'ProductController@getProducts');
Route::get('/order', 'OrderController@showOrders');
Route::get('/category', 'CategoryController@getCategories');
Route::post('/mark/{id}', 'OrderController@markDone');
Route::get('/deleteOrder', 'OrderController@deleteOrder');
Route::get('/active', 'OrderController@showOrders');
Route::get('/reject', 'OrderController@showOrders');
Route::get('/agents', 'AdminController@getAgents');
Route::get('/deleteAgent/{id}', 'AdminController@deleteAgents');
Route::get('/returns', 'AdminController@getRefunds');
Route::get('/markReturn/{id}', 'RefundController@markRefund');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');
//Route::get('/', '');