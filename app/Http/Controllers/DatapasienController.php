<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapasien;
use App\Riwayatpasien;

class DatapasienController extends Controller
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
        $pasien = Datapasien::all();
        // dd($pasien);
        return view('d_pasien.index', compact('pasien'));
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
        if (request()->file('foto')) {
            $tambah = Datapasien::create([
                'id_pasien' => $request->id_pasien,
                'NIK' => $request->NIK,
                'Nama' => $request->Nama,
                'Jenis_kelamin' => $request->Jenis_kelamin,
                'Tanggal_lahir' => $request->Tanggal_lahir,
                'Alamat' => $request->Alamat,
                'Agama' => $request->Agama,
                'Kewarganegaraan' => $request->Kewarganegaraan,
                'Wali_pasien' => $request->Wali_pasien,
                'No_hp_wali' => $request->No_hp_wali,
                'Status' => $request->Status,
                'Foto' => $request->file('foto')->getClientOriginalName()
            ]);
            $foto = request()->file('foto')->move("storage/images/datapasien", $request->file('foto')->getClientOriginalName());
            $riwayatpasien = Riwayatpasien::create($request->only(['Nama' => $request->Nama]));
        } else {
            $tambah = Datapasien::create($request->except(['Foto' => $request->foto]));
            // $foto = request()->file('foto')->move("storage/images/datapasien", $request->file('foto')->getClientOriginalName());
            // $riwayatpasien = Riwayatpasien::create($request->only(['Nama' => $request->Nama]));
        }
        
        
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
        $pasien = Datapasien::find($request->id_pasien);
        if(request()->file('foto')){
            \Storage::delete('/images/datapasien/' . $pasien->Foto);
            $gambarr = request()->file('foto')->move("storage/images/datapasien", $request->file('foto')->getClientOriginalName());
            $update = Datapasien::find($request->id_pasien)->update([
                        'NIK' => $request->NIK,
                        'Nama' => $request->Nama,
                        'Jenis_kelamin' => $request->Jenis_kelamin,
                        'Tanggal_lahir' => $request->Tanggal_lahir,
                        'Alamat' => $request->Alamat,
                        'Agama' => $request->Agama,
                        'Tempat' => $request->Tempat,
                        'Kewarganegaraan' => $request->Kewarganegaraan,
                        'Wali_pasien' => $request->Wali_pasien,
                        'No_hp_wali' => $request->No_hp_wali,
                        'Status' => $request->Status,
                        'Foto' => $request->file('foto')->getClientOriginalName()
                ]);
        } else {
            $update = Datapasien::find($request->id_pasien)->update($request->except(['Foto' => $request->foto]));
        }

        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $pasien = Datapasien::find($id);
        \Storage::delete('/images/datapasien/' . $pasien->Foto);
        $pasien_h = Datapasien::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatapasien($id)
    {
        $data = Datapasien::find($id);
        return $data;
    }
}
