<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
        	'kode' => 'Bamin', 
        	'jabatan' => 'Bintara Administrasi'
        ];

        DB::table('jabatan')->insert($jabatan);
    }
}
