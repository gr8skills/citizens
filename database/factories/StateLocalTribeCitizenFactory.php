<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(\Vanguard\Tribe::class, function (Faker $faker){
    return [
        'state_id' =>function() use ($faker) {
        return $faker->randomElement(\Vanguard\State::pluck('state_id')->toArray());
        },
        'name' =>$faker->unique()->sentence($nbWords = 2, $variableNbWords = true),
    ];
});


$factory->define(\Vanguard\Citizen::class, function (Faker $faker) {
    $sex = $faker->randomElement(['male', 'female']);
    $type_of_birth = $faker->randomElement(['Single', 'Twin', 'Triplet', 'Quadruplet']);

//    //generate random number
//    function randomNumber($length) {
//        $result = '';
//        for($i = 0; $i < $length; $i++) {
//            $result .= mt_rand(0, 9);
//        }
//        return $result;
//    }

    return [
        'user_id' => $faker->unique()->randomNumber($nbDigits = 7, $strict = true), //numerify($string = '###') gives '609'
        'tribe_id' => function () use ($faker){
            return $faker->randomElement(\Vanguard\Tribe::pluck('id')->toArray());
        },
        'name' =>$faker->firstName." ". $faker->lastName,
        'company' => $faker->company,
        'email' => $faker->unique()->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'facebook' =>$faker->companyEmail,
        'twitter' =>$faker->freeEmail,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sex' => $sex,
        'place_of_occurence' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
        'type_of_birth' => $type_of_birth,
        'mother_maiden_name' => $faker->title('female')." ".$faker->lastName,
        'father_full_name' => $faker->title('male')." ".$faker->firstName." ". $faker->lastName,
        'witness' => $faker->title." ".$faker->firstName." ". $faker->lastName,
        'state_id' => function () use ($faker) {
            return $faker->randomElement(\Vanguard\State::pluck('state_id'));
        },
        'local_id' => function () use ($faker) {
            return $faker->randomElement(\Vanguard\Local::pluck('local_id'));
        },
        'ward' => $faker->unique()->sentence($nbWords = 1, $variableNbWords = true),
        'community' => $faker->unique()->sentence($nbWords = 1, $variableNbWords = true),
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
