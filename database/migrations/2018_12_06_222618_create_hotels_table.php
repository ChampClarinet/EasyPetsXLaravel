<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->boolean('accepted_overnight');
            $table->integer('price_rate');
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
        Schema::table('Hotels', function (Blueprint $table) {
            //
        });
    }
}
