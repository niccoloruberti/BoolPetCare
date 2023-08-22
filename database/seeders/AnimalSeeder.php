<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;
use App\Models\Animal;


class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 20; $i++) {
            $animal = new Animal();
            $animal->name = $faker->firstName();
            $animal->specie = $faker->randomElement(['Dog', 'Cat', 'Fish', 'Bird', 'Reptile', 'Horse']);
            $animal->date_of_birth = $faker->date();
            $animal->genre = $faker->randomElement(['M', 'F']);
            $animal->owner = $faker->name();
            $animal->weight = $faker->randomFloat(1, 0, 100);
            $animal->size = $faker->randomElement(['S', 'M', 'L']);
            $animal->img_link = $faker->imageUrl(640, 480, 'animals', true);
            $animal->notes = $faker->paragraph();
            $animal->save();
        }
    }
}
