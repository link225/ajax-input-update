<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ville;
use App\Models\Quartier;
use Faker\Generator as Faker;

$factory->define(Quartier::class, function (Faker $faker) {
    return [
        "nom" => str_replace(' ','',$faker->name()),
        'ville_id' => function(){
            return factory(Ville::class)->create()->id;
        },
    ];
});
