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
        Schema::create('employee_project', function (Blueprint $table) {
            $table->integer('employee_id',false,true);
            $table->integer('project_id',false,true);
            $table->foreign('employee_id')->references('SSN')->on('employees');
            $table->foreign('project_id')->references('pno')->on('projects');
            $table->primary(['employee_id','project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_project');
    }
};
