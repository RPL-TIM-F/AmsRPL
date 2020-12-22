<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('/Bendaharainti/homepage');
// });

//biro

// Route::get('/anggotabiro', function () {
//     return view('bendaharabiro.anggota');
// });
// Route::get('/profilbiro', function () {
//     return view('bendaharabiro.profil');
// });
// Route::get('/uangkasbiro', function () {
//     return view('bendaharabiro.uangkas');
// });
// Route::get('/', function () {

//     return view('bendaharabiro.login');
// });


Route::get('/kasbiro/{month:id}', 'MoneyController@index');

Route::get('/kasbiro', 'MonthController@index');
//inti bagian
// Route::get('/homepageinti', function () {
//     return view('bendaharainti.homepage');
// });
// Route::get('/anggotainti', function () {
//     return view('bendaharainti.anggota');
// });
Route::get('/profileinti', function () {
    return view('bendaharainti.profil');
});
// Route::get('/kasinti', function () {
//     return view('bendaharainti.uangkas');
// });
// Route::get('/edituangkasinti', function () {
//     return view('Bendaharainti.edituangkas');
// });
// Route::get('/editapprovedinti', function () {
//     return view('Bendaharainti.approved');
// });


// Route::get('/logininti', function () {
//     return view('Bendaharainti.login');
// });

// Route::get('/uangkasinti', function () {
//     return view('Bendaharainti.Uangkas');
// });



// Route::get('/approvedinti', function () {
//     return view('Bendaharainti.approved');
// });
Auth::routes();
// Routing fitur CRUD Anggota bendahara biro (FARHAN)

Route::get('/anggotabiro', 'MemberController@index');
Route::post('/anggotabiro/store', 'MemberController@store');
Route::get('/anggotabiro/{member:id}', 'MemberController@edit');
Route::patch('/anggotabiro/{member:id}/update', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::get('/anggotainti', 'MemberController@index');
Route::post('/anggotainti/store', 'MemberController@store');
Route::get('/anggotainti/{member:id}', 'MemberController@edit');
Route::patch('/anggotainti/{member:id}/update', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::get('/pengeluaranbiro', 'ExpenseController@index');

Route::get('/profilebiro', 'UserController@index');
Route::get('/profileinti', 'UserController@index');

// Routing fitur CRUD pendapatan lain bendahara biro

Route::get('/pendapatanbiro', 'IncomeController@index');
Route::post('/pendapatanlain/store', 'IncomeController@store');
// Route::patch('/anggota', 'MemberController@update');
Route::delete('/pendapatanbiro/{income:id}', 'IncomeController@destroy');

//Routing fitur update Uang kas 
Route::get('/edituangkas/{money:id}', 'MoneyController@updateIndex');
Route::patch('/edituangkas/{money:id}', 'MoneyController@update');




Route::get('/approvedinti', function () {
    return view('Bendaharainti.approved');
});


//Controller daris
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepagebiro', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepageinti', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tambahakun', function () {
    return view('Bendaharainti.adduser');
});
Route::post('/tambahakun/submit', 'AdduserController@store');
Route::get('/excel', 'HomeController@export');