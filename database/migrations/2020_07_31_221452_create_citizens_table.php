<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('tribe_id')->unsigned()->default(0);
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('dob');
            $table->string('sex');
            $table->string('place_of_occurence')->nullable();
            $table->string('type_of_birth')->nullable();
            $table->string('mother_maiden_name');
            $table->string('father_full_name')->nullable();
            $table->string('witness')->nullable();
            $table->integer('state_id');
            $table->integer('local_id');
            $table->string('ward')->nullable();
            $table->string('community')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
