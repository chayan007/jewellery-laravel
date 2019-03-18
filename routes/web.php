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
    return view('public.pages.index');
});
Route::view('/contact', 'public.pages.contact');
Route::view('/order', 'public.pages.orders');
Route::view('/order-details', 'public.pages.orderDetails');
///Route::view('/single', 'public.pages.single');
Route::view('/cart', 'public.pages.cart');
Route::view('/account', 'public.pages.account');
Route::view('/checkout', 'public.pages.checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/shop', 'PublicController@shop');
    Route::get('/cart', 'OrderController@showCartToUser');
    Route::get('/orders', 'OrderController@showOrderToUser');
    Route::get('/checkout', 'OrderController@showCheckout');
    Route::get('/product/{slug}', 'PublicController@getProduct');
    Route::post('/addToCart/{id}', 'OrderController@addToCart');
    Route::post('/addToOrder', 'OrderController@addToOrder');
    Route::post('/updateCart/{id}', 'OrderController@updateCart');
    Route::get('/shopByCategory/{category}', 'PublicController@shopByCategory');
    Route::post('/uploadAccount/{id}', 'PublicController@uploadVerification');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    });
});




Route::group(['prefix' => 'admin'], function () {
      Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
      Route::post('/login', 'AdminAuth\LoginController@login');
      Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

      Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
      Route::post('/register', 'AdminAuth\RegisterController@register');

      Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
      Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
      Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
      Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
