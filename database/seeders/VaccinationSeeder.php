<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaccination;
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
        $vaccines = ['Rabbia', 'FIV', 'Leishmaniosi', 'Cimurro', 'Epatite', 'Leptospirosi', 'Parvovirosi'];

        foreach($vaccines as $vaccine) {
            $new_vaccination = new Vaccination();
            $new_vaccination->vaccine = $vaccine;
            $new_vaccination->ph = $faker->randomElement(['Vaxxinova', 'Zoetis', 'Fatro', 'Ceva', 'Boehringer']);

            $new_vaccination->save();

        }
    }
}
