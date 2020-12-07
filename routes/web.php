<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/Bendaharainti/homepage');
});

//biro
Route::get('/homepagebiro', function () {
    return view('bendaharabiro.homepage');
});
Route::get('/anggotabiro', function () {
    return view('bendaharabiro.anggota');
});
Route::get('/profilbiro', function () {
    return view('bendaharabiro.profil');
});
Route::get('/kasbiro', function () {
    return view('bendaharabiro.uangkas');
});

Route::get('/pendapatanbiro', function () {
    return view('Bendaharabiro.PendapatanLain');
});

Route::get('/loginbiro', function () {
    return view('Bendaharabiro.login');
});

Route::get('/uangkasbiro', function () {
    return view('Bendaharabiro.Uangkas');
});

Route::get('/pengeluaranbiro', function () {
    return view('Bendaharabiro.LihatPengeluaran');
});

//inti
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

Route::get('/logininti', function () {
    return view('Bendaharainti.login');
});

Route::get('/uangkasinti', function () {
    return view('Bendaharainti.Uangkas');
});

Route::get('/approvedinti', function () {
    return view('Bendaharainti.approved');
});

Route::get('/pendapataninti', function () {
    return view('Bendaharainti.PendapatanLainI');
});



Route::get('/pengeluaraninti', function () {
    return view('Bendaharainti.PengeluaranI');
});
