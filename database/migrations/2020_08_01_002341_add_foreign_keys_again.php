<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->foreign('tribe_id')
                ->references('id')
                ->on('tribes')
                ->onDelete('cascade');
            $table->foreign('state_id')
                ->references('state_id')
                ->on('states')
                ->onDelete('cascade');
            $table->foreign('local_id')
                ->references('local_id')
                ->on('locals')
                ->onDelete('cascade');
        });

        Schema::create('states', function (Blueprint $table) {
            $table->foreign('state_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });

        Schema::create('locals', function (Blueprint $table) {
            $table->foreign('local_id')
                ->references('local_id')
                ->on('states')
                ->onDelete('cascade');
        });

        Schema::create('tribes', function (Blueprint $table) {
            $table->foreign('state_id')
                ->references('state_id')
                ->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (DB::getDriverName() != 'sqlite') {
            Schema::table('citizens', function (Blueprint $table) {
                $table->dropForeign('citizens_tribe_id_foreign');
                $table->dropForeign('citizen_state_id_foreign');
                $table->dropForeign('citizen_local_id_foreign');
            });

            Schema::table('states', function (Blueprint $table) {
                $table->dropForeign('states_state_id_foreign');
            });

            Schema::table('locals', function (Blueprint $table) {
                $table->dropForeign('locals_local_id_foreign');
            });
        }
    }
}
