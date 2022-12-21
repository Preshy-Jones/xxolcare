<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSpas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spas', function (Blueprint $table) {
            $table->decimal('sub_total', $precision = 10, $scale = 2);
            $table->decimal('estimated_tax', $precision = 10, $scale = 2);
            $table->decimal('total_price', $precision = 10, $scale = 2);
            $table->text("authorization_url")->nullable();
            $table->text("access_code")->nullable();
            $table->text("reference")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spas', function (Blueprint $table) {
            //
        });
    }
}
