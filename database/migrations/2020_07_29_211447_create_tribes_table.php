<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('state_id');
            $table->string('name');
            $table->timestamps();
        });


//        $faker = Factory::create();
//
//        Todo::truncate();
//
//        for($i=0; $i < 20; $i++) {
//            Todo::create([
//                'title'     => $faker->text($maxNbChars = 20),
//                'completed' => $faker->boolean($chanceOfGettingTrue = 50),
//                'user_id'   => $faker->numberBetween($min = 1, $max = 3)
//            ]);
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tribes');
    }
}
