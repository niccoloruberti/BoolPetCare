<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Specie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['cane', 'gatto', 'roditore', 'uccello', 'pesce' ];
        foreach($categories as $category){
            $specie = new Specie();
            $specie->name = $category;
            $specie->slug = Str::slug($category);
            $specie->save();
        }
    }
}
