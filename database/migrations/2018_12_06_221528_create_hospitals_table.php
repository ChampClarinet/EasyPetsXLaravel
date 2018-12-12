<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Hospitals', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('shop_id');
            $table->boolean('accepted_serious_operation');
            $table->integer('vaccine_rate');
            $table->integer('operation_rate');
            $table->integer('checkup_rate');
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
        Schema::table('Hospitals', function (Blueprint $table) {
            //
        });
    }
}
