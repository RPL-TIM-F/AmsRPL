<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('bendaharabiro.login');
});


Route::get('/kasbiro/{month:id}', 'MoneyController@index');

Route::get('/kasbiro', 'MonthController@index');
//inti bagian
Route::get('/homepageinti', function () {
    return view('bendaharainti.homepage');
});
Route::get('/anggotainti', function () {
    return view('bendaharainti.anggota');
});
Route::get('/profilinti', function () {
    return view('bendaharainti.profil');
});
Route::get('/kasinti', function () {
    return view('bendaharainti.uangkas');
});
Route::get('/edituangkasinti', function () {
    return view('Bendaharainti.edituangkas');
});
Route::get('/editapprovedinti', function () {
    return view('Bendaharainti.approved');
});


// Route::get('/logininti', function () {
//     return view('Bendaharainti.login');
// });

// Route::get('/uangkasinti', function () {
//     return view('Bendaharainti.Uangkas');
// });



// Route::get('/approvedinti', function () {
//     return view('Bendaharainti.approved');
// });

// Routing fitur CRUD Anggota bendahara biro (FARHAN)

Route::get('/anggotabiro', 'MemberController@index');
Route::post('/anggotabiro/store', 'MemberController@store');
Route::get('/anggotabiro/{member:id}', 'MemberController@edit');
Route::patch('/anggotabiro/{member:id}/update', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::view('/profilebiro','bendaharabiro.profil');

// Routing fitur CRUD pendapatan lain bendahara biro

Route::get('/pendapatanbiro', 'IncomeController@index');
Route::post('/pendapatanlain/store', 'IncomeController@store');
// Route::patch('/anggota', 'MemberController@update');
Route::delete('/pendapatanbiro/{income:id}', 'IncomeController@destroy');

//Routing fitur update Uang kas 
Route::get('/edituangkas/{money:id}', 'MoneyController@updateIndex');
Route::patch('/edituangkas/{money:id}', 'MoneyController@update');




