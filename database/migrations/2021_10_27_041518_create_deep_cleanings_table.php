<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeepCleaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deep_cleanings', function (Blueprint $table) {
            $table->id();
            $table->text('state')->nullable();
            $table->text('location')->nullable();
            $table->text('address')->nullable();
            $table->text('scheduled_date_for_site_visit')->nullable();
            $table->string('service_name')->default('Deep cleaning/Post construction cleaning');
            $table->text('number_of_floors')->nullable();
            $table->text('number_of_rooms')->nullable();
            $table->text('number_of_bathrooms')->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->string('status')->nullable()->default('Pending');
            $table->text('xxol_star_name')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('user_name')->nullable();
            $table->unsignedBigInteger('xxolstar_id')->nullable();
            $table->foreign('xxolstar_id')->references('id')->on('xxolstars')->nullable();
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
        Schema::dropIfExists('deep_cleanings');
    }
}
