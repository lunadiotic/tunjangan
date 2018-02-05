<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PangkatTableSeeder::class);
        $this->call(JabatanTableSeeder::class);
        $this->call(TunjanganTableSeeder::class);
        $this->call(AnggotaTableSeeder::class);
    }
}
