<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            [
                'id' => 1,
                'name' => 'Labrador'
            ],
            [
                'id' => 2,
                'name' => 'Saint-Bernard'
            ],
            [
                'id' => 3,
                'name' => 'Montagne des Pyrénées'
            ],
            [
                'id' => 4,
                'name' => 'Jack Russell'
            ],
            [
                'id' => 5,
                'name' => 'Bouledogue Français'
            ],
            [
                'id' => 6,
                'name' => 'Bouvier Bernois'
            ],
            [
                'id' => 7,
                'name' => 'Berger Australien'
            ],
            [
                'id' => 8,
                'name' => 'Golden Retriever'
            ],
        ]);
    }
}
