<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cruds', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_id');
            $table->string('mobile_no');
            $table->enum('role_type', ['Super Admin', 'Admin', 'Employee', 'HR Admin'])->default('Employee');
            $table->string('username');
            $table->string('password');
            $table->string('permission');
            $table->string('permission_admin');
            $table->string('permission_employee');
            $table->string('permission_hr');
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
        Schema::dropIfExists('user_cruds');
    }
}
