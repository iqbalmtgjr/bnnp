<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testurin extends Model
{
    protected $table      = 'test_urin';
    protected $primaryKey = 'id_test_urin';
    protected $fillable = ['id_test_urin', 'NIK', 'Metode', 'Amphetamine', 'Benzodiazepine', 'THC', 'Metamphetamin', 'Morphin', 'COC'];
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo('App\Modelpendaftaran', 'NIK');
    }
}