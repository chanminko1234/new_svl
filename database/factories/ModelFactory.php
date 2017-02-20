<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Library::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => strtolower($faker->name),        
        'address' => $faker->unique()->address,
        'ward' => $faker->unique()->streetName,
        'location' => $faker->unique()->latitude($min = -90, $max = 90),
        'contact_no' => $faker->unique()->phoneNumber,
        'contact_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'facebook' => $faker->unique()->userName,
        'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->text($maxNbChars = 200),
        'township_id' => $faker->numberBetween($min = 1, $max = 300),
        'services' => $faker->word,
        'img_name' =>  $faker->name,
        'img_ext' => '.jpg',
    ];
});
