<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    protected $table = 'tunjangan';
    protected $fillable = [
    	'kode', 'status', 'tunjangan'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'status_kawin');
    }
}
