<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = [
    	'kode', 'jabatan'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
