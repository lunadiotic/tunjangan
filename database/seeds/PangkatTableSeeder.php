<?php

use Illuminate\Database\Seeder;

class PangkatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pangkat = [
        	['kode' => 'AKP', 'pangkat' => 'Ajun Komisaris Polisi', 'remunerasi' => '10000000'],
        	['kode' => 'Aiptu', 'pangkat' => 'Ajun Inspektur Polisi Satu', 'remunerasi' => '1000000'],
        	['kode' => 'Bripka', 'pangkat' => 'Brigadir Polisi Kepala', 'remunerasi' => '100000'],
        	['kode' => 'Abrippol', 'pangkat' => 'Ajun Brigadir Polisi', 'remunerasi' => '10000'],
        ];

        DB::table('pangkat')->insert($pangkat);
    }
}
