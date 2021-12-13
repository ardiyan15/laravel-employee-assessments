<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sub_division_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sub_division_id')->references('id')->on('sub_divisions');
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
        Schema::dropIfExists('managers');
    }
}
