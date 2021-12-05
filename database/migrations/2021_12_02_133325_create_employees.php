<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('fullname');
            $table->string('gender', 30);
            $table->integer('age');
            $table->string('religion', 20);
            $table->text('address');
            $table->string('status', 10);
            $table->softDeletes();
            $table->timestamps();
            $table->unsignedBigInteger('sub_division_id');
            $table->foreign('sub_division_id')->references('id')->on('sub_divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
