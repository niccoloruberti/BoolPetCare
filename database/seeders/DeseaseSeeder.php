<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desease;

class DeseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deseases = ['Rabdovirus','Immuno-Virus','Leishmania Infantum','CDV','Adenovirus','Zoonosi','Parvovirus'];

        foreach($deseases as $desease){
            $new_desease = new Desease();
            $new_desease->desease= $desease;
            $new_desease->save();
        }
    }
}
