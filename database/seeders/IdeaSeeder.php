<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Idea;
use Faker\Factory;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create('es');

        for ($i= 0; $i < 50; $i++){
            Idea:: create([
                'nom'=> 'Idea de '.$faker->name,
                'description'=> $faker->paragraph(),
            ]);
        }
    }
}
