<?php

namespace App\Http\Controllers;

use App\member;
use Illuminate\Http\Request;
use App\money;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = member::get();
        return view('Bendaharabiro.anggota', compact('members'));
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
            'angkatan' => 'required',
            'divisi' => 'required',
        ]);
        // dd($request);
        $insert = member::create($request->all());
        // $member = member::insertgetid($last);
        // dd($insert->id);
        sleep(2);
        for ($i=1; $i <13 ; $i++) { 
            money::create([
                'member_id' => $insert->id,
               'month_id' => $i,
               'fullname' => $request->fullname, 
               'nim' => $request->nim, 
               'angkatan' => $request->angkatan, 
               'divisi' => $request->divisi, 
               'jumlah' => 0, 
               'status_dept' => "not approved", 
               'status_inti' => "not approved", 
            ]);
        }

        
        
        // session()->flash('success', 'Anggota was created');

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
        money::where('member_id', '=', $member->id)->delete();
        member::destroy($member->id);
       
        // session()->flash('success', 'Anggota berhasil dihapus');
        return redirect('/anggota');
    }
}
