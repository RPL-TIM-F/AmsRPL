<?php

namespace App\Http\Controllers;

use App\income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = income::all();

        return view('bendaharabiro.PendapatanLain', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'jumlah_penjualan' => 'required',
            'pendapatan_bersih' => 'required',

        ]);
        // dd($request);
        $insert = income::create($request->all());

        return redirect('/pendapatanbiro');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(income $income)
    {
    
        income::destroy($income->id);

        // session()->flash('success', 'Anggota berhasil dihapus');
        return redirect('/pendapatanbiro');
    }
}
