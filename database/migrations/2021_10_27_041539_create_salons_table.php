<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->text('service')->nullable();
            $table->text('state')->nullable();
            $table->text('location')->nullable();
            $table->text('address')->nullable();
            $table->text('special_instructions')->nullable();
            $table->text('number_of_persons')->nullable();
            $table->string('service_name')->default('Salon');
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
        Schema::dropIfExists('salons');
    }
}
