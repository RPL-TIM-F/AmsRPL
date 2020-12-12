<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('bendaharabiro.login');
});


Route::get('/kasbiro', 'MoneyController@index');


Route::get('/anggota', 'MemberController@index');
Route::post('/anggota/store', 'MemberController@store');
Route::get('/anggota/{member:id}', 'MemberController@show');
Route::patch('/anggota', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::get('/lihatpengeluaran', 'ExpenseController@index');

Route::get('/pendapataninti', function () {
    return view('Bendaharainti.PendapatanLainI');
});



Route::get('/pengeluaraninti', function () {
    return view('Bendaharainti.PengeluaranI');
});
