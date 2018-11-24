<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDemand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_demand', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_demand_id');
            $table->foreign('user_demand_id')->references('id')->on('users');
            $table->string('status')->default('pending');
            $table->dateTime('request_from_date');
            $table->dateTime('request_to_date');
            $table->unsignedInteger('user_accepted_request');
            $table->foreign('user_accepted_request')->references('id')->on('users');
            $table->boolean('request_is_active')->default(true);
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
        Schema::dropIfExists('request_demand');
    }
}
