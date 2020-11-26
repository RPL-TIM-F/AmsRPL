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
    return view('welcome');
});

// Routing fitur CRUD Anggota

Route::get('/anggota', 'MemberController@index');
Route::post('/anggota', 'MemberController@store');
Route::get('/anggota/{member:id}', 'MemberController@show');
Route::patch('/anggota', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::get('/lihatpengeluaran', 'ExpenseController@index');