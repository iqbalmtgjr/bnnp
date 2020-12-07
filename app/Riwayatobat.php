<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayatobat extends Model
{
    protected $table      = 'riwayat_penggunaan_obat';
    protected $primaryKey = 'id_riwayat';
    protected $fillable = ['id_riwayat', 'NIK', 'Penggunaan_obat', 'Jenis_obat', 'Asal_obat', 'Terakhir_minum'];
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Modelpendaftaran', 'NIK');
    }
} 
