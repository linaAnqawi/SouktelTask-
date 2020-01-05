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

//   i must design data base that's include
// 1- user  =>
// user_id =>primaryKey
//user_name]

//user_email
//user_password
//user_type
// 2- concert  =>
//concert_id =>primaryKey
//concert_name
//concert_location
//concert_date
//user_id =>foreignKey
// this relation one to many

Route::get('', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/login_form', function () {
    return view('welcome');
});
Route::get('/showAllConcerts', function () {
    return view('showAllConcerts');
});
Route::get('/createConcert', function () {
    return view('welcome');
});

Route::get('/updateTickets', function () {
    return view('updateConcert');
});
Route::get('/ticketsForm', function () {
    return view('ticketsForm');
});

Route::get('/sendEmail/{id}', 'orderController@sendEmail');
Route::get('concert/show/{concert}','concertController@show');
Route::get('sendEmail/{id}','orderController@sendEmail');
Route::get('/send/email', 'orderController@mail');
Route::get('/showAllConcert/{id}','concertController@showAllConcert');
Route::get('concert/show1/{concert}','concertController@show1');
Route::get('/user/concert/show/{concert}','concertController@show');
Route::get('/user/concert/show1/{concert}','concertController@show1');
Route::get('/buyTickets/{concert},{id}','concertController@buyTickets');
Route::get('/orderStore/{ticketsId},{concertId},{userId}','orderController@orderStore');
Route::get('/userOrder/{userId}','orderController@userOrder');
Route::get('concert/index','concertController@index');
Route::get('concert/create/{id}','concertController@create');
Route::get('/user/concert/create/{id}','concertController@create');
Route::post('/store/{id}','concertController@store');
Route::post('/storeTickets/{id}','TicketController@store');
Route::get('/updateTickets/show/{id}','TicketController@show');
Route::get('/updateConcert/{id}','TicketController@editTickets');
Route::post('/editPriceOfTickets/{id}','TicketController@editPriceOfTickets');
//Route::post('/concert','sellerAndBuyerController@store');
Route::get('user/show/{user}','sellerAndBuyerController@show');
Route::get('user/index','sellerAndBuyerController@index');
Route::post('/user','sellerAndBuyerController@store');
//Route::get('user/create','concertController@create');
//Route::get('user/create','sellerAndBuyerController@create');
Route::get('/user/checkIsUser','sellerAndBuyerController@checkIsUser');///must check if it is work
?>
