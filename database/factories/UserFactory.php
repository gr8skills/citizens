<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Vanguard\User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt(Str::random(10)),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'avatar' => null,
        'address' => $faker->address,
        'country_id' => function () use ($faker) {
            return $faker->randomElement(Vanguard\Country::pluck('id')->toArray());
        },
        'role_id' => function () {
            return factory(\Vanguard\Role::class)->create()->id;
        },
        'status' => Vanguard\Support\Enum\UserStatus::ACTIVE,
        'birthday' => $faker->date()
    ];
});

//$factory->define(App\Product::class, function (Faker $faker) {
//    return [
//        // 'image' => $faker->imageUrl($width = 730, $height = 490, 'sports'),
//        'product_image' => $faker->imageUrl($width = 730, $height = 490, 'technics'),
//        'files' => [$faker->imageUrl($width = 730, $height = 490, 'technics'), $faker->imageUrl($width = 730, $height = 490, 'transport'),],
//        'name' => $faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
//        'description' => $faker->paragraph,
//        'quantity' => rand(1,500),
//        // 'brand',
//        'price' => rand(10,5000),
//        'Sku' => $faker->unique()->uuid,
//        'content' => $faker->paragraphs($nb = 6, $asText = true),
//        'slug' => $faker->unique()->slug,
//        // 'type',
//        'category_id' => rand(1,10),
//        // 'files'
//    ];
//});
