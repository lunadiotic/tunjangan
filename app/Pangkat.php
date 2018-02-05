<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table = 'pangkat';
    protected $fillable = [
    	'kode', 'pangkat', 'remunerasi'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
