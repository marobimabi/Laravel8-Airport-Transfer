<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->String('name',50);
            $table->String('email',30)->nullable();
            $table->String('phone',20)->nullable();
            $table->String('subject',75)->nullable();
            $table->String('message',150)->nullable()->default('Write Your Message');
            $table->String('note','20')->nullable();
            $table->String('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('messages');
    }
}
