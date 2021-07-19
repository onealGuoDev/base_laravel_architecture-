<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Carbon\Carbon;
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

$factory->define(Users::class, function (Faker $faker) {
    static $user = 1;
    static $mail = 1;
    return [

        'account' => 'user'.$user++,
        'password' => password_hash(12345678,PASSWORD_DEFAULT),
        'email' => 'user'.$mail++.'@test.com',
        'role_type_id'=> 1,
        'status_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
