<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1, 
                'name' => 'Admin',
                'email' => 'admin@dogood.fr',
                'password' => Hash::make('Adminadmin'),
                'privilège' => 1
            ],
        ]);
    }
}
