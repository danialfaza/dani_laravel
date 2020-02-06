<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('users.index', compact('biodata'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
        'nama' => 'required',
        'email'=> 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'gender'=>'required',
        'alamat'=>'required'
    ]);
    $biodata = Biodata::create($validasi);

    return redirect('/biodata')->with('success', 'Selamat data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        //
         return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {
        //
         $validasi = $request->validate([
        'nama' => 'required',
        'email'=> 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'gender'=>'required',
        'alamat'=>'required'

    ]);
    Biodata::whereId($id)->update($validasi);

    return redirect('/biodata')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        //
    $biodata = Biodata::findOrFail($id);
    $biodata->delete();

    return redirect('/biodata')->with('success', 'Data berhasil dihapus!');
}
    }

