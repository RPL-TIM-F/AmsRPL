<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('bendaharabiro.login');
});

//biro bagian
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


   

//biro
Route::get('/homepagebiro', function () {
    return view('bendaharabiro.homepage');
});
// Route::get('/anggotabiro', function () {
//     return view('bendaharabiro.anggota');
// });
Route::get('/profilbiro', function () {
    return view('bendaharabiro.profil');
});

Route::get('/kasbiro', 'MoneyController@index');

Route::get('/pendapatanbiro', function () {
    return view('Bendaharabiro.PendapatanLain');
});

Route::get('/loginbiro', function () {
    return view('Bendaharabiro.login');
});


Route::get('/pengeluaranbiro', function () {
    return view('Bendaharabiro.LihatPengeluaran');
});
Route::get('/edituangkasbiro', function () {
    return view('Bendaharabiro.edituangkas');
});
Route::get('/editanggotabiro', function () {
    return view('Bendaharainti.editanggotabiro');
});



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
Route::get('/editanggotainti', function () {
    return view('Bendaharainti.editanggotainti');
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

// Routing fitur CRUD Anggota bendahara biro

Route::get('/anggotabiro', 'MemberController@index');
Route::post('/anggota/store', 'MemberController@store');
Route::get('/anggota/{member:id}', 'MemberController@show');
Route::patch('/anggota', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

// Routing fitur CRUD Anggota bendahara biro

Route::get('/pendapatanbiro', 'IncomeController@index');
Route::post('/pendapatanlain/store', 'IncomeController@store');
// Route::patch('/anggota', 'MemberController@update');
Route::delete('/pendapatanbiro/{income:id}', 'IncomeController@destroy');


Route::get('/pendapataninti', function () {
    return view('Bendaharainti.PendapatanLainI');
});



Route::get('/pengeluaraninti', function () {
    return view('Bendaharainti.PengeluaranI');
});
