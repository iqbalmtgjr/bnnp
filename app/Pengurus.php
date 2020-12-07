<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table      = 'pengurus_pasien';
    protected $primaryKey = 'id_pengurus';
    protected $fillable = ['id_pengurus','NIK', 'id_riwayat_pasien', 'Nama_pegawai_u', 'Dokter_pemeriksa', 'Kepala_bnn'];
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Modelpendaftaran', 'NIK');
    }
}
