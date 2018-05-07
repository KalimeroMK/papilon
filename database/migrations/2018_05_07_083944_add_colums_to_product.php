<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function ($table) {
            $table->String('hotelinfo');
            $table->String('roominfo');
            $table->String('location');
            $table->double('lat', 20, 10);
            $table->double('lng', 20, 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function ($table) {
            $table->String('hotelinfo');
            $table->String('roominfo');
            $table->String('location');
            $table->double('lat', 20, 10);
            $table->double('lng', 20, 10);
        });
    }
}