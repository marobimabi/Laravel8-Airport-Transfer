<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->String('title',150);
            $table->String('keywords')->nullable();
            $table->String('description',75)->nullable();
            $table->String('company',100)->nullable();
            $table->String('address',20)->nullable();
            $table->String('phone',20)->nullable();
            $table->String('fax',50)->nullable();
            $table->String('email',25)->nullable();
            $table->String('smtpserver',100)->nullable();
            $table->String('smtpmail',20)->nullable();
            $table->String('smtppasword')->nullable();
            $table->integer('smtpport')->nullable();
            $table->String('facebook',100)->nullable()->default(0);
            $table->String('ınstagram',100)->nullable();
            $table->String('twitter',100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contac')->nullable();
            $table->text('references')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
