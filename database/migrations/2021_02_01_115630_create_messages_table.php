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
            $table->id();
            $table->string('type',255)->nullable();
            $table->string('full_name',255);
            $table->string('email',255);
            $table->integer('phone')->nullable();
            $table->string('country',255)->nullable();
            $table->string('company',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('message',255)->nullable();
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
