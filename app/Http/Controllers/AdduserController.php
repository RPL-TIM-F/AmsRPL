<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdduserController extends Controller
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'kategori_id' => 'required',
            'password' => 'required',
            'nim' => 'required',
            'divisi' => 'required'
        ]);
        // dd($request);
        $insert = user::create([
            // 'user_id' => $user_id,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'kategori_id' => $request->kategori_id,
            'password' => Hash::make($request->password),
            'nim' => $request->nim,
            'divisi' => $request->divisi,
        ]);
        return redirect('/');
    }
}
