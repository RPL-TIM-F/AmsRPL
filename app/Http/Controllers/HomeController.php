<?php

namespace App\Http\Controllers;

use Auth;
use App\money;
use App\income;
use App\expense;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(auth()->user()->kategori_id==1){
        //     $home = 'Bendaharainti';
        // }
        // else{
        //     $home = 'Bendaharabiro';
        // }

        $kategori_id = auth()->user()->kategori_id;
        if ($kategori_id == 1) {
            $money = money::sum('moneys.jumlah');
            $income = income::sum('incomes.pendapatan_bersih');
            $expense = expense::sum('expenses.jumlah_pengeluaran');
            $totalpendapatan = $money+$income;
            return view('bendaharainti/homepage', compact('money', 'income', 'expense', 'totalpendapatan'));
        } elseif ($kategori_id == 2) {
            $money = money::sum('moneys.jumlah');
            return view('bendaharabiro/homepage', compact('money'));
        }

        // return view($home.'.homepage');
    }
}
//a
