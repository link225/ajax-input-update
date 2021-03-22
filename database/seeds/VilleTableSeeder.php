<?php

use App\Models\Quartier;
use Illuminate\Database\Seeder;

class VilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Methode pour enregistrer 
     * les villes et les faire les relation avec 
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Ville::class,5)
        ->create()
        ->each(function($quart){
            $quart->quartier()->saveMany(
                factory(Quartier::class,8)->create()
            );
        });
    }
}
