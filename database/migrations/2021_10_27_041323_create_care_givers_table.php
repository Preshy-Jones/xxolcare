<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareGiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_givers', function (Blueprint $table) {
            $table->id();
            $table->text('service')->nullable();
            $table->text('location')->nullable();
            $table->text('address')->nullable();
            $table->text('frequency')->nullable();
            $table->text('special_instructions')->nullable();
            $table->string('service_name')->default('Care Givers');
            $table->text('language')->nullable();
            $table->text('local_dialect')->nullable();
            $table->text('number_of_people')->nullable();
            $table->text('age')->nullable();
            $table->text('state')->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('xxol_star_name')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('user_name')->nullable();
            $table->unsignedBigInteger('xxolstar_id')->nullable();
            $table->foreign('xxolstar_id')->references('id')->on('xxolstars')->nullable();
            $table->string('status')->nullable()->default('Pending');
            $table->string('progress')->nullable()->default('Yet to move');
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
        Schema::dropIfExists('care_givers');
    }
}
