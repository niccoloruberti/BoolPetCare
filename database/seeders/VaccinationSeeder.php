<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 10; $i++) {
            $table->animal_id = 
            $table->vaccine = $faker->randomElement(['Rabbia', 'FIV', 'Leishmaniosi', 'Cimurro', 'Epatite', 'Leptospirosi', 'Parvovirosi']);
            $table->date = $faker->date('d, m, Y');
            $table->dose = $faker->randomFloat(1, 0, 100);
            $table->notes = $faker->paragraph();
            $table->booster = $faker->dateTimeBetween('d, m, Y', 'now', '+10 years');
        }
    }
}
