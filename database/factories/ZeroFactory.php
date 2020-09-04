<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domains\Zerohuis\Models\Campaign;
use App\Domains\Zerohuis\Models\Contact;
use App\Domains\Zerohuis\Models\Location;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Contact::class, function (Faker $faker)
{
    return [
        'name'        => $faker->name,
        'email'       => $faker->unique()->safeEmail,
        'phone'       => $faker->phoneNumber,
        'street'      => $faker->streetName,
        'zipcode'     => random_int(1000, 9999),
        'location'    => $faker->city,
        'extra'       => $faker->paragraph,
        'consent'     => $faker->boolean,
        'campaign_id' => Campaign::inRandomOrder()->first()->id,
    ];
});

$factory->define(Location::class, function (Faker $faker)
{
    return [
        'id'          => Str::random(16),
        'name'        => $faker->company,
        'street'      => $faker->streetAddress,
        'zipcode'     => random_int(1000, 9999),
        'location'    => $faker->city,
        'latitude'    => $faker->latitude,
        'longitude'   => $faker->longitude,
        'description' => $faker->paragraphs(3, true),
        'technical'   => $faker->paragraph,
    ];
});
