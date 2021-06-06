<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Vanguard\Citizen;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//        $this->call(CountriesSeeder::class);
//        $this->call(RolesSeeder::class);
//        $this->call(PermissionsSeeder::class);
//        $this->call(UserSeeder::class);
        $this->call(CitizenSeeder::class);

        Model::reguard();
    }
}
