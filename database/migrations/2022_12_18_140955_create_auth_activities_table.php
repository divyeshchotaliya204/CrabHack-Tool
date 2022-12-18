<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_activities', function (Blueprint $table) {
            $table->char('id', 26)->primary();
            $table->char('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedTinyInteger('type');
            $table->ipAddress('ip_address');
            $table->string('location');
            $table->string('country')->length(32);
            $table->string('state')->length(32);
            $table->string('city')->length(32);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_activities');
    }
};
