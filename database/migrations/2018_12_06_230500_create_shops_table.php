<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_uid');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('picture')->nullable();
            $table->string('url');
            $table->string('days', 7);
            $table->time('open_on')->default('00:00:00');
            $table->time('close_on')->default('00:00:00');
            $table->string('tel');
            $table->string('address');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Shops', function (Blueprint $table) {
            //
        });
    }
}
