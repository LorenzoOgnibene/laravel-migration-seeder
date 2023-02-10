<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $myTrains = new train();
            $myTrains->azienda = $faker->company();
            $myTrains->stazione_di_partenza = $faker->city();
            $myTrains->stazione_di_arrivo = $faker->city();
            $myTrains->orario_di_partenza = $faker->date();
            $myTrains->orario_di_arrivo = $faker->date();
            $myTrains->codice_treno = $faker->bothify('?????-#####');
            $myTrains->numero_carrozze = $faker->numberBetween(0, 15);
            $myTrains->in_orario = $faker->boolean();
            $myTrains->cancellato = $faker->boolean();
            $myTrains->save();
        }
    }
}
