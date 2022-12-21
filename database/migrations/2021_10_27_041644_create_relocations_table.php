<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relocations', function (Blueprint $table) {
            $table->id();
            $table->text('location')->nullable();
            $table->text('from')->nullable();
            $table->text('to')->nullable();
            $table->text('interstate_intrastate')->nullable();
            $table->text('address')->nullable();
            $table->string('service_name')->default('Relocation');
            $table->text('special_instructions')->nullable();
            $table->text('number_of_rooms')->nullable();
            $table->text('scheduled_date_for_site_visit')->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('xxol_star_name')->nullable();
            $table->string('status')->nullable()->default('Pending');
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
        Schema::dropIfExists('relocations');
    }
}
