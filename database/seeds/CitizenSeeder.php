<?php

use Vanguard\Role;
use Vanguard\Support\Enum\UserStatus;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\Vanguard\Tribe::class, 500)->create();
        factory(\Vanguard\Citizen::class, 5000)->create();

//        $numbers = range(0, 999);
//        shuffle($numbers);
//        $final = array_slice($numbers, 1, 12);
//
//        DB::table('citizens')->truncate();
//        $faker = Faker::create();
//
//        $citizens = [];
//        $sex = $faker->randomElement(['male', 'female']);
//
//        foreach (range(1, 500) as $index) {
//            $citizens[] = [
//
//                'user_id' => $final,
//                'tribe_id' => rand(1, 50),
//                'name' => $faker->name,
//                'company' => $faker->company,
//                'email' => $faker->email,
//                'phone' => $faker->phoneNumber,
//                'address' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
//                'facebook' => $faker->email,
//                'twitter' => $faker->email,
//                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
//                'sex' => $sex,
//                'place_of_occurence' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
//
//                'group_id' => rand(1, 4),
//                'created_at' => new DateTime,
//                'updated_at' => new DateTime
//
//            ];
//            DB::table('contacts')->insert($citizens);
//        }
    }
}
