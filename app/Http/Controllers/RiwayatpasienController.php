<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riwayatpasien;
use App\Datapasien;

class RiwayatpasienController extends Controller
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
        $pasien = Riwayatpasien::all();
        $riwayatpasien = Datapasien::all();
        return view('r_pasien.index', compact('pasien', 'riwayatpasien'));
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
        if(request()->file('dokumen_perawatan')){
            // \Storage::delete('/images/riwayat_pasien/' . $pasien->dokumen_perawatan);
            $gambarr = request()->file('dokumen_perawatan')->move("storage/images/riwayat_pasien", $request->file('dokumen_perawatan')->getClientOriginalName());
            $update = Riwayatpasien::create([
                        'id_pasien' => $request->id_pasien,
                        'Tanggal_perawatan' => $request->Tanggal_perawatan,
                        'Tingkat_kecanduan' => $request->Tingkat_kecanduan,
                        'perawatan_ke' => $request->perawatan_ke,
                        'status_perawatan' => $request->status_perawatan,
                        'dokumen_perawatan' => $request->file('dokumen_perawatan')->getClientOriginalName()
                ]);
        } else {
            $update = Riwayatpasien::create($request->except(['dokumen_perawatan' => $request->dokumen_perawatan]));
        }

        return redirect()->back()->with('sukses', 'Selamat Data Berhasil Di Tambah !!!');
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
        $pasien = Riwayatpasien::find($request->id_riwayat_pasien);
        if(request()->file('dokumen_perawatan')){
            \Storage::delete('/images/riwayat_pasien/' . $pasien->dokumen_perawatan);
            $gambarr = request()->file('dokumen_perawatan')->move("storage/images/riwayat_pasien", $request->file('dokumen_perawatan')->getClientOriginalName());
            $update = Riwayatpasien::find($request->id_riwayat_pasien)->update([
                        // 'id_pasien' => $request->id_pasien,
                        'Tanggal_perawatan' => $request->Tanggal_perawatan,
                        'Tingkat_kecanduan' => $request->Tingkat_kecanduan,
                        'perawatan_ke' => $request->perawatan_ke,
                        'status_perawatan' => $request->status_perawatan,
                        'dokumen_perawatan' => $request->file('dokumen_perawatan')->getClientOriginalName()
                ]);
        } else {
            $update = Riwayatpasien::find($request->id_riwayat_pasien)->update($request->except(['dokumen_perawatan' => $request->dokumen_perawatan]));
        }

        return redirect()->back()->with('sukses', 'Selamat Data Berhasil Di Update !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $pasien = Riwayatpasien::find($id);
        \Storage::delete('/images/riwayat_pasien/' . $pasien->dokumen_perawatan);
        $pasien_h = Riwayatpasien::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getriwayatpasien($id)
    {
        $data = Riwayatpasien::find($id);
        $data->datapasien;
        return $data;
    }

    public function view($id)
    {
        $data = Riwayatpasien::find($id);
        return view('kopsurat.download', compact('data'));
    }
}
