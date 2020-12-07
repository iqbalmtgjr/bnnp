<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelpendaftaran;
use App\Pengurus;
use App\Riwayatobat;
use App\Riwayatpasien;
use App\Testurin;
use App\Wawancara;
use App\Mail\NotifPendaftaranSkhpn;
use PDF;

class prosespendaftaranController extends Controller
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
        $daftar = Modelpendaftaran::orderBy('created_at', 'DESC')->get();

        return view('p_pendaftaran.index', compact('daftar'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar = Modelpendaftaran::find($id);
        // dd($daftar);
        return view('kopsurat.index', compact('daftar'));
    }

    public function exportPdf($id)
    {
        $daftar = Modelpendaftaran::find($id);

        $pdf = PDF::loadView('kopsurat.index', compact('daftar'));
        return $pdf->download('Laporan Surat Bebas Narkoba');
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
    public function update_w(Request $request)
    {
        $update = Wawancara::where('NIK', $request->NIK)->first();
        
        $update->update($request->except(['url_getdata', 'NIK']));
        // dd($wawancara);

        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');
    }

    public function update_r(Request $request)
    {
        $update = Riwayatobat::where('NIK', $request->NIK)->first();
        $update->update($request->except(['url_getdata1', 'NIK']));
        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');
    }

    public function update_h(Request $request)
    {
        $update = Testurin::where('NIK', $request->NIK)->first();
        // dd($update);
        $update->update($request->except(['NIK', 'url_getdata2']));

        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');
    }

    public function update_p(Request $request)
    {
        $update = Pengurus::where('NIK', $request->NIK)->first();
        $update->update($request->except(['NIK', 'url_getdata3']));
        // dd($update);

        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');
    }
    
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIK)
    {
        dd($NIK);
        $pendaftaran = Modelpendaftaran::where('NIK', $NIK)->first()->delete();
        $wawancara = Wawancara::where('NIK', $NIK)->first()->delete();
        $r_obat = Riwayatobat::where('NIK', $NIK)->first()->delete();
        $t_urin = Testurin::where('NIK', $NIK)->first()->delete();
        $pegawai = Pengurus::where('NIK', $NIK)->first()->delete();
        // $r_pasien = Riwayatpasien::where('NIK', $NIK)->first()->delete();

        return redirect()->back()->with('sukses','Data Berhasil di Hapus !!!');
    }

    public function getdatawawancara($id)
    {
        $data = Wawancara::where('NIK', $id)->first();
        return $data;
    }

    public function getdatariwayatobat($id)
    {
        $data = Riwayatobat::where('NIK', $id)->first();
        return $data;
    }

    public function getdatahasiltesurin($id)
    {
        $data = Testurin::where('NIK', $id)->first();
        return $data;
    }

    public function getdatapengurus($id)
    {
        $data = Pengurus::where('NIK', $id)->first();
        return $data;
    }

    public function getdatapendaftar($id)
    {
        $data = Modelpendaftaran::where('NIK', $id)->first();
        return $data;
    }

    public function sendemail(Request $request)
    {
        $update = Modelpendaftaran::find($request->NIK)->update($request->only(['Tanggal_datang']));
        $email = Modelpendaftaran::find($request->NIK);

        \Mail::to($email->email)->send(new NotifPendaftaranSkhpn($email));

        return redirect()->back()->with('sukses', 'Notifikasi Sudah Dikirim Ke Email Client');
        // return view('p_pendaftaran.index', compact('daftar'));

    }
}
