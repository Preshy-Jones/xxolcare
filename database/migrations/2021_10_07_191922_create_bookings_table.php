<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('service')->nullable();
            $table->string('location')->nullable();
            $table->string('frequency')->nullable();
            $table->mediumText('special_instructions')->nullable();
            $table->string('service_name')->default('Standard Home cleaning');
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('xxol_star_name')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
