<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Storage;
use App\Modelpendaftaran;
use App\Pengurus;
use App\Riwayatobat;
use App\Testurin;
use App\Wawancara;
use App\Riwayatpasien;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $show = Modelpendaftaran::all();
        // dd($show);
        return view('pendaftaran', compact('show'));
    }

    public function index()
    {
        $daftar = Modelpendaftaran::get();
        // dd($daftar);
        return view('kopsurat.index', compact('daftar'));
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

        $this->validate($request, [
            'NIK' => 'required|min:16|max:16',
            'Nama' => 'required',
            'Jenis_kelamin' => 'required',
            'Umur' => 'required',
            'Tempat' => 'required',
            'Tanggal_lahir' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
            'Keperluan' => 'required',
            'Agama' => 'required',
            'Nohp' => 'required',
            'Suku' => 'required',
            'email' => 'required',
            'Foto' => 'required'
            ]);
        
        $pendaftaran = Modelpendaftaran::find($request->NIK);
        // dd($pendaftaran);
        if ($pendaftaran != null) {
            if(request()->file('Foto')){
                \Storage::delete('/images/pendaftaran/' . $pendaftaran->Foto);
                $gambarr = request()->file('Foto')->move("storage/images/pendaftaran", $request->file('Foto')->getClientOriginalName());
                $update = Modelpendaftaran::where('NIK', $request->NIK)->first()->update([
                    'NIK' => $request->NIK,
                    'Nama' => $request->Nama,
                    'Jenis_kelamin' => $request->Jenis_kelamin,
                    'Umur' => $request->Umur,
                    'Tempat' => $request->Tempat,
                    'Tanggal_lahir' => $request->Tanggal_lahir,
                    'Alamat' => $request->Alamat,
                    'Pekerjaan' => $request->Pekerjaan,
                    'Keperluan' => $request->Keperluan,
                    'Agama' => $request->Agama,
                    'Nohp' => $request->Nohp,
                    'Suku' => $request->Suku,
                    'email' => $request->email,
                    'Foto' => $request->file('Foto')->getClientOriginalName()
                    ]);
            } else {
                $gambarr = $pendaftaran->Foto;
                $update = Modelpendaftaran::where('NIK', $request->NIK)->first()->update($request->except(['Foto' => $request->Foto]));
                }
            
            // $update = Datapasien::find($request->id_pasien)->first()->update($request->except(['Foto' => $request->foto]));

        } else {
            $tambah = Modelpendaftaran::create([
                'NIK' => $request->NIK,
                'Nama' => $request->Nama,
                'Jenis_kelamin' => $request->Jenis_kelamin,
                'Umur' => $request->Umur,
                'Tempat' => $request->Tempat,
                'Tanggal_lahir' => $request->Tanggal_lahir,
                'Alamat' => $request->Alamat,
                'Pekerjaan' => $request->Pekerjaan,
                'Keperluan' => $request->Keperluan,
                'Agama' => $request->Agama,
                'Nohp' => $request->Nohp,
                'Suku' => $request->Suku,
                'email' => $request->email,
                'Foto' => $request->file('Foto')->getClientOriginalName()
            ]);
            $foto = request()->file('Foto')->move("images/pendaftaran", $request->file('Foto')->getClientOriginalName());
            $tambah4 = Wawancara::create($request->only(['NIK' => $request->NIK, 'id_wawancara' => $request->wawancara]));
            $tambah1 = Pengurus::create($request->only(['NIK' => $request->NIK, 'id_pengurus' => $request->datapengurus]));
            $tambah2 = Riwayatobat::create($request->only(['NIK' => $request->NIK, 'id_riwayat' => $request->riwayatobat]));
            $tambah3 = Testurin::create($request->only(['NIK' => $request->NIK, 'id_test_urin' => $request->testurin]));
        }
        
        
        return redirect('/')->with('sukses','Data Berhasil di Simpan !!!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
