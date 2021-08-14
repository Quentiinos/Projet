<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chiens')->insert([
            [
                'id' => 1,
                'name' => 'Wily',
                'age' => 3,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 2,
                'naissance' => '01/2018',
                'castre' => true,
                'url_picture' => '/pictures/Willy-StBernard.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Sam',
                'age' => 1,
                'sexe_id' => 1,
                'caractere' => 'Sam est un labrador âgé de 1 an et demi. Il est calme, fait beaucoup de calin mais il est aussi très joueur ! Reconnu pour ses talents de chasseur de mouche mais aussi pour être le plus gros dormeur',
                'race_id' => 1,
                'naissance' => '11/2019',
                'castre' => false,
                'url_picture' => '/pictures/Sam-Labrador.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Sky',
                'age' => 5,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 3,
                'naissance' => '12/2015',
                'castre' => false,
                'url_picture' => '/pictures/Sky-MontagneDesP.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Narco',
                'age' => 1,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 4,
                'naissance' => '09/2020',
                'castre' => false,
                'url_picture' => '/pictures/Narco-JackRussell.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Guss',
                'age' => 6,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 5,
                'naissance' => '07/2015',
                'castre' => true,
                'url_picture' => '/pictures/Guss-Bouledogue.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Rocky',
                'age' => 3,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 6,
                'naissance' => '08/2018',
                'castre' => false,
                'url_picture' => '/pictures/Rocky-BouvierBernois.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Billy',
                'age' => 2,
                'sexe_id' => 1,
                'caractere' => '',
                'race_id' => 7,
                'naissance' => '01/2019',
                'castre' => false,
                'url_picture' => '/pictures/Billy-BergerAustralien.jpg'
            ],
            [
                'id' => 8,
                'name' => 'Nala',
                'age' => 3,
                'sexe_id' => 2,
                'caractere' => '',
                'race_id' => 8,
                'naissance' => '02/2018',
                'castre' => true,
                'url_picture' => '/pictures/Nala-GoldenRetriever.jpg'
            ],

        ]);
    }
}
