<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	"name" => "Admin",
        	"username" => "admin",
        	"email" => "admin@mail.com",
        	"password" => bcrypt('password'),
        	"role" => "admin"
        ];

        DB::table('users')->insert($user);
    }
}
