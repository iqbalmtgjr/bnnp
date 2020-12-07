<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayatpasien extends Model
{
    protected $table      = 'riwayat_pasien';
    protected $primaryKey = 'id_riwayat_pasien';
    protected $fillable = ['id_riwayat_pasien', 'Nama', 'id_pasien', 'Tanggal_perawatan', 'Tingkat_kecanduan', 'perawatan_ke', 'status_perawatan', 'dokumen_perawatan'];
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Modelpendaftaran', 'NIK');
    }

    public function datapasien()
    {
        return $this->belongsTo('App\Datapasien', 'id_pasien');
    }

    public function getTanggalPerawatanAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['Tanggal_perawatan'])
        ->format('d, M Y');
    }
}
