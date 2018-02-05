<?php

use Illuminate\Database\Seeder;

class TunjanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tunjangan = [
        	['kode' => '0', 'status' => 'Belum Menikah', 'tunjangan' => '0'],
        	['kode' => 'k', 'status' => 'Menikah', 'tunjangan' => '1000000'],
        	['kode' => 'k1', 'status' => 'Menikah - Anak 1', 'tunjangan' => '1500000'],
        	['kode' => 'k2', 'status' => 'Menikah - Anak 2', 'tunjangan' => '1500000'],
        ];

        DB::table('tunjangan')->insert($tunjangan);
    }
}
