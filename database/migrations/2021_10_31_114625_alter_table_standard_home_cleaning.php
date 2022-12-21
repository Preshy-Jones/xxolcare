<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableStandardHomeCleaning extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standard_home_cleaning', function (Blueprint $table) {
            $table->dropColumn('service');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('user_name')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('xxolstar_id')->nullable();
            $table->foreign('xxolstar_id')->references('id')->on('xxolstars')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('standard_home_cleaning', function (Blueprint $table) {
            //
        });
    }
}
