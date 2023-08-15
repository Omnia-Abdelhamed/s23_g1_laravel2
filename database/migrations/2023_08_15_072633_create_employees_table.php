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
        Schema::create('employees', function (Blueprint $table) {
            $table->integer("SSN",false,true)->primary();
            $table->string("fname",20);
            $table->string("lname",20);
            $table->string("email",255)->unique();
            $table->enum('gender',['m','f'])->default('m');
            $table->tinyInteger("dno",false,true);
            $table->foreign('dno')->references('dno')->on('departments');
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
        Schema::dropIfExists('employees');
    }
};
