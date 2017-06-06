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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => 'user'.$faker->randomDigit,
        'password' => $password ?: $password = bcrypt('12345'),
        'role_id'  => 3,
        // 'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Book::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->title,
        'description' => $faker->text(30),
        'user_id'  => $faker->randomDigitNotNull
        
    ];
});
