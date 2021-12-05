<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hobbies', function (Blueprint $table) {
            Schema::table('hobbies', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id')
                ->after('id')
                ->nullable(); /* creating field */
                $table->foreign('user_id')
                    ->references('id')->on('users')  /* defining foregin key */
                    ->onDelete('cascade'); /* if user is
                     deleted, and then delete them hobby */
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hobbies', function (Blueprint $table) {
            Schema::table('hobbies', function (Blueprint $table) {
                $table->dropForeign(['user_id']);  /* use array */
                $table->dropColumn('user_id');
            });
        });
    }
}
