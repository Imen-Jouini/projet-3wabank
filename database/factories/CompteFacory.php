<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compte;
use App\Client;
use Faker\Generator as Faker;

$factory->define(Compte::class, function (Faker $faker) {
    return [
        'code_banq'=>$faker->randomNumber(5,true),
        'code_bguichet'=>$faker->randomNumber(5,true),
        'rib'=>$faker->numberBetween(10000000000,99999999999),
        'cle_rib'=>$faker->randomNumber(2,true),
        //'titulaire'=>$faker->numberBetween(1,50),
        'titulaire'=>Client::get('id')->random(),
        'solde'=>$faker->randomFloat(3,10),
        'devise'=>$faker->randomElement(['TND', 'EUR','USD']),
           'created_at'=>now(),
        'updated_at'=>now()
       




        


       

    ];
});


       
