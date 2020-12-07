<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model
{
    protected $table      = 'wawancara_pemohon';
    protected $primaryKey = 'id_wawancara';
    protected $fillable = ['id_wawancara', 'NIK', 'Kesadaran', 'Tekanan_darah', 'Nadi', 'Pernafasan', 'Keadaan_umum'];
    protected $guarded = [];
    // public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Modelpendaftaran', 'NIK');
    }
}
