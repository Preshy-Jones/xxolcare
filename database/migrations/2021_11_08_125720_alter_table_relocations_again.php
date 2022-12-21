<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableRelocationsAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relocations', function (Blueprint $table) {
            $table->decimal('sub_total', $precision = 10, $scale = 2)->nullable();
            $table->decimal('estimated_tax', $precision = 10, $scale = 2)->nullable();
            $table->decimal('total_price', $precision = 10, $scale = 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relocations', function (Blueprint $table) {
            //
        });
    }
}
