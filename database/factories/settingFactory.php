<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Setting::class, function (Faker $faker) {
    return [
        'site_title'  => 'laravel',
        'site_description' => 'laravel E-commerce',
        'site_logo' => 'setting_eplsu.png',
        'site_icon' => 'setting_e.png',
        'site_address' => 'Cercado de Lima 15081'
        , 'site_phone' => '986-581-717'
        , 'site_email' => 'kusawasi@gmail.com'
        , 'site_fax' => '+90 553 846 2567'
    ];
});
