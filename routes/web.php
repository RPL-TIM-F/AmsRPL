<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('bendaharabiro.login');
});

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

Route::get('/kasbiro/{month:id}', 'MoneyController@index');

});

Route::get('/loginbiro', function () {
    return view('Bendaharabiro.login');
});


Route::get('/pengeluaranbiro', function () {
    return view('Bendaharabiro.LihatPengeluaran');
});


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

// Routing fitur CRUD Anggota bendahara biro

Route::get('/anggotabiro', 'MemberController@index');
// Route::get('/anggota/{member:id}', 'MemberController@show');
// Route::patch('/anggota', 'MemberController@update');
Route::delete('/member/{member:id}', 'MemberController@destroy');

// Routing fitur CRUD pendapatan lain bendahara biro

Route::get('/pendapatanbiro', 'IncomeController@index');
Route::post('/pendapatanlain/store', 'IncomeController@store');
// Route::patch('/anggota', 'MemberController@update');
Route::delete('/pendapatanbiro/{income:id}', 'IncomeController@destroy');

//Routing fitur update Uang kas 
Route::get('/edituangkas/{money:id}', 'MoneyController@updateIndex');
Route::patch('/edituangkas/{money:id}', 'MoneyController@update');




