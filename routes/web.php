<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bendaharabiro.login');
});

//biro
// Route::get('/homepagebiro', function () {
//     return view('bendaharabiro.homepage');
// });
// Route::get('/anggotabiro', function () {
//     return view('bendaharabiro.anggota');
// });
// Route::get('/profilbiro', function () {
//     return view('bendaharabiro.profil');
// });
// Route::get('/uangkasbiro', function () {
//     return view('bendaharabiro.profil');
// });

// //inti
// Route::get('/homepageinti', function () {
//     return view('bendaharainti.homepage');
// });
// Route::get('/anggotainti', function () {
//     return view('bendaharainti.anggota');
// });
// Route::get('/profilinti', function () {
//     return view('bendaharainti.profil');
// });
// Route::get('/uangkasinti', function () {
//     return view('bendaharainti.profil');
// });



// Route::get('/loginbiro', function () {
//     return view('Bendaharabiro.login');
// });

// Route::get('/uangkasbiro', function () {
//     return view('Bendaharabiro.Uangkas');
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

// Routing fitur CRUD Anggota bendahara biro

Route::get('/anggota', 'MemberController@index');
Route::post('/anggota/store', 'MemberController@store');
Route::get('/anggota/{member:id}', 'MemberController@show');
Route::patch('/anggota', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

Route::get('/lihatpengeluaran', 'ExpenseController@index');