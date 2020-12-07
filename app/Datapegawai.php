<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
    protected $table      = 'data_pegawai';
    protected $primaryKey = 'NIP';
    protected $fillable = ['NIP',  'Nama_pegawai', 'Jenis_kelamin', 'Alamat', 'No_hp', 'Jabatan'];
    protected $guarded = [];
    public $timestamps = false;

}