<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableXxolstars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('xxolstars', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('address');
            $table->text('phone');
            $table->text('state');
            $table->text('country');
            $table->text('date_of_birth');
            $table->json('specialization')->nullable();
            $table->string('biography')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('xxolstars', function (Blueprint $table) {
            //
        });
    }
}
