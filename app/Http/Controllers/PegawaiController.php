<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pegawai = Datapegawai::all();
        return view('d_pegawai.index', compact('pegawai'));
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
        $tambah = Datapegawai::create($request->all());
        return redirect()->back()->with('sukses','Data Berhasil di Di Input !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = Datapegawai::find($request->NIP)->update($request->all());
        return redirect()->back()->with('sukses','Data Berhasil di Di Edit !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Datapegawai::find($id)->delete();
        return redirect()->back()->with('sukses','Data Berhasil di Di Hapus !!!');
    }

    public function getdatapegawai($id)
    {
        $data = Datapegawai::find($id)->first();
        return $data;
    }
}
