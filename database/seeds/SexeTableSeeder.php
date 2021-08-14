<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexe')->insert([
            [
                'id' => 1,
                'name' => 'Mâle'
            ],
            [
                'id' => 2,
                'name' => 'Femelle'
            ],
        ]);
    }
}
