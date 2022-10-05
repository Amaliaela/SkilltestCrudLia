<?php

use Illuminate\Support\Facades\Route;

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
    return view('backend.home');
});

Route::get('/masuk', function () {
    return view('auth.masuk');
});

Route::get('/rumah', function () {
    return view('rumah');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/users','ControllerUsers@index');
Route::delete('/users/{users}','ControllerUsers@destroy');

Route::get('/users','ControllerUsers@index');
Route::delete('/users/{users}','ControllerUsers@destroy');

Route::get('/','ControllerSd@fsd');
Route::get('/fsd','ControllerSd@fsd');
Route::get('/fsmp','ControllerSmp@fsmp');
Route::get('/fsma','ControllerSma@fsma');

Route::get('/carifsd','ControllerSd@carifsd');
Route::get('/carifsmp','ControllerSmp@carifsmp');
Route::get('/carifsma','ControllerSma@carifsma');

Route::get('/sd','ControllerSd@index')->middleware('auth');
Route::get('/tambah_sd','ControllerSd@create')->middleware('auth');
Route::delete('/sd/{sd}','ControllerSd@destroy')->middleware('auth');
Route::post('/tambahsd','ControllerSd@store')->middleware('auth');
Route::get('/edit_sd/{sd}','ControllerSd@edit')->middleware('auth');
Route::patch('/editsd/{sd}','ControllerSd@update')->middleware('auth');
Route::get('/lihat_sd/{sd}','ControllerSd@show')->middleware('auth');

Route::get('/sma','ControllerSma@index')->middleware('auth');
Route::get('/tambah_sma','ControllerSma@create')->middleware('auth');
Route::delete('/sma/{sma}','ControllerSma@destroy')->middleware('auth');
Route::post('/tambahsma','ControllerSma@store')->middleware('auth');
Route::get('/edit_sma/{sma}','ControllerSma@edit')->middleware('auth');
Route::patch('/editsma/{sma}','ControllerSma@update')->middleware('auth');
Route::get('/lihat_sma/{sma}','ControllerSma@show')->middleware('auth');

Route::get('/smp','ControllerSmp@index')->middleware('auth');
Route::get('/tambah_smp','ControllerSmp@create')->middleware('auth');
Route::delete('/smp/{smp}','ControllerSmp@destroy')->middleware('auth');
Route::post('/tambahsmp','ControllerSmp@store')->middleware('auth');
Route::get('/edit_smp/{smp}','ControllerSmp@edit')->middleware('auth');
Route::patch('/editsmp/{smp}','ControllerSmp@update')->middleware('auth');
Route::get('/lihat_smp/{smp}','ControllerSmp@show')->middleware('auth');

Route::get('/sds','ControllerSds@index');
Route::get('/tambah_sds','ControllerSds@create');
Route::delete('/sds/{sds}','ControllerSds@destroy');
Route::post('/tambahsds','ControllerSds@store');
Route::get('/edit_sds/{sds}','ControllerSds@edit');
Route::patch('/editsds/{sds}','ControllerSds@update');
Route::get('/lihat_sds/{sds}','ControllerSds@show');

Route::get('/smas','ControllerSmas@index');
Route::get('/tambah_smas','ControllerSmas@create');
Route::delete('/smas/{smas}','ControllerSmas@destroy');
Route::post('/tambahsmas','ControllerSmas@store');
Route::get('/edit_smas/{smas}','ControllerSmas@edit');
Route::patch('/editsmas/{smas}','ControllerSmas@update');
Route::get('/lihat_smas/{smas}','ControllerSmas@show');

Route::get('/smps','ControllerSmps@index');
Route::get('/tambah_smps','ControllerSmps@create');
Route::delete('/smps/{smps}','ControllerSmps@destroy');
Route::post('/tambahsmps','ControllerSmps@store');
Route::get('/edit_smps/{smps}','ControllerSmps@edit');
Route::patch('/editsmps/{smps}','ControllerSmps@update');
Route::get('/lihat_smps/{smps}','ControllerSmps@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
