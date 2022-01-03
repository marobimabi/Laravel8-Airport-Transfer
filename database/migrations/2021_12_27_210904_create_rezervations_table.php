<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('transfer_id');
            $table->String('from_location_id',50);
            $table->String('to_location_id',50);
            $table->String('airline',100);
            $table->String('flightnumber',50);
            $table->String('flightdate',30);
            $table->String('flightime',30);
            $table->String('pickuptime',30);
            $table->String('note',100)->nullable();
            $table->String('IP',50);
            $table->string('status',5)->default('New');
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
        Schema::dropIfExists('rezervations');
    }
}
