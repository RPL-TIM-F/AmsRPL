<?php

namespace App\Http\Controllers;

use App\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = member::get();
        return view('Bendaharabiro.anggota', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'fullname' => 'required',
            'nim' => 'required',
            'divisi' => 'required',
        ]);

        member::create($request);
        
        session()->flash('success', 'Anggota was created');

        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member $member)
    {
        $request->validate([
            'fullname' => 'required',
            'nim' => 'required',
            'divisi' => 'required',
        ]);

        member::where('id', $member->id)
            ->update([
                'fullname' => $request->fullname,
                'nim' => $request->nim,
                'divisi' => $request->divisi,
            ]);

        session()->flash('success', 'Anggota berhasil diupdate');
        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(member $member)
    {
        member::destroy($member->id);
        session()->flash('success', 'Anggota berhasil dihapus');
        return redirect('/anggota');
    }
}
