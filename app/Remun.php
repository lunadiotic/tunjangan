<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remun extends Model
{
    protected $table = 'remun';

    protected $fillable = [
        'anggota_id', 'tidak_hadir', 'remun', 'pinalti',
        'tunjangan', 'total_remun', 'tanggal_remun'
    ];
    
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
