<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [
        'no_anggota', 'nama', 'tempat_lahir', 'tanggal_lahir', 'status_kawin', 
        'alamat', 'kontak', 
        'pangkat_id', 'jabatan_id', 'status'
    ];

    /**
     * Relasi dengan model Tunjangan
     * Berdasarkan kolom status kawin di dalam tabel anggota
     */
    public function tunjangan()
    {
        return $this->belongsTo(Tunjangan::class, 'status_kawin');
    }

    /**
     * Relasi dengan Pangkat Model
     */
    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

    /**
     * Relasi dengan Jabatan Model
     */
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
