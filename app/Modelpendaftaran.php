<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelpendaftaran extends Model
{
    protected $table      = 'skhp_pendaftaran';
    // protected $table      = 'pendaftaran_skhpn';
    protected $primaryKey = 'NIK';
    protected $fillable = ['NIK', 'Tanggal_datang', 'Nama', 'email', 'Jenis_kelamin', 'Umur', 'Tempat', 'Tanggal_lahir', 'Foto', 'Alamat', 'Pekerjaan', 'Keperluan', 'Agama', 'Nohp', 'Suku'];
    protected $guarded = [];
    // public $timestamps = false;
    
    public function riwayat()
    {
        return $this->hasOne('App\Riwayatobat', 'NIK');
    }

    public function riwayat_p()
    {
        return $this->hasOne('App\Riwayatpasien', 'NIK');
    }

    public function wawancara()
    {
        return $this->hasOne('App\Wawancara', 'NIK');
    }

    public function testurin()
    {
        return $this->hasOne('App\Testurin', 'NIK');
    }

    public function Pengurus()
    {
        return $this->hasOne('App\Pengurus', 'NIK');
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->format('d, F Y');
    }

    public function getTanggalLahirAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['Tanggal_lahir'])
        ->format('d-m-Y');
    }

    public function getTanggalDatangAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['Tanggal_datang'])
        ->format('d-m-Y');
    }
}
