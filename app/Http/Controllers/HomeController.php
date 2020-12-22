<?php

namespace App\Http\Controllers;

use Auth;
use App\money;
use App\income;
use App\expense;
use App\member;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DashboardExport;
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
        $userid = auth()->user()->id;
        $divisi = auth()->user()->divisi;
        if ($kategori_id == 1) {
            $money = money::sum('moneys.jumlah');
            $income = income::sum('incomes.pendapatan_bersih');
            $expense = expense::sum('expenses.jumlah_pengeluaran');
            $totalpendapatan = $money+$income;
            return view('bendaharainti/homepage', compact('money', 'income', 'expense', 'totalpendapatan'));
        } elseif ($kategori_id == 2) {
            
            $money = money::sum('moneys.jumlah');
            $blmbayar = money::where([['user_id', '=', $userid],['status_dept', '=', 'not approved']])->count();
            $anggota = member::where('user_id', '=', $userid)->count();
            return view('bendaharabiro/homepage', compact('money', 'divisi', 'anggota', 'blmbayar'));
        }

        // return view($home.'.homepage');
    }
    public function export(){
        // Excel::create('Laporan Keuangan')->download('xls');
        return Excel::download(new DashboardExport, 'LaporanKeuangan.xlsx');
    }
}
//a
