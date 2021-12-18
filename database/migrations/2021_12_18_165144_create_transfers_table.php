<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->String('title',150);
            $table->String('keywords')->nullable();
            $table->String('description')->nullable();
            $table->String('images',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->float('base_price')->nullable();
            $table->float('km_price')->nullable();
            $table->integer('capacity')->default(5);
            $table->integer('quantity')->default(1);
            $table->integer('tax')->default(18);
            $table->text('detail')->nullable();
            $table->String('slug',100)->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
