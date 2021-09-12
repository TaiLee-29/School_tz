<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('school_id')
                ->constrained('schools')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamps();


            //$table->foreign('school_id')->references('id')->on();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_school_id_foreign');
        });
        Schema::dropIfExists('employees');
    }
}
