<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapasien extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $fillable = ['NIK', 'Nama', 'Jenis_kelamin', 'Tanggal_lahir', 'Alamat', 'Agama', 'Kewarganegaraan', 'Wali_pasien', 'No_hp_wali', 'Foto', 'Status'];
    protected $guarded = [];

    public function riwayatpasien()
    {
        return $this->hasOne('App\Riwayatpasien', 'id_pasien');
    }
}