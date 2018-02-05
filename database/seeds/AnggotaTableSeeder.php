<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = [
            [
                'no_anggota' => '001',
                'nama' => 'John Doe', 
                'tempat_lahir' => 'Cirebon', 
                'tanggal_lahir' => '1994-08-16', 
                'status_kawin' => '1', 
                'alamat' => 'Jl. Baru, No.3', 
                'kontak' => '089972890', 
                'pangkat_id' => '3', 
                'jabatan_id' => '1', 
                'status' => 'aktif',
            ],[
                'no_anggota' => '002',
                'nama' => 'Dwyne John', 
                'tempat_lahir' => 'Cirebon', 
                'tanggal_lahir' => '1994-08-16', 
                'status_kawin' => '2', 
                'alamat' => 'Jl. Baru, No.3', 
                'kontak' => '089972890', 
                'pangkat_id' => '4', 
                'jabatan_id' => '1', 
                'status' => 'aktif',
            ]
        ];

        DB::table('anggota')->insert($anggota);
    }
}
